<?php

$_ENV = include __DIR__ . '/../env.php';
class Model {
    protected static $dbc;
    protected static $table;
    public $attributes = array();
    public function __construct()
    {
        self::dbConnect();
    }
    public function __get($name)
    {
        if ( array_key_exists( $name, $this->attributes ) )
        {
            return $this->attributes[ $name ];
        }
        return null;
    }
    public function __set($name, $value)
    {
        $this->attributes[ $name ] = $value;
    }
    protected static function dbConnect()
    {
        if ( ! self::$dbc )
        {
            require_once __DIR__ . '/../database/db_connect.php';
            self::$dbc = $dbc;
        }
    }
    public function save()
    {
        if ( ! empty( $this->attributes ) && isset( $this->attributes['id'] ) )
        {
            $this->update( $this->attributes['id'] );
        }
        else
        {
            $this->insert();
        }
    }
    public function delete()
    {
        $query = 'DELETE FROM ' . static::$table . ' WHERE id = :id';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
        $stmt->execute();
    }
    protected function insert()
    {
        $columns = '';
        $value_placeholders = '';
        foreach ($this->attributes as $column => $value)
        {
            if ( $columns == '' && $value_placeholders == '')
            {
                $columns .= $column;
                $value_placeholders .= ':' . $column;
            }
            else
            {
                $columns .= ', ' . $column;
                $value_placeholders .= ', :' . $column;
            }
        }
        $query = "INSERT INTO " . static::$table . " ({$columns}) VALUES ({$value_placeholders})";
        $stmt = self::$dbc->prepare($query);
        foreach ($this->attributes as $column => $value) {
            $stmt->bindValue(':' . $column, $value, PDO::PARAM_STR);
        }
        $stmt->execute();
        $this->attributes['id'] = self::$dbc->lastInsertId();
    }
    protected function update($id)
    {
        $query = "UPDATE " . static::$table . " SET ";
        $first_value = true;
        foreach ($this->attributes as $key => $value)
        {
            if ( $key == 'id')
            {
                continue;
            }
            if ( $first_value )
            {
                $first_value = false;
                $query .= $key . ' = :' . $key;
            }
            else
            {
                $query .= ', ' . $key . ' = :' . $key;
            }
        }
        $query .= ' WHERE id = :id';
        $stmt = self::$dbc->prepare($query);
        foreach ($this->attributes as $key => $value)
        {
            $stmt->bindValue(':' . $key, $value, PDO::PARAM_STR);
        }
        $stmt->execute();
    }

    public static function find($id)
    {
        self::dbConnect();
        $query = 'SELECT * FROM ' . static::$table . ' WHERE id = :id';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $instance = null;
        if ( $result )
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }
    
    public static function all()
    {
        self::dbConnect();
        $query = 'SELECT * FROM ' . static::$table;
        $stmt = self::$dbc->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $instance = null;
        if ( $results )
        {
            $instance = new static;
            $instance->attributes = $results;
        }
        return $instance;
    }
}
?>
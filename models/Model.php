<?php

$_ENV = include __DIR__ . '/../.env.php';

class Model {

    protected static $dbc;
    protected static $table;

    public $attributes = array();


    /*
     * opens db connection
     */
    public function __construct()
    {

        self::dbConnect();
    }


    /*
     * Get a value from attributes based on name
     */
    public function __get($name)
    {
        // @TODO: Return the value from attributes with a matching $name, if it exists
        if ( array_key_exists( $name, $this->attributes ) )
        {

            return $this->attributes[ $name ];
        }

        return null;
    }


    /*
     * Set a new attribute for the object
     */
    public function __set($name, $value)
    {

        // @TODO: Store name/value pair in attributes array
        $this->attributes[ $name ] = $value;
    }


    /*
     * Connect to the DB
     */
    protected static function dbConnect()
    {

        if ( ! self::$dbc )
        {

            // @TODO: Connect to database
            require_once __DIR__ . '/../database/db_connect.php';

            self::$dbc = $dbc;
        }
    }


    /*
     * Persist the object to the database
     */
    public function save()
    {

        // @TODO: Ensure there are attributes before attempting to save
        // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert
        if ( ! empty( $this->attributes ) && isset( $this->attributes['id'] ) )
        {

            $this->update( $this->attributes['id'] );
        }
        else
        {

            $this->insert();
        }
    }

    // deletes object from db
    public function delete()
    {

        $query = 'DELETE FROM ' . static::$table . ' WHERE id = :id';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
        $stmt->execute();
    }

    // creates new entry in db
    protected function insert()
    {

        // @TODO: After insert, add the id back to the attributes array so the object can properly reflect the id
        // @TODO: You will need to iterate through all the attributes to build the prepared query
        // @TODO: Use prepared statements to ensure data security
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

    // updates existing entry in db
    protected function update($id)
    {

        // @TODO: Ensure that update is properly handled with the id key
        // @TODO: You will need to iterate through all the attributes to build the prepared query
        // @TODO: Use prepared statements to ensure data security
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


    /*
     * Find a record based on an id
     */
    public static function find($id)
    {

        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $query = 'SELECT * FROM ' . static::$table . ' WHERE id = :id';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // @TODO: Store the resultset in a variable named $result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;

        if ( $result )
        {

            $instance = new static;
            $instance->attributes = $result;
        }

        return $instance;
    }


    /*
     * Find all records in a table
     */
    public static function all()
    {

        self::dbConnect();

        // @TODO: Learning from the previous method, return all the matching records
        // @TODO: Create select statement using prepared statements
        $query = 'SELECT * FROM ' . static::$table;

        $stmt = self::$dbc->prepare($query);
        $stmt->execute();

        // @TODO: Store the resultset in a variable named $result
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

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
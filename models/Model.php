<?php

$_ENV = include __DIR__ . '/../.env.php';

/**
 * Note that this class is abstract and must be extended. The child
 * classes will need to set the static $dbc property.
 *
 * Provides methods for inserting, updating, deleting and finding
 * records from the given database table.
 *
 * Any static methods will need to call `dbConnect` because in a
 * static context, we are not gauranteed to have an existing
 * connection. Because `dbConnect` is called in the constructor, this
 * is not necessary in instance methods.
 */
abstract class Model {
    /** @var PDO|null the connection to the database */ 
    protected static $dbc;
    /** @var string the name of the table */
    protected static $table;
    
    /** @var array the attributes of this instance */
    protected $attributes = [];

    /**
     * opens db connection
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /**
     * Get a value from attributes based on name
     *
     * @param string $name
     * @return mixed the value associated with the given name, or null
     *               if it does not exist
     */
    public function __get($name)
    {
        // Return the value from attributes with a matching $name, if it exists
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
        return null;
    }

    /**
     * Set a new value, or override an existing  for the given key
     *
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        // Store name/value pair in attributes array
        $this->attributes[$name] = $value;
    }

    /*
     * create the database connection if we don't have one
     */
    protected static function dbConnect()
    {
        if (! self::$dbc) {
            //Connect to database
            require __DIR__ . '/../database/db_connect.php';

            self::$dbc = $dbc;
        }
    }

    /*
     * persist the object to the database
     *
     * decides whether an update or insert needs to happen based on
     * whether or not this instance has an id
     */
    public function save()
    {
        if (! empty($this->attributes) && isset($this->attributes['id'])) {
            $this->update();
        } else {
            $this->insert();
        }
    }

    /**
     * remove the instance from the database
     */
    public function delete()
    {
        $query = 'DELETE FROM ' . static::$table . ' WHERE id = :id';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
        $stmt->execute();
    }

    /**
     * create a new record in the database
     *
     * will dynamically create a query to insert the record based on
     * the attributes of the instance
     *
     * after the insert is performed the `id` attribute of the model
     * will be set to the newly generated id
     */
    protected function insert()
    {
        $columns = '';
        $valuePlaceholders = '';

        foreach ($this->attributes as $column => $value) {
            if ($columns == '' && $valuePlaceholders == '') {
                $columns .= $column;
                $valuePlaceholders .= ':' . $column;
            } else {
                $columns .= ', ' . $column;
                $valuePlaceholders .= ', :' . $column;
            }
        }

        $query = "INSERT INTO " . static::$table . " ({$columns}) VALUES ({$valuePlaceholders})";

        $stmt = self::$dbc->prepare($query);

        foreach ($this->attributes as $column => $value) {
            $stmt->bindValue(':' . $column, $value, PDO::PARAM_STR);
        }

        $stmt->execute();
        $this->attributes['id'] = self::$dbc->lastInsertId();
    }

    /**
     * update an existing record in the database
     *
     * will dynamically generate an update statement based on the
     * attributes of the instance
     */
    protected function update()
    {
        $query = "UPDATE " . static::$table . " SET ";
        $firstValue = true;

        // Iterate through all the attributes to build the prepared query
        // Use prepared statements to ensure data security
        foreach ($this->attributes as $key => $value) {
            // don't add the id attribute to our update statement
            if ($key == 'id') {
                continue;
            }

            if ($firstValue) {
                $firstValue = false;
                $query .= $key . ' = :' . $key;
            } else {
                $query .= ', ' . $key . ' = :' . $key;
            }
        }

        $query .= ' WHERE id = :id';

        $stmt = self::$dbc->prepare($query);

        foreach ($this->attributes as $key => $value) {
            $stmt->bindValue(':' . $key, $value, PDO::PARAM_STR);
        }

        $stmt->execute();
    }

    /**
     * Find a record based on an id
     *
     * @param int|string $id the id of the record to look for
     * @return static|null an instace of the class that is extending
     *                     this class with the attributes array filled
     *                     with value from the datbase, null if no
     *                     record was found
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        //Create select statement using prepared statements
        $query = 'SELECT * FROM ' . static::$table . ' WHERE id = :id';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $instance = null;
        // if we have a result, create a new instance
        if ($result) {
            $instance = new static;
            $instance->attributes = $result;
        }

        // return either the found instance or null
        return $instance;
    }


    /**
     * Find all records in a table
     *
     * @return array an array of instances of the class that is
     *               extending this class
     */
    public static function all()
    {
        self::dbConnect();

        $query = 'SELECT * FROM ' . static::$table;

        $stmt = self::$dbc->prepare($query);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // turn each associative array into an instance of the model subclass
        return array_map(function($result) {
            $instance = new static;
            $instance->attributes = $result;
            return $instance;
        }, $results);
    }

}
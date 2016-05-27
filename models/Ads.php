<?php

require_once __DIR__ . '/Model.php';

class Ads extends Model {

      // finds and returns instance of user based on ad name
    public static function findAdByName($name)
    {

        self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' WHERE name = :name';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetch(PDO::FETCH_ASSOC);

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



// creates new entry in db
    protected function insert()
    {

        //After insert, add the id back to the attributes array so the object can properly reflect the id
        //Iterate through all the attributes to build the prepared query
        //Use prepared statements to ensure data security
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






    user_id INT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    price VARCHAR(100) NOT NULL,
    img_url VARCHAR(255) NOT NULL,
    category VARCHAR(255),











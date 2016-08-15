<?php

require_once __DIR__ . '/Model.php';


class Team extends Model {

	protected static $table = 'teams';

        public static function getName($id)
        {
            $team = Team::findByTeamId($id);
            return $team->team['team_name'];
        }

	    public static function findByTeamId($teamId)
        {
        	self::dbConnect();

            $query = 'SELECT * FROM ' . self::$table . ' WHERE id = :team_id';

        	$stmt = self::$dbc->prepare($query);
            $stmt->bindValue(':team_id', $teamId, PDO::PARAM_STR);
            $stmt->execute();

            //Store the resultset in a variable named $result
            $results = $stmt->fetch(PDO::FETCH_ASSOC);

            // The following code will set the attributes on the calling object based on the result variable's contents

            $instance = null;

            if ( $results )
            {

                $instance = new static;
                $instance->team = $results;
            }

            return $instance;
        }

        public static function findByTeamName($teamName)
        {
            self::dbConnect();

            $query = 'SELECT * FROM ' . self::$table . ' WHERE team_name = :team_name';

            $stmt = self::$dbc->prepare($query);
            $stmt->bindValue(':team_name', $teamName, PDO::PARAM_STR);
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

        public static function findByUser($userId)
        {
            self::dbConnect();

            $query = 'SELECT * FROM ' . self::$table . ' WHERE user_id = :user_id';

            $stmt = self::$dbc->prepare($query);
            $stmt->bindValue(':user_id', $userId, PDO::PARAM_STR);
            $stmt->execute();

            //Store the resultset in a variable named $result
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // The following code will set the attributes on the calling object based on the result variable's contents

            $instance = null;

            if ( $results )
            {

                $instance = new static;
                $instance->teams = $results;
            }

            return $instance;
        }

}


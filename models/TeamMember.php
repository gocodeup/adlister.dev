<?php

require_once __DIR__ . '/Model.php';

class TeamMember extends Model {

	protected static $table = 'team_members';

	public static function findByTeamId($teamId)
    {
    	self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' WHERE team_id = :team_id';

    	$stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':team_id', $teamId, PDO::PARAM_STR);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $instance = null;

        if ( $results )
        {

            $instance = new static;
            $instance->members = $results;
        }

        return $instance;
    }

}
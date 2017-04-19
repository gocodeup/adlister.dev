<?php 

require_once __DIR__ . '/Auth.php';
require_once __DIR__ . '/../database/seeds/db_connect.php';
require_once __DIR__ . '/../models/User.php';

class Credentials extends Auth

{

public function forgot_password($username) {

        if (strlen($username) > 0) {
            $user_data = User::findByUsernameOrEmail($username);
            if (!is_null($user_data)) {
            $newPassword = md5(rand().microtime());
            $user_data->password = $newPassword; 
            $user_data->save();
            echo $newPassword;
            }
        }
    }
}

 ?>
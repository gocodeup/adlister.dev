<?php

require_once __DIR__ . '/Model.php';

class Shoe extends Model {
    protected static $table = 'shoes';

    // // override the __set method so that we can hash passwords. if the
    // // given key is not a password, just call the parent method
    // public function __set($name, $value)
    // {
    //     if ($name == 'password') {
    //         $value = password_hash($value, PASSWORD_DEFAULT);
    //     }
    //     parent::__set($name, $value);
     }
?>
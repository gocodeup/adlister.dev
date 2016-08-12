<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.
require __DIR__ . '/../database/db_connect.php';
require_once __DIR__ . '/../utils/Input.php';


// takes image from form submission and moves it into the uploads directory
function saveUploadedImage($input_name)
{

    $valid = true;

    // checks if $input_name is in the files super global
    if(isset($_FILES[$input_name]) && $_FILES[$input_name]['name'])
    {

        // checks if there are any errors on the upload from the submission
        if(!$_FILES[$input_name]['error'])
        {

            $tempFile = $_FILES[$input_name]['tmp_name'];
            $image_url = '/img/uploads' . $input_name;
            move_uploaded_file($tempFile, __DIR__ .'/../public' . $image_url);
            return $image_url;
        }

    }
    return null;
}

//make function for saving user
function saveUser()
{
    $user = new User();
    $user->name = Input::get('name');
    $user->email = Input::get('email');
    $user->username = Input::get('username');
    $user->password = Input::get('password');
    $user->save();

}
//function redirects to appropiate page after saving
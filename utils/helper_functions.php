<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.


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
    $user->name = Input::get('email');
    $user->name = Input::get('username');
    $user->name = Input::get('password');


}
//function redirects to appropiate page after saving
=======
>>>>>>> 4badec466800ae998c7184af1f4632e2591c62cf

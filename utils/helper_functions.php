<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.

function signupUserController() {
    $data = ['username' => '', 'password' => ''];
    if (!empty($_POST)) {
        $exists = User::findByUsernameOrEmail(Input::get('username'));
        //var_dump($exists);
        if ($exists) {
            $data['error'] = 'error';
            //var_dump($data);
            return $data;
        }

        $user = new User();

        $username = Input::get('username');
        $password = Input::get('password');

        $user->name = $username;
        $user->password = $password;

        $user->save();

        // redirect
        header('Location: /login');
        exit;
    }
    return $data;
}


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

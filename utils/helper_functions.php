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
            $extension = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
            $newName = substr($tempFile, 4);
            $image_url = '/img/uploads' . $newName . '.' . $extension;
            move_uploaded_file($tempFile, __DIR__ .'/../public' . $image_url);
            return $image_url;
        }

    }
    return null;
}

//make function for saving user
//Can aso have the post active at the top of the function if requested.
function saveUser()
{
    $user = new User();
    $user->name = Input::get('name');
    $user->email = Input::get('email');
    $user->username = Input::get('username');
    $user->password = Input::get('password');
    $user->save();

}

function itemsSave()
{
    $gavin = new Items();
    $gavin->name = Input::get('name');
    $gavin->description = Input::get('description');
    $gavin->price = Input::get('price');
    $gavin->image = saveUploadedImage('image');
    $gavin->user_id = 1;

    $gavin->save();

    $tags = Input::get('tag');
    $names = explode(',', $tags);
    $tags = [];
    foreach ($names as $name) {
        $tags[] = tagSave($name);
    }

    $gavin->addTags($tags);
}

function tagSave($name)
{
    $tag = new Tag();
    $tag->name = trim($name);
    //change me later!//
    
    $tag->save();

    return $tag;
}

// the following functions will be used to display items on the page
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
            $newName = substr($tempFile, 4);
            $extension = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
            // Validate Size and Extension
            if( $_FILES[$input_name]['size'] > (1024000000))
            {
                $valid = false;
            }
            // only allows certain file extensions
            if( $extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif')
            {
                $valid  = false;
            }
            // If Image file makes it to this point, send file to this directory
            if($valid)
            {
                $image_url = '/img/uploads' . $newName . '.' . $extension;
                move_uploaded_file($tempFile, __DIR__ . '/../public' . $image_url);
                return $image_url;
            }
            else
            {
                return null; 
            }
        }
    } else {
        return null;   
    }
}


function inputHas($key)
{
    return isset($_REQUEST[$key]);
}

function inputGet($key) 
{
    if (inputHas($key)){
        return $_REQUEST[$key];
    } else {
        return NULL;
    }
}

function escape($input)
{
    return strip_tags(htmlspecialchars($input));
}

function loggedInOnly()
{
  if(!isset($_SESSION['IS_LOGGED_IN'])){
    header("Location: http://adlister.dev/");
    die();
  }
}

<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.

// checks if the user_id is in the input
// and if not sends the user to the items page
function checkIfUserIdGiven()
{

    if (!Input::has('id'))
    {

        $_SESSION['ERROR_MESSAGE'] = 'User account not found. Please try again.';
        header('Location: /items');
        die();
    }
}

// used as a route filter
// only allows users who are logged to stay on the page
function redirectIfNotLoggedIn()
{

    if (!Auth::check())
    {

        header('Location: /login');
    }
}

// used as a route filter
// stops logged in users from seeing the login form
function redirectIfLoggedIn()
{

    if (Auth::check())
    {

        header('Location: /account');
    }
}

// logs out current user and redirects to login
function runLogout()
{

    Auth::logout();
    header('Location: /login');
    die();
}

// function to handle information submitted for login
function processLoginInputIfExists()
{

    // checks if there is data in a POST request and if so runs a login attempt
    if (hasInput('POST') && Auth::attempt(Input::get('email_user'), Input::get('password')))
    {

        header('Location: /');
        die();
    }
}

// checks specified request super global to see if it has values
// default is using $_REQUEST via Input class static function all
function hasInput($request_type = 'ALL')
{

    if ($request_type == 'ALL')
    {

        return !empty(Input::all());
    }
    else if ($request_type == 'POST')
    {

        return !empty($_POST);
    }
    else
    {

        return !empty($_GET);
    }
}

// deletes item if allowed
function processDeleteOfItem()
{

    $item = Item::find(Input::get('id'));

    // checks if the item was found
    // if not redirects to items index page with error message
    if ($item == null)
    {

        $_SESSION['ERROR_MESSAGE'] = 'Post not found';
        header('Location: /items');
        die();
    }

    // checks if logged in user has permission to delete specified item
    // if not, redirects them to show page for the item with error message
    if ($item->user_id != Auth::id())
    {

        $_SESSION['ERROR_MESSAGE'] = 'You do not have permission to do that';
        header('Location: /items/show?id=' . $item->id);
        die();
    }
    $item->delete();

    $_SESSION['SUCCESS_MESSAGE'] = 'Post successfully deleted';
    header('Location: /items');
    die();
}

// checks if information was submitted in POST request
// if so, updates the specified account with the given information
function processAccountEditInputIfExisits()
{

    // checks for POST information and if user can edit specified account
    if (hasInput('POST') && Input::get('id') == Auth::id())
    {

        $user = User::find(Input::get('id'));
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->username = Input::get('username');
        $user->save();

        $_SESSION['SUCCESS_MESSAGE'] = 'Account successfully updated';

        header('Location: /users/account?id=' . $user->id);
        die();
    }
}

// checks if information was submitted in POST request
// if so, uses information to make new user
// after, attempts to login user
// if successfully logged in, sent to home page
// if not, sent to login page with error message
function processSignupInputIfExisits()
{

    if (hasInput('POST'))
    {

        $user = new User;
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->username = Input::get('username');
        $user->password = Input::get('password');
        $user->save();

        if (Auth::attempt(Input::get('email'), Input::get('password')))
        {

            header('Location: /users/account?id=' . $user->id);
            die();
        }
        else
        {

            $_SESSION['ERROR_MESSAGE'] = 'Failed to login user after signup. Please login with the form below.';
            header('Location: /login');
            die();
        }
    }
}

// checks if information was submitted in POST request
// if so, takes submitted info and makes a new item owned by the logged in user
function processNewItemInputIfExists()
{

    if (hasInput('POST'))
    {

        $item = new Item;
        $item->user_id = Auth::user()->id;
        $item->name = Input::get('name');
        $item->price = removeMoneyCharacters(Input::get('price'));
        $item->description = Input::get('description');
        $image_url = saveUploadedImage('image');
        $item->image_url = $image_url;
        $item->save();

        header('Location: /items/show?id=' . $item->id);
        die();
    }
}

// checks if information was submitted in POST request
// if so, takes submitted info and updates the specified
// item if owned by the logged in user
function updateItemWithInputIfExists()
{

    if (hasInput('POST'))
    {

        $item = Item::find( Input::get('id') );

        if ($item->user_id == Auth::user()->id)
        {

            $item->name = Input::get('name');
            $item->price = removeMoneyCharacters(Input::get('price'));
            $item->description = Input::get('description');

            $image_url = saveUploadedImage('image');
            if ($image_url != null)
            {

                $item->image_url = $image_url;
            }

            $item->save();

            header('Location: /items');
            die();
        }
    }
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
                move_uploaded_file($tempFile, __DIR__ .'/../public' . $image_url);
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

// helper class for displaying currency saved in the database as a float
function convertToMoney($number, $cents = 2)
{

	if (is_numeric($number)) { // a number
    	if (!$number) { // zero
      		$money = ($cents == 2 ? '0.00' : '0'); // output zero
    	} else { // value
      		if (floor($number) == $number) { // whole number
        		$money = number_format($number, ($cents == 2 ? 2 : 0)); // format
      		} else { // cents
        		$money = number_format(round($number, 2), ($cents == 0 ? 0 : 2)); // format
      		} // integer or decimal
    	} // value
    	return '$'.$money;
  	} // numeric
}

// removes money characters from user submitted values
function removeMoneyCharacters($value)
{
    return str_replace('$', '', str_replace(',', '', $value));
}
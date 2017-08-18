<?php
function checkIfUserIdGiven()
{
    if (!Input::has('id'))
    {
        $_SESSION['ERROR_MESSAGE'] = 'User account not found. Please try again.';
        header('Location: /items');
        die();
    }
}
function redirectIfNotLoggedIn()
{
    if (!Auth::check())
    {
        header('Location: /login');
    }
}
function redirectIfLoggedIn()
{
    if (Auth::check())
    {
        header('Location: /account');
    }
}
function runLogout()
{
    Auth::logout();
    header('Location: /login');
    die();
}
function processLoginInputIfExists()
{
    if (hasInput('POST') && Auth::attempt(Input::get('email_user'), Input::get('password')))
    {
        header('Location: /');
        die();
    }
}
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
function processDeleteOfItem()
{
    $item = Item::find(Input::get('id'));
    if ($item == null)
    {
        $_SESSION['ERROR_MESSAGE'] = 'Post not found';
        header('Location: /items');
        die();
    }
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
function processAccountEditInputIfExisits()
{
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
function saveUploadedImage($input_name)
{
    $valid = true;
    if(isset($_FILES[$input_name]) && $_FILES[$input_name]['name'])
    {
        if(!$_FILES[$input_name]['error'])
        {
            $tempFile = $_FILES[$input_name]['tmp_name'];
            $positionOfLastSlash = strrpos($tempFile, '/');
            $newName = substr($tempFile, $positionOfLastSlash);
            $extension = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
            if( $_FILES[$input_name]['size'] > (1024000000))
            {
                $valid = false;
            }
            if( $extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif')
            {
                $valid  = false;
            }
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
function convertToMoney($number, $cents = 2)
{
    if (is_numeric($number)) { 
        if (!$number) { 
            $money = ($cents == 2 ? '0.00' : '0'); 
        } else { 
            if (floor($number) == $number) { 
                $money = number_format($number, ($cents == 2 ? 2 : 0)); 
            } else { 
                $money = number_format(round($number, 2), ($cents == 0 ? 0 : 2)); 
            } 
        } 
        return '$'.$money;
    } 
}
function removeMoneyCharacters($value)
{
    return str_replace('$', '', str_replace(',', '', $value));
}
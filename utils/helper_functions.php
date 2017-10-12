<?php

class FileUploadException extends Exception { }

/**
 * Takes in a name of an input that contains a file, and saves it to
 * the uploads directory if the file passes validation
 *
 * Make sure the uploads directory exists before trying to upload files!
 *
 * @throws FileUploadexception if the file is invalid, the exception
 *                             message will contain details about what
 *                             went wrong
 * @param string $inputName the name of the input that contains the file
 * @return string the path to the uploaded file, relative to the
 *                public directory
 */
function saveUploadedImage($inputName) {
    $maxUploadSize = 1024000000;
    $validFileExtensions = ['jpg', 'jpeg', 'png', 'gif', 'JPG'];
    $uploadsDirectory = 'img/uploads';

    // make sure the input exists and is a file
    if (! isset($_FILES[$inputName])) {
        throw new FileUploadException("input: '$inputName' does not exist!");
    }

    $uploadedFile = $_FILES[$inputName];

    if (! isset($uploadedFile['size']) || $uploadedFile['size'] <= 0) {
        throw new FileUploadException("input: '$inputName' is not a file or is empty!");
    }

    // check for upload errors and size constraints
    if ($uploadedFile['error'] !== UPLOAD_ERR_OK) {
        $msg = 'Upload Error! Error Code: ' . $uploadedFile['error'];
        $msg.= ' see http://us.php.net/manual/en/features.file-upload.errors.php for details.';
        throw new FileUploadException($msg);
    }
    if($uploadedFile['size'] > $maxUploadSize) {
        $msg = 'Uploaded file is too big!. File size: ' . $uploadedFile['size'];
        $msg.= ' is greater than max upload size: ' . $maxUploadSize . '.';
        throw new FileUploadException($msg);
    }

    // only allows certain file extensions
    $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
    if(! in_array($fileExtension, $validFileExtensions)) {
        throw new FileUploadException("Invalid file extension: '$fileExtension'");
    }

    // find the temporary uploaded file and just get the filename
    $tempName = $uploadedFile['tmp_name'];
    $positionOfLastSlash = strrpos($tempName, '/');
    $newName = substr($tempName, $positionOfLastSlash);

    // move image to uploads directory
    $imagePath = $uploadsDirectory . $newName . '.' . $fileExtension;
    move_uploaded_file($tempName, __DIR__ .'/../public/' . $imagePath);

    // return the path to the image relative to our public folder
    return $imagePath;
}
function signUp ()
{

    $fullNameError = '';
    $emailError = '';
    $usernameError = '';
    $passwordError = '';

    if(!empty($_POST)){
        $userInfo = User::findByUsernameOrEmail(Input::get('username'));
        if(Input::get('name') === '') {
            return $fullNameError =  'Please enter a name.'.PHP_EOL;
        }
        if(Input::get('email') === '') {
            return $emailError = 'Please enter an email.'.PHP_EOL;
        }
        if(Input::get('username') === '') {
            return $usernameError = 'Please enter a username.'.PHP_EOL;
        }
        if(Input::get('password') === '') {
            return $passwordError = 'Please enter a password.'.PHP_EOL;
        }
        if($userInfo !== null && ($userInfo->email === Input::get('email'))) {
            return $emailError = 'The email you have chosen is already associated with another user. Please choose another email.';
        }
        if($userInfo !== null && ($userInfo->username === Input::get('username'))) {
            return $usernameError = 'That username is already in use. Please choose a unique username.';
        } else if((Input::has('name') && Input::has('email') && Input::has('username') && Input::has('password')) && (User::findByUsernameOrEmail(Input::get('username')) === null) && (User::findByUsernameOrEmail(Input::get('email')) === null)) {
            $user = new User();
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->username = Input::get('username');
            $user->password = Input::get('password');
            $user->save();
            header('Location:/login');
            die();

        }
    }

}

function logIn ()
{
    if(!empty($_POST)){
        $username = Input::has('email_user')? escape(Input::get('email_user')): '';
        $password = Input::has('password')? escape(Input::get('password')): '';
        Auth::attempt($username, $password);
        if(Auth::check()) {
            header('Location:/index');
            die;
        }
    }
}

function updateUser()
{

    $user = Auth::user();

    if (!empty($_POST))
    {
    $user->name = Input::get('name');
    $user->email = Input::get('email');

    $user->save();
    header("Location: /account");

    }
}

function updatePass()
{
    $username = isset($_SESSION['IS_LOGGED_IN']) ? $_SESSION['IS_LOGGED_IN'] : '';
    $password = Input::has('currentPassword')? escape(Input::get('currentPassword')): '';
    $newPass = Input::has('enterNew')? escape(Input::get('enterNew')): '';
    if (!empty($_POST))
    {
        if (($_POST['enterNew']) !== ($_POST['reEnterNew'])) {
            return $_SESSION['PASS_ERROR'] = "Passwords must match";
        }
        if (Auth::attempt($username, $password)) {
            $user = Auth::user();
            $user->password = $newPass;
            $user->save();

            unset($_SESSION['ERROR_MESSAGE']);
            unset($_SESSION['PASS_ERROR']);
            header("Location: /account");
        } else {
            return $_SESSION['ERROR_MESSAGE'] = "Current password incorrect";

        }

    }
}

function editAd()
{
    // $adCheck = Ad::findAd($_GET['ad']);
    // if ($adCheck->username !== $_SESSION['IS_LOGGED_IN']){
    //     header('Location:/index');
    //     die;
    // }

    $ad = Ad::find($_GET['ad']);
    $data['ad'] = $ad;

    if(!empty($_POST)){
        $ad->name = Input::get('name');
        $ad->description = Input::get('description');
        $ad->save();
        header('Location:/account');
    }
}

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
function signUp ($_Post)
{
    $nameErrorMessage = '';
    $emailErrorMessage = '';
    $usernameErrorMessage = '';
    $passwordErrorMessage = '';
    if(!empty($_POST)){
        if(Input::get('name') === '') {
            $nameErrorMessage =  'Please enter a name.'.PHP_EOL;
        }
        if(Input::get('email') === '') {
            $emailErrorMessage = 'Please enter an email.'.PHP_EOL;
        }
        if(Input::get('username') === '') {
            $usernameErrorMessage = 'Please enter a username.'.PHP_EOL;
        }
        if(Input::get('password') === '') {
            $passwordErrorMessage = 'Please enter a password.'.PHP_EOL;
        } else if(Input::has('name') && Input::has('email') && Input::has('username') && Input::has('password')) {
            $user = new User();
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->username = Input::get('username');
            $user->password = Input::get('password');
            $user->save();
        }
    }

}
function logIn ()
{
    if(!empty($_POST)){
        var_dump('firing');
        $username = Input::has('email_user')? escape(Input::get('email_user')): '';
        $password = Input::has('password')? escape(Input::get('password')): '';
        var_dump($username);
        var_dump($password);
        Auth::attempt($username, $password);
        if(Auth::check()) {
            header('Location:/index');
            die;
        }
    }
}

<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.

function addTeamController() {    
    $data = ['user_id' => '', 'team_name' => '', 'logo' => ''];
    if (!empty($_POST)) {
        $exists = Team::findByTeamName(Input::get('team_name'));
        if ($exists) {
            $data['error'] = 'This team name already exists!';
            return $data;
        }
        $team = new Team();
        $team->team_name = Input::get('team_name');
        $team->user_id = $_SESSION['user_id'];
        $team->logo = Input::get('logo');
        $team->save();
    }
}

    

//don't think this is done yet
function addTeamMemberController() {
    $data = ['team_id' => '', 'pokemon_id' => []];
    if (!empty($_POST)) {
        $memberArray = Input::get('member');
        var_dump($memberArray);
        foreach ($memberArray as $newMember) {
            $team = new TeamMember();
            $team->user_id = $_SESSION['LOGGED_IN_ID'];
            $team->new_member = $newMember;
            $team->save();
        }
    }
}

function loginController() {
    $data = ['username' => '', 'password' => ''];
    if (isset($_POST)) {  
        $user = Auth::attempt(Input::get('username'), Input::get('password'));
    }
    if ($user) {
        header('Location: /home');
    }
}

function signupUserController() {
    $data = ['username' => '', 'password' => ''];
    if (!empty($_POST)) {
        $exists = User::findByUsername(Input::get('username'));
        if ($exists) {
            $data['error'] = 'This username already exists!';
            return $data;
        }

        $user = new User();

        $user->name = Input::get('username');
        $user->password = Input::get('password');

        $user->save();

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

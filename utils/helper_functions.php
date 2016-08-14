<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.

function addMemberController() 
{
    if (isset($_POST['TEAM_DELETED'])) {
        deleteTeam();
    }
    if (isset($_POST['member'])) {
        addMember();
    }
}

// function showTeamsController()
// {
//     $user = new User;
//     $user->id = $_SESSION['LOGGED_IN_ID'];

//     // foreach (team where user_id = loggedinid)
//         $user->teams[] = 
// }

function addTeamController()
{
    if (isset($_POST['TEAM_NAME']))
    {
        $exists = Team::findByTeamName(Input::get('TEAM_NAME'));
        if ($exists) {
            $_POST['MESSAGE'] = 'This team name already exists!';
            return false;
        }
        $team = new Team();
        $team->user_id = $_SESSION['LOGGED_IN_ID'];
        $team->team_name = $_POST['TEAM_NAME'];
        if (isset($_POST['IMAGE_URL']))
        {
            $team->logo = $_POST['IMAGE_URL'];
        } else {
            $team->logo = "../sugimori/25.png";
        }
        $team->save();
        $_SESSION['TEAM_ID'] = $team->id;
        $_POST['MESSAGE'] = "Team Created! Select six members for your team:";
        header('Location: /add-members');        
    } else
    {
        $_POST['MESSAGE'] = "Please enter a team name:";
    }
}

function deleteTeam() 
{
    $deleteArray = Input::get('TEAM_DELETED');
    if ($deleteArray) 
    {
        $team = new Team();
        $teamMembers = new TeamMember();
        $team->attributes = Team::findByTeamId($_SESSION['TEAM_ID']);
        $teamMembers = TeamMember::findByTeamId($_SESSION['TEAM_ID']);
        foreach ($teamMembers->members as $teamMember)
        {
            $member = new TeamMember();
            $member->id = $teamMember['id'];
            $member->delete();
        }
        $team->delete();
        $_POST['MESSAGE'] = "This team has been permenantly deleted.";
        header('Location: /view-teams');
    }
}

function addMember()
{
    $membersArray = Input::get('member');
    if ($membersArray) {
        foreach ($membersArray as $member) 
        {
            $pokemon = Pokemon::getPokemon($member);
            $teamMember = new TeamMember();
            $teamMember->team_id = $_SESSION['TEAM_ID'];
            $teamMember->pokedex_id = $pokemon['id'];
            $teamMember->save();   
        }
    $_POST['MESSAGE'] = "Team successfully updated.";
    } else {
        $_POST['MESSAGE'] = "Search for Pokemon by Name, or enter Pokedex Number.";
    }
}

function loginController() 
{
    if (isset($_POST)) {  
        $user = Auth::attempt(Input::get('username'), Input::get('password'));
    }
    if ($user) {
        header('Location: /home');
    }
}

function signupUserController() 
{
    $data = ['username' => '', 'password' => ''];
    if (!empty($_POST['username'])) {
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

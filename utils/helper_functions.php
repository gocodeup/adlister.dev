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

function myTeamsController()
{
    $teamsArray = Team::findByUser($_SESSION['LOGGED_IN_ID']);
    foreach ($teamsArray->teams as $team) 
    {
        $myTeamsById[] = $team['id'];                
    }
    $_SESSION['USER_TEAMS'] = $myTeamsById;
}

function allTeamsController()
{
    $teamsArray = Team::all();
    foreach ($teamsArray as $team)
    {
        $allTeamsById[] = $team->id;
    }
    $_SESSION['ALL_TEAMS'] = $allTeamsById;
}

function displayTeamById($id)
{
    $selected = Team::findByTeamId($id);
    return $selected->team;
}

function visitTeamController()
{
    $_SESSION['TEAM_ID'] = Input::get('team');
    $teamMembers = displayTeamMembers(Input::get('team'));
    $teamName = $teamMembers['teamName'];
    unset($teamMembers['teamName']);
    foreach ($teamMembers as $key => $member) 
    {
        foreach ($member as $name => $stats)
        {
            $membersNames[] = $name;
            $memberStats[] = $stats;
        }
    }
    $pokedexIds = getMemberPokedexNumbers($membersNames);
    return [
        'memberNames' => $membersNames,
        'stats' => $memberStats[0],
        'teamName' => $teamName,
        'pokedexId' => $pokedexIds
    ];
}

function getMemberPokedexNumbers($teamMembers)
{
    foreach ($teamMembers as $key => $member)
    {
        $data = Pokemon::selectStats($member, true);
        $teamIds[] = $data['Pokedex'];
    }
    return $teamIds;
}

function displayTeamMembers($id) {
    $teamName = Team::getName($id);
    $fullTeam = TeamMember::findByTeamId($id);
    foreach ($fullTeam->members as $member) {
        $pokedexEntry = Pokemon::getPokemon($member['pokedex_id']);
        $name = $pokedexEntry['Pokemon'];
        $pokemonStats = Pokemon::selectStats($member['pokedex_id']);
        $allMembers[] = [$name => $pokemonStats];
    }
    $allMembers['teamName'] = $teamName;
    return $allMembers;
}

function addTeamController()
{
    if (isset($_POST['TEAM_NAME']))
    {
        attemptTeamCreation();        
    } else
    {
        $_POST['MESSAGE'] = "Please enter a team name:";
    }
}
function attemptTeamCreation()
{
    $exists = ifExists();
    if ($exists)
    {    
        $_POST['MESSAGE'] = "Team Created! Select six members for your team:";
    }
    createTeam();
}

function ifExists() 
{
    $exists = Team::findByTeamName(Input::get('TEAM_NAME'));
    if ($exists) {
        $_POST['MESSAGE'] = 'This team name already exists!';
        return true;
    }
}

function createTeam(){
    $team = new Team();
    $team->user_id = $_SESSION['LOGGED_IN_ID'];
    $team->team_name = $_POST['TEAM_NAME'];
    if (isset($_POST['IMAGE_URL']))
    {
        $team->logo = $_POST['IMAGE_URL'];
    } else {
        $team->logo = "../assets/sugimori/25.png";
    }
    $team->save();
    $_SESSION['TEAM_ID'] = $team->id;
    header('Location: /add-members');
}

function deleteTeam() 
{
    $deleteArray = Input::get('TEAM_DELETED');
    if ($deleteArray) 
    {
    var_dump($deleteArray);
        deleteTeamAndMembers();
        $_POST['MESSAGE'] = "This team has been permenantly deleted.";
        header('Location: /view-teams');
    }
}

function deleteTeamAndMembers()
{
    $team = new Team();
    $teamMembers = new TeamMember();
    $team = Team::findByTeamId($_SESSION['TEAM_ID']);
    var_dump($team->attributes);
    $teamMembers = TeamMember::findByTeamId($_SESSION['TEAM_ID']);
    if (isset($teamMembers))
    {
        foreach ($teamMembers->members as $teamMember)
        {
            $member = new TeamMember();
            $member->id = $teamMember['id'];
            $member->delete();
        }
    }
    $team->delete();
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

function signupController() 
{
    if (!empty($_POST['new_user'])) {
        $_POST['username'] = Input::get('new_user');
        $exists = User::findByUsername(Input::get('username'));
        if ($exists) {
            $_SESSION['SIGNUP_ERROR'] = 'This username already exists!';
            return false;
        }
        createAccount();
    }
}

function createAccount()
{
    $user = new User();

    $user->name = Input::get('new_user');
    $user->password = Input::get('password');

    $user->save();
    $_SESSION['SUCCESS_MESSAGE'] = 'Account created! Please log in below.';
    header('Location: /login');
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

<?php
// add test comment
require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{
    $_POST['MESSAGE'] = "";
    // defines array to be returned and extracted for view
    $data = [];

    // finds position for ? in url so we can look at the url minus the get variables
    $get_pos = strpos($_SERVER['REQUEST_URI'], '?');

    // if a ? was found, cuts off get variables if not just gives full url
    if ($get_pos !== false)
    {

        $request = substr($_SERVER['REQUEST_URI'], 0, $get_pos);
    }
    else
    {

        $request = $_SERVER['REQUEST_URI'];
    }

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        case '/signup':
            if (Auth::loggedIn()) {
                $main_view = '../views/home.php';
                break;
            } else {
                signupController();
                $main_view = '../views/users/signup.php';
                break;
            }

        case '/login':
            if (Auth::loggedIn()) {
                $main_view = '../views/home.php';
                break;
            } else {
                loginController();
                $main_view = '../views/users/login.php';
                break;
            }

        case '/logout':
            $main_view = '../views/home.php';
            Auth::logout();
            break;

        case '/add-members':
            $main_view = '../views/teams/add-member.php';
            addMemberController();
            break;

        case '/add-team':
            $main_view = '../views/teams/add-team.php';
            addTeamController();
            break;

        case '/my-teams':
            $main_view = '../views/teams/my-teams.php';
            myTeamsController();
            break;

        case '/visit-team':
            $main_view = '../views/teams/visit-team.php';
            extract(visitTeamController());
            break;

        case '/view-teams':
            $main_view = '../views/teams/view-teams.php';
            break;

        case '/compare':
            $main_view = '../views/partials/comparison.php';
            break;

        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
        }
    $data['main_view'] = $main_view;
    return $data;
}

extract(pageController());
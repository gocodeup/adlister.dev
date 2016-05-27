<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../database/db_connect.php';
require_once '../models/User.php';
function pageControllerSignup($dbc) 
{
    $message = [];
    $name = '';
    $username = '';
    $email = '';
    $password = '';
    $confirm = '';
    $data = [];
    $stmt = $dbc->prepare('SELECT * FROM users');
    $stmt->execute();
    $data['users'] = $stmt->fetchALL(PDO::FETCH_ASSOC);

    if (!empty($_POST))
    {

        try {
            $name = Input::getString('name',1,150);
        }
        catch (InvalidArgumentException $e) {
                $message[] = $e->getMessage();
        }catch (OutOfRangeException $e) {
                $message[] = $e->getMessage();
        }catch (RangeException $e) {
                $message[] = $e->getMessage();
        }catch (LengthException $e) {
                $message[] = $e->getMessage();
        }

        try {
            $username = Input::getString('username',0,150);
        }
        catch (InvalidArgumentException $e) {
                $message[] = $e->getMessage();
        }catch (OutOfRangeException $e) {
                $message[] = $e->getMessage();
        }catch (RangeException $e) {
                $message[] = $e->getMessage();
        }catch (LengthException $e) {
                $message[] = $e->getMessage();
        }

        try {
            $email = Input::getString('email',0,150);
        }
        catch (InvalidArgumentException $e) {
                $message[] = $e->getMessage();
        }catch (OutOfRangeException $e) {
                $message[] = $e->getMessage();
        }catch (RangeException $e) {
                $message[] = $e->getMessage();
        }catch (LengthException $e) {
                $message[] = $e->getMessage();
        }

        try {
            $password  = Input::getNumber('password',0,150);
        }
        catch (InvalidArgumentException $e) {
                $message[] = $e->getMessage();
        }catch (OutOfRangeException $e) {
                $message[] = $e->getMessage();
        }catch (RangeException $e) {
                $message[] = $e->getMessage();
        }catch (LengthException $e) {
                $message[] = $e->getMessage();
        }

        try {
            $confirm = Input::getString('confirm',10,150);
        }
        catch (InvalidArgumentException $e) {
                $message[] = $e->getMessage();
        }catch (OutOfRangeException $e) {
                $message[] = $e->getMessage();
        }catch (RangeException $e) {
                $message[] = $e->getMessage();
        }catch (LengthException $e) {
                $message[] = $e->getMessage();
        }
            if(empty($message)){
                saveUser($dbc, $user);
            }
        } 

    $data['message'] = $message;
    return $data;
}
extract(pageControllerSignup($dbc));

    function getPost($field) 
    {
       return (isset($_POST[$field]) && $_POST[$field] != "" ? $_POST[$field] : "");
    }
var_dump($_POST);
?>
<div class="container">
    <div class="row">
​
        <div class="col-md-4 col-md-offset-1 gearpic">
            <img src="/img/gears.png">
            <div class="gearcontent"> 
                <p class="gear-line-one">Thanks for stopping by!</p> 
                <p class="gear-line-two">We hope to see you again soon.</p>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-2">
            <p class="sign-up-text">SIGN UP</p>
            <p class="sign-up-free"> It's always free and always will be.</p>
​
            <div class="formdiv">
                <form class="form"type="POST" action="#">
                    <div class="row">
                        <div class="col-xs-12 name">
                            <input name="name" type="text" placeholder="Name" class="form-control input-lg" id="name">
                        </div>
                        <div class="col-xs-12 username">
                            <input name="username" type="text" placeholder="Username" class="form-control input-lg" id="username">
                        </div>
                        <div class="col-xs-12 email">
                            <input name="email" type="text" placeholder="Email" class="form-control input-lg" id="email">
                        </div>
                        <div class="col-xs-12 password">
                            <input name="password" type="password" placeholder="Password" class="form-control input-lg" id="password">
                        </div>
                        <div class="col-xs-12 password">
                            <input name="confirm" type="password" placeholder="Confirm Password" class="form-control input-lg" id="confirm">
                        </div>
                    </div>
                    <div class="centerdiv">
                        <input class="btn btn-danger btn-lg sign-up-btn" type="submit" value="SIGN UP!">
                    </div>
                </form>
            </div>
        </div><!-- end col-md-4 col-md-offset-2 class -->
    </div> <!-- end row class -->
</div>
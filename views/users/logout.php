<?php
// This the logout Method and redirects
// back to home after.
Auth::logout();
header('Location: /');
die();

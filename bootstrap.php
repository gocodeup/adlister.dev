<?php

// require models
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/Post.php';


// require helper classes
require_once __DIR__ . '/utils/Auth.php';
require_once __DIR__ . '/utils/Input.php';

//custom helpers
require_once __DIR__ . '/utils/customHelper.php';





// require front controller
// require_once __DIR__ . '/controllers/PageController.php';
require_once __DIR__ . '/controllers/customPageController.php';
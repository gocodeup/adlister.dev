<?php
session_start();
// require_once __DIR__ .'/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>OooLister</title>
    <?php require __DIR__ .'/../views/partials/head.php'; ?>
</head>
<body>
    <?php require __DIR__ .'/../views/partials/navbar.php'; ?>
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1>Welcome to Kitchen Kingdom!
                    </h1>
                    <p>Your source for all the unique kitchen gadgets you never knew you needed</p>
                </div>
            </div>

        </div>

        <hr>

<!--     <?php require $main_view; ?> -->
	<?php require __DIR__ . '/../views/partials/footer.php'; ?>

    </div>
<!-- /.container -->


    <?php require __DIR__ . '/../views/partials/common_js.php'; ?>
</body>
</html>
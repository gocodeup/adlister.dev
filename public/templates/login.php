<!DOCTYPE html>
<html>
	<?php require '../../views/partials/head.php'; ?>
	<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
	<?php require '../../views/partials/navbar.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<h1>Login</h1>
			<form class="form-horizontal">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-default btn-info">Sign in</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
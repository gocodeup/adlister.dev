<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/index">SnapList</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav" id="navbar">
				<li><a href="/index">Home</a></li>
				<li><a href="/items">Items</a></li>
				<?php if (Auth::check()):?>
					<li><a href="/account">Account</a></li>
					<li><a href="/create">Create Ad</a></li>
					<li><a href="/logout">Logout</a></li>
				<?php else: ?>
					<li><a href="/signup">Signup</a></li>
					<li><a href="/login">Login</a></li>
				<?php endif;?>
			</ul>
			<form class="navbar-form navbar-right" id="search" method="get" action="/search">
				<div class="form-group">
					<input type="text" name="search" class="form-control" placeholder="Search">
					<button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</form>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
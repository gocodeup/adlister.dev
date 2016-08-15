<!--Page for user account home-->

<div class="container">

	<section id="account">

		<h1>Welcome, <?= $user->name; ?></h1>

		<div class="row">

			<div class="col-md-4">

				<h2>User Info</h2>
						
					<ul>
						<li>Name: <?= $user->name; ?></li>
						<li>Email: <?= $user->email; ?></li>
						<li>Username: <?= $user->username; ?></li>
					</ul>

			</div>

			<div class="col-sm-6 text-center">
				<a href="/users/edit" class="btn btn-success">Edit Profile</a>
			</div>

		</div>

		<div class="row">

			<div class="col-md-4">

				<h2>Your Ads</h2>
						
					<ul>
						<!-- not sure how to implement this yet --> 
					</ul>
					
			</div>

			<div class="col-sm-6 text-center">
				<a href="/ads/create" class="btn btn-success">Create Ad</a>
			</div>

		</div>

	</section>

	<div class="col-sm-6 text-center">
		<a href="/users/logout" class="btn btn-success">Log Out</a>
	</div>
	

</div>
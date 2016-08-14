<?php

?>
<form method="POST" action="" data-validation data-required-message="This field is required">
	<div class="form-group">
		<p>Team Name</p>
	    <input type="text" minlength="3" maxlength="20" class="form-control" id="team_name" name="team_name" placeholder="Team Name" data-required>
	</div>
	<div class="form-group">
		<p>Logo</p>
	    <input type="text" class="form-control" id="logo" name="logo" placeholder="logo" data-required>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<button type="submit" class="btn btn-primary">Sign In</button>
		</div>
</form>
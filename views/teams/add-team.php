<?php
?>
<div class="col-sm-2"></div>
<div class="col-sm-6 text-center">
	<h3 class="text-center"><?= $_POST['MESSAGE'] ?></h3>
	<form method="POST" action="" data-validation data-required-message="This field is required">
		<div class="form-group">
		    <input type="text" minlength="3" maxlength="20" class="form-control" id="team_name" name="TEAM_NAME" placeholder="Team Name" data-required>
		</div>
		<div class="form-group">
		    <input type="text" class="form-control" id="logo" name="IMAGE_URL" placeholder="Logo URL" data-required>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<button type="submit" class="btn btn-primary">Sign In</button>
			</div>
		</div>
	</form>
</div>
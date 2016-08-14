<?php

?>
<div class="container-fluid">
	<div class="row text-center">
		<form method="POST" action="" data-validation data-required-message="This field is required">
			<div class="form-group col-sm-2">
		<hr>
				<p>Pokemon 1</p>
			    <input type="text" class="form-control insert-pokemon" id="memberOne" name="member_one" placeholder="Enter Name or Number" data-required>
			</div>
			<div class="form-group col-sm-2">
		<hr>
				<p>Pokemon 2</p>
			    <input type="text" class="form-control insert-pokemon" id="memberTwo" name="member_two" placeholder="Enter Name or Number" data-required>
			</div>
			<div class="form-group col-sm-2">
		<hr>
				<p>Pokemon 3</p>
			    <input type="text" class="form-control insert-pokemon" id="memberThree" name="member_three" placeholder="Enter Name or Number" data-required>
			</div>
			<div class="form-group col-sm-2">
		<hr>
				<p>Pokemon 4</p>
			    <input type="text" class="form-control insert-pokemon" id="memberFour" name="member_four" placeholder="Enter Name or Number" data-required>
			</div>
			<div class="form-group col-sm-2">
		<hr>
				<p>Pokemon 5</p>
			    <input type="text" class="form-control insert-pokemon" id="memberFive" name="member_five" placeholder="Enter Name or Number" data-required>
			</div>
			<div class="form-group col-sm-2">
		<hr>
				<p>Pokemon 6</p>
			    <input type="text" class="form-control insert-pokemon" id="memberSix" name="member_six" placeholder="Enter Name or Number" data-required>
			</div>
		<div class="row">
			<div class="col-sm-6 text-center">
				<button type="submit" class="btn btn-primary">Save Team</button>
			</div>
		</form>
	</div>
<div class="container">
	<hr>
	<div class="col-sm-1"></div>
	<div class="col-sm-10 text-center">
		<p class="text-center"><h2>Select a Pokemon to Enter to Table</h2></p>
<?php require_once __DIR__ . '/../partials/table.php' ?>
<hr>
</div>
</div>
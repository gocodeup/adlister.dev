<!--Page for creating new advertisement listings-->
<h1>This is the create item page</h1>

<div id="formWrapper" class="col-md-4">
	<form method="POST">
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" name="description" id="description" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="img">Image</label>
			<input type="text" name="img" id="img" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="categories">Categories</label>
			<input type="textarea" name="categories" id="categories" class="form-control" required>
			<button class="btn" type="submit">Submit</button>
		</div>
	</form>
</div>
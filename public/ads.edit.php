<form method="POST" action="./items/edit.php" enctype="multipart/form-data">
	<fieldset class="form-group">
        <label>A Title For your Ad</label>
        <input type="text" class="form-control" name="title" maxlength="50" value="<?php if (Input::has('title')) echo $_POST['title']; ?>" required>
    </fieldset>
    <fieldset class="form-group">
        <label>Write a detailed description of what you're selling</label>
        <input type="text" class="form-control" name="description" maxlength="50" value="<?php if (Input::has('description')) echo $_POST['description']; ?>" required>
    </fieldset>
    <fieldset class="form-group">
        <label>Price</label>
        <input type="date" class="form-control" name="price" value="<?php if (Input::has('price')) echo $_POST['price']; ?>" required>
    </fieldset>
    <fieldset class="form-group">
        <label>Category</label>
        <select class="c-select" name="category">
		  <option selected>Car</option>
		  <option value="1">Motorcycle</option>
		  <option value="2">Furniture</option>
		  <option value="3">Electronics</option>
		</select>
    </fieldset>
    <fieldset class="form-group">
	    <label>Select an image to upload</label>
	    <input type="file" class="form-control" name="parkImg" id="parkImg" required>
    </fieldset>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
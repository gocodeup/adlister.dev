<form method="POST" action="?????????" enctype="multipart/form-data">
	<fieldset class="form-group">
        <label>A Title For your Ad</label>
        <input type="text" class="form-control" name="name" maxlength="50" value="<?php if (Input::has('name')) echo $_POST['name']; ?>" required>
    </fieldset>
    <fieldset class="form-group">
        <label>Write a detailed description of what you're selling</label>
        <input type="text" class="form-control" name="location" maxlength="50" value="<?php if (Input::has('location')) echo $_POST['location']; ?>" required>
    </fieldset>
    <fieldset class="form-group">
        <label>Price</label>
        <input type="date" class="form-control" name="date_established" value="<?php if (Input::has('date_established')) echo $_POST['date_established']; ?>" required>
    </fieldset>
    <fieldset class="form-group">
        <label>Area In Acres</label>
        <input type="number" class="form-control" name="area_in_acres" value="<?php if (Input::has('area_in_acres')) echo $_POST['area_in_acres']; ?>" required>
    </fieldset>
    <fieldset class="form-group">
	    <label>Select an image to upload</label>
	    <input type="file" class="form-control" name="parkImg" id="parkImg" required>
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
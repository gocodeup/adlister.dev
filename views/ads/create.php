<!--Page for creating new advertisement listings-->
<div class="container">
	<form class="form-horizontal">
		<fieldset>
			<!-- Form Name -->
			<legend>Create Ad</legend>
			<!-- Title input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="textinput">Title</label>  
			  <div class="col-md-4">
			  <input name="title" class="form-control input-md" id="textinput" type="text" required placeholder="Title here" value=<?= $title ?>> 
			  </div>
			</div>

			<!-- Description input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="textinput">Description</label>  
			  <div class="col-md-4"> 
			  <textarea name="description" required value=<?= $description ?> placeholder="Ad Description here"></textarea> 
			  </div>
			</div>

			<div class="form-group">
				<p>
					Please choose a picture:<br>
					<input type="file" name="picture" required size="40">
				</p>
			</div>

			<!-- Submit Button -->
			<div class="form-group">
			  <div class="col-md-8">
			    <button name="submit button" class="btn btn-success" id="button1id">Submit</button>
			  </div>
			</div>
		</fieldset>
	</form>
</div>
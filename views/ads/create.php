<!--Page for creating new advertisement listings-->
<div class="container" id="container">
	
	<div class="super-awesome-ad">
		Create Your Super Awesome Ad Here!
	</div>	

	<form class="form" method="POST" action="#">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 image">
			    <label class="btn btn-info btn-file">
				    UPLOAD IMAGE <input type="file" style="display: none;">
				</label>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3 price">
				<input name="name" type="text" placeholder="ITEM FOR SALE" class="form-control" id="name">
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3 price">
				<input name="price" type="text" placeholder="PRICE" class="form-control" id="price">
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3 price">
				<div class="btn-group">
				  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    CATEGORY <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="#">APPLIANCES</a></li>
				    <li><a href="#">AUTO</a></li>
				    <li><a href="#">BOOKS</a></li>
				    <li><a href="#">FREE</a></li>
				    <li><a href="#">MISC.</a></li>
				    <li><a href="#">OUTDOORS</a></li>
				    <li><a href="#">TOOLS</a></li>
				    <li><a href="#">TOYS & GAMES</a></li>
				  </ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3 description">
				<textarea rows="4" name="description" type="text" placeholder="DESCRIPTION" class="form-control" id="description"></textarea>
			</div>
		</div>

		<input type="submit" class="btn btn-danger btn-lg sign-up-btn">
	</form>
</div>

<script>
    $(document).ready(function() {
    	$(".dropdown-toggle").dropdown();
	});
</script>


<?php

require_once __DIR__ . '/../../bootstrap.php';

// var_dump($_SESSION);

    $id = Auth::id();
    $user = User::find($id);
    $userAds = Ads::getUserAds($user->id);
    $users = $user->attributes;
    // var_dump($user);
    // var_dump($userAds);

?>
<!--Page for user account home-->
<div class="container" id="container">
	<div class="row">
		<div class="col-md-12">
			<p class="account-welcome">WAAAAZ UP, <?= $users['username']; ?></p>
			<p class="account-email"><?= $users['email']; ?></p>
		</div>
	</div>	

	<div class="row">
		<div class="col-md-12">
            <a href="/ads/create" type="submit" class="btn btn-default navbut">CREATE AN AD</a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12 account-ad-title">
			My Craptastic Ads!
		</div>
	</div>

	<div class="row">
		<?php foreach($userAds as $key => $ads): ?>
            <div class="col-md-4 item thumbnail-projects">
                <a href="/ads/show?id=<?= $ads['id']?>"><img src="<?= $ads['img_url']; ?>"></a>
                <h3 class="item-title"><?= $ads['name']; ?></h3>
                <h4 class="item-description">$<?= $ads['price']; ?></h4>
                <p class="item-description"><?= $ads['description']; ?></p>
            </div>
        <?php endforeach; ?>

        <!-- <div class="col-md-4 items">
            <img src="http://placehold.it/250x150">
            <h3 class="item-title">Item for sale</h3>
            <h4 class="item-description">$5</h4>
            <p class="item-description">super cool crap here</p>
        </div>

        <div class="col-md-4 items">
            <img src="http://placehold.it/250x150">
            <h3 class="item-title">Item for sale</h3>
            <h4 class="item-description">$5</h4>
            <p class="item-description">super cool crap here</p>
        </div> -->
	</div>

	<!-- modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="dialog">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <p class="modal-title">Thanks For Signing Up!</p>
	                <h3 class="second-modal-title">You're the <img class="you-the-poop" src="../img/poop-emoji.png">!</h3>
	            </div>
	            <div class="modal-body">
	            	<h3 class="second-modal-title">We hope you enjoy selling your crap!</h3>
	            	<p>An email has been sent to "user email goes here" with instructions for verifying your account.</p>
	            </div>
	            <div class="modal-footer">
	                 <button type="button" data-dismiss="modal" class="btn btn-danger btn-lg" id="yes">OK</button>
	            </div>
	        </div>
	    </div>
	</div>
</div>

<?php if(isset($_SESSION['signedUp'])): ?>
	<?php unset($_SESSION['signedUp']) ?>
	<script>
	    $(window).load(function(){
	    		$('#dialog').modal('show');
		});
	</script>
<?php endif; ?>
    	

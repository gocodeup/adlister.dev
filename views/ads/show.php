<?php
	require_once __DIR__ . '/../../models/Ads.php';
	require_once __DIR__ . '/../../utils/Input.php';

	$ads = new Ads;
	$id = Input::get('id');
	$ad = Ads::find($id);
	$user_id = $ad->attributes['user_id'];
	$user = User::find($user_id);
?>
<!--Page for single advertisement -->
<div class="row">
	<h3><?= $ads['name']; ?></h3>
	<div class="col-md-4 col-md-offset-2 items single-item">
	    <img src="<?= $ads->attributes['img_url']; ?>">
	</div>
	<div class="col-md-5 item-info-right">
		<p>$<?= $ads['price']; ?></p>
		<p>CONTACT: 210.000.000</p>
		<p>POSTED BY: <?= $user->attributes['name']; ?></p>
	</div>
</div>
<div class="row">
	<div class="col-md-4 col-md-offset-2 item-info-bottom">
		<p><?= $ads['description']; ?></p>
	</div>
</div>
<div class="row edit-delete">
	<a href="/ads/edit" class="btn btn-danger sign-up-btn">EDIT</a>
	<a href="/signup" class="btn btn-danger sign-up-btn">DELETE</a>
</div>

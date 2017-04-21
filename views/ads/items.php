<div class="container">
	<div class="row" id="itemsPage">
		<?php foreach($adListings as $ad) : ?>
			<div class="col-sm-4" >
				<a href="/show?id=<?= $ad->id ?>" id="items">
					<div class="panel panel-primary" >
						<div class="panel-heading" id="itemsPanelColor"><?= $ad->title ?><div class="pull-right"><?= "$" . $ad->price ?></div></div>
						<div class="panel-body"><img src=<?= "$ad->image" ?> class="img-responsive" id="itemsImages" alt="Image"></div>
						<div class="panel-footer"><?= substr($ad->description, 0, 25) . "..." ?></div>
					</div>
				</a>
			</div>
		<?php endforeach; ?>

		<form method="GET" id="pageButtons">	
			<ul class="pagination">
				<li><a <?php if ($page <= 1): ?>style="color: grey;"<?php endif; ?> href="/items?page=<?=$page-1?>">Previous</a></li>
				<li><a <?php if ($page >= $lastPage): ?>style="color: grey;"<?php endif; ?> href="/items?page=<?=$page+1?>">Next</a></li>
			</ul>
		</form>


	</div>
</div>
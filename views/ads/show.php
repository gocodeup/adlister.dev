<!--Page for single advertisement -->
<?php 

require_once __DIR__ . '/create.php';

 ?>
 <table class="table table-bordered table-striped">

		<thead>
			<tr>
				<th>Title</th>
				<th>Price</th>
				<th>Description</th>
				<th>Image</th>
			</tr>
		</thead>

		<?php foreach($ads as $ad): ?>
			<tbody>
				<tr>
					<td ><?= $ad['title'] ?></td>
					<td><?= $ad['price'] ?></td>
					<td><?= $ad['description'] ?></td>
					<td><?= $ad['image'] ?></td>
				</tr>
			</tbody>
		<?php endforeach; ?>

	</table>
<?php 

require "portial/header.view.php";

?>

<h2>Article</h2>

<a href="/new-article" class="btn btn-info mb-2">Add new </a>

<table class="table">
	
	<tr>
		<thead>
			<td>#</td>
			<td>Title</td>
			<td>Description</td>
			<td>Status</td>
			<td>Option</td>
		</thead>
	</tr>

	<?php

	foreach ($articles as $key => $value) {


			if(odd_number($key+1) == true) {
				$row_odd = true;
			} else {
				$row_odd = false;

			}

			?>

			<tr class="<?= $row_odd ? 'bg-light' : '' ?>">
				<td><?= $key+1 ?></td>
				<td><img src="/image/<?= $value->thumbnail ? : 'thumbnail.png' ?>" width="50"></td>
				<td><?= ucfirst($value->title) ?></td>
				<td><?= $value->description ?></td>
				<td>
					<?php
						if($value->published == true) {
							?>
							<span class="text-success">Complete</span>
							<?php 
						}else if ($value->published == false) {
							?>

							<span class="text-primary">Incomplete</span>
							<?php 
						}else{
							?>

							<span class="text-danger">Incomplete</span>
							<?php 
						}
					?>
				</td>
				<td>
					<a class="btn btn-info">Edit</a>
					<a class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php

	}
	?>

</table>


<?php 

require "portial/footer.view.php";

?>

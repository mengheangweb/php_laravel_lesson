<?php 

require "portial/header.view.php";

?>

<h2 id="title" class="article-title">Article</h2>

<p id="subtitle">Sub Title of The Article</p>

<a href="/new-article" class="btn btn-info mb-2">Add new </a>

<table class="table">
	
	<tr>
		<thead>
			<td id="now_number">#</td>
			<td id="now_number">Thubnail</td>
			<td id="now_number">Title</td>
			<td class="header">Description</td>
			<td class="header">Status</td>
			<td class="header">Option</td>
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
				<td><img src="/public/image/<?= $value->thumbnail ? : 'thumbnail.png' ?>" width="50"></td>
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
					<a href="/edit-article?id=<?= $value->id ?>" class="btn btn-info">Edit</a>
					<a class="btn btn-danger" ref="<?= $value->id ?>">Delete</a>
				</td>
			</tr>
			<?php

	}
	?>

</table>

<script>


$(document).ready(function() {

	$('.btn.btn-danger').click(function() {
		if(confirm('Are you sure?')){

			var delete_item = $(this);
			//
			var id = $(this).attr('ref');

			$.ajax({
					url: "/delete-article?id=" + id,
					type: "GET",
					success: function (result) {

						var message = JSON.parse(result);

						if(message.message == "success") 
						{
							delete_item.parent('td').parent('tr').remove();
							$(this).closest('td')
						}else{
							alert('something went wrong');
						}
					},
					error: function() {
						alert('something went wrong');
					}
				});

			//
		}
	});

	// $('#title').hide();

	$('#now_number').addClass("bg-danger")
	$('.header').addClass("bg-info");

	$('#title').click(function () {

		$(this).prepend(" News");
	});


});


</script>

<?php 

require "portial/footer.view.php";

?>



<?php 

require __DIR__ . "/../portial/header.view.php";

?>

<h2 id="title" class="article-title">Article</h2>

<div class="row">

<?php

	foreach ($articles as $key => $value) {

		?>
		<div class="col-4">
			<div class="card" style="width: 18rem;">
			  <img src="/public/image/<?= $value->thumbnail ? : 'thumbnail.png' ?>" width="100%">
			  <div class="card-body">
			    <h5 class="card-title"><?= ucfirst($value->title) ?></h5>
			    <p class="card-text"><?= $value->description ?> </p>
			    <a href="#" class="btn btn-primary">Read</a>
			  </div>
			</div>
		</div>

<?php 

} 

?>

</div>

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
							delete_item.parent('td').remove();parent('tr').
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

require __DIR__ .  "/../portial/footer.view.php";

?>



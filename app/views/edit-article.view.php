<?php 

require "portial/header.view.php";

?>

	<h1 class="article-title">Edit article</h1>

	<form id="eidt-article" action="/update-article" method="post">
	  <div class="form-group">
	    <label>Title</label>
	    <input id="title" value="<?= $article->title ?>" type="text" class="form-control" name="title" placeholder="Enter email">
	  </div>
	  <div class="form-group">
	    <label>Description</label>
	    <textarea id="description" class="form-control" name="description" ><?= $article->description ?></textarea>
	  </div>
	  <button type="button" id="submit" class="btn btn-primary">Submit</button>
	  <a href="/" class="btn btn-info">Cancel</a>
	</form>


	<script>
		$(document).ready(function() {

			$('#submit').click(function() {

				var title_val = $('#title').val();
				var description_val = $('#description').val();

				$.ajax({
					url: "/update-article?id=" + <?php echo $article->id ?>,
					type: "POST",
					data: {
						title: title_val,
						description: description_val,
					},
					success: function (result) {

						var message = JSON.parse(result);

						if(message.message == "updated_success") 
						{
							alert("Successfull Updated");
							window.location.href = "/";
						}else{
							alert('something went wrong');
						}
					},
					error: function() {
						alert('something went wrong');
					}
				});
			});

		});

	</script>

<?php 

require "portial/footer.view.php";

?>
<?php 

require "portial/header.view.php";

?>

	<h1>Add new article</h1>

	<form action="/add-article" method="post">
	  <div class="form-group">
	    <label>Title</label>
	    <input type="text" class="form-control" name="title" placeholder="Enter email">
	  </div>
	  <div class="form-group">
	    <label>Description</label>
	    <textarea class="form-control" name="description" ></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

<?php 

require "portial/footer.view.php";

?>
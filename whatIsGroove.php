<style type="text/css">
	#whatMenu{
		text-decoration: none;
		background-color: #eeeeee;
	}
</style>
<div class="content">
	<div class="row" align="center">
		<iframe width="560" height="315" src="//www.youtube.com/embed/MVt32qoyhi0" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="row" align="center">
	<a class="col-sm-12"align="center">Upload your episode</a>
	</div>
	<div>
		<form action="whatIsGroove.php" method="post" enctype="multipart/form-data">
			<label for="file">Filename:</label>
			<input type="file" name="file" id="file" size="20"><br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
	<?php
	if(isset($_POST['submit'])){
		if ($_FILES['file']['name'] != null) {
			if ($_FILES['file']['type'] == "image/jpeg"
				|| 	$_FILES['file']['type'] == "image/png"
				|| 	$_FILES['file']['type'] == "image/gif") {
				if ($_FILES['file']['size'] > 2000000) {
					echo "File too large !";
				}
				else{
					$path = "data/";
					$tmp_name = $_FILES['file']['tmp_name'];
					$name = $_FILES['file']['name'];
					$type = $_FILES['file']['type'];
					$size = $_FILES['file']['size'];
					move_uploaded_file($tmp_name, $path.$name);
					echo "File uploaded! <br />";
				}
			}
			else{
				echo "Error";
			}
		}
	}
	?>
	<div class="row" align="center">
		<iframe width="50%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/140181705&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
	</div>

</div>
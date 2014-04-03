<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="src/style.css">
	<script src="libs/js/jquery.js"></script>
</head>
<style type="text/css">
	#whatMenu{
		text-decoration: none;
		background-color: #eeeeee;
	}
</style>
<body>
	<div class="content">
		<?php include 'header.php';?>
		<div class="row" align="center">
			<div id="ytplayer" class="col-md-12"></div>
		</div>
		<div class="row" align="center">
			<a class="col-md-12"align="center">Upload your episode</a>
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
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/140181705&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
		</div>
		<script>
			var tag = document.createElement('script');
			tag.src = "https://www.youtube.com/player_api";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
			var player;
			function onYouTubePlayerAPIReady() {
				player = new YT.Player('ytplayer', {
					height: '390',
					width: '640',
					videoId: '4YMD6xELI_k'
				});
			}
		</script>
	</div>
</body>
</html>
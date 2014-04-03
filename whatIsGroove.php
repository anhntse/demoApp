<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="src/style.css">
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
		<?php
        $post_url = "https://graph-video.facebook.com/" . $page_id . "/videos?"
        . "title=" . $video_title. "&description=" . $video_desc
        . "&access_token=". $access_token;

		// Create a simple form
        echo '<form enctype="multipart/form-data" action=" '.$post_url.' "method="POST">';
        echo 'Please choose a file:';
        echo '<input name="file" type="file" value="Chọn file">';
        echo '<input type="submit" value="Upload" />';
        echo '</form>';
        ?>
		<div class="row" align="center">
			<iframe width="50%" height="200" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/142308793&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
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
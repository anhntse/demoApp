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
		<?php 
		$app_id = "269918776508696";
		$app_secret = "99a9bc8d2d42d04cb4d578665430f0c4"; 
		$my_url = "YOUR_POST_LOGIN_URL"; 
		$video_title = "YOUR_VIDEO_TITLE";
		$video_desc = "YOUR_VIDEO_DESCRIPTION";

		$code = $_REQUEST["code"];

		if(empty($code)) {
			$dialog_url = "http://www.facebook.com/dialog/oauth?client_id=" 
			. $app_id . "&redirect_uri=" . urlencode($my_url) 
			. "&scope=publish_stream";
			echo("<script>top.location.href='" . $dialog_url . "'</script>");
		}

		$token_url = "https://graph.facebook.com/oauth/access_token?client_id="
		. $app_id . "&redirect_uri=" . urlencode($my_url) 
		. "&client_secret=" . $app_secret 
		. "&code=" . $code;
		$access_token = file_get_contents($token_url);
		
		$post_url = "https://graph-video.facebook.com/me/videos?"
		. "title=" . $video_title. "&description=" . $video_desc 
		. "&". $access_token;

		echo '<form enctype="multipart/form-data" action=" '.$post_url.' "  
		method="POST">';
		echo 'Please choose a file:';
		echo '<input name="file" type="file">';
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
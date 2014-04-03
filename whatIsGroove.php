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
			<form id="fileupload" action="https://graph-video.facebook.com/me/videos" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="access_token" value="user_access_token">
				<input type="text" name="title">
				<input type="text" name="description">
				<input type="file" name="file"> <!-- name must be file -->
			</form>

		</div>
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
		<script type="text/javascript">
			$('#fileupload').fileupload({
				dataType: 'json',
        		forceIframeTransport: true, //force use iframe or will no work
        		autoUpload : true,
		        //facebook book response will be send as param
		        //you can use this page to save video (Graph Api) object on database
		        redirect : 'http://pathToYourServer/videos?video=%s' 
    		});
		</script>
	</div>
</body>
</html>
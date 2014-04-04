<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="src/style.css">
</head>
<style type="text/css">
	#singaporeMenu{
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
		<script>
			var tag = document.createElement('script');
			tag.src = "https://www.youtube.com/player_api";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
			var player;
			function onYouTubePlayerAPIReady() {
				player = new YT.Player('ytplayer', {
					height: '500',
					width: '100%',
					videoId: '4YMD6xELI_k'
				});
			}
		</script>
	</div>
</body>
</html>
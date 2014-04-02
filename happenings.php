<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="src/style.css">
</head>
<style type="text/css">
	#happenMenu{
		text-decoration: none;
		background-color: #eeeee
	}
</style>
<body>
	<div class="content">
		<?php include 'header.php';?>
		<div id="ytplayer" align="center"></div>
		<>

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
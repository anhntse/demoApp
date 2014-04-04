<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="libs/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="src/style.css">
</head>
<style type="text/css">
	#happenMenu{
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
			<a class="col-md-12" href="whatIsGroove.php" align="center">Create your Episode</a>
		</div>
		<?php
		//get hashtag
		$response = $facebook->api(
    		"/search?q=%23fpt"
		);
		?>
		<div class="row">
			<div class="col-sx-4"><?php echo $response['data'][0]['message'];?></div>
			<div class="col-sx-4"><?php echo $response['data'][1]['message'];?></div>
			<div class="col-sx-4"><?php echo $response['data'][2]['message'];?></div>
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
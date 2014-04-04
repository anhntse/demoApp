<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="libs/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="src/style.css">
	<script src="libs/js/jquery.js"></script>
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
		<div id="click" class="row hashtag">
			<div class="tagList"><?php echo $response['data'][0]['message'];?></div>
<!-- 			<div class="tagList"><?php echo $response['data'][1]['message'];?></div>
			<div class="tagList"><?php echo $response['data'][2]['message'];?></div>
			<div class="tagList"><?php echo $response['data'][3]['message'];?></div>
			<div class="tagList"><?php echo $response['data'][4]['message'];?></div>
			<div class="tagList"><?php echo $response['data'][5]['message'];?></div>
			<div class="tagList"><?php echo $response['data'][6]['message'];?></div> -->
		</div>
		<div style="background-color:green; width:50px; position:absolute;">abc</div>
		<script>
		var pos = 0;
		$(document).ready(function(){
			$("#click").click(function(){
 			 	$("#click").animate({right:pos+50});
 			 	pos = pos + 50;
			}); 
		});
		</script>
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
<script>
	$("#whatMenu").attr("src","img/menu/menu2.png");
	$("#galleryMenu").attr("src","img/menu/menu3.png");
	$("#singaporeMenu").attr("src","img/menu/menu4.png");

	$("#happenMenu").attr("src","img/menu/menu1_active.png");
</script>
<div class="content">
	<div class="row ytplayer" align="center">
		<iframe width="610" height="360" src="//www.youtube.com/embed/MVt32qoyhi0" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="row" align="center" id="createYourEpisode">
		<img style="cursor:pointer" src="img/happenings/Create.png">
	</div>

	<!-- National New -->
	<div class="row nationalNew">
		<h3>NATIONAL NEW</h3>
	</div>

	<!-- Hashtag -->
	<?php
	//get hashtag
	require_once ('libs/fb-php-sdk/facebook.php');

		$app_id = 269918776508696;
		$app_secret = '99a9bc8d2d42d04cb4d578665430f0c4';
		$config = array('appId' => $app_id, 'secret' => $app_secret);
		$facebook = new Facebook($config);
		$response = $facebook->api(
			"/search?q=%23vietnam"
		);
	?>
		<div class="slide">
			<div id="click" class="row hashtag">
				<div class="tagList"><?php echo $response['data'][0]['message'];?></div>
				<div class="tagList"><?php echo $response['data'][1]['message'];?></div>
				<div class="tagList"><?php echo $response['data'][2]['message'];?></div>
				<div class="tagList"><?php echo $response['data'][3]['message'];?></div>
				<div class="tagList"><?php echo $response['data'][4]['message'];?></div>
				<div class="tagList"><?php echo $response['data'][5]['message'];?></div>
				<div class="tagList"><?php echo $response['data'][6]['message'];?></div> 
			</div>
			<div class="button">
				<div class="col-sm-6" align="left"><img class="backButton" src="img/happenings/LeftBtn.png"></div>
				<div class="col-sm-6" align="right"><img class="nextButton" src="img/happenings/RightBtn.png"></div>
			</div>
		</div>
		<script>
			var pos = 0;
			$(document).ready(function(){
				$("#createYourEpisode").on('click', function(evt){
					evt.preventDefault();
					$("#section-content").load("whatIsGroove.php");
				});
				$(".backButton").mousedown(function(){
					$(".backButton").attr("src", "img/happenings/LeftBtnD.png");
				});
				$(".backButton").mouseup(function(){
					$(".backButton").attr("src", "img/happenings/LeftBtn.png");
				});
				$(".backButton").click(function(){
					$(".hashtag").animate({left:pos + 50});
					pos = pos + 50;
				});
				$(".nextButton").mousedown(function(){
					$(".nextButton").attr("src", "img/happenings/RightBtnD.png");
				});
				$(".nextButton").mouseup(function(){
					$(".nextButton").attr("src", "img/happenings/RightBtn.png");
				});
				$(".nextButton").click(function(){
					$(".hashtag").animate({left:pos - 50});
					pos = pos - 50;
				});  
			});
		</script>
	</div>

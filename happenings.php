<style type="text/css">
	#happenMenu{
		text-decoration: none;
		background-color: #eeeeee;
	}
</style>

<div class="content">
	<div class="row" align="center">
		<iframe width="560" height="315" src="//www.youtube.com/embed/MVt32qoyhi0" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="row" align="center">
		<a class="col-sm-12" href="whatIsGroove.php" align="center">Create your Episode</a>
	</div>
	<?php
	//get hashtag
	require_once ('libs/fb-php-sdk/facebook.php');

	$app_id = 269918776508696;
	$app_secret = '99a9bc8d2d42d04cb4d578665430f0c4';
	$config = array('appId' => $app_id, 'secret' => $app_secret);
	$facebook = new Facebook($config);
	$response = $facebook->api(
		"/search?q=%23fpt"
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
				<div class="col-sm-6" align="left"><img class="backButton" src="img/back.png"></div>
				<div class="col-sm-6" align="right"><img class="nextButton" src="img/next.png"></div>
			</div>
		</div>
		<script>
			var pos = 0;
			$(document).ready(function(){
				$(".backButton").click(function(){
					$(".hashtag").animate({left:pos + 50});
					pos = pos + 50;
				});
				$(".nextButton").click(function(){
					$(".hashtag").animate({left:pos - 50});
					pos = pos - 50;
				});  
			});
		</script>
	</div>

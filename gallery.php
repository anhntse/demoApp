<script>
	$("#happenMenu").attr("src","img/menu/menu1.png");
	$("#whatMenu").attr("src","img/menu/menu2.png");
	$("#singaporeMenu").attr("src","img/menu/menu4.png");

	$("#galleryMenu").attr("src","img/menu/menu3_active.png");
</script>
<div class="content">
	<?php
	require_once ('libs/fb-php-sdk/facebook.php');

	$app_id = 269918776508696;
	$app_secret = '99a9bc8d2d42d04cb4d578665430f0c4';
	$config = array('appId' => $app_id, 'secret' => $app_secret);
	$facebook = new Facebook($config);
	$response = $facebook->api(
		"/search?q=%23vietnam"
	);
	?>
		<div class="gallery">
			<h3>Gallery</h3>
			<div class="row">
				<div class="col-sm-4">
					<div class="thumbnail photo">
						<img src="img/demo1.jpg" alt="...">
						<div class="caption">
							<p>Like</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnail photo">
						<img src="img/demo2.jpg" alt="...">
						<div class="caption">
							<p>Like</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnail photo">
						<img src="img/demo3.jpg" alt="...">
						<div class="caption">
							<p>Like</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

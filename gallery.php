<style type="text/css">
	#galleryMenu{
		text-decoration: none;
		background-color: #eeeeee;
	}
</style>

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
			<h2>Gallery</h2>
			<div class="row">
				<div class="col-sm-4">
					<div class="thumbnail">
						<img data-src="img/demo1.jpg" alt="...">
						<div class="caption">
							<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnail">
						<img data-src="img/demo2.jpg" alt="...">
						<div class="caption">
							<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnail">
						<img data-src="img/demo3.jpg" alt="...">
						<div class="caption">
							<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

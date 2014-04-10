<script>
	$("#happenMenu").attr("src","img/menu/menu1.png");
	$("#galleryMenu").attr("src","img/menu/menu3.png");
	$("#singaporeMenu").attr("src","img/menu/menu4.png");
	
	$("#whatMenu").attr("src","img/menu/menu2_active.png");
</script>
<div class="content">
	<div class="row ytplayer" align="center">
		<iframe width="610" height="360" src="//www.youtube.com/embed/MVt32qoyhi0" frameborder="0" allowfullscreen></iframe>
	</div>
	<!-- Upload -->
	<div class="row" align="center">
		<img id="upload" src="img/upload/uploadBtn.png" style="cursor:pointer">
		<!-- <form action="whatIsGroove.php" method="post" enctype="multipart/form-data">
			<input type="file" name="file" id="file" size="20"><br>
			<input type="submit" name="submit" value="Submit">
		</form> -->
	</div>
	<?php
	if(isset($_POST['submit'])){
		if ($_FILES['file']['name'] != null) {
			if ($_FILES['file']['type'] == "image/jpeg"
				|| 	$_FILES['file']['type'] == "image/png"
				|| 	$_FILES['file']['type'] == "image/gif") {
				if ($_FILES['file']['size'] > 2000000) {
					echo "File too large !";
				}
				else{
					$path = "data/";
					$tmp_name = $_FILES['file']['tmp_name'];
					$name = $_FILES['file']['name'];
					$type = $_FILES['file']['type'];
					$size = $_FILES['file']['size'];
					move_uploaded_file($tmp_name, $path.$name);
					echo "File uploaded! <br />";
				}
			}
			else{
				echo "Error";
			}
		}
	}
	?>
	<div class="music" align="center">
		<div class="musicPlayer" align="left">
			<div class="playMusic">
				<iframe width="440" height="130" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/140181705&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
			</div>
			<div class="downloadMusic">
				<img src="img/upload/clickDownload.png">
			</div>
			<div class="downloadBtn">
				<a href="https://api.soundcloud.com/tracks/140181705/download?client_id=0f8fdbbaa21a9bd18210986a7dc2d72c" target="_blank"><img id="downloadImg" src="img/upload/download.png"></a>
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function(){
		$("#upload").hover(function(){
			$("#upload").attr("src", "img/upload/uploadHover.png");
		},function(){
			$("#upload").attr("src", "img/upload/uploadBtn.png");
		});
		$(".downloadBtn").hover(function(){
			$("#downloadImg").attr("src", "img/upload/downloadHover.png");
		},function(){
			$("#downloadImg").attr("src", "img/upload/download.png");
		});
	});
	</script>
</div>
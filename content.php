<div class="main">
	<div style="position: relative">
		<div class="header">
			<ul class="nav nav-pills" align="center">
				<li class="menu" id="happenMenu"><a href="happenings.php"><img src="menu1.png"></a></li>
				<li class="menu" id="whatMenu"><a href="whatIsGroove.php"><img src="menu2.png"></a></li>
				<li><img src="img/Logo.png"></li>
				<li class="menu" id="galleryMenu"><a href="gallery.php"><img src="menu3.png"></a></li>
				<li class="menu" id="singaporeMenu"><a href="singaporeDance.php"><img src="menu4.png"></a></li>
			</ul>
		</div>
		<!-- End Header -->
		<div id="section-content"></div>
	</div>
	<script>
		$(function(){
			$("#happenMenu").on('click', function(evt){
				evt.preventDefault();
				if($(this).hasClass("selected")){
					return;
				}
				$("#section-content").load("happenings.php");
			});
			$("#whatMenu").on('click', function(evt){
				evt.preventDefault();
				if($(this).hasClass("selected")){
					return;
				}
				$("#section-content").load("whatIsGroove.php");
			});
			$("#galleryMenu").on('click', function(evt){
				evt.preventDefault();
				if($(this).hasClass("selected")){
					return;
				}
				$("#section-content").load("gallery.php");
			});
			$("#singaporeMenu").on('click', function(evt){
				evt.preventDefault();
				if($(this).hasClass("selected")){
					return;
				}
				$("#section-content").load("singaporeDance.php");
			});
			$(".menu").on('click', function(evt){
				evt.preventDefault();
				$(".menu").removeClass("selected");
				$(this).addClass("selected");
			});
		});
	</script>
	<!-- Footer -->
	<div class="footer">
		<img src="img/sponsors.png">
	</div>
	<!-- End Footer -->
</div>
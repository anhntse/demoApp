
	<div>
		<div class="header">
				<div class="menu menuClick"><a href="happenings.php"><img id="happenMenu" src="img/menu/menu1.png"></a></div>
				<div class="menu menuClick"><a href="whatIsGroove.php"><img id="whatMenu" src="img/menu/menu2.png"></a></div>
				<div class="menu"><img class="logo" src="img/Logo.png"></div>
				<div class="menu menuClick"><a href="gallery.php"><img id="galleryMenu" src="img/menu/menu3.png"></a></div>
				<div class="menu menuClick"><a href="singaporeDance.php"><img id="singaporeMenu" src="img/menu/menu4.png"></a></div>
		</div>
		<!-- End Header -->
		<div id="section-content"></div>
	</div>
	<script>
		$(function(){
			$("#section-content").load("happenings.php");
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

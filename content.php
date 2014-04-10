
	<div>
		<div class="header">
				<div class="logo"><img src="img/Logo.png"></div>
				<div class="menu menuClick"><img id="happenMenu" src="img/menu/menu1.png"></div>
				<div class="menu menuClick"><img id="whatMenu" src="img/menu/menu2.png"></div>
				<div class="menu"><img src="img/Logo_temp.png"></div>
				<div class="menu menuClick"><img id="galleryMenu" src="img/menu/menu3.png"></div>
				<div class="menu menuClick"><img id="singaporeMenu" src="img/menu/menu4.png"></div>
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

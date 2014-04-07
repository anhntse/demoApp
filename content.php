<div style="position: relative">
	<div>
		<ul class="nav nav-pills" align="center">
			<li class="menu" id="happenMenu"><a href="happenings.php">Happenings</a></li>
			<li class="menu" id="whatMenu"><a href="whatIsGroove.php">What is Groove Nation?</a></li>
			<li><h2>GROVE NATION</h2></li>
			<li class="menu" id="galleryMenu"><a href="gallery.php">Gallery</a></li>
			<li class="menu" id="singaporeMenu"><a href="singaporeDance.php">Singapore Dance Delight Vol5 </a></li>
		</ul>
	</div>
	<!-- End Header -->
	<div id="section-content"></div>
</div>
<script>
	$(function(){
		// $("#happenMenu").on('click', function(){
			// if($(this).hasClass("selected")){
				// return;
			// }
			$("#section-content").load("happenings.php");
		// });
		// $("#whatMenu").on('click', function(){
		// 	if($(this).hasClass("selected")){
		// 		return;
		// 	}
		// 	$("#section-content").load("whatIsGroove.php");
		// });
		// $("#galleryMenu").on('click', function(){
		// 	if($(this).hasClass("selected")){
		// 		return;
		// 	}
		// 	$("#section-content").load("gallery.php");
		// });
		// $("#singaporeMenu").on('click', function(){
		// 	if($(this).hasClass("selected")){
		// 		return;
		// 	}
		// 	$("#section-content").load("singaporeDance.php");
		// });
		// $(".menu").on('click', function(){
		// 	$(".menu").removeClass("selected");
  //           $(this).addClass("selected");
		// });
	});
</script>
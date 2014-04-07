<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="libs/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="src/style.css">
	<script src="libs/js/jquery.js"></script>
</head>
<body>
<?php include 'header.php';?>
<div id="section-content"></div>
<script>
	$(function(){
		$("#happenMenu").on('click', function(){
			if($(this).hasClass("selected")){
				return;
			}
			else{
				$("#section-content").load("happenings.php");
			}
		});
		$("#whatMenu").on('click', function(){
			if($(this).hasClass("selected")){
				return;
			}
			else{
				$("#section-content").load("whatIsGroove.php");
			}
		});
		$("#galleryMenu").on('click', function(){
			if($(this).hasClass("selected")){
				return;
			}
			else{
				$("#section-content").load("gallery.php");
			}
		});
		$("#singaporeMenu").on('click', function(){
			if($(this).hasClass("selected")){
				return;
			}
			else{
				$("#section-content").load("singaporeDance.php");
			}
		});
		$(".menu").on('click', function(){
			$(".menu").removeClass("selected");
            $(this).addClass("selected");
		});
	});
</script>
</body>
</html>
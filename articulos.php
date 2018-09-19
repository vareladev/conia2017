<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VII Congreso de ingenieria y arquitectura</title>
   
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/box.css">
    <!-- =======================================================
        Theme Name: Mentor
        Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
	<script>
		function selectIns(nameSelect)
		{
			console.log(nameSelect);
			if(nameSelect){
				admOptionValue = document.getElementById("otraInstitucion").value;
				if(admOptionValue == nameSelect.value){
					document.getElementById("divInsx").style.display = "block";
				}
				else{
					document.getElementById("divInsx").style.display = "none";
				}
			}
			else{
				document.getElementById("divInsx").style.display = "none";
			}
		}
		
		function selectArea(nameSelect)
		{
			console.log(nameSelect);
			if(nameSelect){
				admOptionValue = document.getElementById("otraArea").value;
				if(admOptionValue == nameSelect.value){
					document.getElementById("divOtraArea").style.display = "block";
				}
				else{
					document.getElementById("divOtraArea").style.display = "none";
				}
			}
			else{
				document.getElementById("divOtraArea").style.display = "none";
			}
		}
	
	</script>
  </head>
  <body>
	<?php
		include 'menu.php';
	?>


    <!--Contact-->
    <section id ="registro" class="section-padding">
		<div class="container">
			<div class="row">
			
				<div class="banner-text text-center" >
				  <div class="text-border" style="margin-top: 17%; margin-bottom:10%;">
					<h2 class="text-dec" style="color:black;">Página en construcción</h2>
				  </div>
				  <!--<a href="#feature" class="mouse-hover"><div class="mouse"></div></a> -->
				</div>

			</div>
		</div>
    </section>
    <!--/ Contact-->
    <!--Footer-->
    <?php
      include 'footer.php';
    ?>
    <!--/ Footer-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>
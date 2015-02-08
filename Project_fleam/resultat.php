<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('head.php');?>
    </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">
		
          <?php include('header.php');?>

		  </br></br>
			<div class="jumbotron" style="background-color:#696969;" style="overflow:auto;" style="overflow:scroll;">
				<div class="container">
					<?php 	include('test.php');
						include('Carrousel.php');
						select_img();
						if (isset($_POST['title']))
							rech($_POST['title']);
						else
							rech(null);?>
				</div>
			</div>
		</div>
		<center>
			<div class="mastfoot">
				<div class="inner">
					<p><div class="small"><span class="custom-color">F</span>leam&reg;</div>Design by <a href="http://fr.linkedin.com/pub/david-sargento/b0/a60/880">David Sargento</a>, <a href="http://fr.linkedin.com/pub/johnny-yoeurng/a9/748/554/fr">Johnny Yoeurng</a>, <a href="http://fr.linkedin.com/pub/kevin-faby/b1/85/a8b">Kevin Faby</a> and <a href="http://fr.linkedin.com/pub/yvane-jalet/b1/48/168/fr">Yvane Jalet</a></p>
				</div>
			</div>
		</center>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

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
			
			<div class="">
                        <h1 class="cover-heading"><div class="custom-font">Fleam</div>Plate-forme de VODs en ligne</h1>
                        <p class="lead"></p>
            </div>

			<div id="slideshow" class="carousel slide" data-ride="carousel">

			  <ol class="carousel-indicators">
				<li data-target="#slideshow" data-slide-to="0" class="active"></li>
				<li data-target="#slideshow" data-slide-to="1"></li>
				<li data-target="#slideshow" data-slide-to="2"></li>
				<li data-target="#slideshow" data-slide-to="3"></li>
				<li data-target="#slideshow" data-slide-to="4"></li>
			  </ol>

				<?php include('Carrousel.php');
						$tab = select_img();?>

				<div class="carousel-inner" role="listbox">
					<?php gen_car($tab)?>
				</div>

				<a class="left carousel-control" href="#slideshow" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#slideshow" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
			<div class="mastfoot">
				<div class="inner">
					<p><div class="custom-font">Fleam&reg;</div>Design by <a href="http://fr.linkedin.com/pub/david-sargento/b0/a60/880">David Sargento</a>, <a href="http://fr.linkedin.com/pub/johnny-yoeurng/a9/748/554/fr">Johnny Yoeurng</a>, <a href="http://fr.linkedin.com/pub/kevin-faby/b1/85/a8b">Kevin Faby</a> and <a href="http://fr.linkedin.com/pub/yvane-jalet/b1/48/168/fr">Yvane Jalet</a></p>
				</div>
			</div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

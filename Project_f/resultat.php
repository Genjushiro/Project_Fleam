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

		 
		  </br></br></br></br></br></br>
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

		<?php include('footer.php');?>
	    
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

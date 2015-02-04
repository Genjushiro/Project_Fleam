
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

			<div>
			<?php 	include('test.php');
					include('Carrousel.php');
					select_img();
					if (isset($_POST['title']))
						rech($_POST['title']);
					else
						rech(null);?>
		</div>
			 
          <div class="mastfoot">
            <div class="inner">
              <p>template for <a href="#">test</a>, by <a href="#">Acid3mon , Genjushiro</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

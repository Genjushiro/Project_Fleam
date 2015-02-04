
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

	    <footer>
            <button id="Up">&uarr;<a href="#" style="float:right !important">HAUT DE PAGE</a></button>
            <div id="copyrights">
                Copyright &#169; 2015 Team DYJK <img src="img/code_camp.png" alt="" width="59" height="38"/>
            </div>
			<div id="partenaires">
			
				<p>template for <a href="#">test</a>, by <a href="#">Acid3mon , Genjushiro</a>.</p>
				<div class="mastfoot">
					<div class="inner">
					</div>
				</div>

			</div>
			</div>
            </div>
            <div id="page_infos">
                <a href="F_About_Us.php" class="">&#192; propos de nous</a> |
                <a href="F_Conditions.php" class="">Termes et conditions</a> |
                <a href="F_Confidentiality.php" class="">Politique de confidentialit&#233;</a> |
                <a href="F_Contact_Us.php" class="">Contactez-nous</a>
                <a href="https://twitter.com/TiVineTechno"><img src="img1/Twitter_logo-10.jpg" alt="" width="35" height="25"/></a>
                <a href="https://www.linkedin.com/company/tivine-technologies"><img src="img1/linkedin_logo.png" alt="" width="35" height="25"/></a>
                <a href="mailto:contact@tivine.com"><img src="img1/mail.png" alt="" width="30" height="25"/></a>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

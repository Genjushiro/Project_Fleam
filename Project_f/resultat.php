
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
			<div class="jumbotron" style="background-color:#696969;">
				<form action="resultat.php">
					<select name="select_opt" style="color:black;">
						<option value="1">Titre</option>
						<option value="2">Producteur</option>
						<option value="3">Date</option>
					</select>
					<input type="submit" value="Trier"></button>
				</form>
					<?php 	include('test.php');
						include('Carrousel.php');
						select_img();
						if (isset($_POST['search']))
							rech($_POST['search']);
						else
							rech(null);?>
			</div>
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

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
			<form method="post" action="add_user.php">
				<input type="text" name="firstname" placeholder="Prenom" required></input>
				<input type="text" name="lastname" placeholder="Nom" required></input>
				<input type="text" name="email" placeholder="Email" required></input>
				<input type="password" name="pass" placeholder="Mot de passe" required></input>
				<input type="password" name="pass2" placeholder="Mot de passe" required></input>
				<button value="Inscription"></button>
			</form>			
			<?php include('footer.php');?>
	    
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="../../dist/js/bootstrap.min.js"></script>
		<script src="../../assets/js/docs.min.js"></script>
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once("head.php"); echo "<br/>";?>
		<?php include_once("header.php");?>
	</head>
	<body>
	<?php
	echo "<br/><br/>";
	include_once("test.php");?>
	
		<form method="post" action="resultat.php" id="search-bar-container">
			<input id="search-bar" type="text" name="title" placeholder=" Search . . ." />
			<button id="send" value="Send">Send</button>
		</form>
	<?php
	echo "<br/>";
	function aff_film($val){
		$obj = open_file();
		$f = 0;
		foreach($obj as $elem)
		{
			if (($val == null || $val == $elem->{'Title'}) && $f == 0)
			{
				echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
				echo $elem->{'Title'};
				echo "<br/><br/><br/><br/><br/>";
				echo $elem->{'OriginalTitle'};
				echo "<br/>";
				echo $elem->{'PublicationDate'};
				echo "<br/>";
				echo "duree:" . $elem->{'Duration'} . "min";
				echo "<br/>";
				echo $elem->{'Director'};
				echo "<br/><br/>";
				echo $elem->{'Plot'};
				echo "<br/><br/>";
				echo $elem->{'Cast'};
				echo "<br/><br/>";
				echo $elem->{'ParentalControl'};
				echo "<br/>";
				$f = 1;
			}
			if ($val == null || $val == $elem->{'Title'})
			{
				echo $elem->{'VODPlatform'};
				echo "<br/>";
				echo $elem->{'URL'};
				echo "<br/>";
			}
		}
	}
	if (isset($_GET['title']))
	aff_film($_GET['title']);
?>
	</body>
</html>

  
 
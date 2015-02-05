<!DOCTYPE html>
<html>
	<head>
		<?php include_once("head.php");?>
	</head>
	<body>
	<?php
	include_once("header.php");
	include_once("test.php");?>
		<form method="post" action="resultat.php" id="search-bar-container">
			<input id="search-bar" type="text" name="title" placeholder=" Search . . ." />
			<button id="send" value="Send">Send</button>
		</form>
	<?php
	function aff_film($val){
		$obj = open_file();
		$f = 0;
		foreach($obj as $elem)
		{
			if ($val == null || $val == $elem->{'Title'} || $val == $elem->{'Director'})
				{
					$actor = (array) $elem->Cast;
					$key = (array) $elem->Keywords;
					$cat = (array) $elem->Categories; 
					$ok = 1;
				}
			if (($val == null || $val == $elem->{'Title'}) && $f == 0)
			{
				echo "titre: ",$elem->{'Title'},"<br/>";
				echo "titre originale: ",$elem->{'OriginalTitle'},"<br/>";
				echo "realisateur: ",$elem->{'Director'},"<br/>";
				echo "date de sortie:",$elem->{'PublicationDate'},"<br/>";
				echo "duree: ",$elem->{'Duration'},"<br/>";
				echo "Langage: ",$elem->{'Language'},"<br/>";
				echo "Qualite d'image: ",$elem->{'ImageQuality'},"<br/><br/>";
				echo "synopsis: ",$elem->{'Plot'},"<br/><br/>";
				echo "audience: ",$elem->{'ParentalControl'},"<br/><br/>";
				echo "casting:","<br/>";
				for ($i = 0; isset($actor['Actor'][$i]); $i++)
					echo $actor['Actor'][$i] , "<br/>";
				echo "<br/>" , "mot cle:" , "<br/>";
				for ($i = 0; isset($key['Keyword'][$i]); $i++)
					echo $key['Keyword'][$i] , "<br/>";
				echo "Categories: ";
				for ($i = 0; isset($cat['Category'][$i]); $i++)
					echo $cat['Category'][$i] , "<br/>";
				$f = 1;
			}
			if ($val == null || $val == $elem->{'Title'})
			{
				echo "<br/>","disponible sur:","<br/>",'<a href="' . $elem->{'URL'} . '">' . $elem->{'VODPlatform'} . '</a>',"<br/>";
			}
		}
	}
	if (isset($_GET['title']))
	aff_film($_GET['title']);
?>
	</body>
</html>

  
 
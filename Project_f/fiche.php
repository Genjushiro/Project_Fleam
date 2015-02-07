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
	include_once("allocine-api-master\PHP\allocine.class.php");
	include_once("allocine-api-master\PHP\get.php");
	include_once("allocine-api-master\PHP\search.php");
	function aff_film($val){
		$allo = req_allo($val);
		$code = $allo[0];
		$img = $allo[1];
		echo '<img src="' . $img . '" height="400" width="300">';
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
			if (!isset($actor['Actor']))
				$actor = "non disponible";
			if (!isset($key['Keyword']))
				$key = "non disponible";
			if (!isset($cat['Category']))
				$cat = "non disponible";
			if (($val == null || $val == $elem->{'Title'}) && $f == 0)
			{
				echo "<div>";
				echo "titre: ",$elem->{'Title'},"<br/>";
				echo "titre originale: ",$elem->{'OriginalTitle'},"<br/>";
				echo "realisateur: ",$elem->{'Director'},"<br/>";
				echo "date de sortie:",$elem->{'PublicationDate'},"<br/>";
				echo "duree: ",$elem->{'Duration'},"<br/>";
				echo "Langage: ",$elem->{'Language'},"<br/>";
				echo "Qualite d'image: ",$elem->{'ImageQuality'},"<br/>";
				echo "audience: ",$elem->{'ParentalControl'},"<br/><br/>";
				echo "</div>";
				echo trail($code),"<br><br>";
				echo "<div>";
				echo "synopsis: ",$elem->{'Plot'},"<br/><br/>";
				echo "</div>";
				echo "<div>";
				echo "casting:","<br/>";
				if (is_string($actor))
					echo $actor;
				elseif (is_string($actor['Actor']))
					echo $actor['Actor'] , "<br/>";
				else
					for ($i = 0; isset($actor['Actor'][$i]); $i++)
						echo $actor['Actor'][$i] , "<br/>";
				echo "</div>";
				echo "<div>";
				echo "<br/>" , "mot cle:" , "<br/>";
				if (is_string($key))
					echo $key;
				elseif (is_string($key['Keyword']))
					echo $key['Keyword'] , "<br/>";
				else
					for ($i = 0; isset($key['Keyword'][$i]); $i++)
						echo $key['Keyword'][$i] , "<br/>";
				echo "</div>";
				echo "<div>";
				echo "<br/>" , "Categories: " , "<br/>";
				if (is_string($cat))
					echo $cat;
				elseif (is_string($cat['Category']))
					echo $cat['Category'] , "<br/>";
				else
					for ($i = 0; isset($cat['Category'][$i]); $i++)
						echo $cat['Category'][$i] , "<br/>";
				echo "</div>";
				$f = 1;
				echo "<div>";
				echo "<br/>","disponible sur:";
			}
			
			if ($val == null || $val == $elem->{'Title'})
			{
				echo "<br/>",'<a href="http://' . $elem->{'URL'} . '">' . $elem->{'VODPlatform'} . '</a>',"<br/>";
			}
		}
				echo "</div>";
	}
	if (isset($_GET['title']))
	aff_film($_GET['title']);
?>
	</body>
</html>

  
 
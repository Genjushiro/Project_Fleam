.<!DOCTYPE html>
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
		$verif_tab = array();
		foreach($obj as $elem)
		{
		$txt = (string) $elem->Title;
			if (!verif($verif_tab, $txt))
			{
				if ($val == null || $val == $elem->{'Title'} || $val == $elem->{'Director'})	
					$ok = 1;
				else
				{
					$actor = (array) $elem->Cast;
					$key = (array) $elem->Keywords;
					if ((isset($actor['Actor']) && $actor['Actor'] == $val) || (isset($key['Keyword']) && $key == $val))
						$ok = 1;
					else 
					{
						if (isset($actor['Actor'][0]))
							for ($i = 0; isset($actor['Actor'][$i]); $i++)
								if ($actor['Actor'][$i] == $val)
									$ok = 1;
						if (isset($key['Keyword'][0]))
							for ($i = 0; isset($key['Keyword'][$i]); $i++)
								if ($key['Keyword'][$i] == $val)
									$ok = 1;
				}
			}
			if (($val == null || $val == $elem->{'Title'}) && $f == 0)
			{
				echo $elem->{'Title'};
				echo "<br/>";
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

  
 
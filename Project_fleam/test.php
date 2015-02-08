<?php
include_once("allocine-api-master\PHP\allocine.class.php");
include_once("allocine-api-master\PHP\get.php");
include_once("allocine-api-master\PHP\search.php");
function open_file()
{
	$var = simplexml_load_file('20141010_ExpHadopiMetadonneesVOD.xml');
	return $var;
}

function rech($val)
{
	$allo = req_allo($val);
	$obj = open_file();	
	$ok = 0;
	$verif_tab = array();
	$j = 1;
	foreach($obj as $elem)
	{
		$txt = (string) $elem->Title;
		$val = strtoupper($val);
		if (!verif($verif_tab, $txt))
		{
			if ($val == null || $val == strtoupper($elem->{'Title'}) || $val == strtoupper($elem->{'Director'}))	
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
			if ($ok == 1)
			{
				echo "<div class=\"jumbotron\">";
				if ($allo != null)
				{
					$img = $allo[1];
					echo '<img src="' . $img . '" height="400" width="300">';
				}
				else
					echo "<br/><br/><br/>Pas d'affiche disponible<br/><br/><br/>";
				echo "<form method=\"get\" action=\"fiche.php\"class=\"container\" id=\"res", $j ,"\">";
				echo "<button class=\"btn btn-success\" name=\"title\" value=\"", $elem->Title , "\">Access</button></form>";
				echo $elem->{'Title'};
				echo "<br> Producteur : ";
				echo $elem->{'Director'};
				echo "<br/>";
				echo $elem->{'PublicationDate'};
				echo "</div>";
				array_push($verif_tab, $txt);
				$ok = 0;
				$j++;
			}
		}
	}
}

function verif($tab, $val)
{
	for($i = 0; isset($tab[$i]); $i++)
	{
		if ($val == $tab[$i])
		{
			return true;
		}
	}
	return false;
}
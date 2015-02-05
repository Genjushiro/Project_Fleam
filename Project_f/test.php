<?php
function open_file()
{
	$var = simplexml_load_file('20141010_ExpHadopiMetadonneesVOD.xml');
	return $var;
}

function rech($val)
{
	$obj = open_file();	
	$ok = 0;
	$verif_tab = array();
	$j = 1;
	$tab = array();
	foreach($obj as $elem)
	{
		$txt = (string) $elem->Title;
		if (!verif($verif_tab, $txt))
		{
			if ($val == null || $val == $elem->{'Title'} || $val === $elem->{'Director'})	
				$ok = 1;
			else
			{
				$actor = (array) $elem->Cast;
				$key = (array) $elem->Keywords;
				if ((isset($actor['Actor']) && $actor['Actor'] === $val) || (isset($key['Keyword']) && $key === $val))
					$ok = 1;
				else 
				{
					if (isset($actor['Actor'][0]))
						for ($i = 0; isset($actor['Actor'][$i]); $i++)
							if ($actor['Actor'][$i] === $val)
								$ok = 1;
					if (isset($key['Keyword'][0]))
						for ($i = 0; isset($key['Keyword'][$i]); $i++)
							if ($key['Keyword'][$i] === $val)
								$ok = 1;
				}
			}
			if ($ok == 1)
			{
				$tab[$j][1] = (string) $elem->Title;
				$tab[$j][2] = (string) $elem->Director;
				$tab[$j][3] = (string) $elem->PublicationDate;
				array_push($verif_tab, $txt);
				$ok = 0;
				$j++;
			}
		}
	}
	mount_div($tab);
}

function mount_div($tab)
{
	if (!isset($_POST['select_opt']))
		$tab = sort_div($tab, 1);
	else
		$tab = sort_div($tab, $_POST['select_opt']);
	for ($i = 1; isset($tab[$i]); $i++)
	{
		echo "<div class=\"jumbotron\">";
		echo "<form method=\"get\" action=\"fiche.php\"class=\"container\" id=\"res", $j ,"\">";
		echo "<button class=\"btn btn-success\" name=\"title\" value=\"", $elem->Title , "\">Access</button></form>";
		echo $tab[$i][1];
		echo "<br> Producteur : ";
		echo $tab[$i][2];
		echo "<br/>";
		echo $tab[$i][3];
		echo "</div>";
	}
}

function sort_div($tab, $int)
{
	echo $int;
	for ($i = 1; isset($tab[$i]); $i++)
	{
		for($j = 1; isset($tab[$j]); $j++)
		{
			if((strcmp($tab[$i][$int], $tab[$j][$int]) <0 && $int != 3) || ($int == 3 &&strcmp($tab[$i][$int], $tab[$j][$int]) >0))
			{
				$save = $tab[$i];
				$tab[$i] = $tab[$j];
				$tab[$j] = $save;
			}
		}
		echo "<br/>";
	}
	return $tab;
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
<?php

function select_img()
{
	$content = simplexml_load_file('20141010_ExpHadopiMetadonneesVOD.xml');
	$tab = array();
	$i = 0;
	
	foreach ($content as $elem)
	{
		if ($i < 5)
			if($elem->{'PublicationDate'} != 0 && isset($elem->{'URLPhoto'}))
			{
				$tab[$i][0] = $elem->{'PublicationDate'};
				$tab[$i][1] = $elem->{'URLPhoto'};
				$tab[$i][2] = $elem->{'Title'};
				$i++;
			}
	}

	$tab = my_sort($tab);
	return $tab;
}

function my_sort($tab)
{
	for ($i = 0; isset($tab[$i]); $i++)
	{
		for($j = 0; isset($tab[$j]); $j++)
		{
			if(strcmp($tab[$i][0], $tab[$j][0]) >0)
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

function url_exists($url)
{
	$file_headers = @get_headers($url);
	if($file_headers[0] == 'HTTP/1.1 404 Not Found') 
		$exists = false;
	else 
		$exists = true;
	return $exists;
}

function gen_car($tab)
{
	for($i = 0; isset($tab[$i]); $i++)
	{
		if ($i == 0)
			echo "<div class=\"item active\"><img src=\"", $tab[$i][1], "\" alt=\"\"/></div>";
		echo "<div class=\"item\"><img src=\"", $tab[$i][1], "\" alt=\"\"/></div>";
	}
}
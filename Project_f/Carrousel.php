<?php

function select_img()
{
	$content = simplexml_load_file('20141010_ExpHadopiMetadonneesVOD.xml');
	$tab = array();
	$i = 0;
	
	foreach ($content as $elem)
	{
		if ($i < 10)
			$tab[$i][0] = $elem->{'PublicationDate'};
			$tab[$i][1] = $elem->{'URL'};
		$i++;
	}
	for ($i = 0; $i < 10; $i++)
	{
		echo $tab[$i][0], "<br/>";
		echo $tab[$i][1], "<br/><br/>";
	}
}
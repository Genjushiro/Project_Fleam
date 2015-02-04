<?php
function open_file()
{
	$var = simplexml_load_file('20141010_ExpHadopiMetadonneesVOD.xml');
	return $var;
}

function rech($val)
{
	$obj = open_file();
	foreach($obj as $elem)
	{
		if ($val == null || $val == $elem->{'Title'})
		{
			echo $elem->{'Title'};
			echo "<br/>";
			echo $elem->{'Director'};
			echo "<br/><br/>";
			echo $elem->{'Plot'};
			echo "<br/>";
		}
	}
}
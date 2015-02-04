<?php
function open_file()
{
	$var = simplexml_load_file('20141010_ExpHadopiMetadonneesVOD.xml');
	return $var;
}

function recup()
{
		$tab = array();
		if (isset($_POST['title']))
			$tab[0] = $_POST['title'];
		return $tab;
}

function rech($val)
{
	$obj = recup();
	foreach($obj as $elem)
	{
		if ($val[0] != null && $val[0] == $elem->{'Title'})
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
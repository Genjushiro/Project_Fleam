<?php
include_once("head.php");
include_once("header.php");
include_once("test.php");

function aff_film(film){
	$obj = open_file();
	foreach($obj as $elem)
	{
		if ($val == null || $val == $elem->{'Title'})
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
		}
	}
}
	
}
  
 
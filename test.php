<?php
function recup()
{
	$var = simplexml_load_file('20141010_ExpHadopiMetadonneesVOD.xml');
	return $var;
}
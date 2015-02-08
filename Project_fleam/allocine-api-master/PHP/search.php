<?php

function req_allo($name)
{
	require_once(__DIR__.'/allocine.class.php');

	define('ALLOCINE_PARTNER_KEY', '100043982026', 'JSON');
	define('ALLOCINE_SECRET_KEY', '29d185d98c984a359e6e6f26a0474269', 'JSON');

	$allocine = new Allocine(ALLOCINE_PARTNER_KEY, ALLOCINE_SECRET_KEY);

	$result = $allocine->search($name);

	$obj = json_decode($result);
	
	if (isset($obj->feed->movie[0]))
	{
		$url = $obj->feed->movie[0]->poster->href;
		$code = $obj->feed->movie[0]->code;

		$tab = array();
		$tab[0] = $code;
		$tab[1] = $url;

		return $tab;
	}
	return null;
}
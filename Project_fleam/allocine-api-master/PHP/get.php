<?php

function trail($code)
{
	require_once(__DIR__.'/allocine.class.php');

	define('ALLOCINE_PARTNER_KEY', '100043982026');
	define('ALLOCINE_SECRET_KEY', '29d185d98c984a359e6e6f26a0474269');

	$allocine = new Allocine(ALLOCINE_PARTNER_KEY, ALLOCINE_SECRET_KEY);

	$result = $allocine->get($code);

	$obj = json_decode($result);
	if (isset($obj->movie->trailerEmbed))
		return $obj->movie->trailerEmbed;
	else
		return "pas de trailer disponnible";
}
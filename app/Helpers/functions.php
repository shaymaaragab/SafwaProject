<?php

function switchLangUrl() {

	$segments = Request::segments();
	//dd($segments);
	if ($segments[0] == "en") {

		$segments[0] = "ar";

	} else {

		$segments[0] = "en";

	}

	$url =  '/' . implode('/', $segments);

	return $url;

}

?>
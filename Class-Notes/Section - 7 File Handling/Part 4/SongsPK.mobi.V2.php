<?php

$url = "https://songspk.mobi/browse/bollywood-albums-songs";

$html = file_get_contents($url);
$arr = explode('<figcaption>', $html);

unset($arr[0]);
$c = 0;

foreach ($arr as $part) {
	
	//Get Movie Name
	$x = explode('">', $part);
	$y = explode('</a>', $x[1]);
	$name = trim($y[0]);

	//Get Movie URL
	$x = explode('href="', $part);
	$y = explode('">', $x[1]);
	$url = "https://songspk.mobi".$y[0];

	print "<HR> <B>$name</B> - $url <BR> ";

	processMovie($name, $url);
	$c++;
	if($c>3)
		die();
}

function processMovie($movie_name, $movie_url)
{
	$html = file_get_contents($movie_url);
	$arr = explode('<div class="col-md-7 col-xs-10 col-text">', $html);
	unset($arr[0]);

	foreach ($arr as $part) {

		//Get Song Name
		$x = explode('">', $part);
		$y = explode('</a>', $x[1]);
		$song_name = trim($y[0]);

		//Get Song URL
		$x = explode('<div class="col-md-4 col-xs-5 col-download">', $part);
		$y = explode('href="', $x[1]);
		$z = explode('"', $y[1]);
		$song_url = $z[0];

		print "<BR> $song_name, $song_url ";
	}

}







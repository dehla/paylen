<?php

function get(){
	return trim(fgets(STDIN));
}

function get_between($string, $start, $end) 
    {
        $string = " ".$string;
        $ini = strpos($string,$start);
        if ($ini == 0) return "";
  	$ini += strlen($start);
        $len = strpos($string,$end,$ini) - $ini;
        return substr($string,$ini,$len);
    }

function nama()
	{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "PAI");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$ex = curl_exec($ch);
	function acak($panjang)
{
    $karakter= '1234567890';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
  $pos = rand(0, strlen($karakter)-1);
  ?>

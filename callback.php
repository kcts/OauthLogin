<?php
ini_set("display_errors","off");

/**
 * Define paths
 */
define('CONF_FILE', dirname(__FILE__).'/'.'opauth.conf.php');
define('OPAUTH_LIB_DIR', dirname(__FILE__).'/lib/Opauth/');

/**
* Load config
*/
if (!file_exists(CONF_FILE)){
	trigger_error('Config file missing at '.CONF_FILE, E_USER_ERROR);
	exit();
}
require CONF_FILE;

/**
 * Instantiate Opauth with the loaded config but not run automatically
 */
require OPAUTH_LIB_DIR.'Opauth.php';
$Opauth = new Opauth( $config, false );

	
/**
* Fetch auth response, based on transport configuration for callback
*/
$response = null;

switch($Opauth->env['callback_transport']){	
	case 'session':
		session_start();
		$response = $_SESSION['opauth'];
		unset($_SESSION['opauth']);
		break;
	case 'post':
		$response = unserialize(base64_decode( $_POST['opauth'] ));
		break;
	case 'get':
		$response = unserialize(base64_decode( $_GET['opauth'] ));
		break;
	default:
		echo '<strong style="color: red;">Error: </strong>Unsupported callback_transport.'."<br>\n";
		break;
}

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
	<h2 align="center">CallBack Array Here - Customize With Your Code</h2>
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
<div class="col-lg-2">
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
<div class="col-lg-8">
	
<?php
/**
 * Check if it's an error callback
 */
if (array_key_exists('error', $response)){
	echo '<strong style="color: red;">Authentication error: </strong> Opauth returns error auth response.'."<br>\n";
}

/**
 * Auth response validation
 * 
 * To validate that the auth response received is unaltered, especially auth response that 
 * is sent through GET or POST.
 */
else{
	if (empty($response['auth']) || empty($response['timestamp']) || empty($response['signature']) || empty($response['auth']['provider']) || empty($response['auth']['uid'])){
		echo '<strong style="color: red;">Invalid auth response: </strong>Missing key auth response components.'."<br>\n";
	}
	elseif (!$Opauth->validate(sha1(print_r($response['auth'], true)), $response['timestamp'], $response['signature'], $reason)){
		echo '<strong style="color: red;">Invalid auth response: </strong>'.$reason.".<br>\n";
	}
	else{
		
            echo '<strong style="color: green;">OK: </strong>Auth response is validated.'."<br>\n";
		
	}
}

$js = json_decode($response,TRUE);

?>
<table class="table">
   <tr>
         <th> Name   </th>  <td> <?php echo $response['auth']['info']['name']; ?> </td>
   </tr>
   <tr>
         <th> email  </th>  <td> <?php echo @$response['auth']['info']['email']; ?> </td>
   </tr>

   <tr>
         <th> Photo  </th>  <td><img src="<?php echo $response['auth']['info']['image']; ?>" />  </td>
   </tr>

</table>
	
<pre>
<?php print_r($response); ?>

</div>
<div class="col-lg-2">
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
</div>
</body>
</html>

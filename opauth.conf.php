<?php



$config = array(
/**
 * Path where Opauth is accessed.
 *  - Begins and ends with /
 *  - eg. if Opauth is reached via http://example.org/auth/, path is '/auth/'
 *  - if Opauth is reached via http://auth.example.org/, path is '/'
 */
	'path' => '/Oauth/',

/**
 * Callback URL: redirected to after authentication, successful or otherwise
 */
	'callback_url' => 'http://www.phpwdn.com/Oauth/callback.php',
	
/**
 * A random string used for signing of $auth response.
 * 
 * NOTE: PLEASE CHANGE THIS INTO SOME OTHER RANDOM STRING
 */
	'security_salt' => 'DSIFHWEJ8909312472389UJSDIF2389Y5392JDFH',
		

	'Strategy' => array(
		// Define strategies and their respective configs here
		
		'Facebook' => array(
			'app_id' => '',
			'app_secret' => ''
		),
                'Google' => array(
			'client_id' => '',
			'client_secret' => ''
		),
		
		'Twitter' => array(
			'key' => '',
			'secret' => ''
		),
                'Live' => array(
			'client_id' => '',
			'client_secret' => ''
		),
		
				
	),
);

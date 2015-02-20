# OauthLogin
Oauth Login System for Facebook,Google,Microsoft and Twitter

Hi Programmers, Now Days OAuth Login is very quick and powerful, sure it helps you to increase your website registrations.

Oauth Login Code :

#Callback URL: redirected to after authentication, successful or otherwise
 
'callback_url' => 'http://www.phpwdn.com/Oauth/callback.php',

callback_url return the Array Provided by Oauth Provider


'security_salt' => 'DSIFHWEJ8909312472389UJSDIF2389Y5392JDFH',

security_salt is Random string for Security HASH
    
    
List of Provider below as Strategy
  'Strategy' => array(

    'Facebook' => array(
      'app_id' => '',
      'app_secret' => 'Secret Here'
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

Demo @ http://www.phpwdn.com/Oauth/

<?php
require_once __DIR__ . '/vendor/autoload.php';
include_once 'classes/facebookLogin.php';

$fb          = new FaceApp();
$login       = $fb->faceLogin('gerente');
$loga        = new Facebook\Facebook($login);
//$get = $loga->get();
$helper      = $loga->getRedirectLoginHelper();
//$accessToken = $helper->getAccessToken();
var_dump($helper);
//https://github.com/rjanjic/PHP_INI_Read_Write
//https://www.youtube.com/watch?v=M7-U1c5HCq0
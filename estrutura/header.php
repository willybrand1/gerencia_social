<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerencia Social</title>
        <?php
        include_once 'includes.php';
        
        $fb          = new FaceApp();
        $login       = $fb->faceLogin('gerente');
        $face        = new Facebook\Facebook($login);  
        $helper      = $face->getRedirectLoginHelper();
        $permissions = ['email'];
        $url         = 'http://'.$_SERVER['HTTP_HOST']."/gerencia_social/fb-callback.php";
        $loginUrl    = $helper->getLoginUrl($url, $permissions);
        ?>
        <link rel="shortcut icon" href="favicon.icon"/>
        <link rel="stylesheet" href="config/css/bootstrap.css">
        <link rel="stylesheet" href="config/css/main.css">
        <link rel="stylesheet" href="config/css/all.css">
        <script src="config/js/jquery-3.5.1.js"></script>
        <script src="config/js/bootstrap.js"></script>
        <script src="config/js/all.js"></script>
    </head>
    <body>

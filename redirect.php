<?php
session_start();

include_once 'includes.php';
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="config/js/jquery-3.5.1.js"></script>
        <link rel="stylesheet" href="config/css/bootstrap.css">
        <title>Redirecionando...</title>
        <style>
            .centered {
                position: fixed;
                top: 30%;
                left: 40%;
            }
        </style>
    </head>
    <body>
        <img src="estrutura/loading.gif" class="centered">
    </body>
    <script>
        $(document).ready(function(){
            setTimeout(function(){
                //window.location.href = 'dashboard.php';
            }, 2500);
        });
    </script>
</html>
<?php
if (!session_id()) {
    session_start();
}

include_once 'classes/SessionControl.php';
include_once 'includes.php';

$data = Session::getInstance();

$fb     = new FaceApp();
$login  = $fb->faceLogin('gerente');
$face   = new Facebook\Facebook($login); 
$helper = $face->getRedirectLoginHelper();

if (isset($_GET['state'])){
    $helper->getPersistentDataHandler()->set('state', $_GET['state']);

    try {
        $accessToken = $helper->getAccessToken();
    
        if ($accessToken !== null) {
            $data->facebook_access_token = (string) $accessToken;

            try {
                $response   = $face->get('/me?fields=email,first_name,gender,id,last_name,link,name', $accessToken);
                $user       = $response->getGraphUser();
                $email      = $user->getEmail();
                $first_name = $user->getFirstName();
                $gender     = $user->getGender();
                $id         = $user->getId();
                $last_name  = $user->getLastName();
                $link       = $user->getLink();
                $name       = $user->getName();

                $db         = new Banco(BANCO);
                $sql        = "SELECT id_usu,usu_email,usu_nome FROM public.tb_usuario WHERE usu_email = '$email' AND usu_fb_id = '$id';";
                $rs         = $db->query($sql);
                
                if($rs){
                    $data->id_usu = $rs[0]['id_usu'];
                    $data->usu_email = $rs[0]['usu_email'];
                    $data->usu_nome = $rs[0]['usu_nome'];
                }else{
                    $sql = "INSERT INTO public.tb_usuario(usu_email,usu_nome,usu_fb_id) VALUES('$email','$name','$id') RETURNING id_usu;";
                    
                    try{
                        $rs = $db->query($sql);
                        
                        $data->id_usu = $rs[0]['id_usu'];
                        $data->usu_email = $email;
                        $data->usu_nome = $name;
                    }catch(Exception $e){
                        echo 'Erro ao inserir usuário: '.$e->getMessage();
                    }
                }
            }catch(\Facebook\Exceptions\FacebookResponseException $e){
                echo 'Deu erro no Graph: '.$e->getMessage();
                exit;
            }catch(\Facebook\Exceptions\FacebookSDKException $e){
                echo 'Deu erro no SDK: '.$e->getMessage();
                exit;
            }
        }else if(!isset($accessToken)){
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Bad request';
            }
            exit;
        }
    }catch(Facebook\Exceptions\FacebookResponseException $e){
        echo 'Deu erro no Graph: '.$e->getMessage();
        exit;
    }catch(Facebook\Exceptions\FacebookSDKException $e){
        echo 'Deu erro no SDK: '.$e->getMessage();
        exit;
    }
}else{
    echo 'Erro ao logar. Problemas com o login do Facebook. Reporte o administrador.';
    exit;
}
?>
<style>
    .centered {
        position: fixed;
        top: 35%;
        left: 45%;
        margin-top: -50px;
        margin-left: -100px;
    }
</style>
<link rel="shortcut icon" href="favicon.icon"/>
<div id="loading" style="width: 100%; height: 100%;">
    <img src="estrutura/loading.gif" class="centered">
</div>
<script src="config/js/jquery-3.5.1.js"></script>
<script>
    $(document).ready(function(){
        setTimeout(function(){
            window.location = 'dashboard.php';
        }, 2000);
    });
</script>
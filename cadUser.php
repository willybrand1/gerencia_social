<?php
include_once 'includes.php';

$nome     = isset($_REQUEST['nome'])     ? $_REQUEST['nome']     : "";
$email    = isset($_REQUEST['email'])    ? $_REQUEST['email']    : "";
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
$msg      = "";
$error    = 0;
$arr      = array();

if($nome == ""){
    $error++;
    $msg .= "<span>- Nome deve ser preenchido.</span><br>";
}

if($email == ""){
    $error++;
    $msg .= "<span>- E-mail deve ser preenchido.</span><br>";
}

if($password == ""){
    $error++;
    $msg .= "<span>- Senha deve ser preenchido.</span><br>";
}

if($error > 0){
    $arr['msg']   = $msg;
    $arr['error'] = $error;

    echo json_encode($arr,JSON_UNESCAPED_UNICODE);
}else{
    $db  = new Banco(BANCO);
    $sql = "INSERT INTO public.tb_usuario (usu_nome,usu_email,usu_senha) VALUES ('$nome','$email','$password');";
    $rs  = $db->query($sql);
    $db->close();

    if($rs){
        $arr['msg']   = "<span>- Registro incluído com sucesso. Você será redirecionado.</span>";
        $arr['error'] = $error;
    }else{
        $arr['msg']   = "<span>- Erro na base de dados. Entre em contato com o ADMINISTRADOR.</span>";
        $arr['error'] = 1;
    }

    echo json_encode($arr,JSON_UNESCAPED_UNICODE);
}
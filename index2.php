<?php
include_once 'estrutura/header.php';
?>
<style>
    .logo{
        width: 100%;
        margin-bottom: 3%;  
    }
</style>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
            <img src="estrutura/logo.png" class="logo" />
        </div>
        <div id="menssagem"></div>
        <div>
            <input type="text" id="nome" class="fadeIn second" name="nome" placeholder="Nome completo">
            <input type="text" id="email" class="fadeIn second" name="email" placeholder="E-mail">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Senha">
            <input type="button" class="fadeIn fourth mt-3" value="Cadastrar" onclick="cadastrarUsuario();">
            <div class="mt-2">&nbsp;</div>
        </div>
        <div id="formFooter">
            Vou tentar outro método!<a class="underlineHover" href="index.php">&nbsp;Voltar</a>
        </div>
    </div>
</div>
<div id="myModalDiv"></div>
<?php
include_once 'estrutura/funcoesJs_login.php';
include_once 'estrutura/footer.php';
?>
    

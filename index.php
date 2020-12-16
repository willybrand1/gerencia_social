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
        <div>
            <!-- <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="button" class="fadeIn fourth mt-3" value="Entrar" onclick="validaUser();">
            <input type="button" class="fadeIn fourth mt-3" value="Cadastrar" onclick="cadastraUser();">
            <hr class="ml-4 mr-4"/> -->
            <button onclick="loginFace('<?=$loginUrl?>');" class="fadeIn fourth mb-3 pl-5 pr-5" id="fb" name="fb">
                Logar com Facebook&nbsp;
                <i class="fab fa-facebook"></i>
            </button>
            <button onclick="loginFace('<?=$loginUrl?>');" class="fadeIn fourth mb-3 pl-5 pr-5" id="fb" name="fb">
                Logar com Facebook&nbsp;
                <i class="fab fa-facebook"></i>
            </button>
        </div>
        <div id="formFooter">
            <a class="underlineHover" href="#">Esqueci minha senha?</a>
        </div>
    </div>
</div>
<div id="myModalDiv"></div>
<?php
include_once 'estrutura/funcoesJs_login.php';
include_once 'estrutura/footer.php';
?>
    
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
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="button" class="fadeIn fourth mt-3" value="Entrar" onclick="validaUser();">
            <div class="divider">
                <span>ou</span>
            </div>
            <div class="social">
                <h4>Conectar com</h4>
                <ul>
                    <li style="width: 100%"> 
                        <a href="#" class="facebook" onclick="loginFace('<?=$loginUrl?>');">
                            <span class="fab fa-facebook"></span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#" class="twitter">
                            <span class="fab fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="google-plus">
                            <span class="fab fa-google-plus"></span>
                        </a>
                    </li> -->
                </ul>
            </div>
            <div class="mt-2">&nbsp;</div>
            <!-- <div id="g-login" name="g-login" class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
            <a href="#" onclick="signOut();">Sign out</a> -->
        </div>
        <div id="formFooter">
            Não tem cadastro?<a class="underlineHover" href="index2.php">&nbsp;Cadastre-se</a>
        </div>
    </div>
</div>
<?php
include_once 'estrutura/funcoesJs_login.php';
include_once 'estrutura/footer.php';
?>
    

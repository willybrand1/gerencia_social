<?php
function mudaTitulo($page){
    if($page == ""){
        
    }else{
        if(strpos($page,"dashboard") !== false){
            echo "Dashboard";
        }
    }
}
?>
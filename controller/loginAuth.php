<?php

class loginAuth{
        public function BloqueiaPagina(){
            session_start();
            if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
                header("Location:../view/home.php");
        
                }
            }
    }

    $loginAuth = new loginAuth;
?>
<?php

class loginAuth{
        public function BloqueioParaPessoasLogadas(){
            if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
                header("Location:../view/home.php");
        
                }
            }
        public function BloqueioParaUsuariosDeslogados(){
            if(!isset($_SESSION['logado']) && $_SESSION['logado'] == false){
                header("Location:../view/loginUsuario.php");
        
                }
            }
        public function BloqueiaFornecedores(){
            if(isset($_SESSION['logado']) && $_SESSION['logado'] == true && $_SESSION['tipoConta'] == 'Fornecedor'){
                header("Location:../view/home.php");
        
                }
            }
    }

    $loginAuth = new loginAuth;
?>
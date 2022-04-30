<?php
class ControllerImgs{
    public $img;

    public function getImg(){
        return $this->img;
    }
    public function setImg($m){
        $this->img = $m;
    }

    public function BloqueiaPagina(){
    session_start();
    if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
        header("Location:../view/home.php");

        }
    }

}

$LogoComTitulo = new ControllerImgs;
$LogoComTitulo->setImg('..\imgs\LogoComTitulo.png');
$LogoSemTitulo = new ControllerImgs;
$LogoSemTitulo->setImg('..\imgs\LogoSemTitulo.png');

?>
<?php
class ControllerImgs{
    public $img;

    public function getImg(){
        return $this->img;
    }
    public function setImg($m){
        $this->img = $m;
    }

}

$LogoComTitulo = new ControllerImgs;
$LogoComTitulo->setImg('imgs\LogoComTitulo.png');
$LogoSemTitulo = new ControllerImgs;
$LogoSemTitulo->setImg('imgs\LogoSemTitulo.png');

?>
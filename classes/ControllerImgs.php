<<<<<<< HEAD
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

=======
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

>>>>>>> b27f6f80887553cd4df77aa498b32de92b8c2dfd
?>
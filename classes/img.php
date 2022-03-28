<?php

class Img{
    public $img;

    public function setImg($img){
        $this->img = $img;
    }

    public function getImg(){
        return $this->img;
    }
}
$logoImg = new Img();
$logoImg->setImg('https://cdn.pixabay.com/photo/2020/05/10/13/10/comb-5153963_960_720.png');

?>
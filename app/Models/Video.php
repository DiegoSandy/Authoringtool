<?php

namespace App\Models;

class Video{

    public $tituloVideo;
    public $enlace;

    public function setTituloVideo($titulo){
        $this->tituloVideo=$titulo;
    }
    public function setEnlace($enlace){
        $this->enlace=$enlace;
    }

    public function getTituloVideo(){
        return $this->tituloVideo;
    }
    public function getEnlace(){
        return $this->$enlace;
    }
}
<?php

namespace App\Models;

class Cuestionario{
    
    public $tituloCuestionario;
    public array $preguntas;
    public array $listaRespuestas;
    public array $respuestasCorrectas;

    public function setTituloCuestionario($titulo){
        $this->tituloCuestionario=$titulo;
    }
    public function setPreguntas(array $preguntas){
        $this->preguntas=$preguntas;
    }
    public function setListaRespuestas(array $respuestas){
        array_push($this->listaRespuestas, $respuestas);
    }
    public function setRespuestasCorrectas(array $correctas){
        $this->respuestasCorrectas=$correctas;
    }

    public function getPreguntas(){
        return $this->preguntas;
    }
    public function getlistaRespuestas(){
        return $this->listaRespuestas;
    }
    public function getRespuestasCorrectas(){
        return $this->respuestasCorrectas;
    }
}
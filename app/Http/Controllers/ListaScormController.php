<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Cuestionario;
use App\Models\Video;

class ListaScormController extends Controller{

    public array $listaScorm;
    
    public function CrearCuestionario(Request $request){
        $quiz=new Cuestionario;
        $preguntas=[$request->q1, $request->q2];
        $respuestas=[[$request->q1op1, $request->q1op2, $request->q1op3], [$request->q2op1, $request->q2op2, $request->q2op3]];
        $correctas=[$request->q1correct, $request->q2correct];
        $quiz->setPreguntas($preguntas);
        $quiz->setListaRespuestas($respuestas);
        $quiz->setRespuestasCorrectas($correctas);
        $quiz->setTituloCuestionario($request->tituloCuestionario);
        array_push($this->listaScorm, $quiz);
    }
    public function CrearVideo(Request $request){
        //$video=new Video;
        //if ($request->hasFile('archivo')) {
            $archivo = $request->file('archivo');
            $nombreArchivo = $archivo->getClientOriginalName();
            //$ruta=Storage::disk('uploads')->putFile('videos', $archivo);
            //$rutaArchivo = 'prueba/' . $nombreArchivo;
            //$archivo->storeAs('', 'imagenP'.'.'.$archivo->extension(), 'uploads');
            $archivo->move('upload', $nombreArchivo);
            
        //}
        //array_push($this->listaScorm);
        return response()->json(['message'=>"Archivo guardado en la ruta {$nombreArchivo}"]);
    }
    public function VaciarListaScorm(){
        unset($this->listaScorm);
    }
}
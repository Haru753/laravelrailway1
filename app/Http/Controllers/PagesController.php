<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante1;

class PagesController extends Controller
{
   public function fnIndex (){
    return view('welcome');
   }

   public function fnRegistrar(Request $request){

      //return $request->all();         //Prueba de "token" y datos recibidos

      $request ->validate([
          'codEst' => 'required',
          'nomEst' => 'required',
          'apeEst' => 'required',
          'fnaEst' => 'required',
          'turMat' => 'required',
          'semMat' => 'required',
          'estMat' => 'required'
      ]);

      $nuevoEstudiante = new Estudiante1;
      $nuevoEstudiante->codEst = $request->codEst;
      $nuevoEstudiante->nomEst = $request->nomEst;
      $nuevoEstudiante->apeEst = $request->apeEst;
      $nuevoEstudiante->fnaEst = $request->fnaEst;
      $nuevoEstudiante->turMat = $request->turMat;
      $nuevoEstudiante->semMat = $request->semMat;
      $nuevoEstudiante->estMat = $request->estMat;
      
      $nuevoEstudiante->save();
      
      //$xAlumnos = Estudiante1::all();                      //Datos de BD
      //return view('pagLista', compact('xAlumnos'));        //Pasar a pagLista
      return back()->with('msj','Se registro con éxito...'); //Regresar con msj
  }

   public function fnEstDetalle ($id){
      $xDetAlumnos=Estudiante1::findOrFail($id);
      return view('Estudiante.pagDetalle',compact('xDetAlumnos'));
     }

     public function fnEstActualizar($id){                   //Paso 1

      $xActAlumnos = Estudiante1::findOrFail($id);
      return view('Estudiante.pagActualizar', compact('xActAlumnos'));
  }

  public function fnUpdate(Request $request, $id){        //Paso 2

      //return $request->all();         //Prueba de "token" y datos recibidos

      $xUpdateAlumnos = Estudiante1::findOrFail($id);

      $xUpdateAlumnos->codEst = $request->codEst;
      $xUpdateAlumnos->nomEst = $request->nomEst;
      $xUpdateAlumnos->apeEst = $request->apeEst;
      $xUpdateAlumnos->fnaEst = $request->fnaEst;
      $xUpdateAlumnos->turMat = $request->turMat;
      $xUpdateAlumnos->semMat = $request->semMat;
      $xUpdateAlumnos->estMat = $request->estMat;
      
      $xUpdateAlumnos->save();
      
      //$xAlumnos = Estudiante1::all();                        //Datos de BD
      //return view('pagLista', compact('xAlumnos'));          //Pasar a pagLista
      return back()->with('msj','Se actualizó con éxito...');  //Regresar con msj
  }

  public function fnEliminar($id){
      $deleteAlumno=Estudiante1::findOrFail($id);
      $deleteAlumno->delete();
      return back()->with('msj','Se elimino con éxito...');
}

   public function fnLista (){
    //$xAlumnos=Estudiante1::all();
    $xAlumnos=Estudiante1::paginate(4);
    return view('pagLista',compact('xAlumnos'));
   }
   public function fnGaleria ($numero=0){
    $valor =$numero;
    $otro =25;

     return view('pagGaleria', compact('valor','otro'));
   }
}

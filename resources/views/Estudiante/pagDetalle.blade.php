@extends('pagPlantilla') 

@section('titulo')
    <h1 class="display-4">Página de detalle </h1>
@endsection

@section('seccion')
    
    <div class="btn btn-info d-grid display-3">Detalles del estudiante</div>

    <p>Id:                  {{ $xDetAlumnos -> id }} </p> 
    <p>Código:              {{ $xDetAlumnos -> codEst }} </p> 
    <p>Apellidos y nombres: {{ $xDetAlumnos -> apeEst }}, {{ $xDetAlumnos -> nomEst }} </p> 
    <p>Fecha Nacimiento:    {{ $xDetAlumnos -> fnaEst }} </p> 
    <p>Turno:               {{ $xDetAlumnos -> turMat }} </p> 
    <p>Semestre:            {{ $xDetAlumnos -> semMat }} </p> 
    <p>Estado de matric.:   {{ $xDetAlumnos -> estMat }} </p> 

    <div class="btn btn-info d-grid display-3">...</div>
    
@endsection

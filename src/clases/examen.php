<?php
namespace ITEC\DAW\examen;
use ITEC\DAW\examen\listadopreguntas;
use ITEC\DAW\examen\profesor;
use ITEC\DAW\examen\asignatura;
use ITEC\DAW\examen\fecha;
use ITEC\DAW\examen\hora;

class examen{
    private asignatura $asignatura;
    private fecha $fecha;
    private hora $hora;
    private profesor $profesor;
    private listadopreguntas $listadoPreguntas;

    public function __construct(asignatura $asignatura, fecha $fecha, hora $hora, profesor $profesor, listadopreguntas $listadoPreguntas)
    {
        $this->asignatura = $asignatura;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->profesor = $profesor;
        $this->listadoPreguntas = $listadoPreguntas;
    }

    public static function createExamen(asignatura $asignatura, fecha $fecha, hora $hora, profesor $profesor, listadopreguntas $listadoPreguntas){
        return new examen($asignatura, $fecha, $hora, $profesor, $listadoPreguntas);
    }
}
?>
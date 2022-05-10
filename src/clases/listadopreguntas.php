<?php

namespace ITEC\DAW\examen;
use ITEC\DAW\examen\pregunta;

class listadopreguntas{
    private array $preguntas;
    private static int $lastid=0;

    private function __construct(array $preguntas){
        $this->preguntas = [];
    }

    public function addCreatePregunta(int $IDPregunta, string $descripcion, int $notaMaxima){
        $this->preguntas[] = pregunta::createPregunta($IDPregunta, $descripcion, $notaMaxima);
    }

    public function addPregunta(pregunta $pregunta){
        $this->preguntas[] = $pregunta;
    }

    public function getNumPreguntas(): int{
        return count($this->preguntas);
    }

    public function getNotaMaxima(): int{
        $total = 0;
        foreach ($this->preguntas as $pregunta) {
            $total += $pregunta->getNotaMaxima();
        }
        return $total;
    }
}

?>
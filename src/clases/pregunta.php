<?php
namespace ITEC\DAW\examen;

class pregunta{
    private int $IDPregunta;
    private string $descripcion;
    private int $notaMaxima;

    public function __construct(int $IDPregunta, string $descripcion, int $notaMaxima=10)
    {
        $this->IDPregunta = $IDPregunta;
        $this->descripcion = $descripcion;
        $this->notaMaxima = $notaMaxima;
    }

    public static function createPregunta(int $IDPregunta, string $descripcion, int $notaMaxima){
        return new pregunta($IDPregunta, $descripcion, $notaMaxima);
    }

    public function getIDPregunta(): int{
        return $this->IDPregunta;
    }

    public function getDescripcion(): string{
        return $this->descripcion;
    }
    
    public function getNotaMaxima(): int{
        return $this->notaMaxima;
    }
}
?>
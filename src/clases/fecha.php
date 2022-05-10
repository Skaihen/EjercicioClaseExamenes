<?php

namespace ITEC\DAW\examen;

class fecha{
    private int $dia;
    private int $mes;
    private int $año;
    private \DateTime $datetimeObj;

    public function __construct(int $dia, int $mes, int $año)
    {
        $this->datetimeObj = new \DateTime();
        $this->datetimeObj->setDate($dia, $mes, $año);
        $this->dia = $dia;
        $this->mes = $mes;
        $this->año = $año;
    }

    public static function createHora(int $dia, int $mes, int $año){
        return new fecha($dia, $mes, $año);
    }

    public function __toString()
    {
        return $this->datetimeObj->format("j/n/Y");
    }

    public function getFechaStr(): string{
        return $this;
    }

    public function getDateStr(): string{
        return $this->datetimeObj->format("j/n/Y");
    }
    
    public function getDateLeft(){
        $now = new \DateTime();
        return $now->diff($this->datetimeObj)->format("j");
    }
}
?>
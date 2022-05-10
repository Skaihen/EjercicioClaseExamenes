<?php

namespace ITEC\DAW\examen;

class hora{
    private int $horas;
    private int $minutos;
    private int $segundos;
    private \DateTime $datetimeObj;

    public function __construct(int $horas, int $minutos, int $segundos)
    {
        $this->datetimeObj = new \DateTime();
        $this->datetimeObj->setTime($horas, $minutos, $segundos);
        $this->horas = $horas;
        $this->minutos = $minutos;
        $this->segundos = $segundos;
    }

    public static function createHora(int $horas, int $minutos, int $segundos){
        return new hora($horas, $minutos, $segundos);
    }

    public function __toString()
    {
        return $this->datetimeObj->format("G:i:s");
    }

    public function getHoraStr(): string{
        return $this;
    }

    public function getDayStr(): string{
        return $this->datetimeObj->format("G:i:s");
    }

    public function getDayLeft(){
        $now = new \DateTime();
        return $now->diff($this->datetimeObj)->format("G");
    }
}
?>
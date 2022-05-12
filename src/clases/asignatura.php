<?php
namespace ITEC\DAW\examen;

class asignatura{
    private int $IDAsignatura;
    private string $tituloAsignatura;

    public function __construct(int $IDAsignatura, string $tituloAsignatura)
    {
        $this->IDAsignatura = $IDAsignatura;
        $this->tituloAsignatura = $tituloAsignatura;
    }

    public static function createAsignatura(int $IDAsignatura, string $tituloAsignatura){
        return new asignatura($IDAsignatura, $tituloAsignatura);
    }

    public function getIDAsignatura(): int{
        return $this->IDAsignatura;
    }

    public function getTituloAsignatura(): string{
        return $this->tituloAsignatura;
    }
}
?>
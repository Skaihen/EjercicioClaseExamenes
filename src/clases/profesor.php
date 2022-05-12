<?php
    namespace ITEC\DAW\examen;
    use ITEC\DAW\examen\fecha;

    class profesor{
        private string $nombre;
        private fecha $fechaNacimiento;
        private int $id;

        public function __construct(string $nombre, fecha $fechaNacimiento, int $id){
            $this->nombre = $nombre;
            $this->fechaNacimiento = $fechaNacimiento;
            $this->id = $id;
        }

        public static function create(string $nombre, fecha $fechaNacimiento, int $id): profesor{
            return new profesor($nombre, $fechaNacimiento, $id);
        }

        public static function createProfesorFecha(string $nombre, int $dia, int $mes, int $año, int $id): profesor{
            $fecha = fecha::createFecha($dia, $mes, $año);
            return self::create($nombre, $fecha, $id);
        }

        public function getNombre(): string{
            return $this->nombre;
        }

        public function getFechaNacimiento(): fecha{
            return $this->fechaNacimiento;
        }

        public function getFechaNacimientoStr(): string{
            return $this->fechaNacimiento->getDateStr();
        }
    }

?>
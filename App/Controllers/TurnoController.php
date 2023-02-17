<?php
namespace App\Controllers;
use App\Models\Turno;

class TurnoController {
    public function obtenerTurno()
    {
        $instanceTurno = new Turno;
        $turno = $instanceTurno->all();
        return $turno;
    }
}
?>
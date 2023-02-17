<?php
namespace App\Controllers;
use App\Models\Aula;

class AulaController {
    public function obtenerAula()
    {
        $instanceAula = new Aula;
        $aula = $instanceAula->all();
        return $aula;
    }
}
?>
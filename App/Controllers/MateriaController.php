<?php
namespace App\Controllers;
use App\Models\Materia;

class MateriaController {
    public function obtenerMateria()
    {
        $instanceMateria = new Materia;
        $manteria = $instanceMateria->all();
        return $manteria;
    }
}
?>
<?php
require("../../../autoload.php");

use App\Controllers\MateriaController;
use App\Controllers\TutorController;
use App\Controllers\AulaController;
use App\Controllers\TurnoController;

$materiaController = new MateriaController();
$tutorController = new TutorController();
$aulaController = new AulaController();
$turnoController = new TurnoController();
$materias = $materiaController->obtenerMateria();
$aulas = $aulaController->obtenerAula();
$turnos = $turnoController->obtenerTurno();
$dataEdit = $tutorController->consulta();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container vh-100 d-flex justify-content-center align-items-center flex-column">
    <a href="./main.php" class="btn btn-success m-5">Volver</a>
        <h1>Editar Tutor</h1>
        <form class="border border-dark p-5 bg-dark w-50" method="POST" action="./edit.php" autocomplete="off">
            <div class="mb-3">
                <label for="nombre" class="form-label text-white">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $dataEdit['nombre'] ?>">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label text-white">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $dataEdit['apellido'] ?>">
            </div>
            <div><input type="text" value="<?= $dataEdit['id'] ?>" name="id" id="id" style="display: none;"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <select name="materia" id="materia" class="form-select">
                            <option value="<?= $dataEdit['materia_id'] ?>"><?= $dataEdit['materia'] ?></option>
                            <?php foreach ($materias as $materia) { ?>
                                <option value="<?= $materia['id'] ?>"><?= $materia['materia'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <select name="aula" id="aula" class="form-select">
                            <option value="<?= $dataEdit['id_aula'] ?>"><?= $dataEdit['detalle_aula'] ?></option>
                            <?php foreach ($aulas as $aula) { ?>
                                <option value="<?= $aula['id'] ?>"><?= $aula['detalle_aula'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <select name="turno" id="turno" class="form-select">
                            <option value="<?= $dataEdit['id_turno'] ?>"><?= $dataEdit['nombre_turno'] ?></option>
                            <?php foreach ($turnos as $turno) { ?>
                                <option value="<?= $turno['id'] ?>"><?= $turno['nombre_turno'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" name="guardarEdit" class="btn btn-primary btn-block w-100">Enviar</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>
<?php 
require("../../../autoload.php");
use App\Controllers\MateriaController;
use App\Controllers\TutorController;
$materiaController = new MateriaController();
$tutorController = new TutorController();
$materias = $materiaController->obtenerMateria();
$tutorController->consulta();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center flex-column">
        <h1>Registrar Tutor</h1>
    <form class="border border-dark p-5 bg-dark" method="POST" action="./create.php" autocomplete="off">
        <div class="mb-3">
            <label for="nombre" class="form-label text-white">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label text-white">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
        </div>
        <div class="mb-3">
            <select name="materia" id="materia" class="form-select"">
                <option value="">Seleccionar</option>
                <?php foreach($materias as $materia){?>
                <option value="<?= $materia['id']?>"><?= $materia['materia']?></option>
                <?php }?>
            </select>
        </div>
        <button type="submit" name="guardarTutor" class="w-100 btn btn-primary btn-block">Enviar</button>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>
<?php 
require("../../../autoload.php");
use App\Controllers\AulaController;
$aulaController = new AulaController();
$aulas = $aulaController->obtenerAula();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materia</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center flex-column">
    <a href="../main.php" class="btn btn-success">Inicio</a>
    <table class="table table-responsive mt-3">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">MATERIA</th>
                <th scope="col">ESTADO</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($aulas as $aula){?>
            <tr>
                <th><?= $aula['id']?></th>
                <td><?= $aula['detalle_aula']?></td>
                <td><?= $aula['estado']?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
</body>

</html>
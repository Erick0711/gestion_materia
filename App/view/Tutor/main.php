<?php
require("../../../autoload.php");

use App\Controllers\TutorController;

$tutorController = new TutorController;
$tutores = $tutorController->obtenerTutor();
$buscador = $tutorController->buscador();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor</title>

    <!-- Bootstrap theme -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php $tutorController->consulta(); ?>
    <div class="container vh-100 d-flex justify-content-center align-items-center flex-column">
        <div class="item_link">
            <a href="../main.php" class="btn btn-success">
                Inicio</a>
            <a href="./create.php" class="btn btn-success">
                Nuevo</a>
            <a href="../Materia/main.php" class="btn btn-success">
                Materia</a>
            <a href="../Aula/main.php" class="btn btn-success">
                Aula</a>
        </div>
        <form method="POST" action="./main.php" autocomplete="off" class="mt-5">
            <select name="columna" id="columna">
                <option value="*">Filtro</option>
                <option value="nombre">Nombre</option>
                <option value="apellido">Apellido</option>
                <option value="materia">Materia</option>
            </select>
            <input type="text" name="dato" id="dato" placeholder="Buscar" required>
            <input type="submit" name="busqueda" value="Buscar" class="btn btn-light">
        </form>
        <a href="./main.php" class="btn btn-light">Limpiar</a>
        <table class="table table-responsive mt-3">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">MATERIA</th>
                    <th scope="col">AULA</th>
                    <th scope="col">TURNO</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">ACCION</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($buscador)) { ?>
                    <?php foreach ($tutores as $tutor) { ?>
                        <tr>
                            <th><?= $tutor['id'] ?></th>
                            <td><?= $tutor['nombre'] ?></td>
                            <td><?= $tutor['apellido'] ?></td>
                            <td><?= $tutor['materia'] ?></td>
                            <td><?= $tutor['detalle_aula'] ?></td>
                            <td><?= $tutor['nombre_turno'] ?></td>
                            <td><?= $tutor['estado'] == 1 ? "Activo" : "Inactivo" ?></td>
                            <td>
                                <a href="./edit.php?activar=<?php echo $tutor['id']; ?>">Activar</a>
                                <a href="./main.php?eliminar=<?php echo $tutor['id']; ?>">Eliminar</button>
                                    <a href="./edit.php?edit=<?php echo $tutor['id']; ?>">Editar</button>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } elseif(!empty($buscador)) {
                ?>
                    <?php foreach ($buscador as $dato) { ?>
                        <tr>
                            <th><?= $dato['id'] ?></th>
                            <td><?= $dato['nombre'] ?></td>
                            <td><?= $dato['apellido'] ?></td>
                            <td><?= $dato['materia'] ?></td>
                            <td><?= $dato['detalle_aula'] ?></td>
                            <td><?= $dato['nombre_turno'] ?></td>
                            <td><?= $dato['estado'] == 1 ? "Activo" : "Inactivo" ?></td>
                            <td>
                                <a href="./edit.php?activar=<?php echo $dato['id']; ?>">Activar</a>
                                <a href="./main.php?eliminar=<?php echo $dato['id']; ?>">Eliminar</button>
                                    <a href="./edit.php?edit=<?php echo $dato['id']; ?>">Editar</button>
                            </td>
                        </tr>
                    <?php } ?>
                <?php   } ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="../../assets/js/main.js"></script>

</html>
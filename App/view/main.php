<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


    <div class="container-lg w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="card-body bg-dark rounded d-flex justify-content-cente flex-column">
                <h1 class="card-title text-center text-white fw-bold">Bienvenido</h1>
                <p class="card-text text-white text-center">Click</p>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="gestionar">
                            <bu class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Gestionar Materia
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="gestionar">
                            <div class="accordion-body d-flex flex-column">
                                <a class="btn btn-primary" href="../view/Materia/main.php">Materia</a>
                                <a class="btn btn-primary mt-3" href="../view/Tutor/main.php">Tutor</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
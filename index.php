<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <title>Biblioteca</title>
</head>
<body>
    <?php
        include './controllers/controller.insertarLibro.php'
    ?>
    <?php 
        include './controllers/controller.libros.php';
        $libros = readData();
    ?>
    <?php 
        include './components/form.php'
    ?>
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container-fluid ">
            <a class="navbar-brand text-white" href="index.php">LA ESTRELLITA</a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ingresar nuevo libro</button>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4" style="min-height: 100vh;">
        <div class="row d-flex justify-content-center">
            <?php foreach($libros as $libro) {?>
                <div class="card col-12 col-md-6 col-lg-4 m-1" style="width: 18rem;">
                    <img src="./assets/image.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $libro[0] ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $libro[1] ?></li>
                        <li class="list-group-item"><?php echo $libro[2] ?></li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
    <footer class="bg-dark p-4 d-flex justify-content-between text-white" >
        <p>Kevin Eduardo Sanchez Velasquez</p>
        <p>20240522</p>
    </footer>
</body>
</html>
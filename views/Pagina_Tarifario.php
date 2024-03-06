<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Tarifario</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <?php
    echo file_get_contents('../includes/header.html');
    ?>

    <!--Contenido Tarifario-->
    <section class="Nosotros" style="background-image: url(../assets/images/tarifario_fondo.png); background-size: cover; ">
        <div class="container ">
            <div class="container text-center" style="padding-top: 250px; padding-bottom: 30px;">
                <div class="row text-white" style="align-items: center; background-color: rgb(158, 12, 38); border-radius: 30px;">
                    <div class="col">
                        <div class="" alt="...">
                            <h1>Ruta 1</h1>
                        </div>
                    </div>
                    <div class="col">
                        <strong>Turno - Mañana</strong> 
                    </div>
                    <div class="col">
                        <strong> S/. 30.00</strong> 
                    </div>
                </div>
            </div>
            <div class="container text-center" style="padding-bottom: 100px;">
                <div class="row text-white" style="align-items: center; background-color: rgb(158, 12, 38); border-radius: 30px;">
                    <div class="col">
                        <div class="" alt="...">
                            <h1>Ruta 2</h1>
                        </div>
                    </div>
                    <div class="col">
                        <strong>Turno - Tarde</strong>
                    </div>
                    <div class="col">
                        <strong>S/. 30.00</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Components Footer -->
    <?php echo file_get_contents("../includes/footer.html") ?>

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
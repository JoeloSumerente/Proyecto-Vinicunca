<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <?php
    echo file_get_contents('../includes/header.html');
    ?>

    <!--Contenido blog-->
    <section class="container" id="galeria">
        <div class="text-center p-5">
            <h1>Blog</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ullam tenetur pariatur, quaerat itaque harum, tempora nostrum enim aliquam natus iure corporis blanditiis. Nemo neque non accusamus accusantium in consequuntur!</p>
        </div>
        <div class="row text-start">
            
            <hr>
            <div class="col-lg-6 col-sm-12">
                <div class="card mb-3">
                    <img src="../assets/images/galeria_imagen5.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
            <div class="card mb-3">
                    <img src="../assets/images/galeria_imagen6.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
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
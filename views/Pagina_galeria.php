<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <?php
    echo file_get_contents('../includes/header.html');
    ?>

    <!-- Galeria -->
    <section class="container" id="galeria">
        <div class="text-center p-5">
            <h1>Galeria</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ullam tenetur pariatur, quaerat itaque harum, tempora nostrum enim aliquam natus iure corporis blanditiis. Nemo neque non accusamus accusantium in consequuntur!</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="../assets/images/galeria_imagen1.webp" alt="" data-bs-toggle="modal" data-bs-target="#mostrar_Mapa">
                <!-- Ventan Flotatnte MAPA -->
                <div class="modal fade" id="mostrar_Mapa" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Titulo de Ventana flotante -->
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Mapa de Ruta</h1>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- Contenido de Ventana flotante -->
                                <div class="modal-body">
                                    <div class="card">
                                        <!-- Imagen Mapa de Vinicunca -->
                                        <img src="../assets/images/galeria_imagen1.webp" class="card-img-top" alt="mapa_Vinicunca">                                        
                                    </div>
                                </div>                               
                            </div>
                        </div>    
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="../assets/images/galeria_imagen2.webp" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="../assets/images/galeria_imagen3.webp" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="../assets/images/galeria_imagen4.webp" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="../assets/images/galeria_imagen5.webp" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="../assets/images/galeria_imagen6.webp" alt="">
            </div>
        </div>
    </section>

    <!-- Components Footer -->
    <?php echo file_get_contents("../includes/footer.html") ?>

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
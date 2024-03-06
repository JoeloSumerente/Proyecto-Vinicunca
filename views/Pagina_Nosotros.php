<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Nosotros</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <?php
    echo file_get_contents('../includes/header.html');
    ?>

    <!--Contenido Nosotros-->
    <section class="Nosotros" style="background-image: url(img/section_Background_Img_APP.png); background-size: covers; ">
        <div class="container p-5">
            <div class="row" style="align-items: center;">
                <!--texto izquierda de contenido Nosotros-->
                <div class="col-md-6">
                    <div class="p-4">
                        <div class="card-body">
                            <h2 class="card-title text-center ">Nosotros</h2>
                            <hr>
                            <p class="card-text" style="text-align: justify;">
                                La Gerencia Regional de Producción es el órgano desconcentrado de segundo nivel organizacional, responsable de planificar, proponer, dirigir, ejecutar y coordinar la política regional en materia de micro y pequeña empresa, pesquería e industria, establecidas en los artículos 48°, 52° y 54° de la Ley Orgánica de Gobiernos Regionales, normas sectoriales y demás normas dictadas por las gerencias de la sede central relacionadas en la cadena de valor público en los procesos de gobernanza, desarrollo del producto, articulación comercial y facilitación de la calidad. Su sigla es GEREPRO.
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <!--imagen de contenido Nosotros-->
                <div class="col-md-6">
                    <img src="../assets/images/nosotros_Gerente.webp" class="img-fluid p-4" alt="Imagen">
                </div>

            </div>
            <div class="row text-white" style="align-items: center; background-color: rgb(158, 12, 38); border-radius: 30px;">
                <!--texto izquierda de contenido Nosotros MISIÓN-->
                <div class="col-md-6">
                    <div class="p-4">
                        <div class="card-body">
                            <h2 class="card-title text-center ">Misión</h2>
                            <hr>
                            <p class="card-text" style="text-align: justify; ">
                                Organizar y conducir la gestión pública, de acuerdo a sus funciones y competencias institucionales señaladas por Ley, alineadas a la misión del Gobierno Regional Cusco, en el marco de las políticas Nacionales, Sectoriales y Regionales, a fin de contribuir al desarrollo integral de la Región .
                                Desarrolla sus funciones, dentro del marco de la Nueva Gestión Pública, con instrumentos de gestión institucional organizados de acuerdo a la perspectiva de su visión, supervisa y evalúa permanentemente los procesos de la cadena de valor de los productos que ofrece para su mejora continua.
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <!--texto derecha de contenido Nosotros VISIÓN-->
                <div class="col-md-6">
                    <div class="p-4">
                        <div class="card-body">
                            <h2 class="card-title text-center ">Visión</h2>
                            <hr>
                            <p class="card-text" style="text-align: justify; ">
                                Organizar y conducir la gestión pública, de acuerdo a sus funciones y competencias institucionales señaladas por Ley, alineadas a la misión del Gobierno Regional Cusco, en el marco de las políticas Nacionales, Sectoriales y Regionales, a fin de contribuir al desarrollo integral de la Región .
                                Desarrolla sus funciones, dentro del marco de la Nueva Gestión Pública, con instrumentos de gestión institucional organizados de acuerdo a la perspectiva de su visión, supervisa y evalúa permanentemente los procesos de la cadena de valor de los productos que ofrece para su mejora continua.
                            </p>
                            <hr>
                        </div>
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
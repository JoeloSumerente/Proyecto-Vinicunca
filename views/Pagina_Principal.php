<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Vininunca</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <!-- Components Navbar -->
    <?php echo file_get_contents('./includes/header.html'); 
    ?>

    <!-- Cuerpo - Contenido -->
    <main>
        <!-- Seccion Carrousel  - Contenido Historia - Contenido APP -->
        <?php echo file_get_contents('./includes/section_carrousel.html'); 
            echo file_get_contents('./includes/section_historia.html');
            echo file_get_contents('./includes/section_contenido_app.html');
        ?> 
    </main>

    <!-- Components Footer -->
    <?php echo file_get_contents("./includes/footer.html")?>
    
    <!-- SCRIPT BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
</body>
</html>
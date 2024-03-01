<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Pago</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="../assets/style.css">
    
</head>
</head>
<body>
    <!-- Componente Cabezera -->
    <?php echo file_get_contents('../includes/header.html'); ?>

    <!-- Seccion -->
    <section class="container">
        <div class="row mt-3">
            <!-- 1ra Columna Formulario Comprador -->
            <form class="col-sm-12 cold-md-6 col-lg-6 mb-3 border-3 rounded-2 mx-auto">
                <h1 class="text-center">Reserva de Boletas</h1>
                <!-- Cuadro Informativo -->
                <div class="row">
                    <div class="form-floating col-12 col-md-12 col-lg-12 mb-3">
                        <div class="card">
                            <div class="card-header">
                                Informacion Importante 
                            </div>
                            <div class="card-body">
                                <ul class="card-text">
                                    <li>Maximo 5 visitantes por reserva como Persona Natural y 10 visitantes como Personsa Juridica.</li>
                                    <li>Son menores todos los visitantes entre los 3 y 17 años.</li>
                                    <li>Niños menores a 3 años no pagan, previa presentación de un documento, pasaporte o DNI que acredite la edad.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- 1er Formulario T. Persona - Fecha Reserva - Tarifa - Rutas -->
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="tipo_Persona">
                                <option selected disabled></option>
                                <option value="1">Persona Natural</option>
                                <option value="2">Persona Juridica</option>
                            </select>
                            <label for="tipo_Persona"> Tipo de Persona</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 mb-3">
                        <div class="form-floating"> 
                            <select class="form-select" id="seleccion_Tarifa">
                                <option selected disabled></option>
                                <option value="1">Tarifa General - Visitantes Extranjeros</option>
                                <option value="2">Tarifa General - Visitantes Nacionales</option>
                            </select>
                            <label for="seleccion_Tarifa">Tarifas</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 mb-3">
                        <div class="form-floating"> 
                            <select class="form-select" id="seleccion_Ruta">
                                <option selected disabled></option>
                                <option value="1">Circuito A</option>
                                <option value="2">Circuito B</option>
                                <option value="3">Circuito C</option>
                                <option value="4">Circuito D</option>
                            </select>
                            <label for="seleccion_Ruta">Rutas</label>
                        </div>
                    </div>
                    

                </div>

                <div class="row">
                    <!-- Formulario Acordion Horarios -->
                    <div class="col-sm-12 col-md-12 cold-lg-12 border-3 rounded-2 mx-auto mb-3">
                        <div class="col-12 col-md-12 col-lg-12 mb-3">
                            <div class="form-floating">
                                <input class="form-control" type="date" id="seleccion_Fecha_Reserva" min='<?php echo date('Y-m-d');?>'>
                                <label for="seleccion_Fecha_Reserva">Fecha Reserva</label>
                            </div>
                        </div>
                        <div class="card">
                            <div class="accordion" id="acordion_Horarios">
                                <!-- 1er Acordion - Fecha Actual -->
                                <div class="accordion-item">
                                    <button class="form-floating accordion-header accordion-button" type="button" id="seleccion_Horarios" data-bs-toggle="collapse" data-bs-target="#panel_Horario_Hoy" aria_expanded="true" aria-controls="panel_Horario_Hoy">
                                        <label for="seleccion_Horarios">Horarios</labe>
                                    </button>
                                    <!-- Estructura Horarios -->
                                    <div class="accordion-collapse collapse" id="panel_Horario_Hoy">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <!-- 1er Horario -->
                                                <div class ="card-text-center col-sm-2 col-md-4 col-lg-4 mb-3">
                                                    <div class="btn-group gap-2" role="group">
                                                        <div class="card-body">
                                                            <input type="radio" class="btn-check" name="boton_Horarios" id="horario01" autocomplete="off">
                                                            <label class="btn btn-outline-primary" for="horario01">
                                                                <h3 class="card-title"> 07:00 - 09:00</h3>
                                                                <p class="card-text"> 101 CUPOS DISPONIBLES</p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 2er Horario -->
                                                <div class ="card-text-center col-sm-2 col-md-4 col-lg-4 mb-3">
                                                    <div class="btn-group gap-3" role="group">
                                                        <div class="card-body">
                                                            <input type="radio" class="btn-check" name="boton_Horarios" id="horario02" autocomplete="off" disabled>
                                                            <label class="btn btn-outline-secondary" for="horario02">
                                                                <h3 class="car-title"> 09:00 - 11:00</h3>
                                                                <p class="card-text"> 0 CUPOS AGOTADO </p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 3er Horario -->
                                                <div class ="card-text-center col-sm-2 col-md-4 col-lg-4 mb-3">
                                                    <div class="btn-group gap-3" role="group">
                                                        <div class="card-body">
                                                            <input type="radio" class="btn-check" name="boton_Horarios" id="horario03" autocomplete="off" disabled>
                                                            <label class="btn btn-outline-secondary" for="horario03">
                                                                <h3 class="car-title"> 11:00 - 13:00</h3>
                                                                <p class="card-text"> 0 CUPOS AGOTADO </p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <!-- 4to Horario -->
                                                <div class ="card-text-center col-sm-4 col-md-4 col-lg-4 col-md-2 mb-3">
                                                    <div class="btn-group gap-3" role="group">
                                                        <div class="card-body">
                                                            <input type="radio" class="btn-check" name="boton_Horarios" id="horario04" autocomplete="off" disabled>
                                                            <label class="btn btn-outline-secondary" for="horario04">
                                                                <h3 class="car-title"> 13:00 - 15:00</h3>
                                                                <p class="card-text"> 0 CUPOS AGOTADO</p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 5to Horario -->
                                                <div class ="card-text-center col-sm-2 col-md-2 col-lg-4 mb-3">
                                                    <div class="btn-group gap-3" role="group">
                                                        <div class="card-body">
                                                            <input type="radio" class="btn-check" name="boton_Horarios" id="horario05" autocomplete="off">
                                                            <label class="btn btn-outline-primary" for="horario05">
                                                                <h3 class="car-title"> 15:00 - 17:00</h3>
                                                                <p class="card-text"> 129 CUPOS DISPONIBLES</p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 6to Horario -->
                                                <div class ="card-text-center col-sm-2 col-md-4 col-lg-4 mb-3">
                                                    <div class="btn-group gap-3" role="group">
                                                        <div class="card-body">
                                                            <input type="radio" class="btn-check" name="boton_Horarios" id="horario06" autocomplete="off">
                                                            <label class="btn btn-outline-primary" for="horario06">
                                                                <h3 class="car-title"> 17:00 - 19:00</h3>
                                                                <p class="card-text"> 197 CUPOS DISPONIBLES</p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2do Formulario Adulto - Adulto Mayor - Niños -->
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="form-floating mb-3">
                            <div class="container">
                                <div class="form-control btn-group" role="group">
                                    <div class="col-md">
                                        <label for="tipo_Adultos"> Adulto</label>
                                    </div>
                                    <div class="">
                                    <button class="btn btn-outline-danger" type="button"> 
                                        <i class="bi bi-dash-circle text-dark"></i>
                                    </button>
                                    <span>
                                        <?php 
                                        // include "../controllers/botones.php";
                                        ?> 
                                    </span>
                                    <button class="btn btn-outline-danger" type="button"> 
                                        <i class="bi bi-plus-circle text-dark"></i>
                                    </button>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- <div class="form-floating">
                                <input class="form-control" type="number" id="tipo_Adultos" min="0" max="10">
                                <label for="tipo_Adultos"> Adulto</label>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-12">
                        <div class="form-floating mb-3">
                            <input class="form-control" type="numer" id="tipo_Adulto_Mayor" min="0" max="10">
                            <label for="tipo_Adulto_Mayor">Adulto Mayor</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-12">
                        <div class="form-floating mb-3">
                            <input class="form-control" type="numer" id="tipo_Niños" min="0" max="10">
                            <label for="tipo_Niños">Niños (3 a 17 años)</label>
                        </div>
                    </div>
                </div>
                <!-- 3ro Info Total - Precio -->
                <div class="row">
                    <div class="d-flex mb-3">
                        <div class="p-2">
                            <h4>
                                Total <span class="badge rounded-pill bg-danger">3</span>
                            </h4>    
                        </div>
                        <div class="ms-auto p-2">
                            <h4>
                                s/ 220.00
                            </h4>
                        </div>
                    </div>
                </div>
                <!-- Boton Buscar Horario -->
                <!-- <div class="d-grid gap-2 col-12 col-md-12 col-lg-12 mx-auto mt-3">
                    <a href="./Pagina_Compra_Realizada.php" class="btn btn-danger btn-lg mb-3">Registrar Pasajeros</a>
                </div> -->
            </form>
            <!-- 2da Columna Modulo de Pagos -->
            <div class="col-sm-12 cold-md-6 col-lg-6 mx-auto pb-3">
                <div class="card mt-3">
                    <h4 class="card-header">Modulo de Pago</h4>
                    <!--1.- PAGO VISA -->
                    <button class="btn btn-primary btn-lg col-md-6 my-3 mx-auto " type="button" data-bs-toggle="modal" data-bs-target="#pago_Visa"> 
                        VISA
                    </button>
                    <!--Ventana Flotante PAGO VISA -->
                    <div class="modal fade" id="pago_Visa" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Pago Visa</h1>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- Contenido del Modal -->
                                <div class="modal-body">
                                    <!-- Campo Numero Tarjeta -->
                                    <div class="input-group mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" id="num_Tarjeta_Visa" placeholder="num_Tarjeta">
                                            <label for="num_Tarjeta_Visa">Numero de Tarjeta</label>
                                        </div>
                                        <!-- Icono -->
                                        <span class="input-group-text">
                                            <i class="bi bi-credit-card text-dark"></i>
                                        </span>   
                                    </div>
                                    <!-- Fila Canpos Año|CVV -->
                                    <div class="row">
                                        <!-- Campo Año -->
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <div class="form-floating">
                                                    <input class="form-control" type="text" id="mm_AA_Visa" placeholder="MM/AA">
                                                    <label for="mm_AA_Visa">MM/AA</label>
                                                </div>
                                                <!-- Icono -->
                                                <span class="input-group-text">
                                                    <i class="bi bi-calendar text-dark"></i>
                                                </span>   
                                            </div>
                                        </div>
                                        <!-- Campo CVV -->
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <div class="form-floating">
                                                    <input class="form-control" type="text" id="cvv_Visa" placeholder="CVV">
                                                    <label for="cvv_Visa">CVV</label>
                                                </div>
                                                <span class="input-group-text">
                                                    <i class="bi bi-credit-card-2-back text-dark"></i>
                                                </span>   
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Campo Email -->
                                    <div class="input-group">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" id="email_Visa" placeholder="E-mail">
                                            <label for="email_Visa">E-mail</label>
                                        </div>
                                        <span class="input-group-text">
                                            <i class="bi bi-envelope-at text-dark"></i>
                                        </span>   
                                    </div>
                                </div>
                                <!-- Titulo de Precio -->
                                <div>
                                    <h2 class="card-title text-center">s/ 220.00</h2>
                                    <p class="card-text text-center">Monto a Pagar</p>
                                </div>
                                
                            </div>
                        </div>    
                    </div>

                    <!--2.- PAGO YAPE -->
                    <button class="btn btn-warning btn-lg col-md-6 my-3 mx-auto " type="button" data-bs-toggle="modal" data-bs-target="#pago_Yape"> 
                        YAPE
                    </button>
                    <!-- Ventan Flotatnte PAGO YAPE -->
                    <div class="modal fade" id="pago_Yape" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Titulo de Ventana flotante -->
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Pago Yape</h1>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- Contenido de Ventana flotante -->
                                <div class="modal-body">
                                    <div class="card">
                                        <!-- Imagen Yape -->
                                        <img src="../assets/images/qr_Yape.jpeg" class="card-img-top" alt="QR_YAPE">
                                        <!-- Titulo de Compra -->
                                        <div class="card-body">
                                            <h2 class="card-title text-center">s/220.00</h2>
                                            <p class="card-text text-center">Monto a Pagar</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-4">
                                    <div class="d-grid px-3 pt-3">
                                        <a class="btn btn-danger btn-lg" type="button" href="./Pagina_Compra_Realizada.php">PAGAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Pie de Pagina | Footer -->
    <?php echo file_get_contents('../includes/footer.html'); ?>

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>
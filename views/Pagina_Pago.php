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
            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto pb-3">
                <!-- Campos Obligatorios -->
                <div class="card mt-3 needs-validation was-validated">
                    <h4 class="card-header">
                        Datos del Comprador
                    </h4>
                    <!-- Campo Selector Tipo Documento -->
                    <div class="col-sm-12 col-md-12 px-3 mt-3">
                        <div class="form-floating ">
                            <select class="form-select" id="tipo_Documento_Pasajero" required>
                                <option selected disabled></option>
                                <option value="1"> RUC</option> 
                                <option value="2">DNI</option>
                                <option value="3">Carnet de Extranjeria</option>
                                <option value="4"> Pasaporte</option>
                            </select>
                            <label for="tipo_Documento_Pasajero">
                            Tipo de Documento*</label>
                            <div class="invalid-feedback">Campo Obligatorio</div>
                        </div>
                    </div>
                    <!-- Campo Num Documento  -->
                    <div class="col-sm-12 cold-md-3 px-3 my-3">
                        <div class="form-floating">
                            <input class="form-control" type="text" id="num_Documento_Comprador" required>
                            <label for="num_Documento_Comprador">N° Documento* / Pasaporte* / Carnet de Extranjeria*</label>
                            <div class="invalid-feedback">Campo Obligatorio</div>
                        </div>
                    </div>
                    <!-- Campo Nombre o Racon Social -->
                    <div class="col-sm-12 cold-md-3 px-3 mb-3">
                        <div class="form-floating">
                            <input class="form-control" type="text" id="nombre_Comprador" required>
                            <label for="num_Documento_Comprador">Nombre o Razon Social*</label>
                            <div class="invalid-feedback">Campo Obligatorio</div>
                        </div>
                    </div>
                    <!-- Campo Direccion -->
                    <div class="col-sm-12 cold-md-3 px-3 mb-3">
                        <div class="form-floating">
                            <input class="form-control" type="text" id="direccion_Comprador" required>
                            <label for="direccion_Comprador">Direccion*</label>
                            <div class="invalid-feedback">Campo Obligatorio</div>
                        </div>
                    </div>
                    <!-- Campo Telefono -->
                    <div class="col-sm-12 cold-md-3 px-3 mb-3">
                        <div class="form-floating">
                            <input class="form-control" type="text" id="telefono_Comprador" required>
                            <label for="telefono_Comprador">Telefono*</label>
                            <div class="invalid-feedback">Campo Obligatorio</div>
                        </div>
                    </div>
                    <!-- Campo Correo -->
                    <div class="col-sm-12 cold-md-3 px-3 mb-3">
                        <div class="form-floating">
                            <input class="form-control" type="text" id="correo_Comprador" required>
                            <label for="correo_Comprador">Correo*</label>
                            <div class="invalid-feedback">Campo Obligatorio</div>
                        </div>
                    </div>
                    <!-- Checkbox Politicas - Datos -->
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <!--Politicas de Privacidad -->
                            <div class="form-check col-md-12 ms-3">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_Politicas" required>
                                <label class="form-check-label" for="checkbox_Politicas"> Politicas de Seguridad</label>
                                <div class="invalid-feedback">Debe de estar deacuerdo con los terminos</div>
                            </div>
                            <!-- Tratamiento de Datos -->
                            <div class="form-check col-md-12 ms-3 mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_Politicas" required>
                                <label class="form-check-label" for="checkbox_Politicas"> Tramiento de Datos</label>
                                <div class="invalid-feedback">Debe de estar deacuerdo con los terminos</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <!-- Boton de Pagar -->
                                <div>
                                    <div class="d-grid p-3">
                                        <a class="btn btn-danger btn-lg" type="button" href="./Pagina_Compra_Realizada.php">PAGAR</a>
                                    </div>
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
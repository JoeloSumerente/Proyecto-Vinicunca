<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Boletos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Icon Bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <!-- Componente Cabezera -->
    <?php echo file_get_contents('../includes/header.html'); ?>

    <!-- Seccion Reserva -->
    <section class="container">
        <div class="row mt-3">
            <!-- 1ra Columna Datos Informativos -->
            <div class="col-sm-12 cold-md-5 col-lg-5 mb-3 border-3 rounded-2 mx-auto">
                <div class="card">
                    <img src="../assets/images/montaña_7_Colores.webp" class="card-img-top" alt="Machupichu">
                    <div class="card-header">
                        <!-- Pestañas -->
                        <ul class="nav nav-tabs nav-justified mb-3" id="menu_Pestañas" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tarifas-Tab" data-bs-toggle="tab" data-bs-target="#pestañas_Tarifas" type="button" role="tab" aria-controls="pestañas_Tarifas" aria-selected="true">TARIFAS</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rutas-Tab" data-bs-toggle="tab" data-bs-target="#pestañas_Rutas" type="button" role="tab" aria-controls="pestañas_Rutas" aria-selected="false">RUTAS</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="recomendaciones-Tab" data-bs-toggle="tab" data-bs-target="#pestañas_Recomendaciones" type="button" role="tab" aria-controls="pestañas_Recomendaciones" aria-selected="false">RECOMENDACIONES</button>
                            </li>
                        </ul>
                        <!-- Pestaña Tarifas -->
                        <div class="tab-content" id="contenido_Pestañas">
                            <div class="tab-pane fade show active" id="pestañas_Tarifas" role="tabpanel" aria-labelledby="tarifas_Tab" tabindex="0">
                                <div class="accordion" id="acordion_Tarifa">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"data-bs-target="#panel_Tarifa_General" aria-expanded="true" aria-controls="panel_Tarifa_General">
                                                Tarifa General - Visitantes extranjeros
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse show" id="panel_Tarifa_General">
                                            <div class="accordion-body">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary mb-3"> Adulto  -  $40.00</a> 
                                                </div>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary mb-3"> Adulto Mayor - $30.00 </a>
                                                </div>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary mb-3"> Niños - $20.00 </a>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"data-bs-target="#panel_Tarifa_Nacional" aria-expanded="true" aria-controls="panel_Tarifa_Nacional">
                                            Tarifa General - Visitantes Nacionales
                                        </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="panel_Tarifa_Nacional">
                                            <div class="accordion-body">
                                                <div class="list-group">
                                                    <p href="#" class="list-group-item list-group-item-action list-group-item-primary mb-3"> 
                                                        Adulto - s/ 100.00 </p>
                                                </div>
                                                <div class="list-group">
                                                    <p href="#" class="list-group-item list-group-item-action list-group-item-primary mb-3"> Adulto Mayor - s/ 70.00 </p>
                                                </div>
                                                <div class="list-group">
                                                    <p href="#" class="list-group-item list-group-item-action list-group-item-primary mb-3"> Niños - s/ 50.00 </p>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Pestaña Rutas -->
                        <div class="tab-pane fade mb-3" id="pestañas_Rutas" role="tabpanel" aria-labelledby="rutas_Tab" tabindex="0">
                            <div class="accordion" id="acordion_Ruta">
                                <div class="accordion-item">
                                    <h2 class="accordion-header"> 
                                        <button
                                        class="accordion-button"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#panel_Rutas_A" aria-expanded="true" aria-controls="panel_Rutas_A">
                                            Ruta A
                                        </button>
                                    </h2>
                                    <div class="accordion-collapse collapse show" id="panel_Rutas_A">
                                        <div class="accordion-body">
                                            <div class="list-group">
                                                <p href="#" class="list-group-item list-group-item-action list-group-item-primary mb-3">
                                                    El circuito A tiene comprendido 45 minutos de trayectoria, comenzando desde la entrada, pasando por diferentes atractivos turisticos y terminando en la imponente salida.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header"> 
                                        <button
                                        class="accordion-button"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#panel_Rutas_B" aria-expanded="true" aria-controls="panel_Rutas_B">
                                            Ruta B
                                        </button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="panel_Rutas_B">
                                        <div class="accordion-body">
                                            <div class="list-group">
                                                <p href="#" class="list-group-item list-group-item-action list-group-item-primary mb-3">
                                                    El circuito B tiene comprendido 45 minutos de trayectoria, comenzando desde la entrada, pasando por diferentes atractivos turisticos y terminando en la imponente salida.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header"> 
                                        <button
                                        class="accordion-button"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#panel_Rutas_C" aria-expanded="true" aria-controls="panel_Rutas_C">
                                            Ruta C
                                        </button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="panel_Rutas_C">
                                        <div class="accordion-body">
                                            <div class="list-group">
                                                <p href="#" class="list-group-item list-group-item-action list-group-item-primary mb-3">
                                                    El circuito C tiene comprendido 45 minutos de trayectoria, comenzando desde la entrada, pasando por diferentes atractivos turisticos y terminando en la imponente salida.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header"> 
                                        <button
                                        class="accordion-button"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#panel_Rutas_D" aria-expanded="true" aria-controls="panel_Rutas_D">
                                            Ruta D
                                        </button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="panel_Rutas_D">
                                        <div class="accordion-body">
                                            <div class="list-group">
                                                <p href="#" class="list-group-item list-group-item-action list-group-item-primary mb-3">
                                                    El circuito D tiene comprendido 45 minutos de trayectoria, comenzando desde la entrada, pasando por diferentes atractivos turisticos y terminando en la imponente salida.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pestaña Recomendaciones -->
                        <div class="tab-pane fade mb-3" id="pestañas_Recomendaciones" role="tabpanel" aria-labelledby="recomendaciones-Tab" tabindex="0"> 
                            <h6>Durante su visita a los destinos turisticos, se encuentran prohibido los siguientes:</h6>                                      
                            <ol>
                                <li>Prohibido el ingresar de alimentos y menaje.</li>
                                <li>Prohibido el ingresar con cualquier sustancia ilegal o bajo sus efectos.</li>
                                <li>Prohibido el ingresar con cualquier tipo de bebida alcoholica.</li>
                                <li>Prohibido realizar cualquier tipo de pinta o grafitti.</li>
                                <li>Prohibido el ingreso de cualquier tipo de coche de bebe.</li>
                                <li>Prohibido el ingresar con cualquier tipo de arma punzocortante.</li>
                                <li>Prohibido apoyarse en los muros y/o estructuras, mover, tocar o extraer elementos liticos.</li>
                                <li>Prohibido arrojar residuos de cualquier tipo.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                </div>
            </div>  

            <!-- 2da Columna Formulario de Reserva -->
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
                        <div>
                        <!-- Boton de Pagar -->
                        <div class="d-grid p-3">
                            <a class="btn btn-danger btn-lg" type="button" href="./Pagina_Registro_Pasajeros.php">PAGAR</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
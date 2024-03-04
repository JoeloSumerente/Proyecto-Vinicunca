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
            <!-- 1ra Columna Registro de Pasajeros -->
            <div class="col-sm-12 cold-md-8 col-lg-8 border-3 rounded-2 mx-auto my-3">
                <h1>Registro de Pasajeros</h1>
                <div class="accordion" id="acordion_Registro_Pasajeros">
                    <!-- 1er Acordion Formulario - Pasajero -->
                    <div class="accordion-item">
                        <!-- Titulo -->
                        <h2 class="accordion-header">
                            <button class="accordion-button d-inline-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#panel_Registro_Pasajeros_01" aria_expanded="true" aria-controls="panel_Registro_Pasajeros01">
                                01 Pasajero
                            </button>
                        </h2>
                        <!-- Campos de Registro Pasajero -->
                        <div class="accordion-collapse collapse show" id="panel_Registro_Pasajeros_01">
                            <div class="accordion-body">
                                <!-- Formulario Campos Obligatorios -->
                                <div class="row" novalidate>
                                    <!-- Selector Tipo de Documento -->
                                    <div class="col-sm-12 col-md-3 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <select class="form-select" id="tipo_Documento_Pasajero" required>
                                                <option selected disabled></option>
                                                <option value="1">DNI</option>
                                                <option value="2">Carnet de Extranjeria</option>
                                                <option value="3"> Pasaporte</option>
                                            </select>
                                            <label for="tipo_Documento_Pasajero">
                                                Tipo de Documento*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Campo Numero de Documento -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <input class="form-control" type="text" id="num_Documento_Pasajero" required>
                                            <label for="num_Documento_Pasajero">N° Documento*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>
                                    <!-- Selector de Genero -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <select class="form-select" id="tipo_Genero_Pasajero" required>
                                                <option selected disabled></option>
                                                <option value="1">Femenino</option>
                                                <option value="2">Masculino</option>
                                                <option value="3"> Binario</option>
                                            </select>
                                            <label for="tipo_Genero_Pasajero">
                                                Genero*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Campo Fecha de Nacimiento -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <input class="form-control" type="date" id="fecha_Nacimiento_Pasajero" required>
                                            <label for="fecha_Nacimiento_Pasajero">Fecha de Nacimiento*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Campo Nombres -->
                                    <div class="col-md-4 mb-4">
                                        <div class="form-floating needs-validation was-validated">
                                            <input class="form-control" type="text" id="nombre_Pasajero" required>
                                            <label for="nombre_Pasajero">Nombres*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Campo Apellidos -->
                                    <div class="col-md-4 mb-4">
                                        <div class="form-floating needs-validation was-validated">
                                            <input class="form-control" type="text" id="apellido_Pasajero" required>
                                            <label for="apellido_Pasajero"> Apellidos*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Selector Nacionalidad -->
                                    <div class="col-md-4 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <select data-bs-spy="scroll" data-bs-offset="0" data-bs-smooth-scroll="true" class="form-select" tabindex="0" id="tipo_Nacionalidad_Pasajero" required>
                                                <option selected disabled></option>
                                                <option value="1">Alemania</option>
                                                <option value="2">Argentina</option>
                                                <option value="3">Australia</option>
                                                <option value="4">Austria</option>
                                                <option value="5">Bolivia</option>
                                                <option value="6">Brasil</option>
                                                <option value="7">Belgica</option>
                                                <option value="8">Canada</option>
                                                <option value="9">Chile</option>
                                                <option value="10">China</option>
                                                <option value="11">Colombia</option>
                                                <option value="12">Costa Rica</option>
                                                <option value="13">Cuba</option>
                                                <option value="14">Dinamarca</option>
                                                <option value="15">Ecuador</option>
                                                <option value="16">España</option>
                                                <option value="17">Finlandia</option>
                                                <option value="18">Francia</option>
                                                <option value="19">Honduras</option>
                                                <option value="20">Italia</option>
                                                <option value="21">Japon</option>
                                                <option value="22">Kuwait</option>
                                                <option value="23">Lituania</option>
                                                <option value="24">Marruecos</option>
                                                <option value="25">Noruega</option>
                                                <option value="26">Nueva Zelanda</option>
                                                <option value="27">Paraguay</option>
                                                <option value="28">Paises Bajos</option>
                                                <option value="29">Peru</option>
                                                <option value="30">Portugal</option>
                                                <option value="31">Rusia</option>
                                                <option value="32">Suecia</option>
                                                <option value="33">Suiza</option>
                                                <option value="34">Ucrania</option>
                                                <option value="35">Uruguay</option>
                                                <option value="36">Venezuela</option>
                                                <option value="37">Otros</option>
                                            </select>
                                            <label for="tipo_Nacionalidad_Pasajero">
                                                Nacionalidad</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Campos Formulario Opcionales -->
                                <div class="row">
                                    <!-- Campo Direccio -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" id="direccion_Pasajero">
                                            <label for="direccion_Pasajero">Direccion</label>
                                        </div>
                                    </div>
                                    <!-- Campo Correo -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="email" id="correo_Pasajero">
                                            <label for="correo_Pasajero">Correo Electronico</label>
                                        </div>
                                    </div>
                                    <!-- Campo Telefono -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" id="telefono_Pasajero">
                                            <label for="telefono_Pasajero"> Telefono</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2do Acordion Formulalrio - Pasajero -->
                    <div class="accordion-item">
                        <!-- Titulo -->
                        <h2 class="accordion-header">
                            <button class="accordion-button d-inline-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#panel_Registro_Pasajeros_02" aria_expanded="true" aria-controls="panel_Registro_Pasajeros_02">
                                02 Pasajero
                            </button>
                        </h2>
                        <!-- Campos de Registro Pasajero -->
                        <div class="accordion-collapse collapse" id="panel_Registro_Pasajeros_02">
                            <div class="accordion-body">
                                <!-- Formulario Campos Obligatorios -->
                                <div class="row" novalidate>
                                    <!-- Selector Tipo de Documento -->
                                    <div class="col-sm-12 col-md-3 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <select class="form-select" id="tipo_Documento_Pasajero" required>
                                                <option selected disabled></option>
                                                <option value="1">DNI</option>
                                                <option value="2">Carnet de Extranjeria</option>
                                                <option value="3"> Pasaporte</option>
                                            </select>
                                            <label for="tipo_Documento_Pasajero">
                                                Tipo de Documento*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Campo Numero de Documento -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <input class="form-control" type="text" id="num_Documento_Pasajero" required>
                                            <label for="num_Documento_Pasajero">N° Documento*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>
                                    <!-- Selector de Genero -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <select class="form-select" id="tipo_Genero_Pasajero" required>
                                                <option selected disabled></option>
                                                <option value="1">Femenino</option>
                                                <option value="2">Masculino</option>
                                                <option value="3"> Binario</option>
                                            </select>
                                            <label for="tipo_Genero_Pasajero">
                                                Genero*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Campo Fecha de Nacimiento -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <input class="form-control" type="date" id="fecha_Nacimiento_Pasajero" required>
                                            <label for="fecha_Nacimiento_Pasajero">Fecha de Nacimiento*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Campo Nombres -->
                                    <div class="col-md-4 mb-4">
                                        <div class="form-floating needs-validation was-validated">
                                            <input class="form-control" type="text" id="nombre_Pasajero" required>
                                            <label for="nombre_Pasajero">Nombres*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Campo Apellidos -->
                                    <div class="col-md-4 mb-4">
                                        <div class="form-floating needs-validation was-validated">
                                            <input class="form-control" type="text" id="apellido_Pasajero" required>
                                            <label for="apellido_Pasajero"> Apellidos*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Selector Nacionalidad -->
                                    <div class="col-md-4 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <select data-bs-spy="scroll" data-bs-offset="0" data-bs-smooth-scroll="true" class="form-select" tabindex="0" id="tipo_Nacionalidad_Pasajero" required>
                                                <option selected disabled></option>
                                                <option value="1">Alemania</option>
                                                <option value="2">Argentina</option>
                                                <option value="3">Australia</option>
                                                <option value="4">Austria</option>
                                                <option value="5">Bolivia</option>
                                                <option value="6">Brasil</option>
                                                <option value="7">Belgica</option>
                                                <option value="8">Canada</option>
                                                <option value="9">Chile</option>
                                                <option value="10">China</option>
                                                <option value="11">Colombia</option>
                                                <option value="12">Costa Rica</option>
                                                <option value="13">Cuba</option>
                                                <option value="14">Dinamarca</option>
                                                <option value="15">Ecuador</option>
                                                <option value="16">España</option>
                                                <option value="17">Finlandia</option>
                                                <option value="18">Francia</option>
                                                <option value="19">Honduras</option>
                                                <option value="20">Italia</option>
                                                <option value="21">Japon</option>
                                                <option value="22">Kuwait</option>
                                                <option value="23">Lituania</option>
                                                <option value="24">Marruecos</option>
                                                <option value="25">Noruega</option>
                                                <option value="26">Nueva Zelanda</option>
                                                <option value="27">Paraguay</option>
                                                <option value="28">Paises Bajos</option>
                                                <option value="29">Peru</option>
                                                <option value="30">Portugal</option>
                                                <option value="31">Rusia</option>
                                                <option value="32">Suecia</option>
                                                <option value="33">Suiza</option>
                                                <option value="34">Ucrania</option>
                                                <option value="35">Uruguay</option>
                                                <option value="36">Venezuela</option>
                                                <option value="37">Otros</option>
                                            </select>
                                            <label for="tipo_Nacionalidad_Pasajero">
                                                Nacionalidad</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Campos Formulario Opcionales -->
                                <div class="row">
                                    <!-- Campo Direccion -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" id="direccion_Pasajero">
                                            <label for="direccion_Pasajero">Direccion</label>
                                        </div>
                                    </div>
                                    <!-- Campo Correo -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="email" id="correo_Pasajero">
                                            <label for="correo_Pasajero">Correo Electronico</label>
                                        </div>
                                    </div>
                                    <!-- Campo Telefono -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" id="telefono_Pasajero">
                                            <label for="telefono_Pasajero"> Telefono</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3ro Acordion Formulalrio - Pasajero -->
                    <div class="accordion-item">
                        <!-- Titulo -->
                        <h2 class="accordion-header">
                            <button class="accordion-button d-inline-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#panel_Registro_Pasajeros_03" aria_expanded="true" aria-controls="panel_Registro_Pasajeros_03">
                                03 Pasajero
                            </button>
                        </h2>
                        <!-- Campos de Registro Pasajero -->
                        <div class="accordion-collapse collapse" id="panel_Registro_Pasajeros_03">
                            <div class="accordion-body">
                                <!-- Formulario Campos Obligatorios -->
                                <div class="row" novalidate>
                                    <!-- Selector Tipo de Documento -->
                                    <div class="col-sm-12 col-md-3 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <select class="form-select" id="tipo_Documento_Pasajero" required>
                                                <option selected disabled></option>
                                                <option value="1">DNI</option>
                                                <option value="2">Carnet de Extranjeria</option>
                                                <option value="3"> Pasaporte</option>
                                            </select>
                                            <label for="tipo_Documento_Pasajero">
                                                Tipo de Documento*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Campo Numero de Documento -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <input class="form-control" type="text" id="num_Documento_Pasajero" required>
                                            <label for="num_Documento_Pasajero">N° Documento*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>
                                    <!-- Selector de Genero -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <select class="form-select" id="tipo_Genero_Pasajero" required>
                                                <option selected disabled></option>
                                                <option value="1">Femenino</option>
                                                <option value="2">Masculino</option>
                                                <option value="3"> Binario</option>
                                            </select>
                                            <label for="tipo_Genero_Pasajero">
                                                Genero*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Campo Fecha de Nacimiento -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <input class="form-control" type="date" id="fecha_Nacimiento_Pasajero" required>
                                            <label for="fecha_Nacimiento_Pasajero">Fecha de Nacimiento*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Campo Nombres -->
                                    <div class="col-md-4 mb-4">
                                        <div class="form-floating needs-validation was-validated">
                                            <input class="form-control" type="text" id="nombre_Pasajero" required>
                                            <label for="nombre_Pasajero">Nombres*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Campo Apellidos -->
                                    <div class="col-md-4 mb-4">
                                        <div class="form-floating needs-validation was-validated">
                                            <input class="form-control" type="text" id="apellido_Pasajero" required>
                                            <label for="apellido_Pasajero"> Apellidos*</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>

                                    <!-- Selector Nacionalidad -->
                                    <div class="col-md-4 mb-3">
                                        <div class="form-floating needs-validation was-validated">
                                            <select data-bs-spy="scroll" data-bs-offset="0" data-bs-smooth-scroll="true" class="form-select" tabindex="0" id="tipo_Nacionalidad_Pasajero" required>
                                                <option selected disabled></option>
                                                <option value="1">Alemania</option>
                                                <option value="2">Argentina</option>
                                                <option value="3">Australia</option>
                                                <option value="4">Austria</option>
                                                <option value="5">Bolivia</option>
                                                <option value="6">Brasil</option>
                                                <option value="7">Belgica</option>
                                                <option value="8">Canada</option>
                                                <option value="9">Chile</option>
                                                <option value="10">China</option>
                                                <option value="11">Colombia</option>
                                                <option value="12">Costa Rica</option>
                                                <option value="13">Cuba</option>
                                                <option value="14">Dinamarca</option>
                                                <option value="15">Ecuador</option>
                                                <option value="16">España</option>
                                                <option value="17">Finlandia</option>
                                                <option value="18">Francia</option>
                                                <option value="19">Honduras</option>
                                                <option value="20">Italia</option>
                                                <option value="21">Japon</option>
                                                <option value="22">Kuwait</option>
                                                <option value="23">Lituania</option>
                                                <option value="24">Marruecos</option>
                                                <option value="25">Noruega</option>
                                                <option value="26">Nueva Zelanda</option>
                                                <option value="27">Paraguay</option>
                                                <option value="28">Paises Bajos</option>
                                                <option value="29">Peru</option>
                                                <option value="30">Portugal</option>
                                                <option value="31">Rusia</option>
                                                <option value="32">Suecia</option>
                                                <option value="33">Suiza</option>
                                                <option value="34">Ucrania</option>
                                                <option value="35">Uruguay</option>
                                                <option value="36">Venezuela</option>
                                                <option value="37">Otros</option>
                                            </select>
                                            <label for="tipo_Nacionalidad_Pasajero">
                                                Nacionalidad</label>
                                            <div class="invalid-feedback">Campo Obligatorio</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Campos Formulario Opcionales -->
                                <div class="row">
                                    <!-- Campo Direccion -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" id="direccion_Pasajero">
                                            <label for="direccion_Pasajero">Direccion</label>
                                        </div>
                                    </div>
                                    <!-- Campo Correo -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="email" id="correo_Pasajero">
                                            <label for="correo_Pasajero">Correo Electronico</label>
                                        </div>
                                    </div>
                                    <!-- Campo Telefono -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="text" id="telefono_Pasajero">
                                            <label for="telefono_Pasajero"> Telefono</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recordatorio -->
                    <div class="form-text text-justify">
                        "¡Recordatorio! Por favor, asegúrate de completar todos los campos obligatorios en el formulario antes de enviar. Tu información es fundamental para brindarte el mejor servicio posible. ¡Gracias por tu colaboración!</div>
                </div>
            </div>
            
            <!-- 2da Columna Modulo de Pagos -->
            <div class="col-sm-12 cold-md-4 col-lg-4 mx-auto my-5">
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
                                <div class="pb-4">
                                    <div class="d-grid px-3 pt-3">
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
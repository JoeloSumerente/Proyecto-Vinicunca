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
            <div class="col-sm-12 cold-md-5 col-lg-5 mt-5 mb-3 border-3 rounded-2 mx-auto">
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
                                <strong>Tarifario Unica General</strong>
                                <ul>
                                    <li> Tarifa General: s/ 30.00</li>

                                </ul>
                                <!-- <div class="accordion" id="acordion_Tarifa">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panel_Tarifa_General" aria-expanded="true" aria-controls="panel_Tarifa_General">
                                                Tarifa General
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse show" id="panel_Tarifa_General">
                                            <div class="accordion-body">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary mb-3"> s/35.00</a>
                                                </div>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary mb-3"> s/50.00</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panel_Tarifa_Nacional" aria-expanded="true" aria-controls="panel_Tarifa_Nacional">
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
                                </div> -->
                            </div>
                            <!-- Pestaña Rutas -->
                            <div class="tab-pane fade mb-3" id="pestañas_Rutas" role="tabpanel" aria-labelledby="rutas_Tab" tabindex="0">
                                <strong> 
                                Ruta Vinicunca
                                </strong>
                                   
                                <p>Vinicunca o Winikunka, llamada también montaña de siete colores, montaña arcoíris o montaña de colores, es una montaña del Perú, con una altitud de 5.200 m s. n.m.</p>
                               <p>Está situada en el camino al nevado Ausangate, en los Andes del Perú, Región Cusco, entre los distritos de Cusipata, provincia de Quispicanchi, y Pitumarca, provincia de Canchis.</p>
                               <p> El recorrido desde la ciudad del cusco es de 2 horas aproximadamente hasta la localidad de Checacupe, a partir de este poblado se recorre por una trocha carrozable, pasando por varias comunidades campesinas hasta arribar a la comunidad de Pampa Chiri, lugar donde termina la carretera e inicia la caminata de 5 km aproximadamente hasta el paso de Vinicunca, donde se puede apreciar la formación natural con forma de Arcoíris, considerado la Montaña de Colores</p>
                            
                               <!-- <div class="accordion" id="acordion_Ruta">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panel_Rutas_A" aria-expanded="true" aria-controls="panel_Rutas_A">
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
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panel_Rutas_B" aria-expanded="true" aria-controls="panel_Rutas_B">
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
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panel_Rutas_C" aria-expanded="true" aria-controls="panel_Rutas_C">
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
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panel_Rutas_D" aria-expanded="true" aria-controls="panel_Rutas_D">
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
                                </div> -->
                            </div>
                            
                            <!-- Pestaña Recomendaciones -->
                            <div class="tab-pane fade mb-3" id="pestañas_Recomendaciones" role="tabpanel" aria-labelledby="recomendaciones-Tab" tabindex="0">
                                <b>CONSEJOS Y RECOMENDACIONES</b>
                                <ol>
                                    <li>Zapatillas de trekking</li>
                                    <li>Ponchos impermeables</li>
                                    <li>Bastones de trekking</li>
                                    <li>Casaca y Pantalón Impermeable</li>
                                    <li>Gorra y gafas de sol.</li>
                                    <li>Papel higiénico y desinfectante de manos</li>
                                    <li>Protector solar</li>
                                    <li>Una mochila pequeña con un ajustador de cintura o cinturón de cadera </li>
                                    <li>Agua, snacks, chocolate</li>
                                    <li>Documentos de identidad</li>
                                </ol>
                                <b>RECUERDA</b>
                                <ol>
                                    <li>Es una caminata de 2 horas aproximadamente, es un trayecto empinado y dificultoso el cual posee una distancia de 5 kilómetros</li>
                                    <li>La mejor época para realizar la caminata a la montaña de colores es en la época de secas entre los meses de marzo a noviembre.</li>
                              <ul> 
                                <b>
                                 <em>Las visitas están permitidas hasta las 2:00pm, por lo tanto recomendamos realizar esta visita desde las 5:00 am hasta las 10:00 (inicio de la caminata, comunidad Campesina Pampa Chiri)</em>
                                </b>
                                </ul>
                                   
                               
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2da Columna Formulario Comprador -->
            <form class="col-sm-12 cold-md-6 col-lg-6 mt-5 mb-3 border-3 rounded-2 mx-auto">
                <!-- <h1 class="text-center">Reserva de Boletas</h1> -->
                <!-- Cuadro Informativo -->
                <div class="row">
                    <div class="form-floating col-12 col-md-12 col-lg-12 mb-3">
                        <div class="card">
                            <div class="card-header text-center">
                                <h2>Reserva de Boletas</h2>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>Persona Natural, maximo 3 visitantes por reserva.</li>
                                    <li>Persona Juridica, maximo 5 visitantes por reserva.</li>
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
                                <option value="1">Tarifa General</option>
                            </select>
                            <label for="seleccion_Tarifa">Tarifa</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="seleccion_Ruta">
                                <option selected disabled></option>
                                <option value="1">Ruta Vinicunca</option>
                            </select>
                            <label for="seleccion_Ruta">Ruta</label>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <!-- Formulario Acordion Horarios -->
                    <div class="col-sm-12 col-md-12 cold-lg-12 border-3 rounded-2 mx-auto mb-3">
                        <div class="col-12 col-md-12 col-lg-12 mb-3">
                            <div class="form-floating">
                            <input class="form-control" type="date" id="fecha_Reserva" onchange="enviarFecha()" min='<?php echo date('Y-m-d'); ?>'>                                <label for="seleccion_Fecha_Reserva">Fecha Reserva</label>
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
                                                <div class="card-text-center col-sm-12 col-md-12 col-lg-12 mb-3 text-center">
                                                    <div class="btn-group gap-2" role="group">
                                                        <div class="card-body">
                                                            <input type="radio" class="btn-check" name="boton_Horarios" id="horario01" autocomplete="off">
                                                            <label class="btn btn-outline-primary" for="horario01">
                                                                <h3 class="card-title"> 05:00 AM - 12:00 PM</h3>
                                                                <p class="card-text"> 101 CUPOS DISPONIBLES</p>
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
                            <div class="form-floating">
                                <input class="form-control" type="number" id="cantidad_Boletos" min="0" max="10">
                                <label for="cantidad_Boletos"> Cantidad de Boletos</label>
                            </div>
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
                <div class="d-grid gap-2 col-12 col-md-12 col-lg-12 mx-auto mt-3">
                    <a href="./Pagina_Registro_Comprador.php" class="btn btn-danger btn-lg mb-3">Comprar Boletos</a>
                </div>
            </form>
        </div>
    </section>

    <!-- Pie de Pagina | Footer -->
    <?php echo file_get_contents('../includes/footer.html'); ?>



    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../assets/crud_Datos.js"></script>
    
</body>

</html>
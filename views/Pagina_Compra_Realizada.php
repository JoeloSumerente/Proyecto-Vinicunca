<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra Realiazada</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

    <!-- Componente Cabezera -->
    <?php echo file_get_contents('../includes/header.html'); ?>

    <!-- Seccion -->
    <section class="container pb-5">
        <div class="row">
            <!-- Contenido Mensaje -->
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card text-center mx-auto mb-3 mt-3">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-check2-circle text-success" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                        </svg>
                    </span>
                    <div class="card-body">
                        <h2 class="card-title">¡Gracias por tu Compra!</h2>
                        <p class="card-text"><small class="text-body-secondary fw-bold">Tu solicitud de compra fue recibida</small></p>
                        <p class="card-text">Tu pedido se encuentra en proceso de validacion. En breve recibiras un correo con el detalle de tu compra.</p>
                        <div class="col-lg-12 mx-auto">
                            <div class="d-inline-flex">
                                <h5 class="card-title mx-3">Codigo de Reserva:</h5>
                                <p class="card-text">B001-00001</p>
                            </div>
                        </div>
                        <div class="col-lg-12 mx-auto">
                            <div class="d-inline-flex">
                                <h5 class="card-text mx-3">Fecha de Compra:</h5>
                                <p>29/02/2024 12:36:21</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Tabla Datos de Compra -->
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-light text-center">
                    <tr>
                        <th scope="col">Fecha de Reserva</th>
                        <th scope="col">Comprador</th>
                        <th scope="col">Boletos Comprados</th>
                        <th scope="col">Medio de Pago</th>
                        <th scope="col">Total</th>
                        <th scope="col">Descargar</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider text-center">
                        <tr>
                            <td>29/02/2024</td>
                            <td>Juan Pozo Calle</td>
                            <td>03 Boletos</td>
                            <td>Visa <p>s/ 90.00</p></td>
                            <td>s/ 90.00</td>
                            <td>
                                <a href="../assets/images/comprobante_pago.pdf">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-filetype-pdf text-danger" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z"/>
                                </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </di>
    </section>

    <!-- Pie de Pagina | Footer -->
    <?php echo file_get_contents('../includes/footer.html'); ?>

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>
<?php
// Fecha de Reserva mediante POST
$fecha_reservada = $_POST['fecha_Reserva'];

//Datos de Conexion
$dsn = 'mysql:host=localhost;dbname=vinicuncademo2';
$username ='root';
$password='';

try {
    $conexion = new PDO($dsn, $username, $password);
    //Consulta Procedimiento Almacenado disponibilida de boletos
    $consulta_sql = $conexion->prepare("CALL mostrar_disponibilidad(:fecha_reservada)");
    $consulta_sql->bindParam(':fecha_reservada', $fecha_reservada, PDO::PARAM_STR);
    $consulta_sql->execute();
    $cupos = $consulta_sql->fetchColumn();
    echo $cupos;
} catch (error) {
    echo 'Error en la consulta: ';
}

?>
<?php
// Fecha de Reserva mediante POST
$fecha_reservada = $_POST['fecha_Reserva'];

//Datos de Conexion
$dsn = 'mysql:host=localhost;dbname=vinicuncademo2';
$username ='root';
$password='';

try {
    $conexion = new PDO($dsn, $username, $password);
    //Consulta Procedimiento Almacenado disponibilida de boletos
    $consulta_sql = $conexion->prepare("CALL mostrar_disponibilidad(:fecha_reservada)");
    $consulta_sql->bindParam(':fecha_reservada', $fecha_reservada, PDO::PARAM_STR);
    $consulta_sql->execute();
    $cupos = $consulta_sql->fetchColumn();
    echo $cupos;
} catch (error) {
    echo 'Error en la consulta: ';
}

?>

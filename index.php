<?php
// Decidir qué plantilla de página cargar según la URL
$page = isset($_GET['page']) ? $_GET['page'] : 'Pagina_Principal';

// Cargar la plantilla correspondiente
switch ($page) {
    case 'Pagina_Principal':
        require_once './views/Pagina_Principal.php';
        break;
    case 'Pagina_Nosotros':
        require_once './views/Pagina_Nosotros.php';
        break;    
    case 'Pagina_Reserva_Boleto':
        require_once './views/Reserva_Boletos.php';
        break; 
    case 'Pagina_Registro_Pasajeros':
        require_once './views/Pagina_Registro_Comprador.php';
        break;    
    case 'Pagina_Pago':
        require_once './views/Pagina_Pago.php';
        break;
    case 'Pagina_Compra_Realizada':
        require_once './views/Pagina_Compra_Realizada.php';
        break;
    case 'example':
        require_once './controllers/botones.php';
        break;           
    // Agregar más casos para otras páginas
    default:
        require_once './Pagina_Principal.php';
        break;
}
// BIENVENIDO

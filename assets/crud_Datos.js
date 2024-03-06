// Fx. para enviar el dato del input calendar y obtener el valor.
function enviarFecha() {
    // Obtener dato por medio del ID 
    var fecha_Reserva = document.getElementById('fecha_Reserva').value;
    // URL pagina destino
    var url = "../models/procesar_Formulario.php";
    // API FETCH: THEN - CATCH
    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'fecha_Reserva=' + encodeURIComponent(fecha_Reserva)
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
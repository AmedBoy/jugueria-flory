<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "intiprda@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

// Enviado la seccion 

// Llamando a los campos
$correo = $_POST['correos'];

// Datos para el correo
$destinatario = "intiprda@gmail.com";
$asunto = "Suscripción desde nuestra web";
$mensaje = "Desea suscribirse a tu web"

$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
echo"<script> 
        alert('Se ha suscrito correctamente,¡Gracias!')
    </script>
"
echo"<script> 
        setTimeout(\"locatio.href='index.html#sabores'\", 3000)
    </script>
"
?>
<?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        // Recoger los datos del formulario  
        $nombre = htmlspecialchars(trim($_POST['contact_name_user_grupoamsi']));  
        $apellido = htmlspecialchars(trim($_POST['contact_name_user_grupoamsi']));  
        $email = htmlspecialchars(trim($_POST['contact_email_user_grupoamsi']));  
        $telefono = htmlspecialchars(trim($_POST['contact_tel_user_grupoamsi']));  
        $extension = htmlspecialchars(trim($_POST['contact_ext_tel_user_grupoamsi']));  
        $comentarios = htmlspecialchars(trim($_POST['contact_comments_user_grupoamsi']));  

        // Validar el correo electrónico  
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
            die("El correo electrónico no es válido.");  
        }  

        // Preparar el contenido del correo  
        $to = "fjlservicio@gmail.com";  
        $subject = "Nuevo contacto desde el formulario";  
        $message = "Nombre: $nombre $apellido\n";  
        $message .= "Email: $email\n";  
        $message .= "Teléfono: $telefono\n";  
        $message .= "Extensión: $extension\n";  
        $message .= "Comentarios: $comentarios\n";  

        // Cabeceras del correo  
        $headers = "From: $email\r\n";  
        $headers .= "Reply-To: $email\r\n";  

        // Enviar el correo  
        if (mail($to, $subject, $message, $headers)) {  
            echo "Mensaje enviado con éxito.";  
        } else {  
            echo "Error al enviar el mensaje.";  
        }  
    } else {  
        echo "Método no permitido.";  
    }  
?>  
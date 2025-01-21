<?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        // Recoger datos del formulario  
        $empresa = htmlspecialchars(trim($_POST['contact_empresa_user_grupoamsi']));  
        $apellido = htmlspecialchars(trim($_POST['contact_apellido_user_grupoamsi']));  
        $nombre = htmlspecialchars(trim($_POST['contact_name_user_grupoamsi']));  
        $email = htmlspecialchars(trim($_POST['contact_email_user_grupoamsi']));  
        $telefono = htmlspecialchars(trim($_POST['contact_tel_user_grupoamsi']));  
        $extension = htmlspecialchars(trim($_POST['contact_ext_tel_user_grupoamsi']));  
        $comentarios = htmlspecialchars(trim($_POST['contact_comments_user_grupoamsi']));  
    
        // Validar que el correo sea válido  
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
            die("Email no válido.");  
        }  
    
        // Configurar los correos  
        $to = "fjlservicio@gmail.com, fjl.admi@gmail.com";  
        $subject = "Nuevo contacto desde el formulario";  
        $message = "Empresa: $empresa\nApellido: $apellido\nNombre: $nombre\nEmail: $email\nTeléfono: $telefono\nExtensión: $extension\nComentarios: $comentarios";  
        $headers = "From: $email\r\n";  
        $headers .= "Reply-To: $email\r\n";  
    
        // Enviar el correo  
        if (mail($to, $subject, $message, $headers)) {  
            echo "Mensaje enviado con éxito.";  
        } else {  
            echo "Error al enviar el mensaje.";  
        }  
    } else {  
        echo "Método de solicitud no válido.";  
    }  
?>

<?php
    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre']) && !empty($_POST['Apeliidos']) && !empty($_POST['correo']) && !empty($_POST['telefono'] && !empty($_POST['message']))){
            $nombre = $_POST['nombre'];
            $Apeliidos = $_POST['Apeliidos'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $message = $_POST['message'];
            $asunto = "Mas informacion";
            $header = "From: noreply@example.com" ."\r\n";
            $header .= "Reply-To: noreply@example.com". "\r\n";
            $header .= "X-Mailer: PHP/" . phpversion();
            $mail = @mail($email,$asunto,$message,$header);
            if($mail){
                echo "<script>alert('Se envio Correctamente');</script>";
            }
        }
    }
?>
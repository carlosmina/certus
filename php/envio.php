<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $celular=$_POST['celular'];

    $destinatario= 'GBARBOZAN@CERTUS.EDU.PE';

    $asunto='mensaje de la pagina web clase de los viernes 7am';

    $cuerpo= "nombre " . $nombre . "\n";
    $cuerpo.= "apellido " . $apellido . "\n";
    $cuerpo.= "correo " . $correo . "\n";
    $cuerpo.= "celular " . $celular . "\n";

    if(mail($destinatario, $asunto, $cuerpo)){
        echo "El mensaje se ha enviado satisfactoriamente";
    }else{
        echo "Error No se pudo enviar el mensaje";
    }

}
?>
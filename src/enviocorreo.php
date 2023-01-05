<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/var/www/html/PHPMailer/src/Exception.php';
require '/var/www/html/PHPMailer/src/PHPMailer.php';
require '/var/www/html/PHPMailer/src/SMTP.php';

if (isset($_POST['Enviado']))
{
        $area = $_POST['area'];
        $program = $_POST['program'];
        $names = $_POST['names'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $comentario = $_POST['comentario'];

}

$mail = new PHPMailer(true);

try{

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = '4d1163942766f5';
    $mail->Password = 'e0ca14fc0cf624';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 2525;
    $mail->setFrom('mauro_moreno_y@hotmail.com');
    $mail->addAddress('mauro_moreno_y@hotmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'Postulante Mauro Moreno Yagual';
    $mail->Body = 'Agrademos haya solicitado informacion, en unos momentos un asesor se comunicara con usted<br><br>'.
    'Tengan un buen dia, le saluda Mauro Moreno, estos fueron los datos enviados mediante el formulario <br>Area:'. $area . 
                '<br>Programa: '. $program .
                '<br>Nombres:'.$names .
                '<br>Apellidos:'.$lastname .
                '<br>Correo:'.$email .
                '<br>Telefono:'.$phone .
                '<br>Pais:'.$country .
                '<br>Provincia:'.$state .
                '<br>Ciudad:'.$city.
                '<br>comentario:'.$comentario;

    $mail->send();

    echo 'Mensaje enviado correctamente';

}
catch(Exception $e)
    {
        echo 'Hubo un error', $mail->ErrorInfo;
    }
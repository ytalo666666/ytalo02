
<?php




if (isset($_POST['envia'])) {
    # code...


$nom =    $_POST['nombre'];
$ape  =    $_POST['apellido'];
$email  =    $_POST['correo'];
$men  =    $_POST['mensage'];

$asunto ="formulaio de contacto";


echo"dvxcvxcv";



$to = 'destinatario@ejemplo.com';
$subject = 'Asunto del correo electrónico';
$message = 'Mensaje del correo electrónico';

$headers = 'From: remitente@ejemplo.com' . "\r\n" .
    'Reply-To: remitente@ejemplo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$resul = @mail($email, $asunto, $men, $headers);


if ($resul) {
    echo"ENVIADO BIENNN";


}else{
 
    echo"fallooooooooooo BIENNN";

}





}















?>
























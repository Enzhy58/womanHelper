<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$nanny = $_POST['nanny'];
$assistant = $_POST['assistant'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$datetime = $_POST['datetime'];
$address = $_POST['address'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'woman.helper@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'XQYx2YbmqcrUbxi3qR3w'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('woman.helper@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('yuliya_makhnova354@mail.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта Woman Helper';
$mail->Body    = '' .$name . ' оставил(а) заявку.' . '<br><strong>Услуга:</strong> ' .$nanny .$assistant . '<br><strong>Телефон:</strong> ' .$tel . '<br><strong>Дата и время:</strong> ' .$datetime . '<br><strong>Адрес:</strong> ' .$address;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>
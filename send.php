<?php 

require_once('PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$fio = $_POST['fio'];
$podrazdelenie = $_POST['podrazdelenie'];
$zvanie = $_POST['zvanie'];
$kachestva = $_POST['kachestva'];
$discord = $_POST['discord'];


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'militarypoliceru@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'MPujcnjd69'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('militarypoliceru@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('militarypolice@yandex.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$fio . ' оставил заявку, его телефон ' .$podrazdelenie. '<br>Почта этого пользователя: ' .$discord;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: joinus.html');
}
?>
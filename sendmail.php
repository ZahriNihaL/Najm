<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTP.php";
require_once "PHPMailer/src/Exception.php";

$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
    );

$mail->Username = "zaahrinrcet@gmail.com";
$mail->Password = "zikziggolnevmzfj";
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->From = "zaahrinrcet@gmail.com";
$mail->FromName = "Hanna Zahrin";
$mail->addAddress("swathikrishnaus2015@gmail.com", "SWATHIKRISHNA US");
$mail->isHTML(true);
$mail->Subject = "Contact Form Email";

$message = "
<table>
    <tr><td>Name: </td><td>" . $_POST["name"] . "</td></tr>
    <tr><td>Name: </td><td>" . $_POST["email"] . "</td></tr>
    <tr><td>Name: </td><td>" . $_POST["subject"] . "</td></tr>
    <tr><td>Name: </td><td>" . $_POST["description"] . "</td></tr>
</table>
";

$mail->Body = $message;
try{
    $mail->send();
    echo "<h2>Message has been sent successfully</h2>";
} catch (Exception $e){
    echo "Mailer error: " . $mail->ErrorInfo;
}

?>


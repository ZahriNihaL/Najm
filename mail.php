<?php
include("admin/assets/includes/db.php");

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "zaahrinrcet@gmail.com";
$mail->Password = "zikziggolnevmzfj";
$mail->SMTPSecure = "tls";
$mail->Port = 587;

$mail->setFrom("zaahrinrcet@gmail.com");
$sql="select * from tbl_subscribe where send_email=1";
$res=mysqli_num_rows($conn,$sql);
if(mysqli_num_rows($result)>0){

    $mail->addReplyTo("swathikrishnaus2015@gmail.com");
    while($x=mysqli_fetch_assoc($result))
    {
        $mail->addAddress($x['email']);
    }

    $mail->isHTML(true);
    $mail->Subject = "This is multi user mail";
    
    $message = "
    <form>    
        Description: " . $_POST["description"] . "     
    </form>
    ";

    $mail->Body = $message;
    try{
        $mail->send();
        echo "<h2>Message has been sent successfully</h2>";
    } catch (Exception $e){
        echo "Mailer error: " . $mail->ErrorInfo;
    }

}



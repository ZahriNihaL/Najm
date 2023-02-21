<?php
session_start();
include("../admin/assets/includes/db.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "../PHPMailer/src/PHPMailer.php";
require_once "../PHPMailer/src/SMTP.php";
require_once "../PHPMailer/src/Exception.php";

/* ------------------------contact-function start--------------------------- */

if (isset($_POST["submit"])) {

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
    try {
        $mail->send();
        echo "<h2>Message has been sent successfully</h2>";
    } catch (Exception $e) {
        echo "Mailer error: " . $mail->ErrorInfo;
    }

    $id = $row["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $description = $_POST["description"];
    $sql = "insert into tbl_message(name,email,subject,description) values('$name','$email','$subject','$description')";
    if (mysqli_query($con, $sql)) {
        header("Location: ../contact.php?success=contact added successfully");         
    } else {
        header("Location: ../contact.php?error=failed to add contact!");
    }
    mysqli_close($con);
}

/* ------------------------contact-function start--------------------------- */
/* ------------------------subscribe-function start--------------------------- */

if (isset($_POST["subscribe"])) {

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
    $mail->addAddress("swathikrishnaus2015@gmail.com", "swathikrishnaus2015@gmail.com");
    $mail->isHTML(true);
    $mail->Subject = "Subscribed Mails for Newsletter";

    $message = "
  <table>
      <tr><td>Email: </td><td>" . $_POST["email"] . "</td></tr>
  </table>
  ";

    $mail->Body = $message;
    try {
        $mail->send();
        echo "<h2>Message has been sent successfully</h2>";
    } catch (Exception $e) {
        echo "Mailer error: " . $mail->ErrorInfo;
    }
   
    $email = $_POST["email"];

    $sql2 = "insert into tbl_subscribe(email) values('$email')";
    if (mysqli_query($con, $sql2)) {
        header("Location: ../index.php?success2=subscribe added successfully");         
    } else {
        header("Location: ../index.php?error2=failed to add subscribe!");
    }
    mysqli_close($con);
}

/* ------------------------subscribe-function start--------------------------- */

?>
<?php include("script.php") ?>


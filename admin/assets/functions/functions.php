<?php
include("../includes/db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once "../../../PHPMailer/src/PHPMailer.php";
require_once "../../../PHPMailer/src/SMTP.php";

session_start();

if (isset($_POST['logout'])) {
  unset($_SESSION['najm_loggedin']);
  header("Location:../../login.php");
}

if (isset($_POST["login"])) {
  $username = mysqli_real_escape_string($con, $_POST["username"]);
  $password = mysqli_real_escape_string($con, $_POST["password"]);
  $passhash = hash("sha256", $password);
  $sql = "select * from tbl_users where username='$username' and password='$passhash'";
  $run = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run);
  if ($count === 0) {
    header("Location: ../../login.php?error=Invalid credential");
  } else {
    $_SESSION["najm_loggedin"] = true;
    header("Location: ../../index.php");
  }
}

if (isset($_POST["delete_message"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_message where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../contact.php?success=Message Deleted Successfully");
  } else {
    header("Location: ../../contact.php?error=Failed to Delete Message!");
  }
}

if (isset($_POST["delete_subscriber"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_subscribe where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../subscribe.php?success=Subscriber Deleted Successfully");
  } else {
    header("Location: ../../subscribe.php?error=Failed to Delete Subscriber!");
  }
}

if (isset($_POST["add_customer"])) {
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $to = "../../assets/images/customers/" . $img;
  move_uploaded_file($tmp_name, $to);
  $sql = "insert into tbl_customers(img) values('$img')";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../customer.php?success=Customer Added Successfully");
  } else {
    header("Location: ../../customer.php?error=Failed to Add Customer!");
  }
}

if (isset($_POST["delete_customer"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_customers where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../customer.php?success=Customer Deleted Successfully");
  } else {
    header("Location: ../../customer.php?error=Failed to Delete Customer!");
  }
}

if (isset($_POST["update_customer"])) {
  $id = $_POST["id"];
  $img = "";
  if ($_FILES['img']['size'] === 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $to = "../../assets/images/customers/" . $img;
    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_customers set img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../customer.php?success=Customer Edited Successfully");
  } else {
    header("Location: ../../customer.php?error=Failes To edit Customer!");
  }
}

if (isset($_POST["add_service"])) {
  $name = mysqli_real_escape_string($con, $_POST["name"]);
  $description = mysqli_real_escape_string($con, $_POST["description"]);
  $explanation = mysqli_real_escape_string($con, $_POST["explanation"]);
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $to = "../../assets/images/service/" . $img;
  move_uploaded_file($tmp_name, $to);
  $sql = "insert into tbl_service(name,description,explanation,img) values('$name','$description','$explanation','$img')";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../service.php?success=Service Added Successfully");
  } else {
    header("Location: ../../service.php?error=Failed to Add Service!");
  }
}

if (isset($_POST["delete_service"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_service where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../service.php?success=Service Deleted Successfully");
  } else {
    header("Location: ../../service.php?error=Failed to Delete Service!");
  }
}
 
if (isset($_POST["update_service"])) {
  $id = $_POST["id"];
  $name = mysqli_real_escape_string($con, $_POST["name"]);
  $description = mysqli_real_escape_string($con, $_POST["description"]);
  $explanation = mysqli_real_escape_string($con, $_POST["explanation"]);
  $img = "";
  if ($_FILES['img']['size'] === 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $to = "../../assets/images/service/" . $img;
    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_service set name='$name',description='$description',explanation='$explanation',img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../service.php?success=Service Updated Successfully");
  } else {
    header("Location: ../../service.php?error=Failes to Update Service!");
  }
}

if (isset($_POST["add_category"])) {
  $category_name = mysqli_real_escape_string($con, $_POST["category_name"]);
  $sql = "insert into tbl_category(category_name) values('$category_name')";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../category.php?success=Service Added Successfully");
  } else {
    header("Location: ../../category.php?error=Failed to Add Service!");
  }
}

if (isset($_POST["delete_category"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_category where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../category.php?success=Category Deleted Successfully");
  } else {
    header("Location: ../../category.php?error=Failed to Delete Category!");
  }
}
 
if (isset($_POST["update_category"])) {
  $id = $_POST["id"];
  $category_name = mysqli_real_escape_string($con, $_POST["category_name"]);
  $sql = "update tbl_category set category_name='$category_name' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../category.php?success=Category Updated Successfully");
  } else {
    header("Location: ../../category.php?error=Failes to Update Category!");
  }
}

if (isset($_POST["add_products"])) {
  $name = mysqli_real_escape_string($con, $_POST["name"]);
  $category_name = mysqli_real_escape_string($con, $_POST["category_name"]);
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $to = "../../assets/images/products/" . $img;
  move_uploaded_file($tmp_name, $to);
  $sql = "insert into tbl_products(name,category_name,img) values('$name','$category_name','$img')";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../products.php?success=Product Added Successfully");
  } else {
    header("Location: ../../products.php?error=Failed to Add Product!");
  }
}

if (isset($_POST["delete_products"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_products where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../products.php?success=Product Deleted Successfully");
  } else {
    header("Location: ../../products.php?error=Failed to Delete Product!");
  }
}
 
if (isset($_POST["update_products"])) {
  $id = $_POST["id"];
  $name = mysqli_real_escape_string($con, $_POST["name"]);
  $category_name = mysqli_real_escape_string($con, $_POST["category_name"]);
  $img = "";
  if ($_FILES['img']['size'] === 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $to = "../../assets/images/products/" . $img;
    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_products set name='$name', category_name='$category_name', img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../products.php?success=Product Updated Successfully");
  } else {
    header("Location: ../../products.php?error=Failed to Update Product!");
  }
}

if (isset($_POST["add_testimonial"])) {
  $name = mysqli_real_escape_string($con, $_POST["name"]);
  $designation = mysqli_real_escape_string($con, $_POST["designation"]);
  $title = mysqli_real_escape_string($con, $_POST["title"]);
  $description = mysqli_real_escape_string($con, $_POST["description"]);
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $to = "../../assets/images/testimonial/" . $img;
  move_uploaded_file($tmp_name, $to);
  $sql = "insert into tbl_testimonial(name,designation,title,description,img) values('$name','$designation','$title','$description','$img')";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../testimonial.php?success=Testimonial Added Successfully");
  } else {
    header("Location: ../../testimonial.php?error=Failed to Add Testimonial!");
  }
}

if (isset($_POST["delete_testimonial"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_testimonial where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../testimonial.php?success=Testimonial Deleted Successfully");
  } else {
    header("Location: ../../testimonial.php?error=Failed to Delete Testimonial!");
  }
}
 
if (isset($_POST["update_testimonial"])) {
  $id = mysqli_real_escape_string($con, $_POST["id"]);
  $name = mysqli_real_escape_string($con, $_POST["name"]);
  $designation = mysqli_real_escape_string($con, $_POST["designation"]);
  $title = mysqli_real_escape_string($con, $_POST["title"]);
  $description = mysqli_real_escape_string($con, $_POST["description"]);
  $img = "";
  if ($_FILES['img']['size'] === 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $to = "../../assets/images/testimonial/" . $img;
    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_testimonial set name='$name',designation='$designation',title='$title',description='$description',img='$img' where id='$id'";
  $run = mysqli_query($con, $sql); 
  if ($run === TRUE) {
    header("Location: ../../testimonial.php?success=Testimonial Updated Successfully");
  } else {
    header("Location: ../../testimonial.php?error=Failes to Update Testimonial!");
  }
}

if (isset($_POST["delete_news_letter"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_news_letter where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../news_letter.php?success=News Letter Deleted Successfully");
  } else {
    header("Location: ../../news_letter.php?error=Failed to Delete News Letter!");
  }
}
 
if (isset($_POST["update_news_letter"])) {

  $id = $_POST["id"];
  $subject = mysqli_real_escape_string($con, $_POST["subject"]);
  $description = mysqli_real_escape_string($con, $_POST["description"]);
  $sql = "update tbl_news_letter set subject='$subject',description='$description' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../news_letter.php?success=News Letter Updated Successfully");
  } else {
    header("Location: ../../news_letter.php?error=Failes to Update News Letter!");
  }
}

if (isset($_POST["update_settings"])) {
  $name = mysqli_real_escape_string($con, $_POST["name"]);
  $place = mysqli_real_escape_string($con, $_POST["place"]);
  $address = mysqli_real_escape_string($con, $_POST["address"]);
  $city = mysqli_real_escape_string($con, $_POST["city"]);
  $email1 = mysqli_real_escape_string($con, $_POST["email1"]);
  $phone_number1 = mysqli_real_escape_string($con, $_POST["phone_number1"]);
  $phone_number2 = mysqli_real_escape_string($con, $_POST["phone_number2"]);
  $link = mysqli_real_escape_string($con, $_POST["link"]);
  $facebook = mysqli_real_escape_string($con, $_POST["facebook"]);
  $instagram = mysqli_real_escape_string($con, $_POST["instagram"]);
  $twitter = mysqli_real_escape_string($con, $_POST["twitter"]);
  $sql = "update tbl_company set name='$name' , place='$place' , address='$address' , city='$city' , email1='$email1' , phone_number1='$phone_number1' , phone_number2='$phone_number2' , link='$link' , facebook='$facebook' , instagram='$instagram' , twitter='$twitter'  where id='1'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../settings.php?success=Settings Updated Successfully");
  } else {
    header("Location: ../../settings.php?error=Failes to Update Settings!");
  }
}

if (isset($_POST["change_password"])) {
  $password = $_POST["old_pass"];
  $new_password = $_POST["new_pass"];
  $confirm_password = $_POST["retype_pass"];
  $passhash = hash("sha256", $password);
  $sql = "select * from tbl_users where password='$passhash' AND id='1'";
  $run = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run);
  if ($count != 0) {
    if ($new_password == $confirm_password) {
      $newpass_hash = hash("sha256", $new_password);
      $sql = "update tbl_users set password='$newpass_hash' where id='1'";
      $run = mysqli_query($con, $sql);
      if ($run == TRUE) {
        header("Location: ../../settings.php?success=Password Changed Successfully!");
      } else {
        header("Location: ../../settings.php?error=Failed to Change Password!");
      }
    } else {
      header("Location: ../../settings.php?error=New Passwords Not Match!");
    }
  } else {
    header("Location: ../../settings.php?error=Old Password Is Incorrect!");
  }
}

if (isset($_POST["add_news_letter"])) {
  $subject = mysqli_real_escape_string($con, $_POST["subject"]);
  $description = mysqli_real_escape_string($con, $_POST["desc"]);
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
    $sql = "select * from tbl_subscribe";
    $run = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($run)){
      $id = $row["id"];
      $email = $row["email"];
      $mail->addAddress($email, $email);
    }
      $mail->isHTML(true);
      $mail->Subject = $subject;
    $mail->Body = $description;
    try {
        $mail->send();
    } catch (Exception $e) {
        echo "Mailer error: " . $mail->ErrorInfo;
    }
    $new_sql = "insert into tbl_news_letter(subject,description) values('$subject','$description')";
    if (mysqli_query($con, $new_sql)) {
      header("Location: ../../add_news_letter.php?success=News Letter Send Successfully"); 
    } else {
      header("Location: ../../add_news_letter.php?error=Failes to Send News Letter!");
    }
    mysqli_close($con);
}
?>

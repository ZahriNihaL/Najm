<?php

include("../includes/db.php");


session_start();

if (isset($_POST['logout'])) {

  unset($_SESSION['loggedin']);
  header("Location:../../login.php");

}


if (isset($_POST["login"])) {

  $username = mysqli_real_escape_string($con, $_POST["username"]);
  $password = mysqli_real_escape_string($con,$_POST["password"]);

  $passhash = hash("sha256", $password);

  $sql = "select * from tbl_users where username='$username' and password='$passhash'";
  $run = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run);
  if ($count === 0) {
    header("Location: ../../login.php?error=Invalid credential");
  } else {
    $_SESSION["loggedin"] = true; 
    header("Location: ../../index.php"); 
  }
}


// session_start();

// if (isset($_POST['logout'])) {

//   unset($_SESSION['loggedin']);
//   header("Location:../login.php");

// }



// if (isset($_POST["login"])) {

//   $username = mysqli_real_escape_string($con, $_POST["username"]);
//   $password = mysqli_real_escape_string($con,$_POST["password"]);

//   $passhash = hash("sha256", $password);

//   $sql = "select * from tbl_users where username='$username' and password='$passhash'";
//   $run = mysqli_query($con, $sql);
//   $count = mysqli_num_rows($run);
//   if ($count === 0) {
//     header("Location: ../login.php?error=Invalid credential");
//   } else {
//     $_SESSION["loggedin"] = true; 
//     header("Location: ../index.php"); 
//   }
// }

function display_data(){
  global $con;
  $query ="select * from tbl_message";
  $result = mysqli_query($con,$query);
  return $result;
}

// $(document).ready( function () {
//   $('tbl_plugin').DataTable();
// } );


if (isset($_POST["delete_message"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_message where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../contact.php?success=message deleted successfully");
  } else {
    header("Location: ../../contact.php?error=failed to delete message!");
  }
}


if (isset($_POST["add_customer"])) {

  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../../assets/images/customers/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_customers(img) values('$img')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../customer.php?success=customer added successfully");
  } else {
    header("Location: ../../customer.php?error=failed to add customer!");
  }
}

if (isset($_POST["delete_customer"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_customers where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../customer.php?success=customers deleted successfully");
  } else {
    header("Location: ../../customer.php?error=failed to delete customers!");
  }
}

if (isset($_POST["update_customer"])) {

  $id = $_POST["id"];
  
  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];

    $to = "../../assets/images/customers/" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_customers set img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../customer.php?success=customer edited successfully");
  } else {
    header("Location: ../../customer.php?error=failes to edit customer!");
  }
}



if (isset($_POST["add_service"])) {

  $name = $_POST["name"];
  $description = $_POST["description"];
  $explanation = $_POST["explanation"];

  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../../assets/images/service/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_service(name,description,explanation,img) values('$name','$description','$explanation','$img')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../service.php?success=service added successfully");
  } else {
    header("Location: ../../service.php?error=failed to add service!");
  }
}

if (isset($_POST["delete_service"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_service where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../service.php?success=service deleted successfully");
  } else {
    header("Location: ../../service.php?error=failed to delete service!");
  }
}
 
if (isset($_POST["update_service"])) {

  $id = $_POST["id"];
  $name = $_POST["name"];
  $description = $_POST["description"];
  $explanation = $_POST["explanation"];

  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {

    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];

    $to = "../../assets/images/service/" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_service set name='$name',description='$description',explanation='$explanation',img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../service.php?success=service updated successfully");
  } else {
    header("Location: ../../service.php?error=failes to update service!");
  }
}




if (isset($_POST["add_category"])) {

  $category_name = $_POST["category_name"];

  $sql = "insert into tbl_category(category_name) values('$category_name')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../category.php?success=service added successfully");
  } else {
    header("Location: ../../category.php?error=failed to add service!");
  }
}

if (isset($_POST["delete_category"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_category where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../category.php?success=category deleted successfully");
  } else {
    header("Location: ../../category.php?error=failed to delete category!");
  }
}
 
if (isset($_POST["update_category"])) {

  $id = $_POST["id"];
  $category_name = $_POST["category_name"];

  $sql = "update tbl_category set category_name='$category_name' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../category.php?success=category updated successfully");
  } else {
    header("Location: ../../category.php?error=failes to update category!");
  }
}



if (isset($_POST["add_products"])) {

  $name = $_POST["name"];
  $category_name = $_POST["category_name"];

  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../../assets/images/products/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_products(name,category_name,img) values('$name','$category_name','$img')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../products.php?success=products added successfully");
  } else {
    header("Location: ../../products.php?error=failed to add products!");
  }
}

if (isset($_POST["delete_products"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_products where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../products.php?success=products deleted successfully");
  } else {
    header("Location: ../../products.php?error=failed to delete products!");
  }
}
 
if (isset($_POST["update_products"])) {

  $id = $_POST["id"];
  $name = $_POST["name"];
  $category_name = $_POST["category_name"];

  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {

    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];

    $to = "../../assets/images/products/" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_products set name='$name',category_name='$category_name',img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../products.php?success=products updated successfully");
  } else {
    header("Location: ../../products.php?error=failes to update products!");
  }
}




if (isset($_POST["add_testimonial"])) {

  $name = $_POST["name"];
  $designation = $_POST["designation"];
  $title = $_POST["title"];
  $description = $_POST["description"];

  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../../assets/images/testimonial/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_testimonial(name,designation,title,description,img) values('$name','$designation','$title','$description','$img')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../testimonial.php?success=testimonial added successfully");
  } else {
    header("Location: ../../testimonial.php?error=failed to add testimonial!");
  }
}

if (isset($_POST["delete_testimonial"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_testimonial where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../testimonial.php?success=testimonial deleted successfully");
  } else {
    header("Location: ../../testimonial.php?error=failed to delete testimonial!");
  }
}
 
if (isset($_POST["update_testimonial"])) {

  $id = $_POST["id"];
  $name = $_POST["name"];
  $designation = $_POST["designation"];
  $title = $_POST["title"];
  $description = $_POST["description"];

  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {

    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];

    $to = "../../assets/images/testimonial/" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_testimonial set name='$name',designation='$designation',title='$title',description='$description',img='$img' where id='$id'";
  $run = mysqli_query($con, $sql); 
  if ($run == TRUE) {
    header("Location: ../../testimonial.php?success=testimonial updated successfully");
  } else {
    header("Location: ../../testimonial.php?error=failes to update testimonial!");
  }
}


if (isset($_POST["add_news_letter"])) {

  $subject = $_POST["subject"];
  $description = $_POST["description"];

  $sql = "insert into tbl_news_letter(subject,description) values('$subject','$description')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../news_letter.php?success=news_letter added successfully");
  } else {
    header("Location: ../../news_letter.php?error=failed to add news_letter!");
  }
}

if (isset($_POST["delete_news_letter"])) {

  $id = $_POST["id"];
  $sql = "delete from tbl_news_letter where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../news_letter.php?success=news_letter deleted successfully");
  } else {
    header("Location: ../../news_letter.php?error=failed to delete news_letter!");
  }
}
 
if (isset($_POST["update_news_letter"])) {

  $id = $_POST["id"];
  $subject = $_POST["subject"];
  $description = $_POST["description"];

  $sql = "update tbl_news_letter set subject='$subject',description='$description' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../news_letter.php?success=news_letter updated successfully");
  } else {
    header("Location: ../../news_letter.php?error=failes to update news_letter!");
  }
}



if (isset($_POST["update_settings"])) {

  $name = $_POST["name"];
  $place = $_POST["place"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $email1 = $_POST["email1"];
  $phone_number1 = $_POST["phone_number1"];
  $phone_number2 = $_POST["phone_number2"];
  $link = $_POST["link"];
  $facebook = $_POST["facebook"];
  $instagram = $_POST["instagram"];
 
  $sql = "update tbl_company set name='$name' , place='$place' , address='$address' , city='$city' , email1='$email1' , phone_number1='$phone_number1' , phone_number2='$phone_number2' , link='$link' , facebook='$facebook' , instagram='$instagram'  where id='1'";
  $run = mysqli_query($con, $sql);

  if ($run == TRUE) {
    header("Location: ../settings.php?success=settings updated successfully");
  } else {
    header("Location: ../settings.php?error=failes to update settings!");
  }
}



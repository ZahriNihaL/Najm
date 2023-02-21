<!doctype html>
<html lang="en">
  <head>
  <?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php
include("css/style.php");
?>
<title>Contact - Najm Sewing & Embroidery Requisites Trading </title>
</head>
<body>

<!-- ---------------------------header start--------------------------->

<header>

<!-- ---------------------------navbar start--------------------------->

<?php include("content/navbar.php") ?>

</header>
  
<!-- ---------------------------navbar start--------------------------->

<!-- ---------------------------about-us start--------------------------->
<?php
  $sql = "select * from tbl_company where id='1'";
  $run = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($run);
    $id = $row["id"];
    $name = $row["name"];
    $place = $row["place"];
    $address = $row["address"];
    $city = $row["city"];
    $phone_number1 = $row["phone_number1"];
    $phone_number2 = $row["phone_number2"];
    $email1 = $row["email1"];
    $link = $row["link"];
    $facebook = $row["facebook"];
    $instagram = $row["instagram"];
    $twitter = $row["twitter"];
?>
<section class="contact-us">
  <div class="container bg-white">
    <h6 class="sub-head-color text-uppercase fw-bold text-center sub-head">Contact</h6>
    <i class="fa-light fa-horizontal-rule"></i>
    <h3 class="head-color text-center fw-bold mt-3">Lorem ipsum dolor sit amet</h3>
    <div class="row contact-us-form">
      <div class="col-lg-6 padding-0">
        <div class="left-col-bg">
          <div class="icons me-2 float-end mt-5">
            <a href="https://facebook.com/<?php echo $facebook ?>" class="text-decoration-none">
              <div class="icon-bg mt-2">
                <i class="fa-brands fa-facebook-f facebook"></i>
              </div>
            </a>
            <a href="https://instagram.com/<?php echo $instagram ?>" class="text-decoration-none">
              <div class="icon-bg mt-2">
                <i class="fa-brands fa-instagram instagram"></i>
              </div>
            </a>
            <a href="https://twitter.com/<?php echo $twitter ?>" class="text-decoration-none">
              <div class="icon-bg mt-2">
                <i class="fa-brands fa-twitter twitter"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 padding-0">
        <div class="right-col-bg">
          <h6 class="head-color text-center fw-bold mt-3 mb-3">Lorem ipsum dolor sit amet</h6>
          <?php
                if(isset($_GET["error"])){
                ?>
                    <div class="alert alert-danger text-center mt-2 w-50 ms-auto me-auto" role="alert">
                        <?php
                        $error = $_GET["error"];
                        echo $error;
                        ?>
                    </div>

                <?php
                }else if(isset($_GET["success"])){
                ?>
                    <div class="alert alert-success text-center mt-2 w-50 ms-auto me-auto" role="alert">
                        <?php
                        $error = $_GET["success"];
                        echo $error;
                        ?>
                    </div>
          <?php } ?>
          <?php
            $sql = "select * from tbl_message";
            $run = mysqli_query($con, $sql);
            $rowcount=mysqli_num_rows($run);
            $row=mysqli_fetch_array($run);
            
              $id = $row["id"];
              $name = $row["name"];
              $email = $row["email"];
              $subject = $row["subject"];
              $description = $row["description"];           
            ?>
          <form method="POST" action="functions/functions.php">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Name</label>
              <input type="name" class="form-control" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Subject</label>
              <input type="tel" class="form-control" name="subject" id="subject" placeholder="Enter your subject">
            </div>
            <div class="mb-3">Message</label>
              <textarea class="form-control" id="message" name="message" rows="3" placeholder="Type your message"></textarea>
            </div>
            <div class="text-center">
              <input type="submit" id="submit" name="submit" class="button-style " value="submit" >
            </div>
          </form>

          <div class="row map-details mt-4">
            <div class="col-lg-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.9793456212774!2d55.300224815364196!3d25.271280234891616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4345e2bdb58f%3A0x3788f77992c5159a!2sAl%20Sabkha%20Rd%20-%20Deira%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1675251154454!5m2!1sen!2sin"    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6">
              <div class="location">
                <ul class="dubai">
                  <div class="d-flex ">
                    <i class="fa-solid fa-house  me-2 head-color head-icon"></i>
                    <div class="places">
                      <h6 class="card-title fw-bold head-color "><?php echo $place ?></h6>
                      <li class="para-color"><?php echo $address ?></li>
                      <li class="para-color"><?php echo $city ?></li>
                    </div>
                  </div>
                    <a href="tel: 971544001733" class="text-decoration-none"><li class="para-color"><i class="fa-solid fa-phone me-2 head-color"></i><?php echo $phone_number1 ?></li></a>
                    <li class="para-color"><i class="fa-brands fa-whatsapp me-2 head-color"></i><?php echo $phone_number2 ?></li>
                    <a href="mailto: info@alsafadubai.com" class="text-decoration-none"><li class="para-color"><i class="fa-solid fa-envelope me-2 head-color"></i><?php echo $email ?></li></a>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ---------------------------about-us end--------------------------->

<!-- ---------------------------footer start--------------------------->

<?php include("content/footer.php") ?>

<!-- ---------------------------footer end--------------------------->

<!-- ---------------------------footer end--------------------------->

<?php include("content/script.php") ?>

<!-- ---------------------------footer end--------------------------->

</body>
</html>
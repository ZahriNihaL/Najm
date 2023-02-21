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
<title>Services - Najm Sewing & Embroidery Requisites Trading </title>
</head>
<body>

<!-- ---------------------------header start--------------------------->

<header>

<!-- ---------------------------navbar start--------------------------->

<?php include("content/navbar.php") ?>

</header>
  
<!-- ---------------------------navbar start--------------------------->

<!-- ---------------------------service start--------------------------->

<section class="services service-margin" id="services">
  <div class="container">
    <h6 class="sub-head-color text-uppercase fw-bold text-center sub-head">Services</h6>
    <i class="fa-light fa-horizontal-rule"></i>
    <h3 class="head-color text-center fw-bold mt-3">Lorem ipsum dolor sit amet</h3>
    <p class="para-color mt-2 text-center para-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra arcu nec diam elementum suscipit. Quisque sit amet ex orci. Proin a purus non ex maximus commodo pharetra eget augue. </p>
    <div class="row">
    <?php
        $sql = "select * from tbl_service";
        $run = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($run)){
            $id = $row["id"];
            $name = $row["name"];
            $description = $row["description"];                
            $explanation = $row["explanation"];
            $img = $row["img"];                                                               
        ?> 
      <div class="col-lg-3 mb-3">
        <a href="" class="service-card">
          <div class="card border-0" style="width: 18rem;">
            <div class="card-body">
              <img src="admin/assets/images/service/<?php echo $img ?>" class="card-img-top img-fluid" alt="service image">
              <h6 class="card-title head-color fw-bold mt-3"><?php echo $name ?></h6>
              <p class="card-text para-color  mb-3"><?php echo $description ?></p>
              <a href="contact.php" class="fw-bold">Contact us <i class='fa fa-long-arrow-alt-right ms-2'></i></a>
            </div>
          </div>
        </a>
      </div>
      <?php }?>
    </div>
  </div>
</section>

<!-- ---------------------------services end--------------------------->

<!-- ---------------------------footer start--------------------------->

<?php include("content/footer.php") ?>

<!-- ---------------------------footer end--------------------------->

<!-- ---------------------------footer end--------------------------->

<?php include("content/script.php") ?>

<!-- ---------------------------footer end--------------------------->
</body>
</html>
<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php
include("css/style.php");
?>
<title>About - Najm Sewing & Embroidery Requisites Trading </title>
</head>
<body>

<!-- ---------------------------header start--------------------------->

<header>

<!-- ---------------------------navbar start--------------------------->

<?php include("content/navbar.php") ?>
 
</header>
  
<!-- ---------------------------navbar start--------------------------->

<!-- ---------------------------about-us start------------------------->

<section class="about-us">
  <div class="container">
    <h6 class="sub-head-color text-uppercase fw-bold text-center sub-head">About</h6>
    <i class="fa-light fa-horizontal-rule"></i>
    <h3 class="head-color text-center fw-bold mt-3">Lorem ipsum dolor sit amet</h3>
    <div class="row about-us-more">
      <div class="col-lg-6 order-1 order-md-0">
        <h5 class="head-color fw-bold mt-3">Lorem ipsum dolor sit amet</h5>
        <p class="para-color about-us-para mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum commodo pretium porta. Nam venenatis finibus feugiat. In ullamcorper nec metus nec molestie. Cras ligula lectus, efficitur id viverra sit amet, tincidunt vel leo. Praesent quis pulvinar felis. Integer quis tempus mauris, in ultrices orci. Aliquam pharetra mi tortor, et sodales purus finibus non. Duis et ullamcorper eros. Cras sed ligula tincidunt, facilisis libero id, eleifend ligula. Curabitur egestas dapibus arcu et commodo. Ut at suscipit diam. Sed ut urna lorem. Etiam nisi ante, dapibus quis euismod vitae, blandit et nunc. Donec at justo blandit, lacinia magna quis, pharetra elit.</p>
        <div class="row mt-4">
          <div class="col-lg-6">
            <div class="d-flex">
              <i class="fa fa-check-square"></i>
              <p class="para-color ms-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="d-flex">
              <i class="fa fa-check-square"></i>
              <p class="para-color ms-2">Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
            <div class="d-flex">
              <i class="fa fa-check-square"></i>
              <p class="para-color ms-2">Lorem ipsum dolor sit amet</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="d-flex">
              <i class="fa fa-check-square"></i>
              <p class="para-color ms-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="d-flex">
              <i class="fa fa-check-square"></i>
              <p class="para-color ms-2">Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
            <div class="d-flex">
              <i class="fa fa-check-square"></i>
              <p class="para-color ms-2">Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-0 order-md-1">
        <img src="images/about/about-us/1.jpg" alt="" class="img-fluid img-1" aria-colcount="">
      </div>
    </div>
  </div>

<!-- ---------------------------client-logos start--------------------------->

<section class="client-logos">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active d-none" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=" d-none"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=" d-none"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <?php
                    $sql = "select * from tbl_customers";
                    $run = mysqli_query($con , $sql);
                    $count = mysqli_num_rows($run);
                    $loop = 0;
                    while($row = mysqli_fetch_array($run)){
                      $loop ++;                                                                       
                      $img = $row["img"];  
                    ?>
                    <div class="col-lg-2">
                      <img src="admin/assets/images/customers/<?php echo $img ?>" alt="client-logos image" class="img-fluid">
                    </div>                           
                    <?php
                      if ($loop % 6 == 0 || $loop == $count) {
                    ?>                                                                     
                </div>                   
              </div>              
              <?php
                if ($loop !=  $count) { 
              ?>
              <div class="carousel-item">
              <div class="row">
              <?php }
                  }
                }
              ?>                     
            </div>         
        </div>
    </div>
</section>

      <div class="about-description">
        <div class="container">
          <div class="row">
            <div class="col-lg-6  order-1 order-md-0">
              <img src="images/about/about-us/2.jpg" alt="">
            </div>
            <div class="col-lg-6 about-description-para  order-0 order-md-1">
              <h5 class="head-color fw-bold mt-3">Lorem ipsum dolor sit amet</h5>
              <p class="para-color about-us-para mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum commodo pretium porta. Nam venenatis finibus feugiat. In ullamcorper nec metus nec molestie. Cras ligula lectus, efficitur id viverra sit amet, tincidunt vel leo. Praesent quis pulvinar felis. Integer quis tempus mauris, in ultrices orci. Aliquam pharetra mi tortor, et sodales purus finibus non. Duis et ullamcorper eros. Cras sed ligula tincidunt, facilisis libero id, eleifend ligula. Curabitur egestas dapibus arcu et commodo. Ut at suscipit diam. Sed ut urna lorem. Etiam nisi ante, dapibus quis euismod vitae, blandit et nunc. Donec at justo blandit, lacinia magna quis, pharetra elit.</p>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- ---------------------------client-logos end--------------------------->



<!-- ---------------------------about-us end--------------------------->


<!-- ---------------------------footer start--------------------------->

<?php include("content/footer.php") ?>

<!-- ---------------------------footer end--------------------------->

<!-- ---------------------------footer end--------------------------->

    <?php include("content/script.php") ?>

<!-- ---------------------------footer end--------------------------->

  </body>
</html>
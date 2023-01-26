<?php
include("admin/assets/includes/db.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <?php
    include("style.php");
    ?>
    <title>Najm</title>
  </head>
  <body>

<!-- ---------------------------header start--------------------------->

<header>

<!-- ---------------------------navbar start--------------------------->

  <?php include("content/navbar.php") ?>

<!-- ---------------------------navbar start--------------------------->


<!-- ---------------------------home start--------------------------->

  <section class="home">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 order-sm-0">
          <div class="left-contents">
            <h1 class="head-color fw-bold ms-auto">Lorem ipsum dolor sit amet</h1>
            <h6 class="sub-head-color fw-bold mt-3">Sewing & Embroidery <b class="head-color">Requisites</b> Trading </h6>
            <p class="para-color home-para mt-3 ms-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra arcu nec diam elementum suscipit.</p>
            <button class="button-style btn-sm">Know More</button>
          </div>

          <div class="left-card">
            <div class="card ms-0">
              <div class="card-body">
                <p class="card-text text-center text-white">Lorem ipsum dolor sit amet</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 order-sm-1">
          <img src="images/home-1.jpg" alt="home image" class="img-fluid image-1 ms-md-5 ms-sm-0">

          <div class="right-card-1">
            <div class="card ms-0">
              <div class="card-body">
                <p class="card-text text-center para-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>

          <img src="images/home-2.jpg" alt="home image" class="img-fluid image-2">

        </div>

      </div>
    </div>
  </section>

<!-- ---------------------------home end--------------------------->
    
</header>

<!-- ---------------------------header end--------------------------->

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
                            $run = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($run)){

                                $id = $row["id"];                                  
                                $img = $row["img"];                                     
                        ?>

                        <div class="col-lg-2">
                            <img src="admin/assets/images/customers/<?php echo $img ?>" alt="client-logos image" class="img-fluid">
                        </div>

                        <?php } ?>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</section>

<!-- ---------------------------client-logos end--------------------------->

<!-- ---------------------------about start--------------------------->

<section class="about">
  <div class="container">
    <h6 class="sub-head-color text-uppercase fw-bold text-center sub-head">About</h6>
    <i class="fa-light fa-horizontal-rule"></i>
    <h3 class="head-color text-center fw-bold mt-3">Lorem ipsum dolor sit amet</h3>
    <p class="para-color mt-2 text-center para-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra arcu nec diam elementum suscipit. Quisque sit amet ex orci. Proin a purus non ex maximus commodo pharetra eget augue. </p>
    <div class="row">

      <div class="col-lg-6">
        <div class="about-left-contents">
          <img src="images/about/about.jpg" alt="about image" class="img-fluid">
          <h5 class="sub-head-color mt-4 fw-bold">Lorem ipsum dolor sit amet</h5>
          <p class="para-color ms-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel vehicula enim, quis fermentum libero. Donec nisl ex, maximus ut lacus at, eleifend lacinia mauris.</p>
          <button class="btn-sm button-style">Know More</button>
        </div>

      </div>

      <div class="col-lg-6">

        <div class="right-card-1 ">
          <div class="card ">
            <div class="card-body">
              <div class="d-flex">
                <h3 class="fw-bold text-white mt-2">50K</h3>
                <p class="card-text  para-color text-white ms-3">Lorem ipsum dolor sit amet, consectetur</p>
              </div>
            </div>
          </div>
        </div>

        <div class="right-card-2 mt-3">
          <div class="card ms-3">
            <div class="card-body">
                <p class="card-text text-center para-color para-color">Lorem ipsum dolor sit amet, consectetur</p>
            </div>
          </div>
        </div>

        <div class="right-card-3 mt-3">
          <div class="card ">
            <div class="card-body">
              <div class="d-flex">
                <h6 class="fw-bold para-color mt-2">Lorem</h6>
                <p class="card-text  para-color  ms-3">Lorem ipsum dolor sit amet</p>
              </div>
            </div>
          </div>
        </div>

        <div class="points mt-4">
          <p class="para-color"><i class="fa fa-circle head-color me-2" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
          <p class="para-color"><i class="fa fa-circle head-color me-2" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur </p>
          <p class="para-color"><i class="fa fa-circle head-color me-2" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
          <p class="para-color"><i class="fa fa-circle head-color me-2" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur</p>
        </div>

      </div>
        
    </div>
  </div>
</section>

<!-- ---------------------------about end--------------------------->

<!-- ---------------------------services start--------------------------->

<section class="services">
  <div class="container">
    <h6 class="sub-head-color text-uppercase fw-bold text-center sub-head">Services</h6>
    <i class="fa-light fa-horizontal-rule"></i>
    <h3 class="head-color text-center fw-bold mt-3">Lorem ipsum dolor sit amet</h3>
    <p class="para-color mt-2 text-center para-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra arcu nec diam elementum suscipit. Quisque sit amet ex orci. Proin a purus non ex maximus commodo pharetra eget augue. </p>

    <div class="row justify-content-center">
        <div class="col-md-9">
        <div class="row justify-content-center">

    <?php               
        $sql = "select * from tbl_service";
        $run = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($run)){

            $id = $row["id"];
            $name = $row["name"];
            $description = $row["description"];                
            $img = $row["img"];                                     
    ?>

      <div class="col-lg-4 padding-0 mt-4">
        <a href="" class="service-card">
          <div class="card border-0" style="width: 18rem;">
            <div class="card-body">
              <img src="admin/assets/images/service/<?php echo $img ?>" class="card-img-top img-fluid" alt="service image">
              <h6 class="card-title head-color fw-bold mt-3"><?php echo $name ?></h6>
              <p class="card-text para-color"><?php echo $description ?></p>
              <a href="#" class="fw-bold">Read more <i class='fa fa-long-arrow-alt-right ms-2'></i></a>
            </div>
          </div>
        </a>
      </div>
      
    <?php } ?>

      <div class="col-lg-4 mt-4">
        <a href="#">
          <div class="card border-0 see-more" style="width: 18rem;">
            <div class="card-body">
              <h4 class="card-title text-white mt-3 text-center mt-5">2 More</h4>
              <i class="fa-solid fa-arrow-right text-white text-center"></i>
            </div>
          </div>
        </a>
      </div>
    </div>
    </div>
    </div>

  </div>
</section>

<!-- ---------------------------services end--------------------------->

<!-- ---------------------------products start--------------------------->

<section class="products">
  <div class="container">
    <h6 class="sub-head-color text-uppercase fw-bold text-center sub-head">products</h6>
    <i class="fa-light fa-horizontal-rule"></i>
    <h3 class="head-color text-center fw-bold mt-3">Lorem ipsum dolor sit amet</h3>
    <p class="para-color mt-2 text-center para-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra arcu nec diam elementum suscipit. Quisque sit amet ex orci. Proin a purus non ex maximus commodo pharetra eget augue. </p>


    <div class="container filterbox">
      <div class="filter-tabs">
          <div class="filter-sort">
              <div class="navigation">
                  <a href="javascript:void(0)" data-filter="all" class="button active">All</a>
                  <a href="javascript:void(0)" data-filter="Model-Stone" class="button">Model Stone</a>
                  <a href="javascript:void(0)" data-filter="Hardwork-Stone" class="button">Hardwork Stone</a>
                  <a href="javascript:void(0)" data-filter="Non-Hot-Fix-Stone" class="button">Non Hot Fix Stone</a>
                  <a href="javascript:void(0)" data-filter="Glass-Beads" class="button">Glass Beads</a>
                  <a href="javascript:void(0)" data-filter="Rayon-Thread" class="button">Rayon Thread</a>
                  <a href="javascript:void(0)" data-filter="Metallic-Yarn" class="button">Metallic Yarn</a>
                  <a href="javascript:void(0)" data-filter="Hot-Fix-Stone" class="button">Hot Fix Stone</a>
              </div>
          </div>
      </div>     
          <div id="content">
                  <div class="content">
                      <div id="flexbox">
                        <div class="column">

                          <div class="wg-box-content shot-thumbnail Hot-Fix-Stone">
                              <div class="wg-box-content-overlay"></div>
                              <img class="wg-box-content-image" src="images/products/hot-fix-stone/hot-fix-stone-1.png" alt="Image" width="100%">
                              <div class="wg-box-content-details wg-box-fadeIn-bottom">
                                <h6 class="wg-box-content-title fw-bold text-white">Hot Fix Stone</h6>
                                
                              </div>
                          </div>

                          <div class="wg-box-content shot-thumbnail Glass-Beads">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/glass beads/glass-beads-1.png" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Glass Beads</h6>
                              
                            </div>
                          </div>
                          
                          <div class="wg-box-content shot-thumbnail Hardwork-Stone">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/hardwork-stone/hardwork-stone-1.jpg" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Hardwork Stone</h6>
                              
                            </div>
                          </div>

                          <div class="wg-box-content shot-thumbnail Glass-Beads">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/glass beads/glass-beads-2.png" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Glass Beads</h6>
                              
                            </div>
                          </div>
                          
                        </div>

                    
                        <div class="column">

                          <div class="wg-box-content shot-thumbnail Rayon-Thread">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/thread/thread-3.jpg" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Rayon Thread</h6>
                              
                            </div>
                          </div>
                    
                          
                          <div class="wg-box-content shot-thumbnail Hot-Fix-Stone">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/hot-fix-stone/hot-fix-stone-2.png" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Hot Fix Stone</h6>
                              
                            </div>
                          </div>

                          <div class="wg-box-content shot-thumbnail Rayon-Thread">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/thread/thread-4.jpg" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Rayon Thread</h6>
                              
                            </div>
                          </div>

                          <div class="wg-box-content shot-thumbnail Glass-Beads">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/glass beads/glass-beads-4.png" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Glass Beads</h6>
                              
                            </div>
                          </div>
                         
                        </div>
                    
                        <div class="column">

                          <div class="wg-box-content shot-thumbnail Rayon-Thread">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/thread/thread-6.jpg" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Rayon Thread</h6>
                              
                            </div>
                          </div>

                          <div class="wg-box-content shot-thumbnail Non-Hot-Fix-Stone">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/non-hot-fix-stone/non-hot-fix-4.jpg" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Non Hot Fix Stone</h6>
                              
                            </div>
                          </div>
                          
                          <div class="wg-box-content shot-thumbnail Rayon-Thread">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/thread/thread-8.jpg" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Rayon Thread</h6>
                              
                            </div>
                          </div>
                         
                          <div class="wg-box-content shot-thumbnail Hardwork-Stone">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/hardwork-stone/hardwork-stone-5.jpg" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Hardwork Stone</h6>
                              
                            </div>
                          </div>
                                                 
                        </div>
                                       
                        <div class="column">

                          <div class="wg-box-content shot-thumbnail Rayon-Thread">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/thread/thread-9.jpg" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Rayon Thread</h6>
                              
                            </div>
                          </div>
                                              
                          <div class="wg-box-content shot-thumbnail Glass-Beads">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/glass beads/glass-beads-7.png" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Glass Beads</h6>
                              
                            </div>
                          </div>

                          <div class="wg-box-content shot-thumbnail Metallic-Yarn">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/metalic-yarn/metalic-yarn-1.png" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Metallic Yarn</h6>
                              
                            </div>
                          </div>

                          <div class="wg-box-content shot-thumbnail Model-Stone">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/mode-stone/model-stone-5.jpg" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Model Stone</h6>
                              
                            </div>
                          </div>

                          <!-- <div class="wg-box-content shot-thumbnail Glass-Beads">
                            <div class="wg-box-content-overlay"></div>
                            <img class="wg-box-content-image" src="images/products/glass beads/glass-beads-8.png" alt="Image" width="100%">
                            <div class="wg-box-content-details wg-box-fadeIn-bottom">
                              <h6 class="wg-box-content-title fw-bold text-white">Glass Beads</h6>
                              
                            </div>
                          </div> -->
                        
                        </div>                        
                       
                      </div>                 
                    </div>
          </div>
  </div> 

  <div class="text-center mt-5">
    <a href="products.php"><button class="btn-sm button-style">View All</button></a>
  </div>

  </div>
</section>

<!-- ---------------------------products end--------------------------->

<!-- ---------------------------testimonial start--------------------------->

<section class="testimonial">
  <div class="container">
    <h6 class="sub-head-color text-uppercase fw-bold text-center sub-head">Testimonial</h6>
    <i class="fa-light fa-horizontal-rule"></i>
    <h3 class="head-color text-center fw-bold mt-3">Lorem ipsum dolor sit amet</h3>
    <p class="para-color mt-2 text-center para-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra arcu nec diam elementum suscipit. Quisque sit amet ex orci. Proin a purus non ex maximus commodo pharetra eget augue. </p>

    <i class="fa-solid fa-quote-left"></i>

    <div class="testimonia-carousel">
      <div id="carouselExampleIndicatorss" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicatorss" data-bs-slide-to="0" class="active d-none" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicatorss" data-bs-slide-to="1" aria-label="Slide 2" class="d-none"></button>
        <button type="button" data-bs-target="#carouselExampleIndicatorss" data-bs-slide-to="2" aria-label="Slide 3" class="d-none"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">

          <div class="testimonial-bg">
            <div class="row">
            <?php
                $sql = "select * from tbl_testimonial";
                $run = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($run)){
                    $id = $row["id"];
                    $name = $row["name"];
                    $designation = $row["designation"];                                               
                    $title = $row["title"];
                    $description = $row["description"];
                    $img = $row["img"];                                                               
            ?>
              <div class="col-lg-3">
                <img src="admin/assets/images/testimonial/<?php echo $img ?>" alt="testimonial image" class="img-fluid">
              </div>

              <div class="col-lg-9">
                <div class="d-flex">
                  <h6 class="text-white fw-bold"><?php echo $name ?></h6>
                  <p class="text-white fw-bold ms-2 me-2">-</p>
                  <p class="text-white ms-2"><?php echo $designation ?></p>
                </div>
                <h4 class="text-white"><?php echo $title ?></h4>
                <p class="text-white client-words"><?php echo $description ?></p>
                <hr class="horizontal mt-2">
              </div>
              <?php } ?>
            </div>
          </div>

        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorss" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorss" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>
    </div>
  </div>
</section>

<!-- ---------------------------testimonial end--------------------------->

<!-- ---------------------------contact start--------------------------->
<section class="contact">
  <div class="container">
    
      <h6 class="sub-head-color text-uppercase fw-bold text-center sub-head">contact</h6>
      <i class="fa-light fa-horizontal-rule"></i>
      <h3 class="head-color text-center fw-bold mt-3">Lorem ipsum dolor sit amet</h3>
      <p class="para-color mt-2 text-center para-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra arcu nec diam elementum suscipit. Quisque sit amet ex orci. Proin a purus non ex maximus commodo pharetra eget augue. </p>
  
      <div class="contact-details">
        <div class="row">
          <div class="col-lg-6">
            <div class=""></div>
            <?php
            $sql = "select * from tbl_message";
            $run = mysqli_query($con, $sql);
            $rowcount=mysqli_num_rows($run);
            $row=mysqli_fetch_array($run);
                         
            if($rowcount==0){
                echo "error";
            }
            else{

              $id = $row["id"];
              $name = $row["name"];
              $email = $row["email"];
              $subject = $row["subject"];
              $description = $row["description"];  
            }             
            ?>
            <form method="POST" action="functions/functions.php">
              <h6 class="fw-bold text-center mt-3 mb-3 head-color">Lorem ipsum dolor sit amet</h6>
              <div class="input-fields">
                <div class="mb-3">                
                  <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleInputEmail1" name="subject" aria-describedby="emailHelp" placeholder="Subject" required>
                </div>
                <div class="mb-3">
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="Type message" required></textarea>
                </div>
              </div>
              <div class="text-center">
                <input type="submit" id="submit" name="submit" class="button-style " value="submit" >
              </div>
            </form>
           
          </div>
  
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
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

                  ?>
                  <img src="images/contact/1.jpg" alt="contact image" class="img-fluid">
                  <div class="col-lg-3">
                    <div class="i-bg mt-4">
                      <i class="bi bi-geo-alt-fill  text-white text-center ms-2"></i>
                    </div>
                  </div>

                  <div class="col-lg-9">
                    <div class="d-flex">
                      <i class="bi bi-house-fill  me-2 head-color head-icon"></i>
                      <h6 class="card-title fw-bold head-color "><?php echo $place ?></h6>
                    </div>

                    <ul>
                      <li class="para-color"><?php echo $address ?></li>
                      <li class="para-color"><?php echo $city ?></li>
                    </ul>
                  </div>

                </div>

                <div class="row mt-4">

                  <div class="col-lg-3">
                    <div class="i-bg ">
                      <i class="bi bi-person text-white text-center ms-2"></i>
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <ul>
                      <li class="para-color"><i class="bi bi-telephone-fill me-2 head-color"></i><?php echo $phone_number1 ?></li>
                      <li class="para-color"><i class="bi bi-whatsapp me-2 head-color"></i><?php echo $phone_number2 ?></li>
                      <li class="para-color"><i class="bi bi-envelope-fill me-2 head-color"></i><?php echo $email1 ?></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
  </div>
</section>

<!-- ---------------------------contact end--------------------------->

<!-- ---------------------------news letter start--------------------------->

<section class="news-letter">
  <div class="container">
    <div class="news-letter-box">
      <h6 class="sub-head-color text-uppercase fw-bold text-center sub-head">SUBSCRIBE</h6>
      <i class="fa-light fa-horizontal-rule"></i>
      <h3 class="head-color text-center fw-bold mt-3">Subscribe our newslweter</h3>
      <p class="para-color mt-2 text-center para-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra arcu nec diam elementum suscipit. Quisque sit amet ex orci. Proin a purus non ex maximus commodo pharetra eget augue. </p>
      <?php
            $sql = "select * from tbl_subscribe";
            $run = mysqli_query($con, $sql);
            $rowcount=mysqli_num_rows($run);
            $row=mysqli_fetch_array($run);
                         
            if($rowcount==0){
                echo "error";
            }
            else{

              $id = $row["id"];             
              $email = $row["email"];
               
            }             
      ?>
      <form method="POST" action="mail.php">
        <div class="input-group mb-3 mt-4">       
            <input type="email" class="form-control input-field" name="email" id="email" placeholder="Enter email address" aria-label="Enter email address" aria-describedby="basic-addon2" required>
            <input type="submit" value="subscribe" class="button-style text-uppercase" name="subscribe" id="subscribe">
        </div>
      </form>     
    </div>
  </div>
</section>

<!-- ---------------------------news letter end--------------------------->

<!-- ---------------------------footer start--------------------------->

    <?php include("footer.php") ?>

<!-- ---------------------------footer end--------------------------->

<!-- ---------------------------footer end--------------------------->

    <?php include("script.php") ?>

<!-- ---------------------------footer end--------------------------->

  </body>
</html>
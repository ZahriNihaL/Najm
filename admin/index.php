<?php
session_start();
include("assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>

    <?php
    include("style.php");
    ?>

<title>Dashboard</title>
</head>
<body>
    <?php include("assets/content/navbar.php") ?>
<section class="home">
    <div class="text">
        <div class="admin-card">
            <div class="card">
                <div class="card-body">
                  <!-- <div class="d-flex">
                    <h5 class="card-title ms-0">Special title treatment</h5>
                    <div class="admin-details me-0">
                        <div class="img-bg">
                            <img src="images/profile pic.png" alt="" class="img-fluid">
                        </div>
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="col-lg-6">
                        <h4 class="card-title ms-0 fw-bold mt-2">Home</h4>
                    </div>
                    <div class="col-lg-6 right-end d-flex ">
                        <div class="img-bg">
                            <img src="images/profile pic.png" alt="" class="img-fluid">
                        </div>
                        <div class="dropdown">
                            <a href="" class="dropdown-toggle ms-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Najm</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                        </div>
                    </div>
                  </div>
                  
                  
                </div>
            </div>
        </div>

          <div class="home-cards">
            <div class="row">
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">Home</h6>
                                    <h4 class="fw-bold text-black">10</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-img-bg mt-2">
                                        <img src="images/home.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">Customers</h6>
                                    <h4 class="fw-bold text-black">8</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-img-bg mt-2">
                                        <img src="images/about.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">About</h6>
                                    <h4 class="fw-bold text-black">10</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-img-bg mt-2">
                                        <img src="images/service.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">Service</h6>
                                    <h4 class="fw-bold text-black">10</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-img-bg mt-2">
                                        <img src="images/portfolio (1).png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">Product</h6>
                                    <h4 class="fw-bold text-black">10</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-img-bg mt-2">
                                        <img src="images/blog (1).png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">Testimonial</h6>
                                    <h4 class="fw-bold text-black">8</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-img-bg mt-2">
                                        <img src="images/rating (1).png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>


            </div>





            <div class="row mt-4">


                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">Contact</h6>
                                    <h4 class="fw-bold text-black">10</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-img-bg mt-2">
                                        <img src="images/contact.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">Subscribe</h6>
                                    <h4 class="fw-bold text-black">10</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-img-bg mt-2">
                                        <img src="images/contact.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                          <p class="card-text">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
</section>

<?php include("assets/content/script.php"); ?>
  </body>
  
</html>
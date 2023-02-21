<?php
include("assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php
include("assets/css/style.php");
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
                  <div class="row">
                    <div class="col-lg-8">
                        <h4 class="card-title ms-0 fw-bold mt-2">Home</h4>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="home-cards mt-3">
            <div class="row">

                <?php
                $cst_sql = "select * from tbl_customers";
                $run_cst = mysqli_query($con, $cst_sql);
                $cst_count = mysqli_num_rows($run_cst);
                ?>
                <div class="col-lg-2 mb-3">
                    <div class="card" style="background-color: #e5ecf5;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6 class="card-title fw-bold">CUSTOMERS</h6>
                                    <h4 class="fw-bold text-black" style="color: #0d4c91;"><?php echo $cst_count ?></h4>
                                </div>
                                <div class="col-lg-4">
                                    <!-- <div class="card-img-bg mt-2">
                                        <img src="images/about.png" alt="" class="img-fluid">
                                    </div> -->
                                </div>
                            </div>
                          <p class="card-text">Total Customers</p>
                        </div>
                    </div>
                </div>

                <?php
                $ser_sql = "select * from tbl_service";
                $run_ser = mysqli_query($con, $ser_sql);
                $ser_count = mysqli_num_rows($run_ser);
                ?>
                <div class="col-lg-2 mb-3">
                    <div class="card" style="background-color: #e5ecf5;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6 class="card-title fw-bold">SERVICES</h6>
                                    <h4 class="fw-bold text-black" style="color: #0d4c91;"><?php echo $ser_count ?></h4>
                                </div>
                                <div class="col-lg-4">
                                    <!-- <div class="card-img-bg mt-2">
                                        <img src="images/portfolio (1).png" alt="" class="img-fluid">
                                    </div> -->
                                </div>
                            </div>
                          <p class="card-text">Total Services</p>
                        </div>
                    </div>
                </div>

                <?php
                $cat_sql = "select * from tbl_category";
                $run_cat = mysqli_query($con, $cat_sql);
                $cat_count = mysqli_num_rows($run_cat);
                ?>
                <div class="col-lg-2 mb-3">
                    <div class="card" style="background-color: #e5ecf5;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6 class="card-title fw-bold">CATEGORY</h6>
                                    <h4 class="fw-bold text-black" style="color: #0d4c91;"><?php echo $cat_count ?></h4>
                                </div>
                                <div class="col-lg-4">
                                    <!-- <div class="card-img-bg mt-2">
                                        <img src="images/service.png" alt="" class="img-fluid">
                                    </div> -->
                                </div>
                            </div>
                          <p class="card-text">Total Category</p>
                        </div>
                    </div>
                </div>
               
                <?php
                $pdt_sql = "select * from tbl_products";
                $run_pdt = mysqli_query($con, $pdt_sql);
                $pdt_count = mysqli_num_rows($run_pdt);
                ?>
                <div class="col-lg-2 mb-3">
                    <div class="card" style="background-color: #e5ecf5;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6 class="card-title fw-bold">PRODUCTS</h6>
                                    <h4 class="fw-bold text-black" style="color: #0d4c91;"><?php echo $pdt_count ?></h4>
                                </div>
                                <div class="col-lg-4">
                                    <!-- <div class="card-img-bg mt-2">
                                        <img src="images/blog (1).png" alt="" class="img-fluid">
                                    </div> -->
                                </div>
                            </div>
                          <p class="card-text">Total Products</p>
                        </div>
                    </div>
                </div>

                <?php
                $tes_sql = "select * from tbl_testimonial";
                $run_tes = mysqli_query($con, $tes_sql);
                $tes_count = mysqli_num_rows($run_tes);
                ?>
                <div class="col-lg-2 mb-3">
                    <div class="card" style="background-color: #e5ecf5;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6 class="card-title fw-bold">TESTIMONIAL</h6>
                                    <h4 class="fw-bold text-black" style="color: #0d4c91;"><?php echo $tes_count ?></h4>
                                </div>
                                <div class="col-lg-4">
                                    <!-- <div class="card-img-bg mt-2">
                                        <img src="images/rating (1).png" alt="" class="img-fluid">
                                    </div> -->
                                </div>
                            </div>
                          <p class="card-text">Total Testimonial</p>
                        </div>
                    </div>
                </div>

                <?php
                $cnt_sql = "select * from tbl_message";
                $run_cnt = mysqli_query($con, $cnt_sql);
                $cnt_count = mysqli_num_rows($run_cnt);
                ?>
                <div class="col-lg-2 mb-3">
                    <div class="card" style="background-color: #e5ecf5;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6 class="card-title fw-bold">CONTACTS</h6>
                                    <h4 class="fw-bold text-black" style="color: #0d4c91;"><?php echo $cnt_count ?></h4>
                                </div>
                                <div class="col-lg-4">
                                    <!-- <div class="card-img-bg mt-2">
                                        <img src="images/contact.png" alt="" class="img-fluid">
                                    </div> -->
                                </div>
                            </div>
                          <p class="card-text">Total Contacts</p>
                        </div>
                    </div>
                </div>

                <?php
                $new_sql = "select * from tbl_news_letter";
                $run_new = mysqli_query($con, $new_sql);
                $new_count = mysqli_num_rows($run_new);
                ?>
                <div class="col-lg-2 mb-3">
                    <div class="card" style="background-color: #e5ecf5;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6 class="card-title fw-bold">NEWS LETTER</h6>
                                    <h4 class="fw-bold text-black" style="color: #0d4c91;"><?php echo $new_count ?></h4>
                                </div>
                                <div class="col-lg-4">
                                    <!-- <div class="card-img-bg mt-2">
                                        <img src="images/contact.png" alt="" class="img-fluid">
                                    </div> -->
                                </div>
                            </div>
                          <p class="card-text">Total Newsletters Send</p>
                        </div>
                    </div>
                </div>

                <?php
                $sub_sql = "select * from tbl_subscribe";
                $run_sub = mysqli_query($con, $sub_sql);
                $sub_count = mysqli_num_rows($run_sub);
                ?>
                <div class="col-lg-2 mb-3">
                    <div class="card" style="background-color: #e5ecf5;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6 class="card-title fw-bold">SUBSCRIBERS</h6>
                                    <h4 class="fw-bold text-black" style="color: #0d4c91;"><?php echo $sub_count ?></h4>
                                </div>
                                <div class="col-lg-4">
                                    <!-- <div class="card-img-bg mt-2">
                                        <img src="images/contact.png" alt="" class="img-fluid">
                                    </div> -->
                                </div>
                            </div>
                          <p class="card-text">Total Subscribers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("assets/content/script.php"); ?>
<script>
        changeNav("home-nav");
</script>
</body>
</html>
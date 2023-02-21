<?php
include("assets/includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("assets/css/style.php");
?>
<title>Testimonial</title>
</head>
<body>
    <?php include("assets/content/navbar.php") ?>
    <section class="home">
        <div class="text">
            <div class="admin-card">
                <div class="card">
                    <div class="card-body">
                      <div class="row align-items-center ">
                        <div class="col-lg-10">
                            <h4 class="card-title ms-0 fw-bold mt-3">TESTIMONIAL</h4>
                        </div>
                        <div class="col-lg-2 text-end">                                           
                            <a href="add_testimonial.php" class="btn dashboard-btn me-auto" style="background-color: #0d4c91;">Add Testimonial</a>
                        </div>
                      </div>                                   
                    </div>
                </div>
            </div>

            <?php
            if(isset($_GET["error"])){
            ?>
                <div class="alert alert-danger text-center mt-2" role="alert">
                    <?php
                    $error = $_GET["error"];
                    echo $error;
                    ?>
                </div>
            <?php
            }else if(isset($_GET["success"])){
            ?>
                <div class="alert alert-success text-center mt-2" role="alert">
                    <?php
                    $error = $_GET["success"];
                    echo $error;
                    ?>
                </div>
            <?php } ?>

            <div class="card custom-card-2 mt-3">
                <div class="card-body p-3">
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
                        <div class="col-md-3 testimonial mb-3">
                            <div class="card data-card">
                                <div class="card-body p-2 text-center">
                                    <img src="assets/images/testimonial/<?php echo $img ?>" class="img-fluid"> 
                                    <h6 class="fw-bold mt-2"><?php echo $name ?></h6>
                                    <div class="mt-2"><?php echo $designation ?></div>                                    
                                    <div class="d-flex justify-content-center mt-3">
                                        <form method="post" action="edit_testimonial.php">
                                            <input type="hidden" name="id" value="<?php echo $id ?>">
                                            <button type="submit" name="update_testimonial" class="btn btn-primary me-2" style="background-color: #0d4c91; border: 0;">Update</button>
                                        </form>             
                                        <form method="post" action="assets/functions/functions.php">
                                            <input type="hidden" name="id" value="<?php echo $id ?>">
                                            <button type="submit" name="delete_testimonial" class="btn btn-danger" onclick="return confirm('Are you sure to delete?');" style="background-color: #ac0404; border: 0;">Delete</button>
                                        </form>                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>                                   
        </div>
    </section>
    <?php include("assets/content/script.php"); ?>
    <script>
        changeNav("testimonial-nav");
    </script>
</body>
</html>
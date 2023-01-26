<?php
include("assets/includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php
include("style.php");
?>

<title>News Letter</title>
</head>
<body>

    <?php include("assets/content/navbar.php") ?>
    <section class="home">
        <div class="text">
            <div class="admin-card">
                <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-11">
                            <h4 class="card-title ms-0 fw-bold mt-3">NEWS LETTER</h4>
                        </div>
                        <div class="col-lg-1 right-end">                                           
                            <a href="add_news_letter.php" class="btn dashboard-btn me-auto" style="background-color: #0d4c91;">Add News Letter</a>
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
                            $sql = "select * from tbl_news_letter";
                            $run = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($run)){
                                $id = $row["id"];
                                $subject = $row["subject"];
                                $description = $row["description"];                                                                                         
                        ?>
                        <div class="col-md-3 news_letter mb-3">
                            <div class="card data-card">
                                <div class="card-body p-2 text-center">                                   
                                    <h4 class="fw-bold mt-2"><?php echo $subject ?></h4>
                                    <div class="fw-bold mt-2"><?php echo $description ?></div>                                
                                    <div class="d-flex justify-content-center mt-3">
                                        <form method="post" action="edit_news_letter.php">
                                            <input type="hidden" name="id" value="<?php echo $id ?>">
                                            <button type="submit" name="update_news_letter" class="btn btn-primary me-2">Update</button>
                                        </form>             
                                        <form method="post" action="assets/functions/functions.php">
                                            <input type="hidden" name="id" value="<?php echo $id ?>">
                                            <button type="submit" name="delete_news_letter" class="btn btn-danger">Delete</button>
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
</body>
</html>
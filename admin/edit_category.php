<?php
include("assets/includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    include("style.php");
    ?>

<title>Category</title>
</head>
<body>
    <?php include("assets/content/navbar.php") ?>   
        <section class="home">
            <div class="text">
                <div class="admin-card mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-11">
                                    <h4 class="card-title ms-0 fw-bold mt-2">CATEGORY</h4>
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
                <?php             
                    $id = $_POST["id"];
                    $sql = "select * from tbl_category where id='$id'";
                    $run = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($run);
                  
                    $category_name = $row["category_name"];                    
                ?>
                    
                <div class="card custom-card-2 mt-2">
                    <div class="card-body p-4">
                        <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">  
                            <div class="mb-3">
                                <label class="form-label" for="title">Category Name :</label>
                                <input type="text" class="form-control" name="category_name" id="category_name" value="<?php echo $category_name ?>" placeholder="Enter the Category name" required>
                            </div>                       
                            <div class="mb-3">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <button type="submit" class="btn submit_btn float-end" name="update_category">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>            
            </div>
        </section>
        <?php include("assets/content/script.php"); ?>
</body>
</html>





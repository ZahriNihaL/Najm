<?php
include("assets/includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include("assets/css/style.php");
    ?>

    <title>Products</title>
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
                                <h4 class="card-title ms-0 fw-bold mt-2">PRODUCTS</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_GET["error"])) {
            ?>
                <div class="alert alert-danger text-center mt-2" role="alert">
                    <?php
                    $error = $_GET["error"];
                    echo $error;
                    ?>
                </div>

            <?php
            } else if (isset($_GET["success"])) {
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
            $sql = "select * from tbl_products where id='$id'";
            $run = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($run);

            $img = $row["img"];
            $name = $row["name"];
            $category = $row["category_name"];
            ?>

            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="title">Name :</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $name ?>" placeholder="Enter the Name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="title">Category :</label>
                            <select class="form-select" name="category_name" id="category" aria-label="Default select example">
                                <option selected>select product category</option>
                                <?php
                                $sql = "select * from tbl_category";
                                $run = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_array($run)) {
                                    $cid = $row["id"];
                                    $category_name = $row["category_name"];
                                ?>
                                    <option value="<?php echo $cid ?>"><?php echo $category_name ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="image">Image :</label>
                            <input type="file" class="form-control" name="img" id="img">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="old_img" value="<?php echo $img ?>">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <button type="submit" class="btn btn-sm submit_btn float-end" name="update_products" style="background-color:0d4c91;">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include("assets/content/script.php"); ?>
    <script>
        changeNav("products-nav");
        $("#category").val("<?php echo $category ?>");
    </script>
</body>

</html>
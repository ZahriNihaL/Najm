<?php
require_once 'assets/includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include("assets/css/style.php");
    ?>

    <title>News Letters</title>
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
                                <h4 class="card-title ms-0 fw-bold mt-3">NEWS LETTERS</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card custom-card-2 mt-5">
                <div class="card-header p-3">
                    <h2 class="display-6 text-center">News Letters Have Send</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr class="table table-bordered text-white" style="background-color: #0d4c91;">
                            <td>SUBJECT</td>
                            <td>DESCRIPTION</td>
                            <td>DELETE</td>
                        </tr>
                        <tr>
                        <?php
                            $sql = "select * from tbl_news_letter";
                            $run = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($run)){
                                $id = $row["id"];
                                $subject = $row["subject"];
                                $description = $row["description"];                                                                                         
                        ?>                              
                                <td><?php echo $row['subject']; ?></td>
                                <td><?php echo $row['description']; ?></td>

                                <form method="post" action="assets/functions/functions.php">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <td><button type="submit" name="delete_news_letter" class="btn btn-danger" onclick="return confirm('Are you sure to delete?');" style="background-color: #ac0404; border: 0;">Delete</button></td>
                                </form>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php include("assets/content/script.php"); ?>
    <script>
        changeNav("newsletter-nav");
    </script>
</body>
</html>




<?php
require_once 'assets/includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include("assets/css/style.php");
    ?>

    <title>Contact Datas</title>
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
                                <h4 class="card-title ms-0 fw-bold mt-3">CONTACTS</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card custom-card-2 mt-5">
                <div class="card-header p-3">
                    <h2 class="display-6 text-center">Contact Details Of Clients</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr class="table table-bordered text-white" style="background-color: #0d4c91;">
                            <td>NAME</td>
                            <td>EMAIL</td>
                            <td>SUBJECT</td>
                            <td>DESCRIPTION</td>
                            <td>DELETE</td>
                        </tr>
                        <tr>
                            <?php
                            $query = "select * from tbl_message";
                            $result = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row["id"];
                                $email = $row["email"];
                                $name = $row["name"];
                                $description = $row["description"];
                            ?>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['subject']; ?></td>
                                <td><?php echo $row['description']; ?></td>

                                <form method="post" action="assets/functions/functions.php">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <td><button type="submit" name="delete_message" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?');" style="background-color: #ac0404; border: 0;">Delete</button></td>
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
        changeNav("contact-nav");
    </script>
</body>

</html>
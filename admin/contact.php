<?php
require_once 'assets/includes/db.php';
require_once 'assets/functions/functions.php';
$result = display_data();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php
include("style.php");
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
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>                        
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><a href="#" class="btn btn-danger delete_message">Delete</a></td>

                        </tr>
                            <?php } ?>
                    </table>
                </div>                 
            </div>                                                       
        </div>
    </section>
    <?php include("assets/content/script.php"); ?>
</body>
</html>
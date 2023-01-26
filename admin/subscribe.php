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

<title>Subscribe</title>
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
                            <h4 class="card-title ms-0 fw-bold mt-3">SUBSCRIBERS</h4>
                        </div>
                      </div>                                   
                    </div>
                </div>
            </div>

            <div class="card custom-card-2 mt-5">
                <div class="card-header p-3">                   
                    <h2 class="display-6 text-center">Subscribers of Newsletter</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered tbl_plugin" style="text-align: center;">
                        <tr class="table table-bordered text-white" style="background-color: #0d4c91;"> 
                            <td>ID</td>
                            <td>EMAIL</td>
                            <td>DELETE</td>
                        </tr>                        
                        <tr>
                        <?php
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>  
                            <td><?php echo $row['id']; ?></td>                              
                            <td><?php echo $row['email']; ?></td>
                            <td>         
                                <button type="submit" name="delete_message" class="btn btn-danger">Delete</button>                    
                                <!-- <form method="post" action="assets/functions/functions.php">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                <button type="submit" name="delete_message" class="btn btn-danger">Delete</button>
                                <!-- </form> -->
                            </td>
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
<?php

session_start();
if (isset($_SESSION["loggedin"])) {
  header("Location:index.php");
}

include("assets/includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php

    include("style.php");

    ?>

    <title>Login</title>

  </head>

<body>

    <section class="login-page">
        <div class="container">
                <h1 class="fw-bold text-center">Welcome back</h1>
                <h6 class=" text-center">Please Enter Your Valid Details</h6>

            <div class="row login-details">
                
                <div class="col-lg-6 login-bg">

                </div>

                <div class="col-lg-6 bg-white login-form-content">
                    <div class="form-bg">
                      <form method="POST" action="assets/functions/functions.php">

                            <?php
                            if(isset($_GET["error"])){
                            ?>

                            <div class="alert alert-danger text-center" role="alert">
                                <?php
                                $error = $_GET["error"];
                                echo strip_tags($error);
                                ?>
                            </div>

                            <?php
                            }
                            ?>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Username</label>
                              <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter username" required>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                            </div>
                            <div class="text-center">                              
                                <input type="submit" name="login" value="LOGIN" class="btn-sm mt-3 login-btn">
                            </div>
                          </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
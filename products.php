<!doctype html>
<html lang="en">
<head>
<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php
include("css/style.php");
?>
<title>Products - Najm Sewing & Embroidery Requisites Trading </title>
</head>

<body>

<!-- ---------------------------header start--------------------------->

<header>

  <!-- ---------------------------navbar start--------------------------->

  <?php include("content/navbar.php") ?>

</header>
  
  <!-- ---------------------------navbar start--------------------------->


<!-- ---------------------------products start--------------------------->

<section class="products">
    <div class="container">
      <h6 class="sub-head-color text-uppercase fw-bold text-center sub-head">products</h6>
      <i class="fa-light fa-horizontal-rule"></i>
      <h3 class="head-color text-center fw-bold mt-3">Lorem ipsum dolor sit amet</h3>
      <p class="para-color mt-2 text-center para-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra arcu nec diam elementum suscipit. Quisque sit amet ex orci. Proin a purus non ex maximus commodo pharetra eget augue. </p>
        <div class="filter-buttons">
          <button type="button" class="button is-checked" data-filter="">All</button>
          <?php
            $sql = "select * from tbl_category";
            $run = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($run)){
                $id = $row["id"];
                $category_name = $row["category_name"];                                                                                           
          ?>
          <button type="button" class="button" data-filter=".<?php echo str_replace(" ", "-", $category_name); ?>"><?php echo $category_name ?></button>
          <?php } ?>
        </div>

        <div class="nak-gallery nlg1" id="gallery">
        <?php
          $sql = "select * from tbl_products";
          $run = mysqli_query($con, $sql);
          while($row = mysqli_fetch_array($run)){
            $id = $row["id"];
            $name = $row["name"];
            $category = $row["category_name"];                                             
            $img = $row["img"]; 

          $cat_sql = "select * from tbl_category where id='$category'";
          $cat_run = mysqli_query($con, $cat_sql);
          $cat_row = mysqli_fetch_array($cat_run);
            $category_name = $cat_row["category_name"];    
          ?>
          <a href="admin/assets/images/products/<?php echo $img ?>" class="revGallery-anchor <?php echo str_replace(" ", "-", $category_name); ?>" data-sub-html="<h4><?php echo $name ?></h4><p>Category : <?php echo $category_name ?></p>">
            <img class="img-responsive" src="admin/assets/images/products/<?php echo $img ?>">
            <div style="overflow:hidden">
              <div class="nak-gallery-poster" style="background-image:url('admin/assets/images/products/<?php echo $img ?>');background-size:cover;background-repeat:no-repeat;background-position:center center;display: block;width: 100%;height: 0;"></div>
            </div>
            <h6 class="gallery-thumb-title"><?php echo $name ?></h6>
          </a>	
          <?php } ?>
        </div>

      <div class="text-center mt-5">
        <a href="products.php"><button class="btn-sm button-style">View All</button></a>
      </div>
    </div>
  </section>

<!-- ---------------------------products end--------------------------->

<!-- ---------------------------footer start--------------------------->

<?php include("content/footer.php") ?>

<!-- ---------------------------footer end--------------------------->

<!-- ---------------------------script start--------------------------->

<?php include("content/script.php") ?>

<!-- ---------------------------script end--------------------------->

</body>

</html>
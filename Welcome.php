  
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>QNAHUB Forum</title>
  </head>
  <body>
    <?php
    include 'Partials/_header.php';?>
    <?php include 'Partials/_dbconnect.php';?>
    <!-- slider Starts here-->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Bcs.jpg" class="d-block w-100 " height="400px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="It.jpg" class="d-block w-100 " height="400px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Math.jpg" class="d-block w-100 " height="400px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Fetch all Categories  -->
<div class="container my-3">
  <h3 class="text-center my-3"> QNAHUB- Browse Categories</h3>
  <div class="row">
<?php
$sql="SELECT * FROM `categiries`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
  $cat_id=$row['Category_Id'];
 echo' 
    <!-- Use while loop and iterate -->

    <div class="col-md-4 my-2" >
    <div class="card" style="width: 18rem;">
<img src="img'.$row['Category_Id'].'.jpg"'.$row['Category_Name'].','.$row['Category_Name'].'" 
 height="170px" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">'.$row['Category_Name'].'</h5>
  <p class="card-text">'.substr($row['Category_Disc'],0,60).'....</p>
  <a class="btn btn-primary" href="Threads.php?catid='.$cat_id.'" >View Threads</a>
</div>
</div>
    </div>
 ';
}
?>
 </div></div>
<!-- category container starts here -->
    
    <?php
    include 'Partials/_footer.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
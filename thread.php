<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>QNAHUB Forums</title>
    
</head>
<body>
<?php
    include 'Partials/_header.php';?>
   <br><br>
   
    <?php include 'Partials/_dbconnect.php';?>
    
    
<div class="container my-4">
    <h1 >Discussions</h1>
</div>
    
    <!-- $tid=$_GET['threadid'];
    $sql="SELECT * FROM `threads` WHERE thread_id ='$tid'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
      $id=$row['thread_id'];
       $thread_title=$row['thread_title'];
       $thread_desc=$row['thread_desc'];
      
    }
    
  echo'<div>
  <img  src="user (1).png" height="26px" >
  <div style="
    position: relative;
    top: -26px;
    left: 40px;

">
    <h5><a class="text-dark">'.$thread_title.'</a></h5>
<p>'.$thread_desc.'</p>
  </div>'; -->
  <!-- ?>  -->
  <?php include 'Partials/_footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>
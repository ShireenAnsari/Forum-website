<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>QNAHUB Forum</title>
    
</head>
<body>
<?php
    include 'Partials/_header.php';?>
    <?php include 'Partials/_dbconnect.php';?>
    <?php
    $tid=$_GET['tcatid'];
    $sql="SELECT * FROM `threads` WHERE thread_id ='$tid'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
       $thread_title=$row['thread_title'];
       $catdesc=$row['Category_Disc'];
       $thread_desc=$row['thread_desc'];
    
    
   echo' <div class="container mt-3">
  <div class="mt-4 p-5 bg-dark text-white rounded">
    <h3> '.$thread_title.'</h3> 
    
    <p>  '.$thread_desc.' </p>
    <hr>
    <p>Participate in online forums as you would in constructive, face-to-face discussions. ...
Postings should continue a conversation and provide avenues for additional continuous dialogue. ...
Do not post “I agree,” or similar, statements. ...
Stay on the topic of the thread – do not stray.
Any offensive question if found will be removed imediately and the user will be Blocked.</p> 
<p><b>Posted by Shiri</p>
  </div>
</div>
 <br><br>';}

 ?>
 
<div class="container">
    <h1 >Discussions</h1>
    
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
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php
    include 'Partials/_footer.php'
    ?>
</body>
</html>
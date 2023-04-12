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
    <?php
    $id=$_GET['catid'];
$sql="SELECT * FROM `categiries` WHERE Category_Id=$id";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
  $cat_nam=$row['Category_Name'];
  $cat_desc=$row['Category_Disc'];
}
?>
   
    <div class="container mt-3 p-4">
  
  <div class="mt-4 p-5 bg-dark text-white rounded">
  <h2>Welcome to <?php echo $cat_nam?> Forum</h2>
    <p><?php echo $cat_desc?></p> 
    <hr>
   <p> Participate in online forums as you would in constructive, face-to-face discussions. ...
Postings should continue a conversation and provide avenues for additional continuous dialogue. ...
Do not post “I agree,” or similar, statements. ...
Stay on the topic of the thread – do not stray.
Any offensive question if found will be removed imediately and the user will be Blocked.</p> 
  </div>
</div>
<div class="container">
  <h1>Start a Discussion</h1>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Problem title</label>
    <input type="text" class="form-control" id="title" name="title"aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text">Keep Your title as crisp and short as possible</small>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Elaborate your concern </label>
  <textarea class="form-control" id="desc" name="desc"rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
<div class="container">
      <h1>Browse Questions</h1>
      
<br>
<?php
    $cid=$_GET['catid'];
$sql2="SELECT * FROM `threads` WHERE thread_catid=$cid";
$result2=mysqli_query($conn,$sql2);
$noresult=true;
while($row2=mysqli_fetch_assoc($result2))
{
  $noresult=false;
 $title=$row2['thread_title'];
 $desc=$row2['thread_desc'];
 $tcatid=$row2['thread_catid'];
 
 
 
 echo'
<div class="d-flex">
  
  <img
    src="user (1).png"
    alt="....."
    class="me-3 rounded-circle"
    style="width: 60px; height: 60px;"/>

  <div>
    <h5 class="fw-bold "><a  href="thread.php?tcatid='.$tcatid.'" >'.$title.'</a> 
      <small class="text-muted">Posted on February 19, 2021</small>
    </h5>
    <p>
      '.$desc.'
    </p>
  </div>
</div>

</div>
<br>';}
if($noresult)
 {
  echo'
  
  <div class="alert alert-dark"  role="alert">
 <p class="display-5"> No threads Found</p>
  <hr>
  <b>Be the First to ask a Question
</div>

  
  ';
 }
 echo'<br>';
?>
    
    <?php
    include 'Partials/_footer.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
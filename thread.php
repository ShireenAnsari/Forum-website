<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <title>QNAHUB Forums</title>
    
</head>
<body>
<?php
    include 'Partials/_header.php';?>
   <br><br>
   
    <?php include 'Partials/_dbconnect.php';?>
    
    <?php
     $tid=$_GET['tcatid'];
  $showalert=false;
  $method=$_SERVER['REQUEST_METHOD'];
  if($method=='POST')
  {
    //insert thread into comment db
    $comment=$_POST['comment'];
    $sql="INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ( '$comment', '$tid', '0', current_timestamp());";
    $result=mysqli_query($conn,$sql);
    $showalert=true;
    if($showalert)
    {
      echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your Comment has been added
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
  }

  ?> 

    <?php
   
   $sql="SELECT * FROM `threads` WHERE thread_id ='$tid'";
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result))
   {
      $thread_title = $row['thread_title'];
      $thread_desc = $row['thread_desc'];
      echo'<div class="container mt-3">
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
 ';
    }
    
    ?>
    
    <div class="container">
  <h1>Post a Comment</h1>
<form action="<?php echo  $_SERVER['REQUEST_URI']?>" method="post">
  
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Elaborate your concern </label>
  <textarea class="form-control" id="comment" name="comment"rows="3"></textarea>
</div>

  <button type="submit" class="btn btn-success">Post a comment</button>
</form>
</div>
    <br><br>
    <div class="container">
      <h1>Discussions</h1>
      <br>
    <?php
     $tid=$_GET['tcatid'];
    $sql="SELECT * FROM `comments` WHERE thread_id ='$tid'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
      $id=$row['comment_id'];
       $content=$row['comment_content'];
       echo'
  <img  src="user (1).png" height="26px" >
  <div style="
    position: relative;
    top: -26px;
    left: 40px;
">   
<p>'.$content.'</p>
</div>
  '; 
      
    } 
   ?>
  
   <br><br>
  <?php include 'Partials/_footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>
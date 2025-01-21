<?php require "file/_db.php"; 
$insert = false;
if($_SERVER['REQUEST_METHOD']=='POST' and !empty($_SERVER['REQUEST_METHOD']=='POST')){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['text'];

   
    $sql="INSERT INTO `contactUs` ( `name`, `email`,`Message`) 
    VALUES ( '$name', '$email','$message')";
    $res = mysqli_query($conn,$sql);
    $insert=true;

}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact US</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php require "file/_nav.php";?>
    
    <?php
if($insert){
  echo 
  '<div class="alert alert-success" role="alert">
  <h5 class="alert-heading">Success!</h5>
  <p>We have received your query. We will contact you shortly..</p>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

    ';
    $insert=false;
  }

    ?>
    <form class="m-5" action="contactUs.php" method="post">
    <h1 style="text-align:center;" >Contact US Now!</h1>

    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp" require>
  
</div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" require>
  </div>
  <div class="mb-3">
  <label for="text" class="form-label">Message</label>
  <textarea class="form-control" id="text" name="text" rows="3" require ></textarea>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
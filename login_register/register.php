<?php require "file/_db.php"; 
$cpass = false;
$insert = false;
if($_SERVER['REQUEST_METHOD']=='POST' and !empty($_SERVER['REQUEST_METHOD']=='POST')){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    
    if ($password == $cpassword){
    $sql="INSERT INTO `form_info` (`name`, `email`, `password`) 
    VALUES ('$name', '$email', '$password')";
    $res = mysqli_query($conn,$sql);
    
    $insert=true;
    $cpas = true;
    }
    
}


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <?php require "file/_nav.php";
  if($insert){
  echo '
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successfully Inserted</strong> Your account is successfully created.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}
else{
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Not Created</strong> Your account is not created.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($password!=$cpassword){
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Not Created</strong> Your account is not created. Because password does not match.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';}
  // $cpass = null;
  // $insert=null;
?>

    <form class="m-5" action="register.php" method="post">
    <h1 style="text-align:center;">Register Now!</h1>

    <div class="mb-3" >
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  
</div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control"name="password" id="password">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="cpassword" class="form-control" name="cpassword" id="cpassword">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
    If have already account. Please <a href="login.php">Login Now</a>.

</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
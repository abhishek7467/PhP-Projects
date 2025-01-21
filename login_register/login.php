<?php require "file/_db.php"; 

$login = false;

if($_SERVER['REQUEST_METHOD']=='POST' and !empty($_SERVER['REQUEST_METHOD']=='POST')){

    // $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // echo "<br>This is from form " .$email;
    // echo "<br>This is from form " . $password;

$sql="SELECT * FROM `form_info`";
$res = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
if($row["email"]==$email AND $password==$row["password"]){
$login=true;
// $name = $row["name"];
// echo "<br>This is from form " .$email;
// echo "<br>This is from form " . $password;
// echo "<br>This is from db " . $row["email"];
// echo "<br>This is from db " . $row["password"];

}}}
if($login){
    echo "Login Success...";
    session_start();
    $_SESSION["email"] = "$email";
    $_SESSION["pass"] = "$password";
    $_SESSION["login"] = "$login";
    header("Location: welcome.php");

    
    
}


?>

  
  
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php require "file/_nav.php";?>
    <form class="m-5" action="login.php" method="post">
    <!-- <form action="login.php" method="post"> -->
    
    <h1 style="text-align:center;">Please Login!</h1>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email"name="email" aria-describedby="emailHelp">
  </div> 
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control"name="password" id="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Login Now!</button>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

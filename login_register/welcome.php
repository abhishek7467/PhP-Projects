<?php require "file/_db.php"; ?>

<?php
session_start();
if (!isset($_SESSION['email'])) {
  header('Location: login.php');
  exit;
}
?>

<?php
$email = $_SESSION["email"];
$sql = "SELECT * FROM `form_info` WHERE `email` ='$email'";
$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($res)) {
  $name = $row["name"];
}
?>

<?php
    $sql="SELECT * FROM `my_blog`";
    $res_b= mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php echo 'Welcome ' . $name; ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <?php require "file/_nav_login.php"; ?>

  <?php
  echo '


  <div class="card  text-dark" style="text-align: center;">
  <img src="https://media.istockphoto.com/id/1322277517/photo/wild-grass-in-the-mountains-at-sunset.jpg?s=612x612&w=0&k=20&c=6mItwwFFGqKNKEAzv0mv6TaxhLN3zSE43bWmFN--J5w=" style="height: 300px;" class="card-img img-fluid" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Welcome!' . '<h1> ' . $name . ' </h1> ' . '</h5>
    <p class="card-text">Your Email id : ' . $_SESSION["email"] . '</p>
    <p class="card-text"></p>
  </div>
</div>





    <div class="card text-dark bg-light m-3" style="max-width: 80rem;">
  <div class="card-body">
    <p class="card-text"> <button type="button" style="float:left;" class="btn btn-outline-success ml-4"><a href="all_blogs.php">All Blogs</a></button>
    <button type="button" style="float:right;"class="btn btn-outline-danger"><a href="my_profile.php">My Profile</a></button>
</p>
</div>
  </div>';
  // echo "Welcome ".$_SESSION["pass"];
  // echo "Your Status is  ".$_SESSION["login"];
  ?>

<?php

while($row_b=mysqli_fetch_assoc($res_b)){
  $blog_title = $row_b["blog_title"];
  $blog = $row_b["blog"];
  $DT = $row_b["DT"];

echo '
<div class="card m-3">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>'.$blog_title.'</p>
      <button type="button"  class="btn btn-light"> <a href="all_blogs.php"> Read More </a></button>
      <footer class="blockquote-footer mt-2">- <cite title="Source Title">'.$DT.'</cite></footer>
    </blockquote>
  </div>
</div>';

}
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>
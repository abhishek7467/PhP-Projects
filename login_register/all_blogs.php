<?php require "file/_db.php"; ?>

<?php
session_start();
if (!isset($_SESSION['email'])) {
  header('Location: login.php');
  exit;
}
?>

<?php


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php echo "Welcome " . $_SESSION["email"]; ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <?php require "file/_nav_login.php"; ?>
  <!-- <div class="container" style="float: center;  text-align: center; width: 600px;">
    <p class="card-text"  > 
</p>
</div> -->
  <h5 style="text-align:center;" class="mt-1"> ALL BLOGS</h5>

  <div class="card text-dark bg-light m-3" style="width: 69%;left: 14%;">
    <div class="card-body">
      <p class="card-text"> <button type="button" class="btn btn-outline-success"><a href="create_blogs.php">Create
            Blog</a></button>

        <button type="button" style="float:right;" class="btn btn-outline-info"><a href="my_profile.php">My
            Profile</a></button>
      </p>
    </div>
  </div>

  <?php
  // echo "Welcome ".$_SESSION["email"];
  // echo "Welcome ".$_SESSION["pass"];
  // echo "Your Status is  ".$_SESSION["login"];
  $email = $_SESSION["email"];
  $sql = "SELECT * FROM `my_blog`";
  $res = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($res)) {
    $img = $row["image"];
    $blog_title = $row["blog_title"];
    $blog = $row["blog"];
    $email_b = $row['email'];
    // $img = $row["image"];
    $sql_info = "SELECT * FROM `form_info` WHERE `email` ='$email_b'";
    $res_info = mysqli_query($conn, $sql_info);
    while ($row_info = mysqli_fetch_assoc($res_info)) {
      $name_info = $row_info["name"];
    }
    echo '

<div class="card mb-2" style="margin:auto; width:60%;">
<img src="' . $img . '" class="card-img " class="center" alt="Italian Trulli" style="margin:auto; height: 314px;width: 308px;">
  <h5 class="card-header" >' . $blog_title . '</h5>
  <div class="card-body" >
    <h5 class="card-title">' . $blog . '</h5>
    <p class="card-text" style="text-align:right;">~ Author : ' . $name_info . '</p>
  </div>
</div>';
  }
  ?>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
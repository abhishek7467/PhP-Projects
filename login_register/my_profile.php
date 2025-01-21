<?php require "file/_db.php";?>

<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "Welcome ".$_SESSION["email"];?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php require "file/_nav_login.php";?>
    

    <!-- <div class="container" style="float: center;  text-align: center; width: 600px;">
    <p class="card-text"  > 
    <button type="button" class="btn btn-outline-danger"><a href="create_blogs.php">Create Blog</a></button>
</p>
</div> -->


<h5 style="text-align:center;" class="mt-1"> MY PROFILE</h5>
<div class="card text-dark bg-light m-3" style="width: 69%;left: 14%;">
  <div class="card-body" >
    <p class="card-text">     <button type="button" class="btn btn-outline-success"><a href="create_blogs.php">Create Blog</a></button>
    

    <button type="button" style="float:right;"class="btn btn-outline-info"><a href="all_blogs.php">All Blogs</a></button>
</p>
</div>
  </div>
    <?php
    // echo "Welcome ".$_SESSION["email"];
    // echo "Welcome ".$_SESSION["pass"];
    // echo "Your Status is  ".$_SESSION["login"];
    $email=$_SESSION["email"];
    $sql="SELECT * FROM `my_blog` WHERE `email` ='$email'";
    $res= mysqli_query($conn,$sql);
    $s_no = 1;
    while($row=mysqli_fetch_assoc($res)){
        $img = $row["image"];
        $blog_title = $row["blog_title"];
        $blog = $row["blog"];
        
        $DT = $row["DT"];
    
// $img="data:image/jpeg;base64,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";
  


echo '
<div class="card text-center mb-2" style="  margin-right: 200px; margin-left: 200px;">
  <div class="card-header">
    Blog
  </div>
  <div class="card-body">
     <img src="' . $img . '" class="card-img-top" alt="Italian Trulli" style="height: 200px;height: 314px;width: 308px;">
    <h5 class="card-title">'.$s_no.'</h5>
    <p class="card-text">'.$blog_title.'</p>
    <p class="card-text">'.$blog.'</p>
  </div>
  <div class="card-footer text-body-secondary">
    <p class="card-text">'.$DT.'</p>
    
  </div>
</div>';
$s_no+=1;
}    
    ?>


    

   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
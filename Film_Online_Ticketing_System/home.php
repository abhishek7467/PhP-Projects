<?php require "include/_db.php" ?>

<?php
session_start();
if (!isset($_SESSION['email'])) {
  header('Location: login.php');
  exit;
}
?>


<?php
$sql = "SELECT * FROM  `film_record` ";
$res = mysqli_query($conn, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Movie List</title>
  
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <?php require "include/_logout.php"; ?>
  <h1 class="m-3" style="text-align:center;">Movies List</h1>
  <?php
  // echo $_SESSION['email'];
  // echo $_SESSION['name'];

  ?>



   <div class="row row-cols-1 row-cols-md-5 g-3" id="myTable">
    <?php 
    while ($row = mysqli_fetch_array($res)) {
      
      echo '
     
  <div class="card">
  




    <img src="' . $row['img_url'] . '" class="card-img-top" style="height:55vh;width:100%;">
    
    <div class="card-body">
      <h5 class="card-title">' . $row['m_name'] . '</h5>
      <p class="card-text">' . $row['m_ratings'] . '</p>
      <p class="card-text">' . $row['m_category'] . '</p>
      <p class="card-text">' . $row['m_year'] . '</p>
      <p class="card-text">' . substr($row['m_desc'],0,100) . '</p>
      <p class="card-text">' . $row['Actor'] . '</p>
      <p class="card-text">' . $row['Type'] . '</p>
      <p class="card-text">' . $row['Country'] . '</p>
      <p class="card-text">' . $row['Language'] . '</p>
      
      <p class="card-text"><small class="text-body-secondary">' . $row['Writer'] . '</small></p>
    </div>
    <a class="m-1" href="movie_info.php?id='.$row['s_no'].'" style="text-decoration:none; color:black;"><button type="button" class="btn btn-info" style="width:100%">More Details </button></a>
    </div> ';
    }

    ?>

</div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

   

  </body>

</html>
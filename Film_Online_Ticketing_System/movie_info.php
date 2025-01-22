<?php require "include/_db.php" ?>

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
  <title>Movie Information</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <?php require "include/_logout.php"; ?>
  <h1 class="m-3" style="text-align:center;">Movie Information</h1>
  

<?php
$id=$_GET['id'];

$_SESSION['id']=$id;
// $id=8;
$sql = "select * from film_record where s_no=$id";
$res = mysqli_query($conn, $sql);

?>

<div class="card bt-3" style="width: 25rem;margin:auto;">
<?php

while($row=mysqli_fetch_assoc($res)){
// echo $row['s_no'] ;
// echo $row['m_name'] ;
// echo $row['m_desc'] ;

echo'
  <img src="'.$row['img_url'].'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$row['m_name'].'</h5>
    <p class="card-text">' . $row['m_desc'] . '</p>
  </div>

  <ul class="list-group list-group-flush">
    <li class="list-group-item">'.$row['m_ratings'].'</li>
    <li class="list-group-item">'.$row['m_year'].'</li>
    <li class="list-group-item">'.$row['m_category'].'</li>
    <li class="list-group-item">'.$row['Actor'].'</li>
    <li class="list-group-item">'.$row['Type'].'</li>
    <li class="list-group-item">'.$row['Country'].'</li>
    <li class="list-group-item">'.$row['Language'].'</li>
    <li class="list-group-item">'.$row['Writer'].'</li>
  </ul>
  <div class="card-body">

  <a class="m-1" href="ticket.php" style="text-decoration:none; color:black;"><button type="button" class="btn btn-info" style="width:45%">Book Ticket </button></a>
  <a class="m-1" href="My_Dashboard.php" style="text-decoration:none; color:black;"><button type="button" class="btn btn-info" style="width:45%">My Dashboard</button></a>

</div>
';}
?>
</div>









  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>
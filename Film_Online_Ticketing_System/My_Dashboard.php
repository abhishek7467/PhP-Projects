<?php require "include/_db.php" ?>
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
session_start();
if (!isset($_SESSION['email'])) {
  header('Location: login.php');
  exit;
}
?>


<?php
$sEmail=$_SESSION['email'];
$sql = "SELECT * FROM `Ticket_booking_history` WHERE email='$sEmail'";
// $sql="SELECT * FROM `Ticket_booking_history` WHERE email="abc@gmail.com";

$res = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> My Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <?php require "include/_logout.php"; ?>
  <h1 class="m-3" style="text-align:center">My Dashboard</h1>


  <div class="card" style="width:55%;height:70%; text-align:center; margin:auto;">
    <img src="story_mul_image_.jpg" class="card-img">
    <div class="card-img-overlay ">
      <h2 class="card-title mt-4" style="text-align:center"><?php echo $_SESSION['email'] ?></h2>
      <h2 class="card-title" style="text-align:center"><?php echo $_SESSION['name'] ?></h2>
    </div>
  </div>



  <?php
  $rs_f = 0;
  $rs_b = 0;
  $rs_e = 0;

  $PrNu_f = 0;
  $PrNu_b = 0;
  $PrNu_e = 0;

  $t_f = "First Class";
  $t_b = "Business Class";
  $t_e = "Economy Class";
  while ($row = mysqli_fetch_array($res)) {

    if ($row['TicketType'] == 1) {
      $t_f = "First Class";
      $PrNu_f = $PrNu_f + $row['PrNum'];
      $rs_f = $PrNu_f * 300;
    } else if ($row['TicketType'] == 2) {
      $t_b = "Business Class";
      $PrNu_b = $PrNu_b + $row['PrNum'];
      $rs_b = $PrNu_b * 200;
    } else {
      $t_e = "Economy Class";
      $PrNu_e = $PrNu_e + $row['PrNum'];
      $rs_e = $PrNu_e * 100;
    }
  }
  ?>
  <br class="m-3">
  <table class="table table-dark table-striped " style="width:55%;margin:auto;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tickets Type</th>
        <th scope="col">Number Of tickets</th>
        <th scope="col">Amount</th>
      </tr>
    </thead>
    <tbody>


      <tr class="table-active">
        <th scope="row">1</th>
        <td><?php echo $t_f; ?></td>
        <td><?php echo $PrNu_f; ?></td>
        <td><?php echo $rs_f; ?></td>
      </tr>
      <tr class="table-active">
        <th scope="row">2</th>
        <td><?php echo $t_b; ?></td>
        <td><?php echo $PrNu_b; ?></td>
        <td><?php echo $rs_b; ?></td>
      </tr>
      <tr class="table-active">
        <th scope="row">3</th>
        <td><?php echo $t_e; ?></td>
        <td><?php echo $PrNu_e; ?></td>
        <td><?php echo $rs_e; ?></td>
      </tr>
    </tbody>
  </table>


  <h5 class="m-3" style="text-align:center;">Your Movie History</h5>
  <div class="row row-cols-1 row-cols-md-3" style="display:flex;flex-wrap:wrap;justify-content:center;" >

    <?php

    $sql = "select t.PrNum,t.DT,t.TicketType,f.m_name,f.m_desc,f.m_ratings,f.img_url,f.m_category,f.m_year from Ticket_booking_history as t join film_record as f on f.s_no=t.film_id WHERE email='$sEmail'";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($res)) {

      if ($row['TicketType'] == 1) {
        $tC = "First Class";
      } else if ($row['TicketType'] == 2) {
        $tC = "Business Class";
     
      } else {
        $tC = "Economy Class";
      }


      echo '

  <div class="row g-0 m-3">
    <div class="col-md-4">
      <img src="' . $row['img_url'] . '" class="img-fluid rounded-start" style="height:39vh;width:100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body" style="text-align:center;">
        <h5 class="card-title">Movie Name :' . $row['m_name'] . '</h5>
        <ul class="list-group list-group-flush">
    <li class="list-group-item">Movie Category :' . $row['m_category'] . ' </li>
    <li class="list-group-item">Movie Year :' . $row['m_year'] . ' </li>
    <li class="list-group-item">Movie Description  : ' . substr($row['m_desc'],0,200) . '</li>
    <li class="list-group-item">Number of Persons Allow : <b>' . $row['PrNum'] . ' </b></li>
    <li class="list-group-item">Ticket Class  : <b>' . $tC . ' </b></li>
    <li class="list-group-item">        <p class="card-text"><small class="text-body-secondary">'.$row['DT'].'</small></p></li>
    </ul>

        </div>
    </div>
  </div>
      
      ';

    }
    ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
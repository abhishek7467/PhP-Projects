<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php include "_include/_db.php"; ?>


<?php session_start(); 


if(!isset($_SESSION["email"])){
    header("location: login.php");
    exit;
}
$email_d =$_SESSION["email"];

$sql = "SELECT * FROM `my_user_data` WHERE `email`='$email_d'";
$res_q = mysqli_query($conn, $sql);

if (mysqli_num_rows($res_q) > 0) {
    while($res = mysqli_fetch_assoc($res_q))

if(!isset($_SESSION["email"]) && $res["email"]!=$email_d){
header("location: login.php");
exit;
}

}
?>

<?php
$sql = "SELECT * FROM `User_dashboard_info` WHere `email`='$email_d'";
$res = mysqli_query($conn, $sql);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="_include/_nav.css">
    <link rel="stylesheet" href="styling/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <link rel="stylesheet" href="styling/styles.css"> -->

</head>

<body>

    <?php include "_include/_nav_logout.php"; ?>

    <h1>Dashboard</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="first-container">
                    <h1>My profile</h1>

                    <div class="card text-bg-dark">
                        <img src="quiz_bc.jpeg" class="card-img">
                        <div class="card-img-overlay text-white">
                            <h2 class="card-title">Hello <?php echo $_SESSION["name"]; ?> </h2>
                            <?php
                            while ($row = mysqli_fetch_assoc($res)) {

                                echo '
                            <p class="card-text"> User Name : ' . $row["email"] . '</p>
                            <p class="card-text">Your Marks :' . $row["marks"] . '</p>
                            <p class="card-text">Your Total Quiz : ' . $row["total_no_quiz"] . '</p> ';
                                // <p class="card-text"><small>'.$res["email"].'</small></p>
                            }
                            ?>
                        </div>
                        <!-- Content for the first container goes here -->
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="second-container">
                    <!-- Content for the second container goes here -->
                    <h1>Take a quiz and make your mind creative</h1>
                    <img src="quiz1.png" class="card-img-second">

                
                    <!-- <img src="3BBL.gif" alt="Your GIF"> -->
                    <!-- <img src="P54U.gif" alt="Your GIF"> -->
                </div>
            </div>
        </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php  include "_include/footer.php"; ?>
</body>

</html>
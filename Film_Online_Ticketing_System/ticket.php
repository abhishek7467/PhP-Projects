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
$id = $_SESSION['id'];
// $id=$_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $ticket_no = $_POST['ticket_num'];
    $ticket_type = $_POST['ticket_type'];
    $email= $_SESSION['email'];

    $sql = "INSERT INTO `Ticket_booking_history` (`email`,`film_id`,`PrNum`, `TicketType`) VALUES ('$email','$id','$ticket_no', '$ticket_type' )";
    $res= mysqli_query($conn,$sql);
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php require "include/_logout.php"; ?>
    <h1 class="m-3" style="text-align:center;" ;>Book A Ticket</h1>
    <div class="container" style="display:flex; align-items:center; justify-content:center;">
    <img src="movie_poster.jpg" class="img-fluid" style="width:55%;height:70%;">
    </div>

    <form class="" style="width:50%;margin:auto;"  action="ticket.php" method="post">

        <div class="input-group mb-3">
            <select class="form-select" id="ticket_num" name="ticket_num">
                <option selected>Choose...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <label class="input-group-text" for="inputGroupSelect02">Number of Persons</label>
        </div>

        <div class="input-group mb-3">
            <select style="background-color:white;" class="form-select" id="ticket_type" name="ticket_type">
                <option selected>Choose...</option>
                <option value="1" style="color:blueviolet;">
                    <pre>First Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;300Rs.</pre>
                </option>
                <option value="2" style="color:tomato;">
                    <pre>Business&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200Rs.</pre>
                </option>
                <option value="3" style="color:seagreen;">
                    <pre>Economy &nbsp;&nbsp;&nbsp;100RS.</pre>
                </option>
            </select>
            <label class="input-group-text" for="inputGroupSelect02">Ticket Types</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
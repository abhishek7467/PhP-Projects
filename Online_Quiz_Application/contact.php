<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php include_once "_include/_db.php"; ?>

<?php
$register = false;
if (($_SERVER["REQUEST_METHOD"] == "POST") && (!empty($_SERVER["REQUEST_METHOD"] == "POST"))) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $query = $_POST["message"];


    
            $sql = "INSERT INTO `contactUs` (`name`, `email`, `query`) VALUES ('$name', '$email', '$query')";
            $res = mysqli_query($conn, $sql);
        }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Now</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="_include/_nav.css">
    <link rel="stylesheet" href="styling/register.css">

</head>

<body>

    <?php include "_include/_nav.php"; ?>


    <h1>Contact US</h1>

    <div class="container">
        <form action="contact.php" method="post">
            <div class="mb-3" action="register.php" method="post">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" name="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Query</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>









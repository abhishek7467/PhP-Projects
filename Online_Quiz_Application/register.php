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
    $password = $_POST["password"];
    $c_password = $_POST["c_password"];


    $sql = "SELECT * FROM `my_user_data` WHERE `email`='$email'";
    $res_q = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res_q) > 0) {
        echo mysqli_num_rows($res_q);
        header("location:  register_login.php");
        exit;
    } else {
        if ($password == $c_password) {
            $sql = "INSERT INTO `my_user_data` ( `name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
            $res = mysqli_query($conn, $sql);
        }
        else{
            header("location: register_error.php");
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="_include/_nav.css">
    <link rel="stylesheet" href="styling/register.css">

</head>

<body>

    <?php include "_include/_nav.php"; ?>


    <h1>Register</h1>

    <div class="container">
        <form action="register.php" method="post">
            <div class="mb-3" action="register.php" method="post">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" name="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="email" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <label for="c_password" class="form-label">Confirm Password</label>
                <input type="c_password" class="form-control" id="c_password" name="c_password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
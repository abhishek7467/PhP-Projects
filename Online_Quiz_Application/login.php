<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php include "_include/_db.php"; ?>

<?php

$register = false;
if (($_SERVER["REQUEST_METHOD"] == "POST") && (!empty($_SERVER["REQUEST_METHOD"] == "POST"))) {
    $email = $_POST["email"];
    $password = $_POST["password"];


    $sql = "SELECT * FROM `my_user_data` WHERE `email`='$email'";
    $res_q = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res_q) > 0) {
        while ($res = mysqli_fetch_assoc($res_q)) {
            if ($res["password"] == $password) {

                session_start();
                $_SESSION['email'] = $res["email"];
                $_SESSION['name'] = $res["name"];
                header("location: dashboard.php");

                exit;
            }
            else {
                header("location: password_error.php");
                exit;
            

        }
    } 

}    
else {
        header("location: login_error.php");
        exit;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="_include/_nav.css">
    <link rel="stylesheet" href="styling/login.css">

</head>

<body>

    <?php include "_include/_nav.php"; ?>

    <h1>Login</h1>
    <div class="container">

        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="email" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <!-- <img src="P54U.gif" alt="Your GIF"> -->







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
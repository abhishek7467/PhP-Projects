<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_log', '/path/to/error.log');
?>
<?php require "_include/_db.php" ?>


<?php
// session_start();
// if (isset($_SESSION["email"]) && isset($_SESSION["name"])) {
//     // header("location: My_Profile.php");
// exit;
// }
?>
<?php
session_start();
if (isset($_SESSION["email"]) && isset($_SESSION["name"])) {
    header("location: home.php");
    exit;
}
?>
<?php
$insert = "";
$c_password = "";
$password = "";
$existence = "";
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_SERVER['REQUEST_METHOD'] == 'POST'))) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    $sql_records = "SELECT * FROM `user_register` WHERE email ='$email'";
    $res_records = mysqli_query($conn, $sql_records);

    if (mysqli_num_rows($res_records) == 1) {
        $existence = true;
        // header('location: login_error.php');
        // exit;
    } else {

        if ($c_password == $password) {
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user_register` (`name`, `email`, `password`) VALUES ( '$name', '$email', '$pass')";
            $res = mysqli_query($conn, $sql);
            // $sql_d = "INSERT INTO `User_dashboard_info` (`name`, `email`) VALUES ( '$name', '$email')";
            // $res = mysqli_query($conn, $sql_d);



            $insert = true;
        } else {
            $insert = false;
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Mukta:wght@600&family=Zeyada&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style/_nav.css">
    <link rel="stylesheet" href="style/register.css">
    <style>
    .nav-link {
        /* font-family: 'Zeyada', cursive;
    font-size: 1.2rem; */

    }

    .login_text {
        margin-left: 21px;
    }
    </style>
</head>










<body>
    <?php require "_include/_nav.php"; ?>
    <!-- <img src="bg_image_music.jpg" alt=""> -->

    <?php
    if ($insert) {
        echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account has been successfully created. Now you can login...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
    }
    if ($existence) {
        echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Warning!</strong> Your account is already exists. Now you can login...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
    } else {
        if (($c_password != $password) && (!$insert)) {
            echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>UnSuccess!</strong> Your account has not created.Because Your password does not match in both fields. Please try again...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
        }
    }
    ?>
    <div class="container-form" id="Form">

        <h1 class="m-3" style="text-align:center;">Register Now</h1>



        <form class="m-3" action="register.php" method="post">
            <div class=" mb-3 ">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3 ">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div id="email" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <div class="mb-3 ">
                <label class="form-label" for="password">Confirm Password</label>
                <input type="password" class="form-control" id="c_password" name="c_password" required>
            </div>
            <button type="submit" class="btn" id="submit">Submit</button>
            <input type="reset" class="btn" id="ClearForm" value=" Clear From ">

        </form>

        <p class="login_text">If You have already account. Please <a href="login.php">Login</a> here.</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
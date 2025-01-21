<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_log', '/path/to/error.log');
?>
<?php require "_include/_db.php"?>
<?php
session_start();
if (isset($_SESSION["email"]) && isset($_SESSION["name"])) {
    header("location: home.php");
    exit;
}
?>
<?php
$login = "";
$notExists = "";
$empty = "";
if (!isset($_POST["email"]) && !isset($_POST["password"])) {
    $empty = true;
} else {
    $empty = false;
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_SERVER['REQUEST_METHOD'] == 'POST'))) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user_register` where email='$email'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) == 0) {
        $notExists = true;
    } else {
        while ($row = mysqli_fetch_assoc($res)) {
            $notExists = false;
            if ($row['email'] == $email && password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $row['name'];
                // $login=true;
                header("location: playlist.php");
            } else {
                $login = false;
                // $exists = false;
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style/_nav.css">
    <link rel="stylesheet" href="style/register.css">

</head>

<body>
    <?php require "_include/_nav.php";?>


    <?php
if (!$empty) {

    if ($notExists ) {
        echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>UnSuccess!</strong> Your account is not Exist. Please Register.....
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
    } else {
        if (!$login && !$notExists) {
            echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>UnSuccess!</strong> Please check your email and password. Try Again.....
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
        }
    }
}

?>

    <div class="container-form" id="Form">
        <h1 class="m-3" style="text-align:center;">Login</h1>



        <form class="m-3" action="login.php" method="post">
            <div class="mb-3 ">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>
        <p class="login_text">If You have already account. Please <a href="register.php">Register</a> here.</p>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
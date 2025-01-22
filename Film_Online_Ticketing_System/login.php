<?php require "include/_db.php" ?>
<?php
$login=false;
if(($_SERVER['REQUEST_METHOD']=='POST') && (!empty($_SERVER['REQUEST_METHOD']=='POST'))){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `Film_Registre`";
    $res=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($res)){
    if($row['email']==$email && $row['password']==$password){
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['name']=$row['name'];
        // $login=true;
        header("location: home.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php require "include/_nav.php"; ?>

   
<?php
if(!$login){
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>UnSuccess!</strong> Your account has been not Exist. Please Register..... 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
}


?>
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>
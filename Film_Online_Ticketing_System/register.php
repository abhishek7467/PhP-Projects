<?php require "include/_db.php" ?>

<?php
$insert = "";
if(($_SERVER['REQUEST_METHOD']=='POST') && (!empty($_SERVER['REQUEST_METHOD']=='POST'))){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $cpassword= $_POST['cpassword'];


$sql_records="SELECT * FROM `Film_Registre`";
$res_records=mysqli_query($conn,$sql_records);
while($row=mysqli_fetch_assoc($res_records)){
    if($row['email']==$email){
        $existence=true;
        header('location: error.php');
        exit;
    }
}

if($cpassword==$password){
$sql="INSERT INTO `Film_Registre` (`name`, `email`, `password`) VALUES ( '$name', '$email', '$password')";
$res=mysqli_query($conn,$sql);
$insert=true;

}
else{
    $insert=false;
}

}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php require "include/_nav.php"; ?>

    <?php
if($insert==true){
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account has been successfully created. Now you can login... 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
}
// if($insert==false){
//     echo '
//     <div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>UnSuccess!</strong> Your account has not created.Because 
//    <br>Please try again... 
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>
// ';  
// }
if(($cpassword!=$password) && ($insert==false) ){
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>UnSuccess!</strong> Your account has not created.Because Your password does not match in both fields. Please try again... 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
}

?>


<h1 class="m-3" style="text-align:center;">Register Now</h1>



    <form class="m-3" action="register.php" method="post"">
        <div class="mb-3 ">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" name="name" aria-describedby="name" required>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
            <div id="email" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>

        <div class="mb-3 ">
            <label class="form-label" for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="reset" class="btn btn-primary" value=" Clear From " />

    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>
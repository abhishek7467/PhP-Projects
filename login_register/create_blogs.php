<?php require "file/_db.php"; ?>

<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}
?>
<?php

require "file/_db.php";
$insert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $name = $_POST['name'];
    // $image = $_FILE['image'][];
    // $filename = $_FILES["img"]["name"];
    // $tempname = $_FILES["img"]["tmp_name"];
    // $folder = "./images/" . $filename;

    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $email = $_SESSION["email"];
    $blog_title = $_POST['blog_title'];
    $blog = $_POST['blog'];




    if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        // $_SESSION['result'] = "Error uploading file.";
        die("Your record is not successfully inserted due to " . " mysqli_error()");
    } else {
        // Convert image to binary data
        $binary_data = base64_encode(file_get_contents($file_tmp));
        // echo "Binary data: " . $binary_data; (working)
        $img_url = 'data:' . $file_type . ';base64,' . $binary_data;
    }


    // $sql = "INSERT INTO `my_blog` (`image`,`email`, `blog_title`, `blog`) VALUES ('$email', '$blog_title', '$blog')";


    $sql = "INSERT INTO `my_blog` ( `image`,`email`, `blog_title`, `blog`) 
    VALUES ('$img_url','$email', '$blog_title', '$blog')";
    $ins = mysqli_query($conn, $sql);
    if ($ins) {
        // echo "Your Record Inserted Successfully";
        $insert = true;
    } else {
        die("Your record is not successfully inserted due to " . " mysqli_error()");

    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo "Welcome " . $_SESSION["email"]; ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php require "file/_nav_login.php"; ?>
    <!-- <?php
    // echo "Welcome " . $_SESSION["email"];
    // echo "Welcome " . $_SESSION["pass"];
    // echo "Your Status is  " . $_SESSION["login"];
    ?> -->
    <!-- 
    <div class="container" style="float: center;  text-align: center; width: 600px;">
    <p class="card-text"  > 
    <button type="button" class="btn btn-outline-danger"><a href="my_profile.php">My Profile</a></button>
</p>
</div> -->

    <h5 style="text-align:center;" class="mt-1"> CREATE A BLOG</h5>

    <div class="card text-dark bg-light m-3" style="max-width: 80rem;">
        <div class="card-body">
            <p class="card-text"> <button type="button" class="btn btn-outline-success"><a href="all_blogs.php">All
                        Blogs</a></button>
                <button type="button" style="float:right;" class="btn btn-outline-info"><a href="my_profile.php">My
                        Profile</a></button>
            </p>
        </div>
    </div>

    <form class="m-5" action="create_blogs.php" method="post" enctype="multipart/form-data">


        <div class="mb-3">
            <label for="text" class="form-label">Blog Title</label>
            <input type="text" class="form-control" name="blog_title" id="blog_title">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Select image</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="blo g" class="form-label">Blog</label>
            <textarea class="form-control" name="blog" id="blog" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>
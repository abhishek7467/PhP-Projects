<?php require "include/_db.php" ?>
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
$f_insert = "";
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_SERVER['REQUEST_METHOD'] == 'POST'))) {
   
    $m_category = $_POST['m_category'];


    $m_image_name = $_FILES['fileToUpload']['name'];
    $m_image_temp = $_FILES['fileToUpload']['tmp_name'];
    $m_image_size = $_FILES['fileToUpload']['size'];
    $m_image_type = $_FILES['fileToUpload']['type'];

  

    if ($_FILES['fileToUpload']['error'] !== UPLOAD_ERR_OK) {
        die("Your record is not inserted due to ");
    } else {
       $binary_data= base64_encode(file_get_contents($m_image_temp));
        $img_url = 'data:' . $m_image_type . ';base64,'.$binary_data;
    }
    // $sql_records="SELECT * FROM `Film_Registre`";
// $res_records=mysqli_query($conn,$sql_records);
// while($row=mysqli_fetch_assoc($res_records)){
//     if($row['email']==$email){
//         $existence=true;
//         header('location: error.php');
//         exit;
//     }
    // $sql = "INSERT INTO `film_record` (`m_name`, `m_ratings`, `m_desc`,`img_url`) VALUES ( '$m_name', '$m_ratings', '$m_desc','$img_url')";


    // echo "$m_name";
    // echo "<br>$m_desc";
    // echo  "<br>$m_ratings";
    // echo  "<br>$img_url";
    // echo  "<br>$m_year";
    // echo  "<br>$m_category";
    
    $sql="INSERT INTO `pages_img` ( `img`, `For_Which_Page`) VALUES ( '$img_url', '$m_category')";
    $res=mysqli_query($conn,$sql);
    
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Film Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php require "include/_nav.php"; ?>



    <h1 style="text-align:center;">Movie Records</h1>



    <form class="m-3" action="test.php" method="post" enctype="multipart/form-data">
        
        <div class="mb-3">
            <label for="m_category" class="form-label">For Which Page</label>
            <input type="text" class="form-control" name="m_category" id="m_category" required>
        </div>

        <div class="mb-3 ">
            <label class="form-label" for="fileToUpload">Movie Banner</label>
            <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="reset" class="btn btn-primary" value=" Clear From " />

    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>
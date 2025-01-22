<?php require "include/_db.php" ?>


<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

 <?php
// Set the level of errors to report
// error_reporting(E_ERROR | E_PARSE);

// // Turn off displaying errors on the screen
// ini_set('display_errors', 'Off');

// // Log errors to a file
// ini_set('log_errors', 'On');
// ini_set('error_log', '/path/to/error.log');

?> 


<?php
$f_insert = "";


if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_SERVER['REQUEST_METHOD'] == 'POST'))) {
/*    $m_name = $_POST['m_name'];
    $m_ratings = $_POST['m_ratings'];
    $m_desc = $_POST['m_desc'];
    $m_year = $_POST['m_year'];
    $m_category = $_POST['m_category'];


    $m_image_name = $_FILES['fileToUpload']['name'];
    $m_image_temp = $_FILES['fileToUpload']['tmp_name'];
    $m_image_size = $_FILES['fileToUpload']['size'];
    $m_image_type = $_FILES['fileToUpload']['type'];

    */
    // $file_name = $_FILES['image']['name'];
    // $file_tmp = $_FILES['image']['tmp_name'];
    // $file_type = $_FILES['image']['type'];
    // $file_size = $_FILES['image']['size'];
/*
    if ($_FILES['fileToUpload']['error'] !== UPLOAD_ERR_OK) {
        die("Your record is not inserted due to ");
    } else {
       $binary_data= base64_encode(file_get_contents($m_image_temp));
        $img_url = 'data:' . $m_image_type . ';base64,'.$binary_data;
    }
  

    // $sql="INSERT INTO `film_record` ( `m_name`, `m_desc`, `m_ratings`, `img_url`, `m_year`, `m_category`) VALUES ('$m_name', '$m_desc', '$m_ratings', '$img_url', '$m_year', '$m_category')";
  */


  $film=file_get_contents("include/_Film_data2.json");
  // echo var_dump($film);
  
  $arr_film = json_decode($film,true);
  
  
  for($i=0;$i<count($arr_film);$i++){
    $image_info = @getimagesize($arr_film[$i]['Poster']);

if ($image_info !== false){
    
$img=$arr_film[$i]['Poster'];
$title=    $arr_film[$i]['Title'] ;
$year =    $arr_film[$i]['Year'] ; 
 
$genres =  $arr_film[$i]['Genre']; 
 
$story =   $arr_film[$i]['Plot'] ;
$Writer =  $arr_film[$i]['Writer'];
$actor =   $arr_film[$i]['Actors']; 
$Language =    $arr_film[$i]['Language'];
$Country =     $arr_film[$i]['Country'] ;
$ibmr=     $arr_film[$i]['imdbRating'];
$Type=  $arr_film[$i]['Type'] ; 
 
/*
$arr_film[$i]['releaseDate'] . 


$title=    $arr_film[$i]['title'];    
$year =     $arr_film[$i]['year'];
$genres =   $arr_film[$i]['genres'][0].' , '.$arr_film[$i]['genres'][1].' , '.$arr_film[$i]['genres'][2];
// $releasedate = $arr_film[$i]['releaseDate'];
$st = explode("Written",$arr_film[$i]['storyline']);
$story =    $st[0];
$Writer =   "Written ". $st[1];
    


$actor =     $arr_film[$i]['actors'][0].' , '.$arr_film[$i]['actors'][1].' , '.$arr_film[$i]['actors'][2];
    
$ibmr =     $arr_film[$i]['imdbRating'];
$img =      $arr_film[$i]['posterurl'];
$Type=      "Movie";
$Country=   "";

*/


  $sql="INSERT INTO `film_record` 
  ( `m_name`, `m_desc`, `m_ratings`, `img_url`, `Actor`, `m_year`, `m_category`,`Type`,`Country`,`Writer`,`Language`) 
  VALUES ('$title', '$story', '$ibmr', '$img', '$actor', '$year', '$genres','$Type','$Country','$Writer','$Language')";

    $res=mysqli_query($conn,$sql);
    
    $f_insert = true;
}
  }
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

    <?php
    if ($f_insert) {
        echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Successfully Inserted Film Details...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
    }
    ?>


    <h1 class="m-3" style="text-align:center;">Movie Records</h1>



    <form class="m-3" action="movieform.php" method="post" enctype="multipart/form-data">
        <div class="mb-3 ">
            <label for="m_name" class="form-label">Movie Name</label>
            <input type="name" class="form-control" id="m_name" name="m_name" aria-describedby="name" required>
        </div>
        <div class="mb-3 ">
            <label for="m_year" class="form-label">Year</label>
            <input type="text" class="form-control" id="m_year" name="m_year" required>
        </div>
        <div class="mb-3">
            <label for="customRange3" class="form-label">Ratings</label>
            <input type="range" class="form-range" min="0" max="10" step="0.1" id="m_ratings" name="m_ratings">
        </div>
        <div class="mb-3">
            <label for="m_desc" class="form-label">Description of Movie</label>
            <input type="text" class="form-control" name="m_desc" rows="2" id="m_desc" required>
        </div>
        <div class="mb-3">
            <label for="m_category" class="form-label">Category of Movie</label>
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
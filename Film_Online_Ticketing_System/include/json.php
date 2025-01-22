<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
// Set the level of errors to report
error_reporting(E_ERROR | E_PARSE);

// // Turn off displaying errors on the screen
ini_set('display_errors', 'Off');

// // Log errors to a file
ini_set('log_errors', 'On');
ini_set('error_log', '/path/to/error.log');

// Suppress warnings for a specific line of code
// @theFunctionHere();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

<div class="row row-cols-1 row-cols-md-4 g-3" id="myTable">


<?php

$film=file_get_contents("_Film_data2.json");
// echo var_dump($film);

$arr_film = json_decode($film,true);


for($i=0;$i<count($arr_film);$i++){
// echo var_dump($arr_film[$i]['title']);
// echo "<br>";
// echo var_dump($arr_film[$i]['year']);
// echo "<br>";
// echo var_dump($arr_film[$i]['genres'][0].$arr_film[$i]['genres'][1].$arr_film[$i]['genres'][2]);
// echo "<br>";
// echo var_dump($arr_film[$i]['releaseDate']);
// echo "<br>";
// echo var_dump($arr_film[$i]['storyline']);
// echo "<br>";

// echo var_dump($arr_film[$i]['actors'][0].$arr_film[$i]['actors'][1].$arr_film[$i]['actors'][2]);
echo "<br>";

// echo var_dump($arr_film[$i]['imdbRating']);
// echo "<br>";
// echo var_dump($arr_film[$i]['posterurl']);
// echo "<br>";
// echo var_dump($arr_film[$i]['storyline']);

// if(!empty($entry[35])){
$image_info = @getimagesize($arr_film[$i]['Poster']);

if ($image_info !== false){
// echo "<br>";
// <p>'.$arr_film['Writer'][0].' , '.$arr_film['Writer'][1].' , '.$arr_film['Writer'][2].'</p>
// <p class="card-text">' . $arr_film[$i]['Plot'] . ' </p>
echo '
<div class="card">
  
  
<img src="' . $arr_film[$i]['Poster'] . '" class="card-img-top" style="height:55vh;width:100%;">

<div class="card-body">
  <h5 class="card-title">' . $arr_film[$i]['Title'] . '</h5>
  <p class="card-text"> Year: ' . $arr_film[$i]['Year'] . '</p>
  <p class="card-text">Genre :  ' . $arr_film[$i]['Genre']. '</p>
  <p class="card-text">Story : ' . $arr_film[$i]['Plot'] . '<br> <p> Writer : '.$arr_film[$i]['Writer'].'</p></p>
  <p class="card-text">Actor  : ' .$arr_film[$i]['Actors'].' <br> <p> Language : '.$arr_film[$i]['Language'].'</p></p>
  <p class="card-text">Country  :  ' . $arr_film[$i]['Country'] . '</p>
  <p class="card-text">imdbRating :  ' . $arr_film[$i]['imdbRating'] .'</p>
  <p class="card-text"> Type  : ' . $arr_film[$i]['Type'] . '</p>
  <p class="card-text"><small class="text-body-secondary">' . $arr_film[$i]['releaseDate'] . '</small></p>
</div>
</div> ';



}
}
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My String Based Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


    </head>

<body>
    <h1>My String Based Application</h1>

    <?php
$Input_st=$_REQUEST['str_obj'];
$Input_st2=$Input_st;
$Input_searching=$_REQUEST['Searching_obj'];


$char_counter = strlen($Input_st);
$word_counter = str_word_count($Input_st);
$substr  =explode(".",$Input_st);

$str_Upper = strtoupper($Input_st2);
// echo $s
// Search into the strings 


// echo $Input_searching;

?>

    <div class="card">

        <?php
echo'
    <p class="card-content"> Total Number of Character in your Paragraph :  <b>'.$char_counter.'  </b> </p>
    <p class="card-content"> Total Number of Words in your Paragraph :  <b>'.$word_counter.'  </b> </p>
    <p class="card-content"> Your Paragraph in Upper Case :  <b>'.$str_Upper.'  </b> </p>
    <p class="card-content"> Sentence in your Paragraph :   </p>
    
     ';


    foreach($substr as $k => $v){
 echo ' <p class="card-content">  <b>'.$k .'   '.$v.'  </b> </p>';
}



?>

    </div>

    <?php

// $mySearchres =stristr();
// $mySearchPosition = strpos($Input_st2,$Input_searching);




$result = stristr($Input_st2, $Input_searching);

if ($result !== false) {
    echo "Substring found: " . $result;
} else {
    echo "Substring not found.";
}
// echo "Your string is found at    $mySearchPosition";
// echo "<br>";

echo "<br>";
echo "This is Input By the User:  ";
echo $Input_st;



?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
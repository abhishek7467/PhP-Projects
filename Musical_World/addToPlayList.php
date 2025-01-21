
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set('memory_limit', '2G');  // Set to 2 gigabytes

?>
<?php
include_once '_include/_db.php';
 include "check_session.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email=$_SESSION["email"];
    // echo $email;
    // $name=$_SESSION["name"];
    // Insert the data into your database table (adapt this to your database structure)
    $song_id = $_POST['Song_id'];

    $sql_query="SELECT * FROM `PlayList` WHERE song_id=$song_id and email='$email'";
    $sql_res=mysqli_query($conn,$sql_query);

if(mysqli_num_rows($sql_res)==0){

    // while($rows=mysqli_fetch_assoc($sql_res)){

    
    // if($rows["email"]!=$email and $rows["song_id"]!=$song_id){
    // echo $song_id;
    $sql = "INSERT INTO PlayList (`email`, `song_id`) VALUES ('$email', $song_id)";

    if (mysqli_query($conn, $sql)) {
        echo 'Added';
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
    // }
else{
    echo " Already Added";
}
}

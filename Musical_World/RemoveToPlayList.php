
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
    echo $song_id;
    $sql = "Delete from PlayList Where email='$email' and song_id= $song_id";

    if (mysqli_query($conn, $sql)) {
        echo 'Deleted';
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

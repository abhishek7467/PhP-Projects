<?php
$server="localhost";
$username= "root";
$password = "";
$db ="Film_Report";

$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("Your connection is not stablish due to " . mysqli_error());
}
// else{
//     echo " Connection Successfully...";
// }

?>
<?php
$server= "localhost";
$username = "root";
$password = "";
$db = "loginsystem";

$conn=mysqli_connect($server,$username,$password,$db);
if (!$conn){
    die("Connection not Connected. because -> ". mysqli_error());
}
// else{
//     echo "Connection Stablish Successfully...";
// }


?>
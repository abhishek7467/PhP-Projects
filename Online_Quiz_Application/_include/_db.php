<?php
$server = "localhost";
$username = "root";
$pass="";
$db="Online_Quiz_Application";

$conn = mysqli_connect($server,$username,$pass,$db);
if(!$conn)
{
    die ("Database is not connected... --> "  ) ;
}
else
{
    echo "Successfully Connected..";
}

?>
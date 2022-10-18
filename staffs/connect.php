<?php


$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "100bed_sdp";
$conn = mysqli_connect($sname,$uname,$password,$db_name);
if (!$conn) {
   # code...
   echo 'connection failed';
}
// else {
//    echo 'sounds';
// }



?>
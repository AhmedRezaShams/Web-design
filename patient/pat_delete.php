<?php
include('connect.php');
if (isset($_GET['deletepatid'])) {
    $id=$_GET['deletepatid'];

    $sql="DELETE FROM `patient` WHERE id= $id";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        
        header('location:all_pat.php');
        
     
    }
    else{
        echo "error";
    }
}
?>
<?php
include('connect.php');
if (isset($_GET['deletesid'])) {
    $id=$_GET['deletesid'];

    $sql="DELETE FROM `staffs` WHERE id= $id";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        
        header('location:staff&nurse.php');
        
     
    }
    else{
        echo "error";
    }
}
?>
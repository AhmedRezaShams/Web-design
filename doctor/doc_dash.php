<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css" integrity="sha512-+oRH6u1nDGSm3hH8poU85YFIVTdSnS2f+texdPGrURaJh8hzmhMiZrQth6l56P4ZQmxeZzd2DqVEMqQoJ8J89A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Doctor Dashboard</title>
</head>

<body>
    <?php
include('d_header.php');
session_start();
        include('connect.php');   
        
        $ad = $_SESSION['name'];
        $query = "SELECT * FROM `doctors` WHERE name='$ad'";
        $res = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($res)){
        $uname = $row['name'];
        $profile = $row['id'];
        $id = $row['p_id'];
        }
        

?>
    <br>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2 order-first" style="margin-left: -10px ">
                    <div class="list-group bg-secondary" style="height:90vh">
                        <a href="" class="list-group-item list-group-item-action bg-primary text-center text-white ">
                            <?php echo $uname ?> Dashboard
                        </a>

                        <a href="update_doc.php"
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Update
                            Profile</a>

                        <!-- <a href="../doctor/all_doc.php"
                            class="list-group-item list-group-item-action bg-secondary text-center text-white "></a> -->
                        <a href="../patient/all_pat.php"
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Patient</a>

                        <a href=""
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Appointment</a>
                        <!-- <a href=""
                            class="list-group-item list-group-item-action bg-secondary text-center text-white "></a> -->
                        <a href=""
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Report</a>

                    </div>
                </div>
            
                    <div class="col-md-10">
                        <div class="col-md-12 ">
                            <div class="row">

                                <div class="col-md-3 bg-info mx-2" style="height:130px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white" style="font-size: 30px;">
                                                   
                                                </h5>

                                                <h5 class="text-white">My</h5>
                                                <h5 class="text-white">Profile</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><i  style="color : white ;" class='fas fa-3x my-4'>&#xf0f0;</i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <?php

include('connect.php');
$result = mysqli_query($conn, "SELECT  COUNT(*) as count
            FROM patient"

);

while ($row = mysqli_fetch_array($result)) {

    $pat = $row['count'];

    // echo "There are currently " .$var. " users.";

}
?>

                                <div class="col-md-3 bg-warning mx-2" style="height:130px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo " " .$pat. " ";?> </h5>
                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">Patient</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><i style="color : white ;" class="fas fa-3x my-4">&#xf193;</i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <?php

include('connect.php');

$result = mysqli_query($conn, "SELECT  COUNT(*) as count
            FROM appointment where p_id = '$id'"

);

while ($row = mysqli_fetch_array($result)) {

    $app = $row['count'];

    // echo "There are currently " .$var. " users.";

}
?>

                                <div class="col-md-3 bg-success mx-2" style="height:130px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white" style="font-size: 30px;">
                                                <?php echo " " .$app. " ";?>
                                                </h5>

                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">Appointment</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><i class="fa fa-users-cog fa-3x my-4"
                                                        style="color: white;"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
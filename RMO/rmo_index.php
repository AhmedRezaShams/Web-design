<?php

include('connect.php');
$result = mysqli_query($conn, "SELECT  COUNT(*) as count
            FROM rmo"

);

while ($row = mysqli_fetch_array($result)) {

    $var = $row['count'];

    // echo "There are currently " .$var. " users.";

}
?>
<?php


$result = mysqli_query($conn, "SELECT  COUNT(*) as count
            FROM doctors"

);

while ($row = mysqli_fetch_array($result)) {

    $doc = $row['count'];

    // echo "There are currently " .$var. " users.";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css" integrity="sha512-+oRH6u1nDGSm3hH8poU85YFIVTdSnS2f+texdPGrURaJh8hzmhMiZrQth6l56P4ZQmxeZzd2DqVEMqQoJ8J89A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"
        integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <title>RMO Dashboard</title>

</head>

<body>
    <?php
        include ('rmo_header.php');
        
        session_start();
        include('connect.php');   
        
        $ad = $_SESSION['name'];
        $query = "SELECT * FROM `rmo` WHERE name='$ad'";
        $res = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($res)){
        $uname = $row['name'];
        $profile = ['id'];
        }
        
        
    ?>
    <br>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2 order-first" style="margin-left: -10px ">
                    <div class="list-group bg-secondary" style="height:90vh">
                        <a href=""
                            class="list-group-item list-group-item-action bg-primary text-center text-white "> <?php echo $uname ?> Dashboard</a>

                        <a href=""
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Update Profile</a>

                        <a href="../doctor/all_doc.php"
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Doctors</a>
                            <a href="..\patient\all_pat.php"
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Patient</a>    

                        <a href=""
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Appointment</a>
                        <a href="..\staffs\staff&nurse.php"
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Staffs & Nurses</a>
                        <a href=""
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Report</a>    

                    </div>
                </div>
                    <div class="col-md-10">
                        <div class="col-md-12 ">
                            <div class="row">
                               
                                <div class="col-md-3 bg-secondary mx-2" style="height:130px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo " " .$var. " ";?></h5>

                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">Admin</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><i class="fa fa-users-cog fa-3x my-4"
                                                        style="color: white;"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3 bg-info mx-2" style="height:130px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo " " .$doc. " ";?></h5>

                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">Doctors</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><i style="color: white;" class="fa  fa-3x my-4">&#xf0f0;</i></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <?php


$result = mysqli_query($conn, "SELECT  COUNT(*) as count
            FROM patient"

);

while ($row = mysqli_fetch_array($result)) {

    $pat = $row['count'];

    // echo "There are currently " .$var. " users.";

}
?>
                                <div class="col-md-3 bg-secondary mx-2" style="height:130px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo " " .$pat. " ";?></h5>

                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">Patient</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><i style="color: white;" class="fa  fa-3x my-4">&#xf193;</i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3 bg-primary mx-2" style="height:130px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white" style="font-size: 30px;">0</h5>

                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">Report</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><i style="color: white;" class="fa  fa-3x my-4">&#xf0f6;</i></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3 bg-dark mx-2" style="height:130px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white" style="font-size: 30px;">0</h5>

                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">JobRequest</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><i style="color: white;" class="fas  fa-3x my-4">&#xf0c0;</i></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <?php


$result = mysqli_query($conn, "SELECT  COUNT(*) as count
            FROM staffs"

);

while ($row = mysqli_fetch_array($result)) {

    $sta = $row['count'];

    // echo "There are currently " .$var. " users.";

}
?>
                                <div class="col-md-3 bg-primary mx-2" style="height:130px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo " " .$sta. " ";?></h5>

                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">Staffs & Nurses</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><i style="color: white;" class="fas  fa-3x my-4">&#xf7bd;</i></a>
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
    </div>


</body>

</html>
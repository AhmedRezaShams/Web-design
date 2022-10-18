<?php
session_start();
 
$insert = false;
if (isset($_POST['title'])) {
    

    $link = mysqli_connect("localhost", "root", "", "100bed_sdp");
     
    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

        $title= mysqli_real_escape_string($link, $_REQUEST['title']);
        $mass= mysqli_real_escape_string($link, $_REQUEST['mass']);
        
        $query= "INSERT INTO `rmo`( `p_name`, `massage`) VALUES ('$title','$mass')";
        if(mysqli_query($link, $query)){
            $insert = true;
            echo "Records added successfully.";
          
             exit();
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
         
        
        mysqli_close($link);
        }
    

?>
<?php
include('connect.php');
$sql="SELECT * FROM `patient`";
$result= mysqli_query($conn,$sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
    }
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
    <title>Patient Dashboard</title>
</head>

<body>
    <?php
    include("p_header.php");
    ?>
    <?php

        include('connect.php');   
        
        $ad = $_SESSION['uname'];
        $query = "SELECT * FROM `patient` WHERE uname='$ad'";
        $res = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($res)){
        $uname = $row['uname'];
        $profile = $row['id'];
        // $id = $row['p_id'];
        }
        

?>
<?php
require_once('connect.php');
$query = "SELECT * FROM patient ";
$result = mysqli_query($conn,$query);
    ?>
    <br>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2 order-first" style="margin-left: -10px ">
                    <div class="list-group bg-info" style="height:90vh">
                        <a href=""
                            class="list-group-item list-group-item-action bg-primary text-center text-white "><?php echo $uname ?>Dashboard</a>

                        <a href="Update_Pro.php?updateppid=<?php echo $profile; ?>"
                            class="list-group-item list-group-item-action bg-primary text-center text-white ">Update
                            Profile</a>

                        <a href=""
                            class="list-group-item list-group-item-action bg-primary text-center text-white ">Available
                            Doctors</a>

                        <a href="Get_Appointment.php" class="list-group-item list-group-item-action bg-primary text-center text-white ">Get
                            Appointment</a>
                        <a href="" class="list-group-item list-group-item-action bg-primary text-center text-white ">
                            See Report</a>

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
                                                <a href="#"><i class="fa fa-users-cog fa-3x my-4"
                                                        style="color: white;"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
 

                                <div class="col-md-3 bg-primary mx-2" style="height:130px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8"><a href="">
                                                <h5 class="my-2 text-white" style="font-size: 30px;"> </h5>
                                                <h5 class="text-white">Get</h5>
                                                <h5 class="text-white">Appointment</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="Get_Appointment.php"><i style=" color : white ;" style="size: 30px;"  class="fa fa-3x my-4">&#xf0f1;</i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                               

                                <div class="col-md-3 bg-secondary mx-2" style="height:130px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white" style="font-size: 30px;">
                                                   
                                                </h5>

                                                <h5 class="text-white">My</h5>
                                                <h5 class="text-white">Invoice</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><i style="color : white ;" class="fa fa-3x my-4">&#xf016;</i></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="col-md-8 jumbotron bg-secondary my-12">
                                                <h5 class="text-center my-2 text-white">Send a Report</h5>
                                                 <form action="" method="post">
                                                    <label for="" class="text-white" >Title</label>
                                                    <input type="text" name="title" placeholder="Enter Title" autocomplete="off">
                                                    <label for="" class="text-white">Massage</label>
                                                    <input type="text" name="mass" autocomplete="off" class="form-control" placeholder="Enter Massage">
                                                    <input type="submit" name="send" value="send report" class="btn btn-info my-2">
                                                 </form>               
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
<?php
// session_start();
$insert = false;
if (isset($_POST['uname'])) {
    # code...

$link = mysqli_connect("localhost", "root", "", "100bed_sdp");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$uname = mysqli_real_escape_string($link, $_REQUEST['uname']);
$upass = mysqli_real_escape_string($link, $_REQUEST['upassword']);


 

$sql = "INSERT INTO `patient`(  `uname`, `upassword`) 
VALUES ('$uname','$upass');";
if(mysqli_query($link, $sql)){
    $insert = true;
    echo "Records added successfully.";
    header('location:patient_dash.php');
     exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
}
// header('location : p_signup1.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"
        integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <title>Patient</title>
</head>

<body>
    <section class="vh-100 bg-secondary">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h5>User Name & Password Please</h5>
                                <form action="p_signup1.php" method="post">
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" id="form6Example1" class="form-control" name="uname"/>
                                                <label class="form-label" for="form6Example1" >UName</label>
                                            </div>
                                        </div>
                                       
                                    </div>

                                
                                    <!-- Number input -->
                                    <div class="form-outline mb-4">
                                        <input type="varchar" id="form6Example4" class="form-control" name="upassword" />
                                        <label class="form-label" for="form6Example4" >Password</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                    <input type="password"  name="" class="form-control form-control-lg" />
                                    <label class="form-label" >Confirm Password</label>
                                </div>
                                    
                                    <div>
                                        <button class="btn bg-secondary" type="submit"> Submit</button>
                                    </div>







                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>
<?php
// session_start();
$insert = false;
if (isset($_POST['l_name'])) {
    # code...

$link = mysqli_connect("localhost", "root", "", "100bed_sdp");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$first_name = mysqli_real_escape_string($link, $_REQUEST['f_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['l_name']);
$age = mysqli_real_escape_string($link, $_REQUEST['Uage']);
$gender = mysqli_real_escape_string($link, $_REQUEST['Ugender']);
$address = mysqli_real_escape_string($link, $_REQUEST['Uaddress']);
$marital = mysqli_real_escape_string($link, $_REQUEST['opt']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['Umobile']);

 

$sql = "INSERT INTO `patient`( `l_name`, `f_name`, `gender`, `age`, `mobile`, `marital_status`, `address`) 
VALUES ('$last_name','$first_name','$gender','$age','$mobile','$marital','$address');";
if(mysqli_query($link, $sql)){
    $insert = true;
    echo "Records added successfully.";
    // header('location:p_signup1.php');
    //  exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// header('location:p_signup1.php');
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
                                <h5>Create An Account</h5>
                                <form action="p_signup.php" method="post">
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" id="form6Example1" class="form-control" name="f_name"/>
                                                <label class="form-label" for="form6Example1" >First name</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" id="form6Example2" class="form-control" name="l_name"/>
                                                <label class="form-label" for="form6Example2" >Last name</label>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example3" class="form-control" name="Uage" />
                                        <label class="form-label" for="form6Example3" >Age</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example3" class="form-control" name="Ugender"/>
                                        <label class="form-label" for="form6Example3" >Gender</label>
                                    </div>

                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example4" class="form-control" name="Uaddress"/>
                                        <label class="form-label" for="form6Example4" >Address</label>
                                    </div>




                                    <!-- Number input -->
                                    <div class="form-outline mb-4">
                                        <input type="varchar" id="form6Example4" class="form-control" name="Umobile"/>
                                        <label class="form-label" for="form6Example4" >Phone</label>
                                    </div>
                                    <div>
                                    <div class="form-outline mb-4">
                                        <input type="varchar" id="form6Example4" class="form-control" name="opt"/>
                                        <label class="form-label" for="form6Example4" >Marital Status</label>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                    <button 
                                            class="btn bg-secondary btn-block btn-lg gradient-custom-4 text-body" value="register" type="submit"> Next</button>
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
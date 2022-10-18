

<?php
$insert = false;
if (isset($_POST['f_name'])) {
    

    $link = mysqli_connect("localhost", "root", "", "100bed_sdp");
     
    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

        $address= mysqli_real_escape_string($link, $_REQUEST['addr']);
        $f_name= mysqli_real_escape_string($link, $_REQUEST['f_name']);
        $l_name= mysqli_real_escape_string($link, $_REQUEST['l_name']);
        $uname = mysqli_real_escape_string($link, $_REQUEST['uname']);
        $pass= mysqli_real_escape_string($link, $_REQUEST['pass']);
        $role = mysqli_real_escape_string($link, $_REQUEST['role']);
        $spc= mysqli_real_escape_string($link, $_REQUEST['spc']);
        $email= mysqli_real_escape_string($link, $_REQUEST['email']);
        $date= mysqli_real_escape_string($link, $_REQUEST['date']);
        $query= "INSERT INTO `doctors`( `f_name`, `l_name`, `name`, `email`, `password`, `speciality`, `role`, `date`, `address`) VALUES ('$f_name','$l_name','$uname','$email','$pass','$spc','$role','$date','$address')";
        if(mysqli_query($link, $query)){
            $insert = true;
            echo "Records added successfully.";
            header('location:all_doc.php');
             exit();
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
         
        
        mysqli_close($link);
        }
    

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
    <title> Add A Doctor</title>
</head>

<body>

    <section class="vh-100 bg-secondary">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h5>Add A Doctor</h5>
                                <br>
                                

                                   
                                <form action="add_doc.php" method="post">
                                   
                                    <div class="row mb-1">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" id="form6Example1" class="form-control"
                                                    name="f_name" />
                                                <label class="form-label" for="form6Example1">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" id="form6Example2" class="form-control" name="l_name"/>
                                                <label class="form-label" for="form6Example2" >Last Name</label>
                                            </div>
                                        </div>


                                    </div>

                                 
                                    <div class="form-outline mb-1">
                                        <input type="text" id="form6Example3" class="form-control" name="uname" />
                                        <label class="form-label" for="form6Example3" >Uname</label>
                                    </div>
                                    <div class="form-outline mb-1">
                                        <input type="varchar" id="form6Example3" class="form-control" name="pass" />
                                        <label class="form-label" for="form6Example3" >Password</label>
                                    </div>

                                    <div class="form-outline mb-1">
                                        <input type="text" id="form6Example3"  class="form-control" name="date" />
                                        <label class="form-label" for="form6Example3">Date Of Ad</label>
                                    </div>

                                    
                                    <div class="form-outline mb-1">
                                        <input type="varchar" id="form6Example4" class="form-control" name="email"/>
                                        <label class="form-label" for="form6Example4" >Email</label>
                                    </div>




                                   
                                    <div class="form-outline mb-1">
                                        <input type="varchar" id="form6Example4"   class="form-control" name="role" />
                                        <label class="form-label" for="form6Example4">Role</label>
                                    </div>
                                    <div>
                                        <div class="form-outline mb-1">
                                            <input type="varchar" id="form6Example4" class="form-control" name="spc" />
                                            <label class="form-label" for="form6Example4">Specialty</label>
                                        </div>
                                        <div class="form-outline mb-1">
                                            <input type="varchar" id="form6Example4" class="form-control" name="addr" />
                                            <label class="form-label" for="form6Example4">Address</label>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button
                                                class="btn bg-secondary btn-block btn-lg gradient-custom-4 text-body"
                                                 type="submit" name="add">Add</button>
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
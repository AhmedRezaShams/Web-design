<?php
include 'connect.php';
session_start();


if(isset($_POST['sid'])) {
    # code...
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data =htmlspecialchars($data);
        return $data ;
    }
   
    $Sid =  validate($_POST['sid']);
    

    if (empty($Sid)) {
        header('location:admin_login.php?error=Sid Req');
       exit();
   }
   
   else {
    # code...
    $sql = "SELECT * FROM `rmo` WHERE S_id='$Sid'";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) === 1) {
        # code...
        
    
        $row = mysqli_fetch_assoc($result);
        if (($row['sid']) === $Sid ) {
            # code...
                        $name = $_POST['name'];
                        $pass = $_POST['password'];
                        $sql1 = "INSERT INTO `100bed_sdp`.`rmo`( `name`, `password`) VALUES ('$name','$pass',current_timestamp());"; 
                       
                        if ($conn ->query($sql1) == true) {
            
                            echo 'Sucess';
                        } else {
                            echo 'error : $sql1';
                        }
            
            exit();
           
        }
}


}
}


// if(isset($_POST['sid'])) {
//     # code...
//     function validate($data){
//         $data = trim($data);
//         $data = stripcslashes($data);
//         $data = htmlspecialchars($data);
//         return $data ;
//     }
   
    
//     $Sid =  validate($_POST['sid']);
    
    
//     $sql = "SELECT * FROM `rmo` WHERE S_id='$Sid'";
//     $result = mysqli_query($conn,$sql);

//     if (mysqli_num_rows($result) === 1) {
//         # code...
        
    
//         $row = mysqli_fetch_assoc($result);
//         if (($row['sid']) === $Sid ) {
//             # code...
//             // $_SESSION['name'] = $row['name'];
//             // $_SESSION['name'] = $row['name'];
//             // $_SESSION['id'] = $row['id'];
//             $name = $_POST['name'];
//             $pass = $_POST['password'];
//             $sql1 = "INSERT INTO `100bed_sdp`.`rmo`( `name`, `password`) VALUES ('$name','$pass',current_timestamp());"; 
           
//             if ($conn ->query($sql1) == true) {

//                 echo 'Sucess';
//             } else {
//                 echo 'error : $sql1';
//             }
//             exit();
           
//         }else {
//             echo 'wrong sid';
//         }
// }


// }
        // $name = $_POST['name'];
        // $pass = $_POST['pass'];
        // $Sid = $_POST['sid'];
        





    
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
    <title>Sign Up</title>
</head>

<body>

    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form action="admin_signup.php" method="POST">

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                                        <label class="form-label" name="name" for="form3Example1cg">Your Name</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="" id="form3Example3cg"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" name="sid" for="form3Example3cg">S_id Please</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4cg"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" name="pass" for="form3Example4cg">Password</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4cdg"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                    service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button value="login" type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a
                                            href="admin_login.php" class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
<?php

include 'connect.php';
session_start();


if(isset($_POST['name']) && isset($_POST['password'])) {
    # code...
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data =htmlspecialchars($data);
        return $data ;
    }
   
    $Uname =  validate($_POST['name']);
    $Upass =  validate($_POST['password']);

    if (empty($Uname)) {
        header('location:admin_login.php?error=User Name Required');
       exit();
   }
   else if(empty($Upass)){
        header('location:admin_login.php?error=User Password Required');
       exit();
   }
   else {
    # code...
    $sql = "SELECT * FROM `rmo` WHERE name='$Uname' AND password='$Upass'";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) === 1) {
        # code...
        
    
        $row = mysqli_fetch_assoc($result);
        if (($row['name']) === $Uname && ($row['password']) === $Upass) {
            # code...
            $_SESSION['name'] = $row['name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header('location:rmo_index.php');
            exit();
           
        }else {
    
            header('location:admin_login.php?error=User Not Valid');
            exit();

}
}else {
    
    header('location:admin_login.php?error=Not Valid');
    exit();
}

}
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
    <title>login</title>
    

</head>

<body>


    <?php

    
?>


   
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                            

                                <h2 class="fw-bold mb-2 text-uppercase">RMO Login</h2>
                                <p class="text-white-50 mb-5">Please enter your login Id and Password!</p>
                                <form action="admin_login.php" method="POST">
                                  <?php

if (isset($_GET ['error'])) { ?>
<div class="alert alert-warning" role="alert">
<?php echo $_GET ['error'];?>
</div>
 <?php 
    # code...
}

?>


                                <div class="form-outline form-white mb-4">
                                    <input type="text"  name="name" class="form-control form-control-lg" />
                                    <label class="form-label">Name</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password"  name="password" class="form-control form-control-lg" />
                                    <label class="form-label" >Password</label>
                                </div>

                                <p class="small mb-5 pb-lg-2 "><a class="text-white-50" href="#!">Forgot password?</a>
                                </p>
                                
                                <button class="btn btn-outline-light btn-lg px-5" value="login" type="submit">Login</button>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>

                            </div>

                            <!-- <div>
                                <p class="mb-0">Don't have an account? <a href="admin_signup.php" class="text-white-50 fw-bold">Sign
                                        Up</a>
                                </p>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
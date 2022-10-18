<?php
$insert = false;
if (isset($_POST['f_name'])) {
    

    $link = mysqli_connect("localhost", "root", "", "100bed_sdp");
     
    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    
        // $id=mysqli_real_escape_string($conn,$_GET['updateid']);
        $id= mysqli_real_escape_string($link, $_REQUEST['id']);
        $marital= mysqli_real_escape_string($link, $_REQUEST['marital']);
        $address= mysqli_real_escape_string($link, $_REQUEST['addr']);
        $f_name= mysqli_real_escape_string($link, $_REQUEST['f_name']);
        $l_name= mysqli_real_escape_string($link, $_REQUEST['l_name']);
        $name = mysqli_real_escape_string($link, $_REQUEST['uname']);
        $pass= mysqli_real_escape_string($link, $_REQUEST['pass']);
        $age = mysqli_real_escape_string($link, $_REQUEST['age']);
        $gender= mysqli_real_escape_string($link, $_REQUEST['gender']);
        $mobile= mysqli_real_escape_string($link, $_REQUEST['mobile']);
        $date= mysqli_real_escape_string($link, $_REQUEST['date']);
        $query= "INSERT INTO `patient`(`id`, `l_name`, `f_name`, `uname`, `upassword`, `gender`, `age`, `mobile`, `date`, `marital_status`, `address`) VALUES ('$id','$l_name','$f_name','$name','$pass','$gender','$age','$mobile','$date','$marital','$address')";
        if(mysqli_query($link, $query)){
            $insert = true;
            echo "Records added successfully.";
            header('location:all_pat.php');
             exit();
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
         
        
        mysqli_close($link);
        }
    

?>

<?php
//  session_start();
// $insert = false;
// if (isset($_POST['uname'])) {
    

// $link = mysqli_connect("localhost", "root", "", "100bed_sdp");
 

// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
 

// $uname = mysqli_real_escape_string($link, $_REQUEST['uname']);
// $upass = mysqli_real_escape_string($link, $_REQUEST['upassword']);


 

// $sql = "INSERT INTO `patient`(  `uname`, `upassword`) 
// VALUES ('$uname','$upass');";
// if(mysqli_query($link, $sql)){
//     $insert = true;
//     echo "Records added successfully.";
//     header('location:patient_dash.php');
//      exit();
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
 

// mysqli_close($link);
// }
// header('location : p_signup1.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Add Patient</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
<style>
body {
	color: #fff;
	background: #3598dc;
	font-family: 'Roboto', sans-serif;
}

.form-control {
	height: 41px;
	background: #f2f2f2;
	box-shadow: none !important;
	border: none;
}
.form-control:focus {
	background: #e2e2e2;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 400px;
	margin: 30px auto;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2  {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr  {
	margin: 0 -30px 20px;
}    
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;
	background: #3598dc;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #2389cd !important;
	outline: none;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #3598dc;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}
.signup-form .hint-text  {
	padding-bottom: 15px;
	text-align: center;
}
</style>
</head>
<body>
<div class="container-md">
	<br>

    <form action="add_pat.php" method="post">
		<h2>Add A Patient</h2>
		<!-- <p>Please fill in this form to create an account!</p> -->
		<hr>
        <div class="form-group">
        <div class="row">
				<div class="col"><input type="varchar"  class="form-control" name="id" placeholder="ID" ></div>
				<div class="col"><input type="text"  class="form-control" name="uname" placeholder=" U_Name"></div>
			</div> 
            <br>
			<div class="row">
				<div class="col"><input type="varchar"  class="form-control" name="f_name" placeholder="F_Name" ></div>
				<div class="col"><input type="text"  class="form-control" name="l_name" placeholder="L_Name"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="varchar" class="form-control" name="pass" placeholder="Password" >
        </div>
        <div class="form-group">
        	<input type="varchar" class="form-control" name="age" placeholder="Age" >
        </div>
		<div class="form-group">
            <input type="varchar" class="form-control" name="gender" placeholder="Gender">
        </div>
		<div class="form-group">
            <input type="varchar"  class="form-control" name="mobile" placeholder="Mobile" >
        </div> 
        <div class="form-group">
            <input type="varchar"  class="form-control" name="marital" placeholder="Marital Status" >
        </div>    
        <div class="form-group">
            <input type="varchar"  class="form-control" name="addr" placeholder="Address" >
        </div>    
           
        <div class="form-group">
            <input type="varchar"  class="form-control" name="date" placeholder="Date" >
        </div>    
        
		<div class="form-group">
            <button type="submit"  class="btn btn-secondary btn-lg" >Add</button>
        </div>
    </form>
	
</div>
</body>
</html>
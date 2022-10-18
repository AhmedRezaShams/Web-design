<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"
        integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<style>
body {
	color: #999;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
}
.form-control {
	box-shadow: none;
	border-color: #ddd;
}
.form-control:focus {
	border-color: #4aba70; 
}
.login-form {
	width: 500px;
	margin: 0 auto;
	padding: 50px 0;
}
.login-form form {
	color: #434343;
	border-radius: 10px;
	margin-bottom: 30px;
	background: #fff;
	border: 1px solid #f3f3f3;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.login-form h4 {
	text-align: center;
	font-size: 22px;
	margin-bottom: 20px;
}
.login-form .avatar {
	color: #fff;
	margin: 0 auto 30px;
	text-align: center;
	width: 50px;
	height: 300px;
	border-radius: 50%;
	z-index: 9;
	background: #4aba70;
	padding: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.login-form .avatar i {
	font-size: 62px;
}
.login-form .form-group {
	margin-bottom: 20px;
}
.login-form .form-control, .login-form .btn {
	min-height: 80px;
	border-radius: 2px; 
	transition: all 0.5s;
}
.login-form .close {
	position: absolute;
	top: 15px;
	right: 15px;
}
.login-form .btn, .login-form .btn:active {
	background: #4aba70 !important;
	border: none;
	line-height: normal;
}
.login-form .btn:hover, .login-form .btn:focus {
	background: #42ae68 !important;
}
.login-form .checkbox-inline {
	float: left;
}
.login-form input[type="checkbox"] {
	position: relative;
	top: 2px;
}
.login-form .forgot-link {
	float: right;
}
.login-form .small {
	font-size: 13px;
}
.login-form a {
	color: #4aba70;
}
</style>
</head>
<body>
<?php
	 if (isset($_POST['update'])) {
                                   
                               
		$link = mysqli_connect("localhost", "root", "", "100bed_sdp");
		 
		
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		$id = $_POST['id'];
		$f_name= $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$age = $_POST['age'];
		$gender= $_POST['gender'];
		$mobile= $_POST['mobile'];
		$marital= $_POST['marital'];
		$address= $_POST['address'];
	 $query= "UPDATE `patient` SET `f_name`='$f_name',`l_name`='$l_name',`gender`='$gender',`age`='$age',`mobile`='$mobile', WHERE id= '$id'";
	 $query_run= mysqli_query($link,$query);
			if(mysqli_query($link, $query)){
				
				echo "Records added successfully.";
				header('location:p_show.php');
				 exit();
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
			 
		 }
		 ?>
		<?php
                               include'connect.php';
                               
                                if (isset($_GET['updateppid'])) {
                                    $id=mysqli_real_escape_string($conn,$_GET['updateppid']);
                                   $sql="SELECT * FROM `patient` where id='$id'";
                                   $result=mysqli_query($conn,$sql);
                                   if (mysqli_num_rows($result) > 0) {
                                    $patient=mysqli_fetch_assoc($result);
                                    ?>
		
		
<div class="container-xl">    
    <form action="/examples/actions/confirmation.php" method="post">
	
    	<h4 class="modal-title">Update Profile</h4>
        <div class="form-group">
            <input type="text" class="form-control" name="f_name" value="<?=$patient['f_name']; ?>" placeholder="F_Name" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="l_name" value="<?=$patient['l_name']; ?>" placeholder="L_Name" required="required">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control"  name="gender " value="<?=$patient['gender']; ?>" placeholder="Gender" required="required">
        </div>
        <div class="form-group">
            <input type="number" class="form-control"  name="age" value="<?=$patient['age']; ?>" placeholder="Age" required="required">
        </div>
        <div class="form-group">
            <input type="number" class="form-control"  name="mobile" value="<?=$patient['mobile']; ?>" placeholder="Mobile" required="required">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control"  name="marital" value="<?=$patient['marital_status']; ?>" placeholder="Marital_Status" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="address" value="<?=$patient['address']; ?>" placeholder="Address" required="required">
        </div>
        <br>
         <div>
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Update"> 
         </div>             
    </form>		
	<?php
                                   }
                                   else {
                                    echo 'no id';
                                   }
                                }
                                ?>	
 
</div>
</body>
</body>
</html>
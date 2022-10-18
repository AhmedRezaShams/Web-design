<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Add Staff & Nurses</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="container-xl">
                                       
<?php
                              
                              if (isset($_POST['update'])) {
                                  
                              
                                  $link = mysqli_connect("localhost", "root", "", "100bed_sdp");
                                   
                                  
                                  if($link === false){
                                      die("ERROR: Could not connect. " . mysqli_connect_error());
                                  }
                               $s_id= $_POST['id'];
                               $address= mysqli_real_escape_string($link, $_REQUEST['addr']);
                               $f_name= mysqli_real_escape_string($link, $_REQUEST['f_name']);
                                $l_name= mysqli_real_escape_string($link, $_REQUEST['l_name']);
                                $uname = mysqli_real_escape_string($link, $_REQUEST['uname']);
                                $pass= mysqli_real_escape_string($link, $_REQUEST['pass']);
                                $age = mysqli_real_escape_string($link, $_REQUEST['age']);
                                $gender= mysqli_real_escape_string($link, $_REQUEST['gender']);
                                $mobile= mysqli_real_escape_string($link, $_REQUEST['mobile']);
                                $dept= mysqli_real_escape_string($link, $_REQUEST['dept']);
                               $query= "UPDATE `staffs` SET `f_name`='$f_name',`l_name`='$l_name',`Age`='$age',`gender`='$gender',`dept`='$dept',`uname`='$uname',`password`='$pass',`address`='$address',`mobile`='$mobile' WHERE id ='$s_id'";
                               $query_run= mysqli_query($link,$query);
                                      if(mysqli_query($link, $query)){
                                          
                                          echo "Records added successfully.";
                                          header('location:staff&nurse.php');
                                           exit();
                                      } else{
                                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                      }
                                       
                                   }
                                   ?>
                                     
                                      
                               
                               <?php
                               include'connect.php';
                               if (isset($_GET['updatesid'])) {
                                   $id=mysqli_real_escape_string($conn,$_GET['updatesid']);
                                  $sql="SELECT * FROM `staffs` where id='$id'";
                                  $result=mysqli_query($conn,$sql);
                                  if (mysqli_num_rows($result) > 0) {
                                   $staff=mysqli_fetch_assoc($result);
                                  
                               
                               
                                   ?>                       
    <form action="update_s.php" method="post">
		<h2>Staff & Nurses</h2>
		<p class="hint-text">Fill All</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" value="<?=$staff['f_name']; ?>"  name="f_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" value="<?=$staff['l_name']; ?>" name="l_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" value="<?=$staff['id']; ?>" name="id" placeholder="Id" >
        </div>
		<div class="form-group">
        	<input type="" class="form-control " value="<?=$staff['uname']; ?>" name="uname" placeholder="Uname" required="required">
        </div>
		<div class="form-group">
        	<input type="varchar" class="form-control" value="<?=$staff['password']; ?>" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
        	<input type="text" class="form-control" name="age" placeholder="Age" value="<?=$staff['Age']; ?>" required="required">
        </div>
		<div class="form-group">
        	<input type="text" class="form-control" name="gender" placeholder="Gender" value="<?=$staff['gender']; ?>" required="required">
        </div>
		<div class="form-group">
        	<input type="text" class="form-control" name="dept" placeholder="Dept" value="<?=$staff['dept']; ?>" required="required">
        </div>

		<div class="form-group">
            <input type="text" class="form-control" name="addr" placeholder="Address" value="<?=$staff['address']; ?>" required="required">
        </div>
		<div class="form-group">
            <input type="varchar" class="form-control" value="<?=$staff['mobile']; ?>" name="mobile" placeholder="Mobile" required="required">
        </div>        
       
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="update">Update</button>
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
</html>
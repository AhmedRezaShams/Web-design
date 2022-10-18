<?php
include('connect.php');
$sql="SELECT * FROM `doctors`";
$result= mysqli_query($conn,$sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
    }
}

?>

<?php

 
$insert = false;
if (isset($_POST['p_id'])) {
    

    $link = mysqli_connect("localhost", "root", "", "100bed_sdp");
     
    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

        $name= mysqli_real_escape_string($link, $_REQUEST['p_name']);
        $mobile= mysqli_real_escape_string($link, $_REQUEST['mob']);
		$dname= mysqli_real_escape_string($link, $_REQUEST['d_name']);
        $pid= mysqli_real_escape_string($link, $_REQUEST['p_id']);
        
        $query= "INSERT INTO `appointment`( `p_name`, `p_mobile`,`d_name`,`p_id`) VALUES ('$name','$mobile','$dname','$pid')";
        if(mysqli_query($link, $query)){
            $insert = true;
            
          header('location:Get_Appointment.php');
		  ?>

<div class="alert alert-success" role="alert">
<?php echo 'Done! Date and Time will be sent.Thanks';?>
</div>
<?php 
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

      mysqli_close($link); # code...
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css"
		integrity="sha512-+oRH6u1nDGSm3hH8poU85YFIVTdSnS2f+texdPGrURaJh8hzmhMiZrQth6l56P4ZQmxeZzd2DqVEMqQoJ8J89A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
		integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<title>Get Appointment</title>
	<style>
		body {
			color: #999;
			background: #f3f3f3;
			font-family: 'Roboto', sans-serif;
		}

		.form-control {
			border-color: #eee;
			min-height: 41px;
			box-shadow: none !important;
		}

		.form-control:focus {
			border-color: #5cd3b4;
		}

		.form-control,
		.btn {
			border-radius: 3px;
		}

		.signup-form {
			width: 500px;
			margin: 0 auto;
			padding: 30px 0;
		}

		.signup-form h2 {
			color: #333;
			margin: 0 0 30px 0;
			display: inline-block;
			padding: 0 30px 10px 0;
			border-bottom: 3px solid #5cd3b4;
		}

		.signup-form form {
			color: #999;
			border-radius: 3px;
			margin-bottom: 15px;
			background: #fff;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}

		.signup-form .form-group row {
			margin-bottom: 20px;
		}

		.signup-form label {
			font-weight: normal;
			font-size: 14px;
			line-height: 2;
		}

		.signup-form input[type="checkbox"] {
			position: relative;
			top: 1px;
		}

		.signup-form .btn {
			font-size: 16px;
			font-weight: bold;
			background: #5cd3b4;
			border: none;
			margin-top: 20px;
			min-width: 140px;
		}

		.signup-form .btn:hover,
		.signup-form .btn:focus {
			background: #41cba9;
			outline: none !important;
		}

		.signup-form a {
			color: #5cd3b4;
			text-decoration: underline;
		}

		.signup-form a:hover {
			text-decoration: none;
		}

		.signup-form form a {
			color: #5cd3b4;
			text-decoration: none;
		}

		.signup-form form a:hover {
			text-decoration: underline;
		}
	</style>
</head>

<body>
	
<?php
require_once('connect.php');
$query = "SELECT * FROM doctors ";
$result = mysqli_query($conn,$query);
    ?>
	<div class="container-xl">
		<div class="col-md-8">
			
				
				<form action="" method="post">
					<div class="row">
						<div class="col-8 offset-4">
							<h2>Appointment</h2>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-4">Name</label>
						<div class="col-8">
							<input type="text" class="form-control" name="p_name" required="required">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-4">Mobile</label>
						<div class="col-8">
							<input type="number" class="form-control" name="mob" required="required">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-4">Doctor Name</label>
						<div class="col-8">
							<input type="text" class="form-control" name="d_name" required="required">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-4">P_id</label>
						<div class="col-8">
							<input type="number" class="form-control" name="p_id" required="required">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<div class="col-8 offset-5">
							
							<button type="submit" class="btn btn-primary btn-lg">Get Appointment</button>
						</div>
					</div>
				</form>
				
<br>
			
				<table class="table table-striped table-dark">
					<thead>
				<tr><h4>Available Doctors</h4></tr>
					  <tr>
						<th scope="col">P_id</th>
						<th scope="col">Doctor Name</th>
						<th scope="col">Speciality</th>
						<th scope="col">Status</th>
					  </tr>
					</thead>
					<tbody>
					<?php
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                }
					  <tr>
						
						<td><?php echo $row['p_id'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['speciality'];?></td>
						<td><?php echo $row['role'];?></td>
					  </tr>
					  <?php
}
?>
					</tbody>
				  </table>
			
		</div>
	</div>
	<div>
	
	</div>
</body>

</html>

<?php
include('connect.php');
$sql="SELECT * FROM `staffs`";
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title>updatev Patient</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Staffs&Nurses</title>
</head>
<body>
    <?php
require_once('connect.php');
$query = "SELECT * FROM staffs ";
$result = mysqli_query($conn,$query);
    ?>
    <br>
    <div class="container-xl">
        <div class="col-md-12 bg-dark text-white ">
            <div class=" d-flex justify-content-center">
            <h5>Staff & Nurses</h5>
            </div>
            <div class="d-flex justify-content-end ">
                        <a href="add_s.php" class="btn btn-primary"><i class="material-icons"></i> <span>Add Staffs/Nurses</span></a>
                       
                    </div>
        </div>
<table class="table table-success table-striped">

  <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Mobile</th>
    <th>Dept</th>

    <th>Action</th>
  </thead>
  <tbody>
  <?php
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                }
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['uname'];?></td>
      <td><?php echo $row['Age'];?></td>
      <td><?php echo $row['gender'];?></td>
      <td><?php echo $row['mobile'];?></td>
      <td><?php echo $row['dept'];?></td>
      <td>
                                            
                                            <ul class="list-inline m-0">
                                            
                                                <li class="list-inline-item">
                                                   <a href="update_s.php?updatesid=<?php echo $row["id"]; ?>"> <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="delete_s.php?deletesid=<?php echo$row["id"];?>"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
                                                </li>
                                            </ul>
                                        </td>
    </tr>
    <?php
}
?>
  </tbody>

</table>
</div>
</body>
</html>
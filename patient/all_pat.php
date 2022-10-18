<?php
include('connect.php');
$sql="SELECT * FROM `patient`";
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"
        integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
        <style>
a.btn:hover {
-webkit-transform: scale(1.1);
-moz-transform: scale(1.1);
-o-transform: scale(1.1);
 }
a.btn {
-webkit-transform: scale(0.8);
-moz-transform: scale(0.8);
-o-transform: scale(0.8);
-webkit-transition-duration: 0.5s;
-moz-transition-duration: 0.5s;
-o-transition-duration: 0.5s;
 }
        </style>
    <title>All Patient</title>
</head>
<body>
<?php
require_once('connect.php');
$query = "SELECT * FROM patient ";
$result = mysqli_query($conn,$query);
    ?>
    <br>
    <div class="container-xl">
    <div class="col-sm-7">
                        <a href="add_pat.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add Patient</span></a>
                       
                    </div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Date Of Admit</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Mobile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                }
    <tr>
      
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['uname'];?></td>
      <td><?php echo $row['date'];?></td>
      <td><?php echo $row['age'];?></td>
      <td><?php echo $row['gender'];?></td>
      <td><?php echo $row['mobile'];?></td>
      <td>
      <a href="update_pat.php?updatepatid=<?php echo $row["id"]; ?>" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span>
        <a href="pat_delete.php?deletepatid=<?php echo $row["id"]; ?>" class="btn btn-danger a-btn-slide-text">
       <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span><strong>Delete</strong></span>
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
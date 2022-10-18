
<?php
// session_start();
// require'connect.php';

    
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
    <title>Doctor</title>
</head>

<body>

    <section class="vh-100 bg-secondary">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h5>Doctor</h5>
                                <br>
                                <?php
                              
                               if (isset($_POST['update'])) {
                                   
                               
                                   $link = mysqli_connect("localhost", "root", "", "100bed_sdp");
                                    
                                   
                                   if($link === false){
                                       die("ERROR: Could not connect. " . mysqli_connect_error());
                                   }
                                $s_id= $_POST['id'];
                                $s_name= $_POST['name'];
                                $s_date= $_POST['date'];
                                $s_role= $_POST['role'];
                                $s_spc= $_POST['spc'];
                                $query= "UPDATE `doctors` SET `name`='$s_name',`speciality`='$s_spc',`role`='$s_role',`date`='$s_date' WHERE id = '$s_id'";
                                $query_run= mysqli_query($link,$query);
                                       if(mysqli_query($link, $query)){
                                           
                                           echo "Records added successfully.";
                                           header('location:all_doc.php');
                                            exit();
                                       } else{
                                           echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                       }
                                        
                                    }
                                    ?>
                                      
                                       
                                
                                <?php
                                include'connect.php';
                                if (isset($_GET['updateid'])) {
                                    $id=mysqli_real_escape_string($conn,$_GET['updateid']);
                                   $sql="SELECT * FROM `doctors` where id='$id'";
                                   $result=mysqli_query($conn,$sql);
                                   if (mysqli_num_rows($result) > 0) {
                                    $student=mysqli_fetch_assoc($result);
                                   
                                
                                
                                    ?>

                                   
                                <form action="update_doc.php" method="post">
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row mb-4">
                                    <div class="col">
                                            <div class="form-outline">
                                                <input type="text" id="form6Example2" value="<?=$student['id']; ?>" class="form-control" name="id"/>
                                                <label class="form-label" for="form6Example2" >ID</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" id="form6Example1" class="form-control"
                                                    value="<?=$student['name']; ?>" name="name" />
                                                <label class="form-label" for="form6Example1">Name</label>
                                            </div>
                                        </div>
                                    

                                    </div>

                                    <!-- Text input -->
                                    <!-- <div class="form-outline mb-4">
                                        <input type="text" id="form6Example3" class="form-control" name="email" />
                                        <label class="form-label" for="form6Example3" >Email</label>
                                    </div> -->

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form6Example3" value="<?=$student['date']; ?>" class="form-control" name="date" />
                                        <label class="form-label" for="form6Example3">Date Of Ad</label>
                                    </div>

                                    <!-- Text input -->
                                    <!-- <div class="form-outline mb-4">
                                        <input type="text" id="form6Example4" class="form-control" name="mass"/>
                                        <label class="form-label" for="form6Example4" >Massage</label>
                                    </div> -->




                                    <!-- Number input -->
                                    <div class="form-outline mb-4">
                                        <input type="varchar" id="form6Example4" value="<?=$student['role']; ?>" class="form-control" name="role" />
                                        <label class="form-label" for="form6Example4">Role</label>
                                    </div>
                                    <div>
                                        <div class="form-outline mb-4">
                                            <input type="varchar" id="form6Example4" value=" <?=$student['speciality']; ?>"class="form-control" name="spc" />
                                            <label class="form-label" for="form6Example4">Specialty</label>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button
                                                class="btn bg-secondary btn-block btn-lg gradient-custom-4 text-body"
                                                value="update" type="submit" name="update">Update</button>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>
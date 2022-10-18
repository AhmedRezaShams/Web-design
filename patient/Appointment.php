<!DOCTYPE html>
<html>
    <head>
        <title>Book Appointment</title>
        </head>
        <body>
            <?php
            include("../include/header.php");
            include("../include/connection.php");
            ?>
            <div class="container-fluid">
                <div class= "col-md-12">
                    <div class="row">
                  <div class="col-md-2"style="margin-left: -30px;">
                  <?php
                  include ("sidenav.php");
                  ?>
                       </div>
                       <div class="col-md-10">
                        <h5 class="text-center-my-2">Book Appointment</h5>

                        <?php
                        $pat = $_SESSION['patient'];
                        $sel = mysqli_query($connect,"SELECT * FROM patient WHERE username='$pat'");
                        $row = mysqli_fetch_array($sel);
                        $firstname = $_row['firstname'];
                        $surnam = $row['surname'];
                        $gender = $row['gender'];
                        $phone = $row['phone'];


                        if (isset($post['book'] )) {

                            $data = $_POST['data'];
                            $sym = $_POST['sym'];
                            if (empty($sym)){
                                {
                                    $quary = "INSERT INTO appoinment() VALUES()";

                                }

                            }
                        }
                        ?>


                        <div class="col-md-12">
                        <div class="row">
                            <div class= "col-md-3"></div>
                            <div class="col-md-6">
                                <form method="post">
                                    <label>Appoinment Data</label>
                                    <input type= "data" name="data" class="from-control">
                                    <label>Symptoms</label>
                                    <input type= "text" name= "sym" class="form-control"
                                    autocomplete="off" placeholder= "Enter Symptoms"> 
                                    <input type="submit" name= "book" class="btn btn-info" value="Book Appointment"> 
                            </div>
                
                        </div>
                       </div>
                                


                       
                    </div>

                  </div>
               </div>
            </div>
            </body>
        </html>
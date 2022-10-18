
<?php

$insert = false;
if (isset($_POST['name'])) {
    

$link = mysqli_connect("localhost", "root", "", "100bed_sdp");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$exp = mysqli_real_escape_string($link, $_REQUEST['experience']);
$massage = mysqli_real_escape_string($link, $_REQUEST['massage']);
// $file = mysqli_real_escape_string($link, $_REQUEST['file']);


 

$sql = "INSERT INTO `doctors`(`name`, `email`, `experience`, `massage`) VALUES ('$name','$email','$exp','$massage')";
if(mysqli_query($link, $sql)){
    $insert = true;
    echo "Records added successfully.";
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
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
    <title>Doctor Apply</title>
</head>
<body>
<div class="container bg-secondary">
  <div class="row mx-0 justify-content-center">
    <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
      <form
        method="POST"
        class="w-100 rounded-1 p-4 border bg-white"
        action="d_apply.php"
        enctype="multipart/form-data"
      >
        <label class="d-block mb-4">
          <span class="form-label d-block">Your name</span>
          <input
            required
            name="name"
            type="text"
            class="form-control"
            placeholder="Huzaifa Hassan"
          />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Email address</span>
          <input
            required
            name="email"
            type="email"
            class="form-control"
            placeholder="huz@gmail.com"
          />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Years of experience</span>
          <select required name="experience" class="form-select">
            <option>Less than a year</option>
            <option value="1-2">1 - 2 years</option>
            <option value="2-4">2 - 4 years</option>
            <option value="4-7">4 - 7 years</option>
            <option value="10">7 - 10 years</option>
            <option value="10+">10+ years</option>
          </select>
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Tell us more about yourself</span>
          <textarea
            name="massage"
            class="form-control"
            rows="3"
            placeholder="whats on your mind?"
          ></textarea>
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Your CV</span>
          <input required name="cv" type="file" class="form-control" />
        </label>

        <!-- <div class="mb-4">
          <div>
            <div class="form-check">
              <label class="d-block">
               
                
              </label>
            </div>
          </div>
          <div>
            <label class="form-check">
              <input
                type="radio"
                class="form-check-input"
                name="remote"
                value="no"
              />
              <span class="form-check-label">You'd prefer to work onsite</span>
            </label>
          </div>
        </div> -->

        <div class="mb-3">
          <button type="submit" class="btn btn-primary px-3 rounded-3">
            Apply
          </button>
        </div>

        
      </form>
    </div>
  </div>
</div>

</body>
</html>
<?php
include 'header.php';
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
    # code...
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saidpur 100 Bed Hospital</title>
</head>

<body>

    <div class="container-fluid">
        <br>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="card bg-light" style="width: 18rem;">
                        <img src="img/doc.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Doctors</h5>
                            <p class="card-text">We are hiring Doctors.</p>
                            <a href="d_apply.php" class="btn btn-primary">Apply Now</a>
                        </div>
                    </div>
                    <div class="card bg-light" style="width: 18rem;">
                        <img src="img/pat.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Patients</h5>
                            <p class="card-text">Creat account for good health.</p>
                            <a href="patient/p_signup.php" class="btn btn-primary">Sign Up</a>
                        </div>
                    </div>
                    <div class="card bg-light" style="width: 18rem;">
                        <img src="img/info.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">information</h5>
                            <p class="card-text">Need more information.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="..\100Bed\pics\download (3).jfif" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="..\100Bed\pics\images.jfif" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="..\100Bed\pics\download.jfif" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- Card Wider -->
<div class="card card-cascade wider">

<!-- Card image -->
<div class="view view-cascade overlay">
  <img class="card-img-top" src="..\100Bed\pics\20170909_063301.jpg" alt="Card image cap">
  <a href="#!">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>

<!-- Card content -->
<div class="card-body card-body-cascade text-center pb-0">

  <!-- Title -->
  <h4 class="card-title"><strong>Mumtaz Hassan</strong></h4>
  <!-- Subtitle -->
  <h5 class="blue-text pb-2"><strong>Senior RMO</strong></h5>
  <!-- Text -->
  <p class="card-text">Saidpur 100 Bed Hospital is the Best Hospital in Saidpur. We are a 100 bedded multi-disciplinary, tertiary-care, corporate and Goverment Hospital situated at Saidpur in Nilphamari District. </p>

  <!-- Linkedin -->
  <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
  <!-- Twitter -->
  <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
  <!-- Dribbble -->
  <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

  <!-- Card footer -->
  <!-- <div class="card-footer text-muted text-center mt-4">
    2 days ago
  </div> -->

</div>

</div>
<!-- Card Wider -->
<br>
<!-- Card Narrower -->
<div class="card card-cascade narrower">

<!-- Card image -->
<div class="view view-cascade overlay">
  <img class="card-img-top" src="..\100Bed\pics\msg5572211931-28.jpg"
    alt="Card image cap">
  <a>
    <div class="mask rgba-white-slight"></div>
  </a>
</div>

<!-- Card content -->
<div class="card-body card-body-cascade">

  <!-- Label -->
  <h5 class="pink-text pb-2 pt-1">Talbia Hassan</h5>
  <!-- Title -->
  <h4 class="font-weight-bold card-title">Consultent Medicine</h4>
  <!-- Text -->
  <p class="card-text">We are committed to provide you with the highest standards of care at Saidpur 100 Bed Hospital.Modern Medical Facilities.Here, patients receive genuine care and health service </p>
  <!-- Button -->
  <a class="btn btn-unique">Learn More</a>

</div>

<!-- Card footer -->
<!-- <div class="card-footer text-muted text-center">
  2 days ago
</div> -->

</div>
<!-- Card Narrower -->

<!-- Card Regular -->
<div class="card card-cascade">

<!-- Card image -->
<div class="view view-cascade overlay">
  <img class="card-img-top" src="..\100Bed\pics\msg5572211931-29.jpg" alt="Card image cap">
  <a>
    <div class="mask rgba-white-slight"></div>
  </a>
</div>

<!-- Card content -->
<div class="card-body card-body-cascade text-center">

  <!-- Title -->
  <h4 class="card-title"><strong>Tabish Md Reza</strong></h4>
  <!-- Subtitle -->
  <h6 class="font-weight-bold indigo-text py-2">Staff Head</h6>
  <!-- Text -->
  <p class="card-text"> At Saidpur 100 bed hospital,we believe in safer healthcare and are taking extra precautions to help keep you safe as we resume previously suspended.s
  </p>

  <!-- Facebook -->
  <a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
  <!-- Twitter -->
  <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>
  <!-- Google + -->
  <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a>

</div>

<!-- Card footer -->
<!-- <div class="card-footer text-muted text-center">
  2 days ago
</div> -->

</div>
<!-- Card Regular -->

                </div>
            </div>
        </div>
    </div>


    <?php
include 'footer.php';

?>


</body>

</html>
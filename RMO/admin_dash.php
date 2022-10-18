<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"
        integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <title>Admin_dash</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">100 Beded Hospital Saidpur,Nilphamary</a>
            <button class="navbar-toggler " type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="d-flex align-items-center">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Doctor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Patient</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- <div class="container text-center">
  <div class="row">
    <div class="col order-last">
      First in DOM, ordered last
    </div>
    <div class="col">
      Second in DOM, unordered
    </div>
    <div class="col order-first">
      Third in DOM, ordered first
    </div>
  </div>
</div> -->
<br>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2 bg-secondary mx-4" style="height:130px">
                    Third in DOM, ordered first
                </div>
                <div class="col-md-2 bg-secondary mx-4" style="height:130px">
                    Third in DOM, ordered first
                </div>
                <div class="col-md-2 bg-secondary mx-4" style="height:130px">
                    Third in DOM, ordered first
                </div>
                <div class="col-md-2 bg-secondary mx-4" style="height:130px">
                    Third in DOM, ordered first
                </div>
                
                <div class="col-md-2 order-first" style="margin-left: -10px ">
                    <div class="list-group bg-secondary" style="height:90vh">
                        <a href=""
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Dashboard</a>

                        <a href=""
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Admininstrators</a>

                        <a href=""
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Doctors</a>

                        <a href=""
                            class="list-group-item list-group-item-action bg-secondary text-center text-white ">Patients</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" name="">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- For the Font Library -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&family=Raleway:wght@300&display=swap" rel="stylesheet">

    <!-- Scripts for Navbar -->
    <link rel="stylesheet" href="<?= base_url('assets/css/nav.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />


</head>

<body>


    <!-- NavBar -->
    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Channeldoc.lk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item">
          <a class="nav-link active" aria-current="page" href= <?php echo site_url('/Home/index') ?>>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href= <?php echo site_url('/patientProfile/index') ?>>My Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/Channeling/index') ?>">Channelling</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollto" href= <?php echo site_url('/Search/index') ?>>Doctors</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/Aboutus/index') ?>">
            About Us
          </a>         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/Contactus/index') ?>">
            Contact Us
          </a>         
        </li>
        <li class="nav-item">
          <a class="btn btn-warning" href="tel:110">Call Ambulance</a>  
        </li>
                    
                    <ul class="navbar-nav ms">
                        <?php if (isset($_SESSION['user_id'])) { ?>
                            <a class="nav-link btn logoutbtn" href=<?php echo site_url('/login/logout') ?> style="text-decoration:none">Logout</a>
                        <?php } else { ?>
                            <a class="nav-link btn loginbtn" href=<?php echo site_url('/login/index') ?> style="text-decoration:none">Login</a>
                        <?php } ?>
                    </ul>
                </ul>

            </div>
        </div>
    </nav>
    <!--  Start Of Search Bar  -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5">
                <div class="card-main ">
                    <div class="card-header bg-custom" style="color:white">
                        Search for a Practitioner!
                    </div>
                    <!--SEARCH BAR-->
                    <div class="card-body">
                        <form action="" method="GET">
                            <div class="row">

                                <!-- search bar -->
                                <div class="input-group mb-3 rounded">

                                    <input type="text" class="form-control" placeholder="Search....." name="search" value="<?php if (isset($_GET['search'])) {
                                                                                                                                echo $_GET['search'];
                                                                                                                            } ?>">
                                    <!-- gets the entered value from the search box -->
                                    <button type="submit" class="btn btn-success"> Search </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End of search bar -->


                    <!--Filter section -->
                    <div class="card-header bg-custom" style="color:white">
                        Filters
                    </div>
                    <div class="card-body">
                        <form action="" method="GET">
                            <div class="row">

                                <!-- areaofexpertise -->
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label>Specialisation</label>
                                        <select class="form-select" name="areaofexpertise">
                                            <option value="" selected>Select specialisation</option>
                                            <option value="Dermatology">Dermatology</option>
                                            <option value="Cardiology">Cardiology</option>
                                            <option value="ENT">E.N.T(Ear Nose & Throat)</option>
                                            <option value="Physician">Physician</option>
                                            <option value="Gynaecology">Gynaecology</option>
                                            <option value="Neurology">Neurology</option>

                                        </select>
                                    </div>
                                </div>


                                <!-- district -->
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label>District</label>
                                        <input type="text" name="district" class="form-control" placeholder="Enter City">
                                    </div>
                                </div>

                                <!-- placeofwork -->
                                <div class="col-md-2">
                                    <div class="form-group mb-3">
                                        <label>Hospital</label>
                                        <input type="text" name="placeofwork" class="form-control" placeholder="Enter Name">
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group mb-2">
                                        <button type="submit" class="btn btn-primary "> Filter</button>
                                        <a class="btn btn-danger btn-md" href=<?php echo site_url('Search/index') ?> style="">Clear</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end of search bar -->


                    <div class="card-header ">
                        <h4>Search Results:</h4>
                    </div>


                    <!-- Start of Search Result-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead style="background-color:#28a745; color:#FFFF">
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Gender</th>
                                        <th>Qualification</th>
                                        <th>Specialisation</th>
                                        <th>District</th>
                                        <th>Hospital</th>
                                        <th>Channeling</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    session();

                                    $doctorModel = new \App\Models\doctorModel;

                                    // Checks if the search box has a value set in it or not, and then searches the data and displays it
                                    if (isset($_GET['search'])) {

                                        // Gets the search value from the search box and runs the query
                                        $searchValue = $_GET['search'];
                                        $query = $doctorModel->query("SELECT * FROM doctor WHERE CONCAT(Fname, Lname, Gender, Qualification, areaofexpertise, district, placeofwork) LIKE '%$searchValue%' ");

                                        foreach ($query->getResult() as $row) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row->doctor_id ?></td>
                                                <td><?php echo $row->Fname ?></td>
                                                <td><?php echo $row->Lname ?></td>
                                                <td><?php echo $row->Gender ?></td>
                                                <td><?php echo $row->qualification ?></td>
                                                <td><?php echo $row->areaofexpertise ?></td>
                                                <td><?php echo $row->district ?></td>
                                                <td><?php echo $row->placeofwork ?></td>

                                                <td>
                                                    <a href="<?php echo site_url('Doctordetails/doctorDetailsPage/' .$row->doctor_id) ?>" class="btn btn-outline-success float-end btn-sm">View</a>

                                                </td>

                                            </tr>
                                            }
                                        <?php
                                        }

                                        // Checks the filter if either areaofexpertise, district, or placeofwork fields are set, and runs the query  
                                    } else if (isset($_GET['areaofexpertise']) || isset($_GET['district']) || isset($_GET['placeofwork'])) {

                                        // gets the info from the fields

                                        $areaofexpertise = $_GET['areaofexpertise']; // nullable
                                        $district = $_GET['district'];
                                        $placeofwork = $_GET['placeofwork'];


                                        if ($areaofexpertise !== null || $district !== null || $placeofwork !== null) {

                                            // sets the district
                                            $query = $doctorModel->query("SELECT * FROM doctor WHERE areaofexpertise = '$areaofexpertise' OR district = '$district' OR placeofwork = '$placeofwork' ");
                                        }

                                        foreach ($query->getResult() as $row) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row->doctor_id ?></td>
                                                <td><?php echo $row->Fname ?></td>
                                                <td><?php echo $row->Lname ?></td>
                                                <td><?php echo $row->Gender ?></td>
                                                <td><?php echo $row->qualification ?></td>
                                                <td><?php echo $row->areaofexpertise ?></td>
                                                <td><?php echo $row->district ?></td>
                                                <td><?php echo $row->placeofwork ?></td>


                                                <td>
                                                    <a href="<?php echo site_url('Doctordetails/doctorDetailsPage/' .$row->doctor_id) ?>" class="btn btn-outline-success float-end btn-sm">View</a>

                                                </td>

                                            </tr>

                                        <?php
                                        }


                                        // Displays everything from the database by DEFAULT, if no search value is set
                                    } else {

                                        $query = $doctorModel->query("SELECT * FROM doctor");

                                        foreach ($query->getResult() as $row) {

                                        ?>
                                            <tr>

                                                <td><?php echo $row->doctor_id ?></td>
                                                <td><?php echo $row->Fname ?></td>
                                                <td><?php echo $row->Lname ?></td>
                                                <td><?php echo $row->Gender ?></td>
                                                <td><?php echo $row->qualification ?></td>
                                                <td><?php echo $row->areaofexpertise ?></td>
                                                <td><?php echo $row->district ?></td>
                                                <td><?php echo $row->placeofwork ?></td>

                                                <td>
                                                    <a href="<?php echo site_url('Doctordetails/doctorDetailsPage/' .$row->doctor_id) ?>" class="btn btn-outline-success float-end btn-sm">View</a><br>
                                            



                                                </td>

                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                    </form>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End of Search Results view -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of Doctors search, view and filter-->

    
    <!-- Footer -->
    <footer class="footer bg-light text-#28a745 pt-5 pb-3">

        <div class="container text-center text-md-left">

            <div class="row text-center text-md-left">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Channeldoc.lk</h5>
                    <p> An e-channelling website, with the goal of making quality healthcare with the best practitioners accessible to anyone anywhere in Sri Lanka </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Sitemap</h5>
                    <p>
                        <a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> Home</a>
                    </p>

                    <p>
                        <a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> Channelling</a>
                    </p>

                    <p>
                        <a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> About Us</a>
                    </p>


                    <p>
                        <a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> Contact Us</a>
                    </p>


                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Useful Links</h5>

                    <p>
                        <a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> TBD</a>
                    </p>

                    <p>
                        <a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> TBD</a>
                    </p>

                    <p>
                        <a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> TBD</a>
                    </p>


                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i> 95b Srimath Anagarika Dharmapala Mawatha, Colombo 00007, Sri Lanka
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> channeldoclkhelp@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> (+94) 77 579 2352
                    </p>

                </div>

            </div>

            <hr class="mb-4">

            <div class="row align-item-left ">

                <div class="col-md-7 col-lg-8">
                    <p class="footer-text"> Copyright&copy; 2022 All rights reserved by:
                        <a href="#">
                            <strong class="text-warning">Group 5 </strong>
                        </a>
                    </p>
                </div>

                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">

                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </footer>
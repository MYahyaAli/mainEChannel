<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChannelDoc</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/home.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ChannelDoc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?php echo base_url('Home/home')?>">Home</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link active" href="<?php echo base_url('Our_Practitioners/index')?>">Our Practitioners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Home/about')?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Home/contact')?>">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                        <!--Use the users name here-->
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <!-- <li><a class="dropdown-item" href="">My Profile</a></li> -->
                        <li><a class="dropdown-item" href="<?php echo base_url('Dashboard/prac')?>">Dashboard</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('Logout/logout')?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    
    <section>
        <div class="container">
            <h2 class="text-center">Make your Appointment</h2>
        </div>

    <div class="container">
        <div class="box1">
            <div class="card" >
                <img src="<?= base_url('/assets/images/def.jpg')?>" width="250px" height="400px">
                <div class="card-body">
                    <h5 class="card-title">Doctor Name</h5>
                    <p class="card-text">Qualifications</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Specialization</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card border border-dark mb-3 mt-5">
                    <div class="card-header">
                        <h4>My Schedule</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Hospital/Channeling Center</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Times</th>
                                    <th>No. of Patients</th>
                                    <th>Fee in LKR</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    session();

                                    $adsModel = new \App\Models\PractitionerScheduleModel;
                                    $user = session() -> get('practitionerid'); // Gets the user ID from the session

                                    // Runs query to get approved ads of the user
                                    $query = $adsModel -> query("SELECT * FROM PractitionerSchedule"); 

                                    foreach ($query -> getResult() as $row){

                                ?>
                                    <tr>
                                        <td><?php echo $row -> id ?></td>
                                        <td><?php echo $row -> hospital ?></td>
                                        <td><?php echo $row -> appointdate ?></td>
                                        <td><?php echo $row -> appointtime ?></td>
                                        <td><?php echo $row -> patientnum ?></td>
                                        <td><?php echo $row -> fee ?></td>
                                                
                                        <!-- <td>
                                            <a href="<?php echo base_url(''.$row -> id)?>" class="btn btn-outline-primary float-end btn-sm">View</a>
                                        </td> -->
                                        <td>
                                            <a href="<?php echo base_url('Appointment/book')?>" class="btn btn-outline-success float-end btn-sm">Appoint</a>
                                        </td>
                                        <!-- <td>
                                            <a href="<?php echo base_url(''.$row -> id)?>" class="btn btn-outline-danger float-end btn-sm">Delete</a>
                                        </td> -->
                                                
                                    </tr>
                                <?php 
                                } 
                                ?>

                            </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </section>

    <!-- footer -->
    <section>
        <footer class="footer-48201">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pr-md-5">
                        <!--Logo-->
                        <img class="logofoot" src="<?= base_url('/assets/images/Logo.png')?>" alt="Logo" width="300px"><br><br>
                        <p class="slog">We provide the best Doctor for your care as your desire</p>
                    
                </div>
            
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <li>
                            <a href="<?php echo base_url('Home/home')?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Home/home')?>">Our Practitioners</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Home/home')?>">About Us</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Home/home')?>">Contact Us</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <li>
                        <a href="#"> Telephone :- <br>0114523659 </a>
                        </li>
                        <li>
                            <a href="#">Address :- <br>Colombo, Sri Lanka</a>
                        </li>
                        <li>
                            <a href="#">Email :- <br>channeldoc@yahoo.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="#">Partners</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-footer">
                        All rights Reserved to Group 3
            </div>
            </div>
        </footer>
    </section>

    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function(){
            swal(
                {
                    title: "Appointment Booked!",
                    text: "Your appointment is at",
                    icon: "success",
                    button: "Thank you",
                });
        });
    </script> -->
    
</body>
</html>
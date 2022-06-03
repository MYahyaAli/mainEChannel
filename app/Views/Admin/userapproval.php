<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChannelDoc</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/home.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body>
        <!--Nav-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ChannelDoc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo base_url('Home/home')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">Our Practitioners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">Contact Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url('Admin/approval')?>">User Approval</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Logout/logout')?>">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    
        <!-- Body -->
        <!-- Practitioner Accounts Waiting for Approval -->
        <div class="container">
            <h2 class="text-center">Practitioner Verfication</h2>
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card border border-dark">
                        <div class="card-header">
                            <h4>Practitioner Accounts Awaiting Approval</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Account ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>E-mail</th>
                                        <th>Account Type</th>
                                        <th>Approval</th>
                                        <th>Removal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        session();

                                        $adsModel = new \App\Models\userModel;

                                        // Runs query to get approved ads of the user
                                        $query = $adsModel -> query("SELECT * FROM user WHERE approved = 'No' AND type = 'Practitioner'"); 

                                        foreach ($query -> getResult() as $row){

                                    ?>
                                        <tr>
                                            <td><?php echo $row -> id ?></td>
                                            <td><?php echo $row -> firstname ?></td>
                                            <td><?php echo $row -> lastname ?></td>
                                            <td><?php echo $row -> email ?></td>
                                            <td><?php echo $row -> type ?></td>

                                            <td>
                                                <a href="<?php echo base_url('Admin/approveUser/'.$row -> id)?>" class="btn btn-outline-success float-end btn-sm">Approve</a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('Admin/deleteUser/'.$row -> id)?>" class="btn btn-outline-danger float-end btn-sm">Delete</a>
                                            </td>
                                            
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

        <!-- Practitioner Approved Accounts -->
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card border border-dark">
                        <div class="card-header">
                            <h4>Approved Practitoners Accounts</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th>Account ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>E-mail</th>
                                        <th>Account Type</th>
                                        <th>Removal</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        session();

                                        $adsModel = new \App\Models\userModel;

                                        // Runs query to get approved ads of the user
                                        $query = $adsModel -> query("SELECT * FROM user WHERE approved = 'Yes' AND type = 'Practitioner' "); 

                                        foreach ($query -> getResult() as $row){

                                    ?>
                                        <tr>
                                            <td><?php echo $row -> id ?></td>
                                            <td><?php echo $row -> firstname ?></td>
                                            <td><?php echo $row -> lastname ?></td>
                                            <td><?php echo $row -> email ?></td>
                                            <td><?php echo $row -> type ?></td>

                                            <td>
                                                <a href="<?php echo base_url('Admin/deleteUser/'.$row -> id)?>" class="btn btn-outline-danger float-end btn-sm">Delete</a>
                                            </td>
                                            
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

        <!-- Footer -->
    <footer class="footer-48201">
            <section>
            <div class="container">
                <div class="row">
                    <!-- <div class="col"> -->
                    <!-- <div class="row row-cols-2"> -->
                        <div class="col-md-4 pr-md-5">
                            <!--Logo-->
                            <img class="logofoot" src="<?= base_url('/assets/images/Logo.png')?>" alt="Logo" width="350px">
                        <!-- </div> -->
                        <!-- <div class="col"> -->
                            <p class="slog">We provide the best Doctors for your care as you desire.</p>
                        </div>
                    <!-- </div> -->
                    <!-- </div> -->
                    <div class="col-md">
                        <ul class="list-unstyled nav-links" >
                            <li>
                                <a href="<?php echo base_url('Home/home')?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('')?>">Appointments</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('')?>">About Us</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('')?>">Contact Us</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('')?>">Services</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col imd">
                        <ul class="list-unstyled nav-links">
                            <li>
                                Telephone :- <br>0114523659
                            </li>
                            <li>
                                Address :- <br>Colombo, Sri Lanka
                            </li>
                            <li>
                                Email :- <br>channeldoc@yahoo.com
                            </li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <ul class="list-unstyled nav-links">
                            <li>
                                <a href="<?php echo base_url('')?>">Privacy</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('')?>">Policy</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('')?>">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('')?>">Partners</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                        All rights Reserved to Group 3
                </div>
            </div>
        </section>
    </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>


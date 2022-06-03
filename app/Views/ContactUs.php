<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/home.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ChannelDoc</title>
    <head>
        <title> Contact Form Design </title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/contact.css')?>">
    </head>

    <body>

    <!--Nav-->
    <?php 

    // Regens session
    session();
    session() -> regenerate(); 
    $user_id = session()->get('UserID'); // Gets the user ID session

    if(!isset($_SESSION['UserID']))
        {
                // If no user is logged in, display the basic navigation bar
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ChannelDoc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('Home/home')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Our_Practitioners/index')?>">Our Practitioners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- Profile -->
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

    <?php
    }
    else if ($_SESSION["type"] == "Practitioner")
    {
        
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ChannelDoc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('Home/home')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Our_Practitioners/index')?>">Our Practitioners</a>
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

    <?php
        } else if ($_SESSION["type"] == "Patient") 
        {
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ChannelDoc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('Home/home')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Our_Practitioners/index')?>">Our Practitioners</a>
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
                        <li><a class="dropdown-item" href="<?php echo base_url('Dashboard/pat')?>">Dashboard</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('Logout/logout')?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <?php
        } else if ($_SESSION["type"] == "Admin") 
        {
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ChannelDoc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('Home/home')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Our_Practitioners/index')?>">Our Practitioners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Home/about')?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Home/contact')?>">Contact Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Admin/approval')?>">User Approval</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Logout/logout')?>">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <?php
        }
    ?>

        <div class="contact-title">
            <h1>GET IN TOUCH</h1>
            <h2>We are always ready to serve</h2>
        </div>
        <div class="container">
            <div class="row rw">
                <div class="col cl">
                    <div class="row row-cols rw">
                        <div class="contact-form col cl">
                            <form id="contact-form" method="post" action="contact.php">
                                <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                                <br>
                                <input name="email" type="email" class="form-control" placeholder="Your Email" required>
                                <br>

                                <textarea name="message" class="form-control" placeholder="Message" rows="05"></textarea> <br>
                                <input type="submit" class="form-control submit" value="SEND MESSAGE">
                            </form>
                        </div>
                        <div class="col">
                            <img src="<?= base_url('/assets/images/vision.jpg')?>" alt="contact image">
                        </div>
                    </div>
                </div>
            </div>
        </div>\

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
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Appointments</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
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
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">Policy</a>
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
    </section>
    </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
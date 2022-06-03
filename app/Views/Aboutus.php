<!doctype html>
<html lang="en">
  <head>
  
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/home.css')?>">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




 
    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
       
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>About Us</strong>
      </a>
      
    </div>
  </div>
</header>

<main>

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
                    <a class="nav-link" href="<?php echo base_url('')?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">Contact Us</a>
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
                    <a class="nav-link" href="<?php echo base_url('')?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">Contact Us</a>
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

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">About Us</h1>
        <ul class="list-unstyled text-muted">
          <li class="mb-2">We are here to provide you with a new experience to connect with any private practitioner in 
              Sri Lanka.</li>
          <li class="mb-2">Government approved private practitioners around the nation are linked together in our platform, </li>
          <li class="mb-2"> enabling you a new experience from the ordinary channeling process.</li>
        </ul>
      </div>
    </div>
  </section>

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

  
  </html> 
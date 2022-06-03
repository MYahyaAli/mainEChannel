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
    <div id="container_profile" class="container">

    <?php
                session();
                
                $model = new \App\Models\userModel;
                $details = session()->get('id');

                $query = $model->query("SELECT * FROM User WHERE type ='Practitioner' AND approved='Yes'");

                foreach($query->getResult() as $row){
                    
                ?>
        <div class="box1">
            <div class="card" >
                <img src="<?= base_url('uploads/'.$row -> image)?>" width="253px" height="400px">                
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row -> firstname?></h5>
                    <p class="card-text"><?php echo $row -> lastname?></p>
                    <p class="card-text"><?php echo $row -> qualification?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $row -> specification?></li>
                </ul>
                <div class="card-body">
                    <a href="<?php echo base_url('Appointment/appoint')?>" class="card-link">Appoint Now</a>
                </div>

            </div>
        </div>
        
        <?php
                
            }
            
            ?>    
    </div>





    <!--Footer-->
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
</body>
</html>
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

    <!--Body-->
        <!--Carasolue-->
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="height: 90vh;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="<?= base_url('/assets/images/slide1.jpeg')?>" class="d-block w-100" alt="banner1">
                    </div>
                    <div class="carousel-item">
                    <img src="<?= base_url('/assets/images/slide2.jpeg')?>" class="d-block w-100" alt="banner2">
                    </div>
                    <div class="carousel-item">
                    <img src="<?= base_url('/assets/images/slide3.jpeg')?>" class="d-block w-100" alt="banner3">
                    </div>
                    <div class="carousel-item">
                    <img src="<?= base_url('/assets/images/slide4.jpeg')?>" class="d-block w-100" alt="banner4">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!--Practitoner Profile-->
        
        <!-- <section>
             foreach ($posts as $post) :
            {
                <h3>=$post</h3>
                <img src="" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem facilis aliquam debitis tenetur error numquam ducimus quasi, id, fugiat magnam fuga vero, maxime tempora tempore dolorum exercitationem beatae? Perferendis, itaque!</p>
            }
            php endforeach;
        </section> -->

        <!--Search-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-15 mb-5">
                        <div class="card border border-light p-5">
                            
                            <label>Search</label><!--style="font-size:25px"-->
                            <div class="card-body">
                                <form action="" method="GET">
                                    <div class="row">
                                        <div class="input-group mb-3 rounded">
                                            <input type="text" class="form-control" placeholder="Search Practitioners" name="search"
                                            value="<?php if(isset($_GET['search'])) {$_GET['search'];} ?>">

                                            <button type="submit" class="btn btn-outline-success">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!--Filter-->
                            <label>Search</label><!--style="font-size:25px"-->
                            <div class="card-body">
                                <form action="" method="GET">
                                    <div class="row">
                                        <!--Specialization-->
                                        <div class="col-md-4">
                                            <label>Specialization</label>
                                            <select class="form-select" name="specialization">
                                                <option value="disabled selected">Select Specialization</option>
                                                <option value="Accupuncture">Accupuncture</option>
                                                <option value="Addictive Proffessional">Addictive Proffessional</option>
                                                <option value="Aesthetic and Cosmetic Center">Aesthetic and Cosmetic Center</option>
                                                <option value="Allergy and Asthma Specialist">Allergy and Asthma Specialist</option>
                                                <option value="Allergy and Immunology">Allergy and Immunology</option>
                                                <option value="Allergy Specialist">Allergy Specialist</option>
                                                <option value="Anaesthetist">Anaesthetist</option>
                                                <option value="Anaesthetist and Intensivist">Anaesthetist and Intensivist</option>
                                                <option value="Andrology and Male Fertility">Andrology and Male Fertility</option>
                                                <option value="Anorectal Surgeon">Anorectal Surgeon</option>
                                                <option value="Applied Psychologist">Applied Psychologist</option>
                                                <option value="Arterial Doppler-One Leg">Arterial Doppler-One Leg</option>
                                                <option value="Arterial Doppler-Two Legs">Arterial Doppler-Two Legs</option>
                                                <option value="Arthritis Specialist">Arthritis Specialist</option>
                                                <option value="Associate Specialist in Orthodontics">Associate Specialist in Orthodontics</option>
                                                <option value="Asthma Specialist">Asthma Specialist</option>
                                                <option value="Audiologist">Audiologist</option>
                                                <option value="Ayurvedic Cardiologist">Ayurvedic Cardiologist</option>
                                                <option value="Ayurvedic General slimming and Beauty">Ayurvedic General slimming and Beauty</option>
                                                <option value="Ayurvedic Skin Specialist">Ayurvedic Skin Specialist</option>
                                                <option value="Ayurvedic Physician">Ayurvedic Physician</option>
                                                <option value="Bacteriologist">Bacteriologist</option>
                                                <option value="Behavior Therapist">Behavior Therapist</option>
                                                <option value="Breast Cancer Surgeon">Breast Cancer Surgeon</option>
                                                <option value="Breast Feeding and Counselling">Breast Feeding and Counselling</option>
                                                <option value="Cancer Surgeon">Cancer Surgeon</option>
                                                <option value="Cardiac Electrophysiologist">Cardiac Electrophysiologist</option>
                                                <option value="Cardiac Surgeon">Cardiac Surgeon</option>
                                                <option value="Cardiographer">Cardiographer</option>
                                                <option value="Cardiologist">Cardiologist</option>
                                                <option value="Cardiothoracic Surgeon">Cardiothoracic Surgeon</option>
                                                <option value="Chest Phyisician">Chest Phyisician</option>
                                                <option value="Child Psychiatrist">Child Psychiatrist</option>
                                                <option value="Children Dentist">Children Dentist</option>
                                                <option value="Clinical Audiologist">Clinical Audiologist</option>
                                                <option value="Clinical Haematologist">Clinical Haematologist</option>
                                                <option value="Clinical Immunologist">Clinical Immunologist</option>
                                                <option value="Clinical Neorologist">Clinical Neorologist</option>
                                                <option value="CLinical Nutrisionist">CLinical Nutrisionist</option>
                                                <option value="Clinical Oncologist">Clinical Oncologist</option>
                                                <option value="Clinical Physcologist">Clinical Physcologist</option>
                                                <option value="Colorectal Surgeon">Colorectal Surgeon</option>
                                                <option value="Consultant">Consultant</option>
                                                <option value="Cosmetic Dermatology">Cosmetic Dermatology</option>
                                                <option value="Cosmetic Gynaecology">Cosmetic Gynaecology</option>
                                                <option value="Counselling Pshychologist">Counselling Pshychologist</option>
                                                <option value="Dental Surgeon">Dental Surgeon</option>
                                                <option value="Dentist">Dentist</option>
                                                <option value="Diabetic Specialist">Diabetic Specialist</option>
                                                <option value="Dietician">Dietician</option>
                                                <option value="Ear,Nose and Throat Surgeon">Ear,Nose and Throat Surgeon</option>
                                                <option value="Eye Surgeon">Eye Surgeon</option>
                                                <option value="Family Physician">Family Physician</option>
                                                <option value="Family Planning">Family Planning</option>
                                                <option value="Fertility Consultant">Fertility Consultant</option>
                                                <option value="Food and Nutrition">Food and Nutrition</option>
                                                <option value="Gastroenterologist">Gastroenterologist</option>
                                                <option value="General Physician">General Physician</option>
                                                <option value="General Surgeon">General Surgeon</option>
                                                <option value="Gynaecologist">Gynaecologist</option>
                                                <option value="Haematologist">Haematologist</option>
                                                <option value="Hepatologist">Hepatologist</option>
                                                <option value="Hypnotherapist">Hypnotherapist</option>
                                                <option value="Immunologist">Immunologist</option>
                                                <option value="Kidney Transplant Surgeon">Kidney Transplant Surgeon</option>
                                                <option value="Lifestyle Therapist">Lifestyle Therapist</option>
                                                <option value="Menstrual Disorder Therapist">Menstrual Disorder Therapist</option>
                                                <option value="Neurologist">Neurologist</option>
                                                <option value="Nutrisionist">Nutrisionist</option>
                                                <option value="Obstetrician">Obstetrician</option>
                                                <option value="Oncologist">Oncologist</option>
                                                <option value="Optometrist">Optometrist</option>
                                                <option value="Orthodontist">Orthodontist</option>
                                                <option value="Orthopeadic Surgeon">Orthopeadic Surgeon</option>
                                                <option value="Paediatrician">Paediatrician</option>
                                                <option value="Physician">Physician</option>
                                                <option value="Physiotherapist">Physiotherapist</option>
                                                <option value="Plastic Surgeon">Plastic Surgeon</option>
                                                <option value="Psychiatrist">Psychiatrist</option>
                                                <option value="Psychologist">Psychologist</option>
                                                <option value="Respiratory Physician">Respiratory Physician</option>
                                                <option value="Rheumatologist">Rheumatologist</option>
                                                <option value="Sexual Health">Sexual Health</option>
                                                <option value="Skin diseases and General Physician">Skin diseases and General Physician</option>
                                                <option value="Speech and Language Therapist">Speech and Language Therapist</option>
                                                <option value="Sports and Exercise Physician">Sports and Exercise Physician</option>
                                                <option value="Sports Psychology">Sports Psychology</option>
                                                <option value="Study disorders and counselling">Study disorders and counselling</option>
                                                <option value="Transfusion Physician">Transfusion Physician</option>
                                                <option value="Trauma Counsellor">Trauma Counsellor</option>
                                                <option value="Urological Surgeon">Urological Surgeon</option>
                                                <option value="Vascular Surgeon">Vascular Surgeon</option>
                                                <option value="Vitreoretinal Surgeon">Vitreoretinal Surgeon</option>
                                                <option value="Wound Care Specialist">Wound Care Specialist</option>
                                            </select>
                                        </div>
                                        <!--Location-->
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <label>Location</label>
                                                <input type="text" name="location" class="form-control" placeholder="Enter City">
                                            </div>
                                        </div>
                                        <!--Fliter-->
                                        <div class="col-md-3">
                                            <div class="form-group mb-2">
                                                <button type="submit" class="btn btn-outline-primary mt-4">Filter</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Covid Updates-->
        <section>
            <div class="container centerbtn">
                <button type="button" class="btn btn-warning position-relative col-md-12">
                    <a href="http://www.epid.gov.lk/web/index.php?option=com_content&view=article&id=228&lang=en" class="btn covid">Click Here to Get Latest Updates On Covid-19</a>
                    <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2">
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
            </div>
        </section>
        <!--Vision-->
        <div id="vision_mission">
            <section>
                <div class="container vision">
                    <div class="row rw">
                        <div class="col cl">
                            <div class="row row-cols rw">
                                <div class="col cl">
                                    <h3>Our Vision</h3>
                                    <p>Our vision is to becomw the best E-Channeling service providers in Sri-Lanka</p>
                                </div>
                                <div class="col cl" style="width:18rem">
                                    <img src="<?= base_url('/assets/images/vision.jpg')?>" alt="visionImg" class="card-img-top">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </section> -->
            <!--Mission-->
            <!-- <section> -->
                <div class="container mission">
                    <div class="row rw">
                        <div class="col cl">
                            <div class="row row-cols rw">
                                <div class="col cl" style="width: 18rem;">
                                    <img src="<?= base_url('/assets/images/mission.jpg')?>" alt="missionImg" class="card-img-top">
                                </div>
                                <div class="col cl">
                                    <h3>Our Mission</h3>
                                    <p>We are here to provide a simple and efficient platform which enables patients to connect with private practitioners from all over the nation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <!--Footer-->
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
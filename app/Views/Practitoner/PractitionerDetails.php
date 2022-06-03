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
                    <a class="nav-link" href="<?php echo base_url('Our_Practitioners/index')?>">Our Practitioners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('')?>">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('PractitionerDetails/index')?>">Practitioner Details</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                        <!--Use the users name here-->
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo base_url('Dashboard/prac')?>">Dashboard</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('Logout/logout')?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container rounded bg-white mt-1 mb-1 col-md-5">
            <div class="row">
                <div class="col-md-12 border-right">
                    <div class="d-flex flex-column align-items-center p-3 py-5">    
                        <div class="card">
                                <div class="card-body">
                                <form action="<?php echo site_url('PractitionerDetails/create')?>" method="post">
                                    <div class="row g-3 align-items-center py-3 px-2">
                                        <div class="col-auto">
                                            <label  class="col-form-label">Full Name</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" name="fullname" class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-11 p-2">
                                        <label>Specialization</label>
                                        <select class="form-select" name="specification" required>
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

                                    <div class="row g-3 align-items-center py-3 px-2">
                                        <div class="col-auto">
                                            <label  class="col-form-label">Qualification</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" name="qualification" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center py-3 px-2">
                                        <div class="col-auto">
                                            <label  class="col-form-label">Doctor ID</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" name="practitionerid" class="form-control" required>
                                        </div>
                                        <div class="col-auto">
                                            <span id="passwordHelpInline" class="form-text">
                                            Must be 5 characters long.
                                            </span>
                                        </div>
                                    </div>
                        
                                    <div class="mb-3">
                                        <label for="formFileSm" class="form-label">Upload Doctor Documents</label>
                                        <input class="form-control" id="formFile" type="file" name="image">
                                    </div>

                                    <div class="py-3 d-flex flex-column align-items-center">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </section>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
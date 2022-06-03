<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/Registration.css') ?>">
  <title>ChannelDoc</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

      <!-- For preferred job adverts -->
      <script type="text/javascript">
        function patorpac() 
        {
            if (document.getElementById('patient').checked) 
            {
                document.getElementById('ifPractitoner').style.display = 'block';
            }
            else document.getElementById('ifPractitoner').style.display = 'none';
        }
      </script>

      <script type="text/javascript">
        if(document.getElementById('practitioner').checked){
          document.getElementById('ifPractitoner').style.display = 'block';
        }
        else{
          document.getElementById('ifPractitoner').style.display ='none';
        }
      </script>

<div class="container rounded bg-white mt-3 mb-5 col-md-12"> 
            <div class="row">
                <div class="col-md-12 border-right">
                    <div class="d-flex flex-column align-items-center p-3 py-5">

                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h4 id="header1" class="text-right text-success display-6 p-1">REGISTER ACCOUNT</h4>
                        </div>

                        <form action="<?php echo site_url('Register/create')?>" method="post" enctype="multipart/form-data">
        
        <div class="container">
          <div class="p-2">
            <a href="<?php echo base_url('Login/index')?>" class="btn btn-secondary border profile-button btn-lg">Back</a>    
          </div>
          <!-- redirect back button -->
          <hr>
          <label> Firstname </label> 
            <input type="text" name="firstname" placeholder= "Firstname" size="15" required /> 
          <!-- <label> Middlename: </label> 
            <input type="text" name="middlename" placeholder="Middlename" size="15" required />  -->
          <label> Lastname: </label>  
            <input type="text" name="lastname" placeholder="Lastname" size="15"required /> 
          
          <div class="mb-3">
            <label for="formFileSm" class="form-label">Profile Picture</label>
            <input class="form-control" id="formFile" type="file" name="image">
          </div>

          <label>Mobile Number</label>
            <input type="text" name="phone" placeholder="Phone"  value="+94" size="12"/>
          <label>Email</label>
            <input type="text" name="email" placeholder="Email" size="25"required /> 
          <label> NIC </label> 
            <input type="text" name="nic" placeholder= "NIC No." size="15" required />
            
          Current Address :
          <textarea cols="80" name="address" rows="5" placeholder="Current Address" value="address" required></textarea>

          <!-- <label class="labels">Account Type:</label> -->

           <!-- Choice of account type-->
            <!-- <div class="choice p-2 row mt-2">
              <div class="col-md-12">
                <select class="form-select" required name="type">
                  <option selected>Select your user type</option>
                  <option value="Practitioner" id="Practitioner">Practitioner</option>
                  <option value="Patient" id="Patient">Patient</option>
                </select>
              </div> 
            </div> -->
            <!-- <label class="labels">Account Type:</label> -->

            Account type
            <div class="choice p-2 row">
              <div class="col-md-3"> <input type="radio" name="type" id= "practitioner" value="Patient" onclick="javascript:patorprac();" required> <span>Patient</span></div>
              <div class="col-md-3"> <input type="radio" name="type" id= "patient"      value="Practitioner"      onclick="javascript:patorpac();"> <span>Practitioner</span> </div>
            </div>

            <div id="ifPractitoner" style="display: none;">
              <div class="col-md-12 p-2">
                <label>Specialization</label>
                <select class="form-select" name="specification" >
                  <option value=" ">Select Specialization</option>
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
              
              <div class="row g-3 align-items-center py-2 px-2">
                <div class="col-md-3">
                    <label  class="col-form-label">Qualification</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="qualification" class="form-control" >
                </div>
              </div>
                        
              <div class="mb-3">
                  <label for="formFileSm" class="form-label">Upload Doctor Documents</label>
                  <input class="form-control" id="formFile" type="file" name="upload">
              </div>

            </div>

          <label> Password </label> 
            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least 8 characters, an uppercase letter, a number, a lowercase letter" name="password" placeholder= "Password" size="20" required /> 
          <label> Confirm Password </label> 
            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least 8 characters, an uppercase letter, a number, a lowercase letter" name="confirmpassword" placeholder="Confirm Password" size="20" required /> 

          <!-- Sets data automatically -->
          <input type="hidden" name="approved" value="No">  

            <div class="text-center p-3 ">
              <button class="btn btn-secondary profile-button btn-lg border border border-white">Submit</button>    
            </div>
        </div>
    </form>

                        <!-- Login if you have an account button -->
                        <div class="text-center p-3">
                          <label class="p-3"> Already have an account?</label> 
                          <a href='<?php echo base_url('Login/index')?>' class="link-primary">Login here!</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>
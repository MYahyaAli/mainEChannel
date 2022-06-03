<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChannelDoc</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dashboard.css')?>">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<!-- Nav -->

<div class="wrapper">
    <div class="sidebar">
      <div class="logo_content">
        <div class="logo">
          <div class="logo_name">
            <h3 class="pic">My Profile</h3>
            <!-- upload image -->
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url('http://i.pravatar.cc/500?img=7');">
                    </div>
                </div>
            </div>
            <!-- end of upload image -->
            <h4 class="name">Name</h4>
            <p >Specialization</p>
          </div>
        </div>
      </div><br>
  
    <!--directions of the navigation buttons-->
      <div class="side_nav">
        <ul>
          <li>
          <a href="#">
            <i class='bx bx-user-circle' ></i>
            <span class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen">My Schedule</span>
          </a>
          </li>
          <li>
          <a href="#">
            <i class='bx bx-group' ></i>
            <span class="tablinks" onclick="openCity(event, 'My Bookings')">My Bookings</span>
          </a>
          </li>
          <li>
          <a href="#">
            <i class='bx bxs-report'></i>
            <span class="tablinks" onclick="openCity(event, 'Reports')">My Reports</span>
          </a>
          </li>
          <li>
          <a href="#">
            <i class='bx bx-history' ></i>
            <span class="tablinks" onclick="openCity(event, 'History')">History</span>
          </a>
          </li>
          <li>
            <a href="<?php echo base_url('Logout/logout')?>">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- allow view only after practitioner is verified -->
    
    <div class="main">
      <!--Create Profile content-->
      <div id="Profile" class="tabcontent">
        <div class="container">
              <h2 class="my-2">Schedule your Appointements </h2>
          <!--starting of the form and table-->
              <form action="<?php echo site_url('Appointment/create')?>" method="POST">
                      <!-- Hospital -->
                    <div class="row my-4">
                        <div class="col-md-2">
                            <label for="hospital"> Hospital/Center: </label>
                        </div>
                        <div class="col-md-5">
                            <select id="hospital" name="hospital">
                              <option value="Allergy and Asthma center-Colombo 05">Allergy and Asthma center-Colombo 05</option>
                              <option value="Asia Hospital-Kotte">Asia Hospital-Kotte</option>
                              <option value="Asia Hospital-Maharagama">Asia Hospital-Maharagama</option>
                              <option value="Asiri Central-Colombo 10">Asiri Central-Colombo 10</option>
                              <option value="Asiri Surgical-Colombo 05">Asiri Surgical-Colombo 05</option>
                              <option value="Asiri Hospital-Galle">Asiri Hospital-Galle</option>
                              <option value="Asiri Hospital-Kandy">Asiri Hospital-Kandy</option>
                              <option value="Blue Cross Medical Center -Rajagiriya">Blue Cross Medical Center -Rajagiriya</option>
                              <option value="CDEM Hospital-Colombo 10">CDEM Hospital-Colombo 10</option>
                              <option value="Ceymed Healthcare Services-Nugegoda">Ceymed Healthcare Services-Nugegoda</option>
                              <option value="Child Eye (Pvt)Ltd-Rajagiriya">Child Eye (Pvt)Ltd-Rajagiriya</option>
                              <option value="Dental Square-Colombo 06">Dental Square-Colombo 06</option>
                              <option value="Dr.Neville Fernando Teaching Hospital-Malabe">Dr.Neville Fernando Teaching Hospital-Malabe</option>
                              <option value="Durdans Hospital-Colombo 03">Durdans Hospital-Colombo 03</option>
                              <option value="Durdans Medical Center-Negombo">Durdans Medical Center-Negombo</option>
                              <option value="Durdans Medical Center-Anuradhapura">Durdans Medical Center-Anuradhapura</option>
                              <option value="Durdans Medical Center-Moratuwa">Durdans Medical Center-Moratuwa</option>
                              <option value="Family Dental Services-Colombo 03">Family Dental Services-Colombo 03</option>
                              <option value="Family Planning Association-Colombo 07">Family Planning Association-Colombo 07</option>
                              <option value="Golden Key Hospital-Rajagiriya">Golden Key Hospital-Rajagiriya</option>
                              <option value="Heart Aird Center-Colombo 07">Heart Aird Center-Colombo 07</option>
                              <option value="Hemas Hospital-Thalawatugoda">Hemas Hospital-Thalawatugoda</option>
                              <option value="Hemas Hospital-Wattala">Hemas Hospital-Wattala</option>
                              <option value="Imperial Healthcare-Colombo 07">Imperial Healthcare-Colombo 07</option>
                              <option value="Kings Hospital-Colombo 05">Kings Hospital-Colombo 05</option>
                              <option value="Lanka Hospital-Colombo 05">Lanka Hospital-Colombo 05</option>
                              <option value="LEEDS Healthcare-Thalapathpitiya">LEEDS Healthcare-Thalapathpitiya</option>
                              <option value="Lush Skin Clinique-Battaramulla">Lush Skin Clinique-Battaramulla</option>
                              <option value="MediHelp Hospital-Horana">MediHelp Hospital-Horana</option>
                              <option value="MediHelp Hospital-Beruwala">MediHelp Hospital-Beruwala</option>
                              <option value="MediHelp Hospital-Piliyandala">MediHelp Hospital-Piliyandala</option>
                              <option value="Metro Medicare-Pitakotte">Metro Medicare-Pitakotte</option>
                              <option value="Metro Medicare-Kurunegala">Metro Medicare-Kurunegala</option>
                              <option value="Nawaloka Hospital-Colombo">Nawaloka Hospital-Colombo</option>
                              <option value="Nawaloka Hospital-Negombo">Nawaloka Hospital-Negombo</option>
                              <option value="Nawaloka Medical Center-Battaramulla">Nawaloka Medical Center-Battaramulla</option>
                              <option value="Nawaloka Medical Center-Kiribathgoda">Nawaloka Medical Center-Kiribathgoda</option>
                              <option value="Nawaloka Medical Center-Mt.Lavinia">Nawaloka Medical Center-Mt.Lavinia</option>
                              <option value="Nawaloka Medical Center-Panadura">Nawaloka Medical Center-Panadura</option>
                              <option value="Ninewells Hospital">Ninewells Hospital</option>
                              <option value="Pannipitiya Private Hospital">Pannipitiya Private Hospital</option>
                              <option value="Royal Hospital-Colombo 06">Royal Hospital-Colombo 06</option>
                              <option value="Santa Dora Hospital-Battaramulla">Santa Dora Hospital-Battaramulla</option>
                              <option value="Specialist Dermatology(Skin) Clinic-Thalawathugoda">Specialist Dermatology(Skin) Clinic-Thalawathugoda</option>
                              <option value="Suwasewana Hospital-Awissawella">Suwasewana Hospital-Awissawella</option>
                              <option value="Vision Care Opticals-Colombo">Vision Care Opticals-Colombo</option>
                              <option value="Vision Care Opticals-Mt.Lavinia">Vision Care Opticals-Mt.Lavinia</option>
                              <option value="Vision Care Opticals-Negombo">Vision Care Opticals-Negombo</option>
                              <option value="Vision Care Opticals-Panadura">Vision Care Opticals-Panadura</option>
                              <option value="Vision Care Opticals-Ratnapura">Vision Care Opticals-Ratnapura</option>
                              <option value="Western Hospital-Colombo 08">Western Hospital-Colombo 08</option>
                              <option value="Zenith Dentistry-Dehiwala">Zenith Dentistry-Dehiwala</option>

                            </select>
                        </div>
                    </div>
                    
                    <div class="row g-3 align-items-center my-3">
                        <div class="col-md-2">
                          <label  class="col-form-label">Doctor ID</label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="practitionerid" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <span id="passwordHelpInline" class="form-text">
                            Must be 5 characters long.
                            </span>
                        </div>
                    </div>

                      <!-- dates -->
                    <div class="row my-4">
                      <div class="col-md-2">
                      <label for="date"> Available Date: </label>
                      </div>
                      <div class="col-md-5">
                      <input type="date" id="date" name="appointdate">
                      </div> 
                    </div>
                  
                    <!-- time -->
                    <div class="row my-2">
                      <div class="col-md-2">
                      <label for="time"> Available Time Slot: </label>
                      </div>
                      <div class="col-md-5">
                      <select id="time" name="appointtime">
                        <option value="6.00am - 8.00am">6.00am - 8.00am</option>
                        <option value="8.00am - 10.00am">8.00am - 10.00am</option>
                        <option value="10.00am - 12.00pm">10.00am - 12.00pm</option>
                        <option value="12.00pm - 2.00pm">12.00pm - 2.00pm</option>
                        <option value="2.00pm - 4.00pm">2.00pm - 4.00pm</option>
                        <option value="4.00pm - 6.00pm">4.00pm - 6.00pm</option>
                        <option value="6.00pm - 8.00pm">6.00pm - 8.00pm</option>
                        <option value="8.00pm - 10.00pm">8.00pm - 10.00pm</option>
                      </select>
                      </div>
                    </div>

                    <!-- patient number -->
                    <div class="row my-2">
                      <div class="col-md-2">
                      <label for="num">No of People: </label>
                      </div>
                      <div class="col-md-5">
                      <select id="num" name="patientnum">
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                      </select>
                      </div>
                    </div>

                    <!-- fee -->
                    <div class="row my-2">
                      <div class="col-md-2">
                      <label for="fee">Fee: </label>
                      </div>
                      <div class="col-md-5">
                      <select name="fee" id="fee">
                        <option value="LKR 1500.00">LKR 1500.00</option>
                        <option value="LKR 1800.00">LKR 1800.00</option>
                        <option value="LKR 2100.00">LKR 2100.00</option>
                        <option value="LKR 2500.00">LKR 2500.00</option>
                        <option value="LKR 3000.00">LKR 3000.00</option>
                        <option value="LKR 3500.00">LKR 3500.00</option>
                        <option value="LKR 4000.00">LKR 4000.00</option>
                      </select>
                      </div>
                    </div>
                    <br>
                    <br>

                    <div class="text-center p-3">
                      <button class="btn btn-success profile-button btn-lg">Submit</button>    
                    </div>
                
              </form>
                      <!--starting of the table-->
              <!-- <table id="table" class="tabel">
                <tr>
                  <th scope="col">Hospital/Center</th>
                  <th scope="col">Date</th>
                  <th scope="col">Time Slots</th>
                  <th scope="col">No of People</th>
                  <th scope="col">Fee</th>
                </tr>
              </table> -->
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
                                              <th>Doctor ID</th>
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
                                              $user = session() -> get('id'); // Gets the user ID from the session

                                              // Runs query to get approved ads of the user
                                              $query = $adsModel -> query("SELECT * FROM PractitionerSchedule"); 

                                              foreach ($query -> getResult() as $row){

                                          ?>
                                              <tr>
                                                  <td><?php echo $row -> id ?></td>
                                                  <td><?php echo $row -> hospital ?></td>
                                                  <td><?php echo $row -> practitionerid ?></td>
                                                  <td><?php echo $row -> appointdate ?></td>
                                                  <td><?php echo $row -> appointtime ?></td>
                                                  <td><?php echo $row -> patientnum ?></td>
                                                  <td><?php echo $row -> fee ?></td>
                                                  
                                                  <!-- <td>
                                                      <a href="<?php echo base_url(''.$row -> id)?>" class="btn btn-outline-primary float-end btn-sm">View</a>
                                                  </td>
                                                  <td>
                                                      <a href="<?php echo base_url(''.$row -> id)?>" class="btn btn-outline-success float-end btn-sm">Appoint</a>
                                                  </td>
                                                  <td>
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
              <!-- end of tabel -->
          </div>
        </div>
      </div>
    </div>

    <div class="main">
      <div id="Reports" class="tabcontent">
        <?php $validation = \Config\Services::validation();?>
        <div class="bg-dark bg-gradient min-vh-100">
          <div class="container">
            <div class="row my-5">
              <div class="col-lg-6 mx-auto mt-5">
                <div class="card shadow">
                  <div class="card-header">
                    <h3 class="text-secondary">Report</h3>
                  </div>
                  <div class="card-body p-5">
                    <form action="<?php echo site_url('chat/sendemail')?>" method="POST" novalidate>
                        <div class="mb-3">
                          <label for="senderemail">Sender Email</label>
                          <input type="text" name="senderemail" id="senderemail" class="form-control <?=($validation->getError('senderemail')) ? 'is-invalid' : ''?>" placeholder="Email">
                          <?php if ($validation->getError('senderemail')):?>
                              <div class="invalid-feedback"><?= $validation->getError('senderemail')?></div>
                          <?php endif; ?>
                        </div>

                        <div class="mb-3">
                          <label for="recieveremail">Receiver Email</label>
                          <input type="text" name="recieveremail" id="recieveremail" class="form-control <?=($validation->getError('recieveremail')) ? 'is-invalid' : ''?>" placeholder="Email">
                          <?php if ($validation->getError('recieveremail')):?>
                              <div class="invalid-feedback"><?= $validation->getError('recieveremail')?></div>
                          <?php endif; ?>
                        </div>

                        <div class="mb-3">
                          <label for="subject">Subject</label>
                          <input type="text" name="subjet" id="subject" class="form-control <?=($validation->getError('subject')) ? 'is-invalid' : ''?>" placeholder="Subject" >
                          <?php if ($validation->getError('subject')):?>
                              <div class="invalid-feedback"><?= $validation->getError('subject')?></div>
                          <?php endif; ?>
                        </div>

                        <div class="mb-3">
                          <label for="message">Message</label>
                          <textarea name="message" id="message" rows="4" class="form-control <?=($validation->getError('message')) ? 'is-invalid' : ''?>" placeholder="Message"></textarea>
                          <?php if ($validation->getError('message')):?>
                              <div class="invalid-feedback"><?= $validation->getError('message')?></div>
                          <?php endif; ?>
                        </div>

                        <div class="mb-3">
                          <label for="file">Select File</label>
                          <input type="file" name="file" id="file" class="form-control <?=($validation->getError('file')) ? 'is-invalid' : ''?>">
                          <?php if ($validation->getError('file')):?>
                              <div class="invalid-feedback"><?= $validation->getError('file')?></div>
                          <?php endif; ?>
                        </div>

                        <div class="d-grid">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Footer -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>

        //imgage upload js
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });



        // Move to the different pages by buttons in navigation side bar
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();


        //Getting form data into the table
        // document.getElementById("submit").onclick = function () {
        //   document.getElementById("table");

        //   var table = document.getElementById("table");
        //   var row = table.insertRow(-1);
        //   var hospital = row.insertCell(0);
        //   var date = row.insertCell(1);
        //   var time = row.insertCell(2);
        //   var num = row.insertCell(3);
        //   var fee = row.insertCell(4);
        //   hospital.innerHTML = document.getElementById("hospital").value;
        //   date.innerHTML = document.getElementById("date").value;
        //   time.innerHTML = document.getElementById("time").value;
        //   num.innerHTML = document.getElementById("num").value;
        //   fee.innerHTML = document.getElementById("fee").value;

          // return false;
        // }


        // chat
        $(document).ready(function(){

        function loading()
        {
          var output = '<div align="center"><br /><br /><br />';
          output += '<img src="<?php echo base_url(); ?>asset/loading.gif" /> Please wait...</div>';
          return output;
        }

        $(document).on('click', '#search_button', function(){
        var search_query = $.trim($('#search_user').val());
        $('#search_user_area').html('');
        
        if(search_query != '')
        {
          $.ajax({
          url:"<?php echo base_url(); ?>chat/search_user",
          method:"POST",
          data:{search_query:search_query},
          dataType:"json",
          beforeSend:function()
          {
            $('#search_user_area').html(loading());
            $('#search_button').attr('disabled', 'disabled');
          },
          success:function(data)
          {
            $('#search_button').attr('disabled', false);
            var output = '<hr />';
            var send_userid = "";
            if(data.length > 0)
            {
            for(var count = 0; count < data.length; count++)
            {
              output += '<div class="row">';
              output += '<div class="col-md-7"><img src="'+data[count].profile_picture+'" class="img-circle" width="40" /> <small>'+data[count].first_name+' '+data[count].last_name+'</small></div>';
              if(data[count].is_request_send == 'yes')
              {
              output += '<div class="col-md-5"><button type="button" name="request_button" class="btn btn-warning btn-xs">Request Sended</button></div>';
              }
              else
              {
              output += '<div class="col-md-5"><button type="button" name="request_button" class="btn btn-success btn-xs request_button" id="request_button'+data[count].user_id+'" data-receiver_userid="'+data[count].user_id+'" data-send_userid="'+send_userid+'">Send Request</button></div>';
              }
              output += '</div><hr />';
            }
            }
            else
            {
              output += '<div align="center"><b>No Data Found</b></div>';
            }
              output += '</div>';
              $('#search_user_area').html(output);
          }
          })
        }
        });

        $(document).on('click', '.request_button', function(){
        var id = $(this).attr('id');
        var receiver_userid = $(this).data('receiver_userid');
        var send_userid = $(this).data('send_userid');
        $.ajax(
          {
            url:"<?php echo base_url(); ?>chat/send_request",
            method:"POST",
            data:{receiver_userid:receiver_userid, send_userid:send_userid},
            beforeSend:function()
            {
            $('#'+id).attr('disabled', 'disabled');
            },
            success:function(data)
            {
            $('#'+id).attr('disabled', false);
            $('#'+id).removeClass('btn-success');
            $('#'+id).addClass('btn-warning');
            $('#'+id).text('Request Sended');
            }
          })
        })

        load_notification();

        function load_notification()
        {
        $.ajax({
          url:"<?php echo base_url(); ?>chat/load_notification",
          method:"POST",
          data:{action:'load_notification'},
          dataType:"json",
          beforeSend:function()
          {
          $('#notification_area').html(loading());
          },
          success:function(data)
          {
          var output = '<hr />';
          //console.log(data.length);
          if(data.length > 0)
          {
            for(var count = 0; count < data.length; count++)
            {
            output += '<div class="row"><div class="col-md-7"><img src="'+data[count].profile_picture+'" class="img-circle" width="35" /> ' + data[count].first_name + ' ' +data[count].last_name + '</div>';

            output += '<div class="col-md-5"><button type="button" name="accept_button" class="btn btn-success btn-xs accept_button" id="accept_button'+data[count].user_id+'" data-chat_request_id="'+data[count].chat_request_id+'">Accept</button></div><hr />';
            }
          }
          else
          {
            output += '<div align="center"><b>No Data Found</b></div>';
          }
          //output += '</div><hr />';
          $('#notification_area').html(output);
          }
        }) 
        }

        });
    </script>

  

</body>
</html>
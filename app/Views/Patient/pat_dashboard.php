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
          </div>
        </div>
      </div><br>
  
    <!--directions of the navigation buttons-->
      <div class="side_nav">
        <ul>
          <li>
          <a href="#">
            <i class='bx bx-user-circle' ></i>
            <span class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen">Practitioners</span>
          </a>
          </li>
          <li>
          <a href="#">
            <i class='bx bxs-report'></i>
            <span class="tablinks" onclick="openCity(event, 'Reports')">My Medicals</span>
          </a>
          </li>
          <li>
          <a href="#">
            <i class='bx bx-history' ></i>
            <span class="tablinks" onclick="openCity(event, 'History')">My History</span>
          </a>
          </li>
          <li>
            <a href="<?php echo base_url('Logout/logout')?>">
            <i class='bx bx-log-out'></i>
            <span class="links_name"> Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    
    <div class="main">
      <!--Create Profile content-->
      <div id="Profile" class="tabcontent">
        <h2>Practitioners</h2><br>
      </div>

      <!-- My Reports content-->
      <div id="Reports" class="tabcontent">
        <h2>My Medical Documents</h2>
        <p>Paris is the capital of France.</p> 
      </div>
  
      <!--History content-->
      <div id="History" class="tabcontent">
        <h2>My History</h2>
        <p>The past bookings you have made</p>
      </div>
    </div>
    
  </div>

  <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script>

    //     // //imgage upload js
    //     function readURL(input) {
    //         if (input.files && input.files[0]) {
    //             var reader = new FileReader();
    //             reader.onload = function(e) {
    //                 $('#imagePreview').css('background-image', 'url('+e.target.result +')');
    //                 $('#imagePreview').hide();
    //                 $('#imagePreview').fadeIn(650);
    //             }
    //             reader.readAsDataURL(input.files[0]);
    //         }
    //     }
    //     $("#imageUpload").change(function() {
    //         readURL(this);
    //     });



    //     // Move to the different pages by buttons in navigation side bar
    //     function openCity(evt, cityName) {
    //       var i, tabcontent, tablinks;
    //       tabcontent = document.getElementsByClassName("tabcontent");
    //       for (i = 0; i < tabcontent.length; i++) {
    //         tabcontent[i].style.display = "none";
    //       }
    //       tablinks = document.getElementsByClassName("tablinks");
    //       for (i = 0; i < tablinks.length; i++) {
    //         tablinks[i].className = tablinks[i].className.replace(" active", "");
    //       }
    //       document.getElementById(cityName).style.display = "block";
    //       evt.currentTarget.className += " active";
    //     }

    //     // Get the element with id="defaultOpen" and click on it
    //     document.getElementById("defaultOpen").click();

  </script> -->

  

</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChannelDoc</title>
    <!-- CSS/login.css -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/login.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--Nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" >ChannelDoc</a>
        </div>
    </nav>
    <img src="<?= base_url('/assets/images/12.jpg')?>" alt="bg Img" class="bgimage">
    <!--Body-->
    <!--Old design-->
    <section>
        <h1>Welcome!</h1>
        <!-- <p>We are here to provide you with a new experience to connect with any private practitioner in Sri Lanka. <br>Government approved private practitioners
    around the nation are linked together in our platform, enabling you a new experience from the ordinary channeling process.</P>
    <br> -->
        <div class="container position-absolute top-50 start-50 translate-middle">
            <form action="<?php echo site_url('Login/create')?>" method="post">
                <div class="row">
                    <h2 style="text-align:center">Login</h2> <!--Images/Logo.png-->
                    <div class="col">
                        <input type="text" name="email" placeholder="Email" required class="col-md-12 p-3 mt-2 rounded">
                        <input type="password" name="password" placeholder="Password" required class="col-md-12 p-3 mt-2 rounded">
                        <!-- <input type="submit" name=submit value="Login" class="col-md-6 p-2 mt-2"> -->
                        <div class="text-center p-3">
                            <input type="submit" name=submit class="btn btn-outline-success profile-button btn-lg" value="Login in to ChannelDoc">
                        </div>
                    </div>
                </div>
            </form>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="text-center p-3">
                            <h4>Do not have an account yet?</h4>
                            <a href="<?php echo base_url('Register/index')?>" class="btn btn-success profile-button btn-lg">Sign up</a>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>

    </section>
    
    <!--Footer-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
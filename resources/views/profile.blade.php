<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="profile-links">
                    <img src="{{ asset('images/Group 2323.jpg') }}" alt="">
                    <h2>User0263245</h2>
                    <p id="profile-id">ID : 565624125</p>
                    <li><a class="btn btn-light" href='SignIn'>Login</a></li>
                    <li><a class="btn btn-light" href='orderHistory'>Order History</a></li>
                    <li><a class="btn btn-light" href='addressBook'>Book Address</a></li>
                    <li><a class="btn btn-light"href="#">Change Photo</a></li>
                    <li><a class="btn btn-light"href="#">Update Profile</a></li>
                    <li><a class="btn btn-light" href='profile/change password'>Change Password</a></li>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-info-top">
                    <h6>Address</h6>
                    <p>kebon jeruk permai blok C no. 4, Jakarta barat</p>
                </div>
                <div class="other-profile-info">
                    <h6>Phone</h6>
                    <p>085612561124</p>
                </div>
                <div class="other-profile-info">
                    <h6>Date of birth</h6>
                    <p>Auguts 17, 1945</p>
                </div>
                <div class="other-profile-info">
                    <h6>Gender</h6>
                    <p>Male</p>
                </div>
                <div class="other-profile-info" id="email-info">
                    <h6>Email</h6>
                    <p>user0263245@gmail.com</p>
                </div>
            </div>

            <div class="test">
                <p> </p>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
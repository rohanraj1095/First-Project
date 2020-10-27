
<?php
session_start();

if(!isset($_SESSION['username'])){
  echo "You are logged out";
  header('location: login.php');
}


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  </head>
  <body>

<!---------------------Accordion Menu-------------------------->

<div class="middle">
      <div class="menu">
        <li class="item" id='profile'>
          <a href="#profile" class="btn"><i class="far fa-user"></i>Profile</a>
          <div class="smenu">
            <a href="#">Posts</a>
            <a href="#">Picture</a>
          </div>
        </li>

        <li class="item" id="messages">
          <a href="#messages" class="btn"><i class="far fa-envelope"></i>Messages</a>
          <div class="smenu">
            <a href="#">New</a>
            <a href="#">Sent</a>
          </div>
        </li>

        <li class="item" id="help">
          <a href="#help" class="btn"><i class="far fa-help"></i>Get Help</a>
          <div class="smenu">
            <a href="#">New Request</a>
            <a href="#">Sent Request</a>
          </div>
        </li>

        <li class="item" id="booklab">
          <a href="#booklab" class="btn"><i class="far fa-book"></i>Books Links</a>
          <div class="smenu">
            <a href="#">1<sup>st</sup> Year</a>
            <a href="#">2<sup>nd</sup> Year</a>
            <a href="#">3<sup>rd</sup> year</a>
            <a href="#">4<sup>th</sup> year</a>
          </div>
        </li>

        <li class="item" id="settings">
          <a href="#settings" class="btn"><i class="fas fa-cog"></i>Settings</a>
          <div class="smenu">
            <a href="#">Password</a>
            <a href="#">Privacy</a>
          </div>
        </li>

        <li class="item">
          <a class="btn" href="#"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </li>
      </div>
    </div>


<!-------------------Posts------------------------>








  </body>
</html>

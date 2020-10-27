<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'connect_DB.php';
  $email = $_POST["email"];
  $password = $_POST["password"];


  $sqla = "Select * from usersdb where email='$email' AND password ='$password'";
  // $sqla ="select `username`, `password`, `Email` FROM `usersdb` WHERE username='$username',password='$password', Email='$email' ";
  // $selectquery = "select * from usersdb";


  $resulta = mysqli_query($conn, $sqla);
  $fetch = mysqli_fetch_assoc($resulta);
  // $fetch= mysqli_fetch_array($resulta);


  // $query = mysqli_query($conn, $selectquery);
  // $fetch = mysqli_fetch_array($query);

  // $num = mysqli_num_rows($query);

  $num = mysqli_num_rows($resulta);
  if ($num >= 1) {
    
    $login = true;
    session_start();

    $_SESSION['loggedin'] = true;
    // $_SESSION['username'] = $username;
    $_SESSION['username'] = $fetch['username'];
    // $_SESSION['photo'] = $fetch['photo'];

    header("location: dashboard.php");

 ?>
     <script>
       alert("login successfull");
     </script>
   <?php
  

   } else {
     // $showError = "Invalid Credentials";
   ?>
     <script>
       alert("email or password is incorrect");
     </script>
<?php
  }
}
 


?>








<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="loginstyle.css">
</head>

<body>
  <div class="wrapper">
    <div class="title">
      Login Form</div>
    <form action="login.php" method="POST">
      <div class="field">
        <input type="text" name="email" required>
        <label>Email Address</label>
      </div>
      <div class="field">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>
      <div class="content">
        <div class="checkbox">
          <input type="checkbox" id="remember-me">
          <label for="remember-me">Remember me</label>
        </div>
        <div class="pass-link">
          <a href="#">Forgot password?</a></div>
      </div>
      <div class="field">
        <input type="submit" value="Login" name="submit">
      </div>
      <div class="signup-link">
        Not a member? <a href="#">Signup now</a></div>
    </form>
  </div>


  <div class="panel left-panel">
    <div class="content1">
      <h3>New here ?</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
        ex ratione. Aliquid!
      </p>
      <button class="btn transparent" id="sign-up-btn">
        <a href="signup.php"> Sign up
        </a>
      </button>
    </div>
    <img src="img/log.svg" class="image" alt="" />
  </div>




</body>

</html>
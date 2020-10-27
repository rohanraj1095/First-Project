<?php
if (isset($_POST['submit'])) {
    include 'connect_DB.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $course = $_POST["course"];
    $branch = $_POST["branch"];
    $year = $_POST["year"];
    $rooms = $_POST["room"];
    $hostel = $_POST["hostel"];
    // $file = $_FILES["photo"];


    //include 'upload.php';
    //print_r($file);



    // $filenames= $file['name'];
    // $filepath=$file['tmp_name'];
    // $fileerror=$file['error'];

    // if($fileerror==0){
    //     $destifile='Upload/'.$filenames;
    //     move_uploaded_file($filepath,$destifile);


    // }


    // $pass=password_hash($password, PASSWORD_BCRYPT);
    // $cpass=password_hash($cpassword, PASSWORD_BCRYPT);

    // $emailquery="select * from userinfo1 where email='$email'";
    // $emailquery="select * from userinfo1 where email='$email' AND mobile_Num='$mobile'";


    $emailquery = "select * from usersDB where email='$email' AND mobile='$mobile'";

    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);
    $mobilecount = mysqli_num_rows($query);

    if($emailcount > 0 || $mobilecount > 0) {
        echo "Email already exits<br>";
        echo "OR <br>";
        echo "Mobile Number already exits";
    } else {
        if ($password === $cpassword) {
           // $hash = password_hash($password, PASSWORD_DEFAULT);
           
            // $sql = "INSERT INTO `userinfo1` (`S.No`, `username`, `password`, `mobile_Num`, `Email`, `Course_year`, `room_num`, `date`) VALUES (NULL, '$username', '$password', '$mobile', '$email', '$course', '$rooms', current_timestamp())";
            // $result = mysqli_query($conn, $sql);
            $sql = "INSERT INTO `usersdb` (`S.No`, `username`, `password`, `email`, `mobile`, `course`, `branch`, `year`, `room`, `hostel`, `date`) VALUES (NULL, '$username', '$password', '$email', '$mobile', '$course', '$branch', '$year', '$rooms', '$hostel', current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if ($result) {
?> <script>
                    alert("Account Created  successfully");
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("Sorry! Error occur");
                </script>
<?php
            }
        }
        else
        {
            ?>
            <script>
                alert("Sorry! Password don't match");
            </script>
<?php
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">

    <title>SignUp to our website</title>
</head>

<body>
    <div class="regform">
        <h1>
            Create An Account</h1>
    </div>
    <div class="main">

        <form action="signup.php" method="post" enctype="multipart/form-data">
            <div id="name">
                <h2 class="name">
                    Name </h2>
                <input class="firstname" type="text" name="username" required><br>
                <!-- <label class="firstlabel">first name</label>
                <input class="lastname" type="text" name="last_name"><br>
                <label class="lastlabel">last name</label>  -->


            </div>
            <div>
                <h2 class="name">
                    Password</h2>
                <input class="firstname" type="password" name="password" required><br>
                <label class="firstlabel">Enter Password</label>
                <input class="lastname" type="password" name="cpassword" required><br>
                <label class="lastlabel">Confirm Password</label>

            </div>

            <div>
                <h2 class="name">
                    Contact Details</h2>
                <input class="firstname" type="text" name="email" required><br>
                <label class="firstlabel">Email</label>
                <input class="lastname" type="text" name="mobile" required><br>
                <label class="lastlabel">Mobile Number</label>

            </div>

            <div>
                <h2 class="name">
                    Acadamic Details</h2>
                <input class="firstname" type="text" name="course" required><br>
                <label class="firstlabel">Course</label>
                <input class="lastname" type="text" name="branch" required><br>
                <label class="lastlabel">Branch</label>
                <input class="lastmiddle" type="text" name="year" required><br>
                <label class="lastmlable">Year</label>

            </div>


            <div>
                <h2 class="name">
                    Room Details</h2>
                <input class="firstname" type="text" id="room" name="room" required /><br>
                <label class="firstlabel">Room Number</label>
                <input class="lastname" type="text" name="floor"><br>
                <label class="lastlabel">Floor</label>

            </div>

            <div>
                <h2 class="name" required>
                    Hostel </h2>
                <select class="option" name="hostel">
                    <option disabled="disabled" selected="selected">House</option>
                    <option>Rajasthan House</option>
                    <option>Punjab House</option>
                    <option>UP House</option>
                </select>
            </div>


            <!-- 
            <div>
                <h2 class="name">
                Profile Photo </h2>
                <input class="firstname" type="file" id="photo" name="photo" required /><br>
                <label class="firstlabel">Upload Photo</label>
            </div> -->



            <!-- <h2 id="coustomer">
                Are you beginner?</h2>
            <label class="radio">
                <input class="radio-one" type="radio" checked="checked" name="rdiobtn">
                <span class="checkmark"></span>
                Yes
            </label>

            <label class="radio">
                <input class="radio-two" type="radio" name="rdiobtn">
                <span class="checkmark"></span>
                No
            </label> -->

            <button type="submit" name="submit" class="button">Create Account</button>


        </form>
    </div>



    <div class="panel right-panel">
        <div class="content">
            <h3 class="textb">One of us ?</h3>
            <p class="textb">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                laboriosam ad deleniti.
            </p>
            <button class="btn " id="sign-in-btn">
                <a href="login.php"> Sign in
                </a>
            </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
    </div>







</body>

</html>
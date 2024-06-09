<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR RENTAL</title>

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 


 <!-- font awasom cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 
 
  <!-- <link rel="stylesheet" href="style_home.css"> -->
 <link rel="stylesheet" href="mycss/navbar_.css">
 <link rel="stylesheet" href="mycss/login_.css">
 <link rel="stylesheet" href="css/regs.css" type="text/css">


 <style>

.user_login .btn{
  width: 150px;
  position: absolute;
  top: 10%;
  right: 5%;
  z-index: 990;

}
  #message {
  display:none;
  background: #f1f1f1;
  /* box-shadow: -5px -5px 9px #ffffff61 , 5px 5px 7px #5e687993; */
  box-shadow:inset -5px -5px 9px #ffffff61 ,inset 5px 5px 7px #5e687993;

  color: #000;
  position: absolute;
  padding: 20px;
  top: 100vh;
  width: 400px;
  /* margin-left:1000px; */
  /* margin-top: -500px; */
  z-index: 999;
}


/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" icon when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}


 </style>


</head>
<body>


<?php
require_once('connection.php');




    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        
        
        if(empty($email)|| empty($pass))
        {
            echo '<script>alert("please fill the blanks")</script>';
        }

        else{
            $query="select *from users where EMAIL='$email'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['PASSWORD'];
                if(md5($pass)  == $db_password)
                {
                    // header("location: cardetails.php");

                    header("location:dashbord.php");

                    session_start();
                    $_SESSION['email'] = $email;
                    
                }
                else{
                    echo '<script>alert("Enter a proper password")</script>';
                }

            }
            else{
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }


// -----------------  register logic -------------------------   



if(isset($_POST['regs']))
{
    $fname=mysqli_real_escape_string($con,$_POST['fname']);
    $lname=mysqli_real_escape_string($con,$_POST['lname']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $lic=mysqli_real_escape_string($con,$_POST['lic']);
    $ph=mysqli_real_escape_string($con,$_POST['ph']);
   
    $pass=mysqli_real_escape_string($con,$_POST['pass']);
    $cpass=mysqli_real_escape_string($con,$_POST['cpass']);
    $gender=mysqli_real_escape_string($con,$_POST['gender']);
    $Pass=md5($pass);
    
    if(empty($fname)|| empty($lname)|| empty($email)|| empty($lic)|| empty($ph)|| empty($pass) || empty($gender))
    {
        echo '<script>alert("please fill the place")</script>';
    }
    else{
        if($pass==$cpass){
        $sql2="SELECT *from users where EMAIL='$email'";
        $res=mysqli_query($con,$sql2);
        if(mysqli_num_rows($res)>0){
            echo '<script>alert("EMAIL ALREADY EXISTS PRESS OK FOR LOGIN!!")</script>';
            echo '<script> window.location.href = "login.php";</script>';

        }
        else{
        session_start();
          $_SESSION['email'] = $email;
          $_SESSION['name'] = $lname;
          $_SESSION['pass'] = $Pass;

          $sql="insert into users (FNAME,LNAME,EMAIL,LIC_NUM,PHONE_NUMBER,PASSWORD,GENDER) values('$fname','$lname','$email','$lic',$ph,'$Pass','$gender')";
          $result = mysqli_query($con,$sql);

          // $otp = generateOTP();
          // sendOTP($fname,$lname,$email,$lic,$ph,$Pass,$gender , $otp);
          // $_SESSION['otp'] = $otp;
          // header("Location: otp/get_otp.php");

        
  
          // $to_email = $email;
          // $subject = "NO-REPLY";
          // $body = "THIS MAIL CONTAINS YOUR AUTHENTICATION DETAILS....\nYour Password is $pass and Your Registered email is $to_email"
          //          ;
          // $headers = "From: sender email";
          
          // if (mail($to_email, $subject, $body, $headers))
          
          // {
          //     echo "Email successfully sent to $to_email...";
          // }
          
          // else
 
          // {
          // echo "Email sending failed!";
          // }
        if($result){
            echo '<script>alert("Registration Successful Press ok to login")</script>';
            echo '<script> window.location.href = "login.php";</script>';       
           }                                                                                   // this is real //
        else{
            echo '<script>alert("please check the connection")</script>';
        }
    
        }

        }
        else{
            echo '<script>alert("PASSWORD DID NOT MATCH")</script>';
            echo '<script> window.location.href = "login.php";</script>';
        }
    }
}



?>



<!-- 
<div class="fullnav">
</div> -->
<nav class="navbar navbar-expand-lg   navbaarrr">
  <div class="container-fluid blur_nav ">
    <a class="navbar-brand brand_name brand_name_1" href="#">RENTASTIC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="offcanvas bg-transparent offcanvas-end" tabindex="-1" id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header nav_manu_togal nav_togal ">
        <h5 class="offcanvas-title  brand_name brand_name_2" id="offcanvasNavbarLabel">RENTASTIC.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body nav_manu_togal">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 me-5 brand_name_2 ">
          <li class="nav-item ">
            <a class="nav-link " aria-current="page" href="index.php"><i class="fa-solid fa-house header_icon"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashbord.php"><i class="fa-solid fa-bars-staggered header_icon"></i>Dashbord</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="login.php"><i class="fa-solid fa-door-open header_icon"></i>Login/Signup</a>
          </li>
          
        </ul>

      </div>
    </div>
  </div>
</nav>


<!-- main ligin page START ---- -->






<div class="main_form">
    <!-- <span class="user_login"> <a class="btn" href="adminlogin.php">adminlogin</a></span> -->

        <div class="container">
          <div class="forms-container">
            <div class="signin-signup">

              <form method="POST"  class="sign-in-form login_form" >
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="email" name="email" placeholder="Enter Email Here"/> 
                                                           <!--login form  -->
                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="pass" placeholder="Enter Password Here"/>
                </div>
                 <!-- <input type="submit" value="Login" class="btn solid" />  -->
                <button type='submit' class="btn login_btn" value="Login" name="login">Login</button>

 
                <!-- <input class="btnn" type="submit" value="Login" name="login"></input> -->
                
<!-- 
                <p class="social-text">Or Sign in with social platforms</p>
                <div class="social-media">
                  <a href="#" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                  </a>
                  <a href="#" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </div> -->
              </form>


              <form  method="POST" class="sign-up-form login_form ">      
                                                       <!-- sign-up from  -->
                <h2 class="title">Sign up</h2>
                
                <div class="input_flex">
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type ="text" name="fname" placeholder="Enter Your First Name" required />
                </div>
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type ="text" name="lname" placeholder="Enter Your Last Name" required/>
                </div>
                </div>

                <div class="input_flex">
                <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="ex: example@ex.com"placeholder="Enter Valid Email" required />
                </div>
                
                <div class="input-field">
                  <i class="fas fa-address-card"></i>
                  <input type="text" name="lic"  placeholder="Enter Your License number" required />
                </div>
                </div>

                <div class="input_flex">
                <div class="input-field">
                  <i class="fa fa-phone"></i>
                  <input type="tel" name="ph" maxlength="10" onkeypress="return onlyNumberKey(event)" placeholder="Enter Your Phone Number" required/>
                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <!-- <input type="password" placeholder="Password" name="password" /> -->
            <input type="password" name="pass" maxlength="12"  id="psw" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                </div>
                </div>



                <div class="input_flex">

                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="cpass"  id="cpsw" placeholder="Renter the password" required />
                </div>

                <div class="input-field">
                <i class="fa fa-venus-mars"></i>
                  <!-- <input type="password" placeholder="Confirm Password" name="password" /> -->
    
               <div class="input_check">
                <div>
                    <label for="input_enabled">Male</label>
                    <input type="radio" id="input_enabled" name="gender" value="male">
               </div>
               <div>
                    <label for="input_disabled">Female</label>
                    <input type="radio" id="input_disabled" name="gender" value="female"/>
             </div>
               </div>
                </div>



                </div>
             <!-- <input type="submit" class="btn" value="Sign up" />  -->



                <button type="submit" class="btn login_btn" value="REGISTER" name="regs">Sign up</button>
            <!-- <input type="submit" class="btnn"  value="REGISTER" name="regs" style="background-color: #ff7200;color: white"> -->
                

           

               
            
            
          </form>
        </div>
      </div>
      
          <div class="panels-container">
            <div class="panel left-panel">
              <div class="content">
                <h3>New to our community ?</h3>
                <p>
                  Discover a world of possibilities! Join us and explore a
                  vibrant community where ideas flourish and connections thrive.
                </p>
                <button class="btn transparent" id="sign-up-btn">
                  Sign up
                </button>
              </div>
               <!-- <img  src="https://i.ibb.co/6HXL6q1/Privacy-policy-rafiki.png" class="image" alt="" />  -->
              <img src="public/car1.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
              <div class="content">
                <h3>One of Our Valued Members</h3>
                <p>
                  Thank you for being part of our community. Your presence
                  enriches our shared experiences. Let's continue this journey
                  together!
                </p>
                <button class="btn transparent" id="sign-in-btn">
                  Sign in
                </button>
              </div>
               <!-- <img src="https://i.ibb.co/nP8H853/Mobile-login-rafiki.png"  class="image" alt="" />  -->
              <img src="public/car2.svg" class="image" alt="" />
            </div>
          </div>
        </div>
      </div>



<!-- --------------------------------  register              ------------------------------------------  -->


<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>



<!-- 
<div class="content" style="margin-top: 200px;">
         <h1>login form </h1>
                <form method="POST"> 
                <input type="email" name="email" placeholder="Enter Email Here" >
                <input type="password" name="pass" placeholder="Enter Password Here">
                <input class="btnn" type="submit" value="Login" name="login"></input>
                </form>
              
              
            </div>
        <div class="content" style="margin-top: 200px;">
         <h1>login form </h1>
                <form method="POST"> 
                <input type="email" name="email" placeholder="Enter Email Here" >
                <input type="password" name="pass" placeholder="Enter Password Here">
                <input class="btnn" type="submit" value="Login" name="loginn"></input>
                </form>
              
              
            </div> -->







<!-- main ligin page END ---- -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
   
 <script>
       const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");
    
        sign_up_btn.addEventListener("click", () => {
          container.classList.add("sign-up-mode");
        });
    
        sign_in_btn.addEventListener(
          "click",
          () => {
            container.classList.remove("sign-up-mode");
          },
          []
        );
  </script>


<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
  // document.getElementById("message").style.display = "block";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>  
<script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>













</body>
</html>
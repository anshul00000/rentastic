<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Codes Of Kevin</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="script.js" defer></script>
  </head>
  <body>
    <?php 
      session_start();
      if($_SESSION['email']) {
        $email = $_SESSION['email'];
        $name = $_SESSION['name'];
        $pass = $_SESSION['pass'];
        $otp = $_SESSION['otp'];



    ?>
    <div class="container">
      <header>
        <i class="bx bxs-check-shield"></i>
      </header>
      <h4>Enter OTP Code</h4>
      <form action="" method="post">
        <div class="input-field">
          <input type="number" name="otp1" max-length="1" required/>
          <input type="number" name="otp2" max-length="1" required disabled />
          <input type="number" name="otp3" max-length="1" disabled required/>
          <input type="number" name="otp4" max-length="1" disabled required/>
        </div>
    
        <div>
          <p id='demo' class="text-center text-danger"></p>
        </div>
        <button type="submit">Verify OTP</button>
      </form>
      <?php

        include '../connection.php';
        include '../otp.php';
        
        if($_SERVER['REQUEST_METHOD'] == "POST") {
          $dig1 = $_POST['otp1'];
          $dig2 = $_POST['otp2'];
          $dig3 = $_POST['otp3'];
          $dig4 = $_POST['otp4'];
          $enteredOTP  = ( (1000 * $dig1) + (100 * $dig2) + (10 * $dig3) + $dig4 );

          // check if e-mail address is well-formed
          if (verifyOTP($enteredOTP, $otp)) {
 
            // $sql="insert into users (FNAME,LNAME,EMAIL,LIC_NUM,PHONE_NUMBER,PASSWORD,GENDER) values('$fname','$lname','$email','$lic',$ph,'$Pass','$gender')";
            // $result = mysqli_query($con,$sql);
         
  
         
              // $query = "INSERT INTO `userdata`(`nickname`, `username`, `email`, `password`) VALUES ('".$name."','".$name."','".$email."','".$pass."');";
              // $conn -> query($query);
             
             
             
              header("Location: ../login.php");
          } else {
                echo '<script>
                document.getElementById("demo").innerHTML = "Wrong OTP";
                </script>';
          }
      }
    }
    else {
      header("Location: ../sign_up.php");
    }
    ?>
    </div>
  </body>
</html>









 <?php
  //  echo "<h1>otp aa gai 	&gt; </h1>";


  if ($_SERVER['REQUEST_METHOD'] == "POST") {

    
    require_once('../connection.php');
    include '../otp.php';

    // echo " method post h";

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $lic = mysqli_real_escape_string($con, $_POST['lic']);
    $ph = mysqli_real_escape_string($con, $_POST['ph']);

    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $cpass = mysqli_real_escape_string($con, $_POST['cpass']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $Pass = md5($pass);




    if (isset($_POST['regs'])) {


      if (empty($fname) || empty($lname) || empty($email) || empty($lic) || empty($ph) || empty($pass) || empty($gender)) {
        echo '<script>alert("please fill the place")</script>';
      } else {
        if ($pass == $cpass) {
          $sql2 = "SELECT *from users where EMAIL='$email'";
          $res = mysqli_query($con, $sql2);
          if (mysqli_num_rows($res) > 0) {
            echo '<script>alert("EMAIL ALREADY EXISTS PRESS OK FOR LOGIN!!")</script>';
            echo '<script> window.location.href = "../login.php";</script>';
          } else {
            // session_start();
            //   $_SESSION['email'] = $email;
            //   $_SESSION['name'] = $lname;
            //   $_SESSION['pass'] = $Pass;

            // $sql="insert into users (FNAME,LNAME,EMAIL,LIC_NUM,PHONE_NUMBER,PASSWORD,GENDER) values('$fname','$lname','$email','$lic',$ph,'$Pass','$gender')";
            // $result = mysqli_query($con,$sql);

            // $otp = generateOTP();
            // sendOTP($fname,$lname,$email,$lic,$ph,$Pass,$gender , $otp);

            $otp = generateOTP();
            sendOTP($email, $fname, $otp);
            

            // $_SESSION['otp'] = $otp;
            // header("Location: otp/get_otp.php");


            // if($result){
            //     echo '<script>alert("Registration Successful Press ok to login")</script>';
            //     echo '<script> window.location.href = "login.php";</script>';       
            //    }                                                                                   // this is real //
            // else{
            //     echo '<script>alert("please check the connection")</script>';
            // }

          }
          if (isset($_POST['Verify_otp'])) {
            $dig1 = $_POST['otp1'];
            $dig2 = $_POST['otp2'];
            $dig3 = $_POST['otp3'];
            $dig4 = $_POST['otp4'];
            $enteredOTP  = ((1000 * $dig1) + (100 * $dig2) + (10 * $dig3) + $dig4);
            echo $enteredOTP;
            // check if e-mail address is well-formed
            // if (verifyOTP($enteredOTP, $otp)) {
      
              // $query = "INSERT INTO `userdata`(`nickname`, `username`, `email`, `password`) VALUES ('" . $name . "','" . $name . "','" . $email . "','" . $pass . "');";
              // $conn->query($query);
      
              // $sql="insert into users (FNAME,LNAME,EMAIL,LIC_NUM,PHONE_NUMBER,PASSWORD,GENDER) values('$fname','$lname','$email','$lic',$ph,'$Pass','$gender')";
              // $result = mysqli_query($con,$sql);
      
      
              // header("Location: ../login.php.php");
      
            } else {
              echo '<script>
                document.getElementById("demo").innerHTML = "Wrong OTP";
                </script>';
            }
          }
      
        }else {
          echo '<script>alert("PASSWORD DID NOT MATCH")</script>';
          echo '<script> window.location.href = "../login.php";</script>';
        }
      }

      // echo  $fname ; 
      // echo $lname ; 
      // echo $email;
      // echo $lic ; 
      // echo $ph ; 
      // echo $pass;
      // echo $cpass; 
      // echo $gender; 
      // echo $pass ; 






    } 
  } else {
    echo '<script> window.location.href = "../login.php";</script>';
  }


  ?>







otp js == > 

  <?php 
 echo ` <script>
  const demo =  document.getElementById("demo");
  //  const otp1 =  document.getElementById("otp1");
  //  const otp2 =  document.getElementById("opt2");
 
   let otp_submit =  document.getElementById("otp_submit");
    // innerHTML

    otp_submit.addEventListener("click",(e)=>{
      e.preventDefault();
      alert("otp submit ho gya ");
      const opt3 =  document.getElementById("otp3");
      const opt4 =  document.getElementById("otp4");
       const form_otp1 = parseInt(document.getElementById('otp1').value) ;
       const form_otp2 = parseInt(document.getElementById('otp2').value)  ;
       const form_otp3 =  parseInt(otp3.value);
       const form_otp4 =  parseInt(otp4.value);

      let otp_number = ((form_otp1*1000) + (form_otp2*100 )+  (form_otp3*10) +  form_otp4);
      //  demo.innerHTML = typeof form_otp  ; 

       demo.innerHTML = otp_number  ; 
      //  demo.textContent = otp_number  ; 
       
      //  .textContent
      
    });



  </script>`;
  ?>
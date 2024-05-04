<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rentastc</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <!-- <script src="script.js" defer></script> -->
</head>

<body>
 <?php 
 
 require_once('../connection.php');

 if(isset($_POST['regs'])) {


  $fname = mysqli_real_escape_string($con, $_POST['fname']);
  $lname = mysqli_real_escape_string($con, $_POST['lname']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $lic = mysqli_real_escape_string($con, $_POST['lic']);
  $ph = mysqli_real_escape_string($con, $_POST['ph']);

  $pass = mysqli_real_escape_string($con, $_POST['pass']);
  $cpass = mysqli_real_escape_string($con, $_POST['cpass']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $Pass = md5($pass);

  // $fname = $_POST['fname'];
  // $lname = $_POST['lname'];
  // $email = $_POST['email'];
  // $lic = $_POST['lic'];
  // $ph = $_POST['ph'];
  // $pass = $_POST['pass'];
  // $Pass = md5($pass);
  // $cpass = $_POST['cpass'];
  // $gender = $_POST['gender'];

   
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
          echo '<script> window.location.href = "../login.php";</script>';

      }
      else{

        echo "all set ";

      




      // session_start();
        // $_SESSION['email'] = $email;
        // $_SESSION['name'] = $lname;
        // $_SESSION['pass'] = $Pass;

        // $sql="insert into users (FNAME,LNAME,EMAIL,LIC_NUM,PHONE_NUMBER,PASSWORD,GENDER) values('$fname','$lname','$email','$lic',$ph,'$Pass','$gender')";
        // $result = mysqli_query($con,$sql);

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


      // if($result){
      //     echo '<script>alert("Registration Successful Press ok to login")</script>';
      //     echo '<script> window.location.href = "../login.php";</script>';       
      //    }                                                                                   // this is real //
      // else{
      //     echo '<script>alert("please check the connection")</script>';
      // }
  
      }

      }
      else{
          echo '<script>alert("PASSWORD DID NOT MATCH")</script>';
          echo '<script> window.location.href = "../login.php";</script>';
      }
  }

 


}else{
  // echo '<script> window.location.href = "../login.php";</script>';
  echo "redirect";
  
}
if(isset($_POST['Verify_otp'])){

  $otp = $_GET['otp1'];
  echo $otp ; 

}
 
 ?>

  <div class="container">
    <header>
      <i class="bx bxs-check-shield"></i>
    </header>
    <h4>Enter OTP Code</h4>
    <!-- action="#" method="post" -->
    <form method="POST">
      <div class="input-field">
        <input type="number" id="otp1" name="otp1" max-length="1" required />
        <input type="number" id="otp2" name="otp2" max-length="1" required disabled />
        <input type="number" id="otp3" name="otp3" max-length="1" disabled required />
        <input type="number" id="otp4" name="otp4" max-length="1" disabled required />
      </div>

      <div>
        <p id='demo' class="text-center text-danger">😜</p>
      </div>
      <button id="otp_submit" type="submit" name="Verify_otp">Verify OTP</button>
    </form>

  </div>


  <!-- <script>

$("#otp_submit").click(function(){
  $.post($("#form").attr("action"),
        $("#form : input").serializaArray(),
        function(info){
          $("#demo").empty();
          $("#demo").html(info);

        }
  );


$("#form").submit(function(){
  return false ;
});



});

  </script> -->



<?php
echo $fname."<br>";
// echo $lname."<br>";
// echo $email."<br>";
// echo $lic."<br>";
// echo $ph."<br>";
// echo $pass."<br>";
// echo $cpass."<br>";
// echo $gender."<br>";
?>


</body>

</html>
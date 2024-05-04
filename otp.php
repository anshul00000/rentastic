<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
  require_once 'PHPMailer/src/PHPMailer.php';
  require_once 'PHPMailer/src/Exception.php';
  require_once 'PHPMailer/src/SMTP.php';
//   include './otp/get_otp.php';
//   echo "otp requre ho gya ";
  // Function to generate a random OTP of a specified length
  function generateOTP() {
    return rand(1000, 9999);  
  }

  // Function to send the OTP (in a real application, you might use SMS or email)
  function sendOTP($email, $fname, $otp) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'sanjaybusiness444@gmail.com';
    $mail->Password   = 'okymsvycekvixopz';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    
    $mail->setFrom("sanjaybusiness444@gmail.com", "Codes Of Kevin");
    
    $message = '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Codes Of Kevin</title>
        <style>
            .container {
                background-color: whitesmoke;
                position: relative;
                margin: auto;
                width: 300px;
                padding: 0px 10px;
                padding-bottom: 5px;
            }
    
            .h1 {
                background-color: rgba(255, 0, 0, 0.9);
                margin: 0px -10px;
            }
    
            .text-center {
                text-align: center;
                color: yellow;
            }
    
            .bg-otp {
                background-color: aqua;
                color: rgb(0, 0, 0);
                text-align: center;
                margin: auto;
                width: 100px;
                padding: 0px 5px;
                border-radius: 10px;
                box-shadow: -1px -1px 10px rgb(158, 158, 236);
            }
        </style>
    </head>
    
    <body>
        <div>
            <div class="container">
                <h1 class="h1 text-center">Codes Of Kevin</h1>
                <h2>Hey {NAME}</h2>
                <p> {LNAME} {EMAIL} {LIC} {PH}  {PASS}  {GENDER}<p>
                <h2>Your Verification code</h2>
                <h1 class="bg-otp"><strong class="otp">{OTP}</strong></h1>
                <p>If you didn’t request this, you can ignore this email.</p>
                <p>Thanks, <br>Codes Of Kevin</p>
            </div>
        </div>
        </div>
    </body>
    
    </html>';
    $title = 'For OTP Verification';
    // $fname','$lname','$email','$lic',$ph,'$Pass','$gender
    $message = str_replace('{OTP}', $otp, $message);
    $message = str_replace('{NAME}', $fname, $message);
    // $message = str_replace('{LNAME}', $lname, $message);
    $message = str_replace('{EMAIL}', $email, $message);
    // $message = str_replace('{LIC}', $lic, $message);
    // $message = str_replace('{PH}', $ph, $message);
    // $message = str_replace('{PASS}', $Pass, $message);
    // $message = str_replace('{GENDER}', $gender, $message);
    
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body    = $message;


    if ($mail->send()) {
    //   echo 'Email sent successfully';
    // } 
    // else {
    //   echo 'Error: ' . $mail->ErrorInfo;
    // }
    }
  }

  // Function to verify OTP
  function verifyOTP($enteredOTP, $otp){
      return $enteredOTP === $otp;
  }
?>
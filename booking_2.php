<?php 

session_start();

require_once('connection.php');
// include 'otp.php';                    // THIS IS REQURED BY OTP 

if($_SESSION['email'])
{
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>hyyy</h1>

    
</body>
</html>

<?php 



}else{
    echo '<script>window.location.href = "login.php"</script>';
   
   
   }


?>
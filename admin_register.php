<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR BOOKING</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <!-- <link  rel="stylesheet" href="mycss/style.css"> -->
   <link  rel="stylesheet" href="mycss/navbar_.css">
   <link rel="stylesheet" href="mycss/booking_.css">
   <style>
    .back{
    position: absolute;
    left: 5px ;
    top: 10px;
    width: 150px;
    height: 40px;   
  background: aqua;
    border:none;
    /* margin-top: 0px; */
    /* margin-left:1300px; */
    /* font-size: 18px; */
    /* border-radius: 10px; */
    cursor: pointer;
    color:var(--textcolor);
}
   </style>
</head>

<?php 

    require_once('connection.php');

         
if(isset($_POST['submit']))
{
    $name=mysqli_real_escape_string($con,$_POST['name']);

    $email=mysqli_real_escape_string($con,$_POST['email']);

    $id=mysqli_real_escape_string($con,$_POST['id']);

    $password =mysqli_real_escape_string($con,$_POST['password']);

    $cpass =mysqli_real_escape_string($con,$_POST['cpass']);

    $phone=mysqli_real_escape_string($con,$_POST['phone']);

    $address=mysqli_real_escape_string($con,$_POST['address']);

    $Pass=md5($password);
    
    if(empty($name)|| empty($email)|| empty($id)|| empty($password)|| empty($cpass) || empty($phone) || empty($address))
    {
        echo '<script>alert("please fill the place")</script>';
    }
    else{
        if($password==$cpass){

        $sql2="SELECT *from admin where EMAIL='$email'";
        $res=mysqli_query($con,$sql2);
        if(mysqli_num_rows($res)>0){
            echo '<script>alert("EMAIL ALREADY EXISTS PRESS OK FOR LOGIN!!")</script>';
            echo '<script> window.location.href = "adminlogin.php";</script>';

        }
        else{
       
            $sql2="SELECT *from admin where ADMIN_ID='$id'";
            $res=mysqli_query($con,$sql2);
            if(mysqli_num_rows($res)>0){
                echo '<script>alert("Admin id ALREADY EXISTS please enter another id")</script>';
                // echo '<script> window.location.href = "adminlogin.php";</script>';
    
            }else{

                $sql="insert into admin (ADMIN_ID,ADMIN_PASSWORD,NAME,EMAIL,PHONE,ADDRESS) values('$id','$password','$name','$email',$phone,'$address')";
                $result = mysqli_query($con,$sql);

            }
        if($result){
            echo '<script>alert("Registration Successful Press ok to login")</script>';
            echo '<script> window.location.href = "adminlogin.php";</script>';       
           }                                                                                   // this is real //
        else{
            echo '<script>alert("please check the connection")</script>';
        }
        }
        }
        else{
            echo '<script>alert("PASSWORD DID NOT MATCH")</script>';
            echo '<script> window.location.href = "admin_register.php";</script>';
        }
    }
}
    ?>

<body >
  <a href="adminlogin.php"><button class="back">Go To Login</button></a>

         <div class="main"> 
        <div class="register">
            <h2>Admin Register </h2>
       
            <form  class="row g-3 ps-5 pe-5"  method="POST"  >
  <div class="col-md-6">
    <label  for="" class="form-label">Email-id :</label>
    <input name="email" type="text" class="form-control name" >
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">name : </label>
    <input  name="name"  type="text" class="form-control name" >
  </div>

  <div class="col-md-6">
    <label  for="" class="form-label">admin_id:</label>
    <input  name="id" type="text" class="form-control name" >
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">PHONE NUMBER :</label>
    <input type="tel" name="phone" maxlength="10" class="form-control name" >
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Address :</label>
    <input type="text" name="address" class="form-control name">
  </div>

  <div class="col-md-6">
    <label for="dfield" class="form-label">password :</label>
    <input type ="password" name="password"  class="form-control name" >
  </div>

  <div class="col-md-6">
    <label for="dfield" class="form-label">Renter the password :</label>
    <input type ="password" name="cpass"  class="form-control name" >
  </div>


  <div class="col-12">
    <button type="submit"  value="submit" name="submit" class="btn btn-primary btnn">Submit</button>
  </div>
</form>
        </div>
    </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</body>
</html>
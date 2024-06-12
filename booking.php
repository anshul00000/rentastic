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
 

   <script type="text/javascript">
    window.history.forward();

    function noBack() {
      window.history.forward();
    }
  </script>

    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>



</head>
<body >

<?php 

    require_once('connection.php');

    include 'otp.php';                    // THIS IS REQURED BY OTP 
    
    session_start();
     
    // session_start();
    if($_SESSION['email'])
    {


    $carid=$_GET['id'];
    
    $sql="select *from cars where CAR_ID='$carid'";
    $cname = mysqli_query($con,$sql);
    $email = mysqli_fetch_assoc($cname);
    
    $value = $_SESSION['email'];
    $sql="select * from users where EMAIL='$value'";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
    $uemail=$rows['EMAIL'];
    $carprice=$email['PRICE'];

    $carname  =  $email['CAR_NAME'] ;
    
    $admin_email_id = $email['ADMIN'] ; 


    if(isset($_POST['book'])){
       
        $bplace=mysqli_real_escape_string($con,$_POST['place']);
        $bdate=date('Y-m-d',strtotime($_POST['date']));;
        $dur=mysqli_real_escape_string($con,$_POST['dur']);
        $phno=mysqli_real_escape_string($con,$_POST['ph']);
        $des=mysqli_real_escape_string($con,$_POST['des']);
        $rdate=date('Y-m-d',strtotime($_POST['rdate']));
         
        if(empty($bplace)|| empty($bdate)|| empty($dur)|| empty($phno)|| empty($des)|| empty($rdate)){
            echo '<script>alert("please fill the place")</script>';

        }
        else{
            if($bdate<$rdate){

            $price=($dur*$carprice);

            $sql="insert into booking (CAR_ID,OWNER_ID, CAR_NAME,EMAIL,BOOK_PLACE,BOOK_DATE,DURATION,PHONE_NUMBER,DESTINATION,PRICE,RETURN_DATE) values($carid,'$admin_email_id' ,'$carname ','$uemail','$bplace','$bdate',$dur,$phno,'$des',$price,'$rdate')";
            
            $result = mysqli_query($con,$sql);
            
            if($result){
                
                $_SESSION['email'] =$uemail;
     
                 
                $email = "anshulchaurasiya05@gmail.com";
                $name = "Anshul Chaurasiya";
                

                 
              sendOTP_provider($email, $name , $carname , $bplace , $phno ,  $rdate);
                

              header("Location: psucess.php");

                // header("Location: payment.php");
            }
            else{
                echo '<script>alert("please check the connection")</script>';
            }
        }
        else{
            echo  '<script>alert("please enter a correct rturn date")</script>';
        }
    
        }
    }
    
    ?>



<!--     
       <div class="hai">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">RENTASTIC</h2>
                </div>
                <div class="menu" >
                    <ul>
                        <li ><a href="cardetails.php">HOME</a></li>
                        <li><a href="aboutus2.html">ABOUT</a></li>
                        <li><a href="#">DESIGN</a></li>
                        <li><a href="contactus2.html">CONTACT</a></li>
                        <li><button class="nn"><a href="index.php">LOGOUT</a></button></li>
                        <li><img src="images/profile.png" class="circle" alt="Alps"></li>
                    <li><p class="phello">HELLO! &nbsp;<a id="pname"><?php echo $rows['FNAME']." ".$rows['LNAME']?></a></p></li>

                    
                    </ul>
                </div>
            </div>
       </div>
                 -->
                





              
  <div class="fullnav">
  </div>
  <nav class="navbar navbar-expand-lg   navbaarrr">
    <div class="container-fluid blur_nav ">
      <a class="navbar-brand brand_name" href="#">RENTASTIC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon navbar-dark"></span>
      </button>
      <div class="offcanvas bg-transparent offcanvas-end" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header nav_manu_togal nav_togal ">
          <h5 class="offcanvas-title  brand_name" id="offcanvasNavbarLabel">RENTASTIC ✔️</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body nav_manu_togal">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 me-5 ">
            <!-- <li class="nav-item ">
              <a class="nav-link " aria-current="page" href="index.php">Home</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link active" href="dashbord.php">Deshbord</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link active" href="login.php">Login/Signup</a>
            </li> -->
           
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
          </ul>

        </div>
      </div>
    </div>
  </nav>





         <div class="main"> 
        
        <div class="register">
            <h2>BOOKING</h2>
            <h3 class="mb-3">For : <?php echo "".$email['CAR_NAME']?></h3>
            <!-- <h3 class="mb-3">For : <?php echo "".$email['ADMIN']?></h3> -->







            <form class="row g-3 ps-5 pe-5"  method="POST" >
  <div class="col-md-6">
    <label  for="" class="form-label">PLACE :</label>
    <input name="place" type="text" class="form-control name" >
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">DATE : </label>
    <input  name="date"  type="date" class="form-control name" >
  </div>

  <div class="col-md-6">
    <label  for="" class="form-label">DURATION :</label>
    <input  name="dur" type="number" min="1" max="30" class="form-control name" >
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">PHONE NUMBER :</label>
    <input type="tel" name="ph" maxlength="10" class="form-control name" >
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">DESTINATION :</label>
    <input type="text" name="des"  maxlength="10" class="form-control name">
  </div>

  <div class="col-md-6">
    <label for="dfield" class="form-label">Return date :</label>
    <input type ="date" name="rdate" id="dfield" class="name"  min='1899-01-01' class="form-control" >
  </div>


  <div class="col-12">
    <button type="submit"  value="BOOK" name="book" class="btn btn-primary btnn">Submit</button>
  </div>
</form>











        <!-- <form id="register" method="POST"  >
            <h2>CAR NAME : <?php echo "".$email['CAR_NAME']?></h2>
            <label>BOOKING PLACE : </label>
            <br>
            <input class="sssss" type="text" name="place"
            id="name" placeholder="Enter Your Destination">
            <br><br>

            <label>BOOKING DATE : </label>
            <br>
            <input type ="date" name="date"
            id="datefield" min='1899-01-01' max='2000-13-13'  placeholder="ENTER THE DATE FOR BOOKING">
            <br><br>

            <label>DURATION : </label>
            <br>
            <input type ="number" name="dur" min="1" max="30" 
            id="name" placeholder="Enter Rent Period (in days)">
            <br><br>

            <label>PHONE NUMBER : </label>
            <br>
            <input type="tel" name="ph" maxlength="10"
            id="name" placeholder="Enter Your Phone Number">
            <br><br>
            
            <label>DESTINATION : </label>
            <br>
            <input type="text" name="des"
            id="name" placeholder="Enter Your Destination">
            <br><br>

            <label>Return date : </label>
            <br>
            <input type ="date" name="rdate"
            id="dfield"  min='1899-01-01' placeholder="Enter The Return Date">
            <br><br>
            <input type="submit"  class="btnn" value="BOOK" name="book" >
            
        </form> -->



        </div>
    </div>
    


    <?php 

               }else{
                // echo "<script>alert('alert is working 👍🏼')</script>";
                echo '<script>window.location.href = "login.php"</script>';
   

               }



        ?>









    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();
        if (dd < 10) {
             dd = '0' + dd
        }
        if (mm < 10) {
              mm = '0' + mm
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("datefield").setAttribute("min", today);
        document.getElementById("datefield").setAttribute("max", today);


    </script>
    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();
        if (dd < 10) {
             dd = '0' + dd
        }
        if (mm < 10) {
              mm = '0' + mm
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("dfield").setAttribute("min", today);
        


    </script>
    
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
    
</body>
</html>
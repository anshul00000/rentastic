
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>CAR RENTAL</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link  rel="stylesheet" href="mycss/style.css">
    <link  rel="stylesheet" href="css/style.css">
   


    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>


</head>
<body>

<div class="holo"></div>
<div class="holo2"></div>
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
                    header("location: cardetails.php");
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







?>

    <!-- <div class="haii">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">RENTASTIC</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="aboutus.html">ABOUT</a></li>
                    <li><a href="#">SERVICES</a></li>
                    
                    <li><a href="contactus.html">CONTACT</a></li>
                  <li> <button class="adminbtn"><a href="adminlogin.php">ADMIN LOGIN</a></button></li>
                </ul>
            </div>
            
        </div> -->

     
        
  <div class="fullnav">
  </div>
  <nav class="navbar navbar-expand-lg   navbaarrr">
    <div class="container-fluid blur_nav ">
      <a class="navbar-brand brand_name" href="index.php">RENTASTIC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="offcanvas bg-transparent offcanvas-end" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header nav_manu_togal nav_togal ">
          <h5 class="offcanvas-title  brand_name" id="offcanvasNavbarLabel">RENTASTIC ✔️</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body nav_manu_togal">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 me-5 ">
            <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashbord.php">Deshbord</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login/Signup</a>
            </li>
           
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
         



  
  <div class="main_hero">
    <div class="main_hero2_1">
      <!-- <h1>hyyy</h1>  -->
      <h1 class="y_r">Your <span style=color:orange>ride</span> </h1>
      <h1 class="y_w">Your <span style="color:black;">way.</span> </h1>
      <a href="dashbord.php">
      <button class="btn" type="submit">
      View Cars -> 
      <!-- <img class="btn_img" src="public/rocket.gif" alt="ll"> -->
      </button>
      </a>
     
    </div>

    <div class="main_hero_form">
      <div>
        <img src="public/mycar.svg" alt="mycar" width='200px' />
        <p>Get car with your mood </p>
      </div>

      <div class="form_file">
        <form>
          <!-- <div class="inputfeelds">  -->
          <input type="text" placeholder="location" name="location" onChange={myfun} />
          <p>start-end time</p>

          <input type="datetime-local" name="starttime" id="startdatetime2" placeholder="enter " />

          <input type="datetime-local" name="endtime" id="startdatetime2" onChange={myfun} placeholder="date " />

          <!-- </div>  -->
          <button class="btn" type="submit">
            Search
          </button>
        </form>
      </div>
    </div>
  </div>


  <?php 
    require_once('connection.php');
   
    $sql2="select *from cars where AVAILABLE='Y'";
    $cars= mysqli_query($con,$sql2);
    
    // $row=mysqli_fetch_assoc($cars);
        
    
    ?>



  <div class="about_cards">

  <?php
        while($result= mysqli_fetch_array($cars))
        {
            // echo $result['CAR_ID'];
            // echo $result['AVAILABLE'];
            
    ?>  

  <div class="about_card_div">
            <div class="about_card">
                <div class="about_card_img">

                    <img src="images/<?php echo $result['CAR_IMG']?>" alt="mycar">
                </div>
                <!-- <form method="POST"> -->
                   
             <?php $res=$result['CAR_ID'] ; ?>

                <div class="card_text">
                    <div> <p><?php echo $result['CAR_NAME']?></p> <p>CAPACITY : <?php echo $result['CAPACITY']?></p> </div>
                   <div> 
                    
                    <p>Fuel Type : <?php echo $result['FUEL_TYPE']?></p>
                    <p>Rent Per Day : ₹<?php echo $result['PRICE']?>/-</p></div>
                    
                </div>

                <!-- <button class="btn" type="button">view car</button> -->
            <a class="btn" type="submit" name="booknow" class="utton" href="booking.php?id=<?php echo $res;?>">Book</a>
            
                <!-- </form> -->
            </div>
            </div>
            <?php
        }
    
    ?>
          </div>


       <!-- <div class="demo_div"></div> -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>

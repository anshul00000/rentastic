<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="mycss/style.css">
</head>

<body>


<?php 
    require_once('connection.php');
        session_start();
        if($_SESSION['email']){

        

    $value = $_SESSION['email'];
    $_SESSION['email'] = $value;
    
    $sql="select * from users where EMAIL='$value'";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
    $sql2="select *from cars where AVAILABLE='Y'";
    $cars= mysqli_query($con,$sql2);
    
    // $row=mysqli_fetch_assoc($cars);
        
    
    ?>


    <div class="fullnav">
    </div>
    <nav class="navbar navbar-expand-lg   navbaarrr">
        <div class="container-fluid blur_nav ">
            <a class="navbar-brand brand_name" href="#">RENTASTIC</a>
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
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="dashbord.php">Deshbord</a>
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







    <!-- main deshbord  -->
    <div class="about_div">
        <div class="about_details">
          
            <div class="about_details_photo">
                <div class="img_div">
                <!-- <img
              src="https://cdn.dribbble.com/users/1784672/screenshots/15426271/media/0c587a5988bf11eb382517627edf7c55.png?resize=1000x750&vertical=center"
              alt="myimg"
            />  -->
                <!-- <img  src="https://cdn.dribbble.com/users/254802/screenshots/15092292/media/16239104445624f016e54f9047a8af28.png?resize=1000x750&vertical=center" alt="myimg" /> -->
                <!-- <img src="https://cdn2.iconfinder.com/data/icons/avatar-2/512/oscar_boy-512.png" alt="myimg" /> -->
                </div>
            </div>
            <div class="about_details_details">
                <div>
                    <!-- <p>Anshul Chaurasiya</p> -->
                    <h3>HELLO! </h3>
                    <p><?php echo $rows['FNAME']." ".$rows['LNAME']?></p>
                    <!-- <p>anshulchaurasiya05@gmail.com</p> -->
                    <p><?php echo $rows['EMAIL']?></p>
                    <!-- <p>+91 8964049390</p> -->
                    <p>+91 <?php echo $rows['PHONE_NUMBER']?></p>
                    <p>lic_number : <?php echo $rows['LIC_NUM']?></p>
                    <!-- <p><?php echo $rows['LIC_NUM']?></p> -->
                    <p>GENDER : <?php echo $rows['GENDER']?></p>
                    <p>📍 Gwalior ( 472118 )</p>
                     
                    <!-- <a  class="btnn" href="aboutus2.html">ABOUT</a> -->
                    <!-- <a class="btnn" href="contactus2.html">CONTACT</a> -->
                    <a class="btnn" href="feedback/Feedbacks.php">FEEDBACK</a>
                <a class="btnn" href="logout.php">LOGOUT</a>
                    <a class="btnn" id="stat" href="bookinstatus.php">BOOKING STATUS</a>
                </div>
            </div>
        </div>
        <div class="about_cards">
            <!-- <h1>our car uverview </h1> -->
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
    <?php 
    // require_once('connection.php');
        

    // $value = $_SESSION['email'];
    
    // $sql="select * from users where EMAIL='$value'";
    // $name = mysqli_query($con,$sql);
    // $rows=mysqli_fetch_assoc($name);
   
        
        
        
        }
        else{
            header("Location: login.php");
        }
    
    ?>


           



        </div>
        </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>
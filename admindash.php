<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link  rel="stylesheet" href="mycss/style.css">

    <title>ADMINISTRATOR</title>
</head>

<style>
*{
    margin: 0;
    padding: 0;
  box-sizing: border-box;
   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

:root {
    --bgcolor: #dde1e7;
    --textcolor: rgb(0, 0, 0);
    --boxshadow: rgb(0, 0, 0);
    /* --buttoncolor : rgb(238, 0, 255) ; */
  }
  

body{
   background-color: var(--bgcolor);
}
.hai{
    width: 100%;
    /* background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%),url("../images/carbg2.jpg"); */
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: infiniteScrollBg 50s linear infinite;
}
.main{
    width: 100%;
    /* background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%); */
    /* background-color: red; */
    background-position: center;
 
    padding-left: 20px;
    float:left;
    padding-top: 10px;

}
.menu{
    width: 400px;
 
    float: left;
    height: 70px;
    background-color: red;

}

/* 

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;

}

ul li a{
    text-decoration: none;
    color: white;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

} */
.t_main{
    /* background-color: blue; */
   padding-bottom: 150px;
}
.content-table{
   border-collapse: collapse;
   margin: auto;
    
    font-size: 0.9em;
  
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    /* box-shadow:0 0  20px var(--textcolor); */


    box-shadow:inset -5px -5px 9px #ffffff61 ,inset 5px 5px 7px #5e687993 , -5px -5px 9px #ffffff61 , 5px 5px 7px #5e687993;


    /* margin-left : 350px ; */
    margin-top: 25px;
    width: 800px;
    height: 500px;
}

.t_div{
    /* background-color: red; */
    position: relative;
    margin: auto;
    width: 70%;
    overflow: auto;
    /* margin-bottom: 2000px ; */
}


.content-table thead tr{
    /* background-color: darkslategray; */
    /* background-color: red; */
    background-color: darkcyan;

    color: var(--textcolor);
    text-align: left;
}

.content-table th,
.content-table td{
    padding: 12px 15px;
    /* color: red; */
    font-size: 20px;
    letter-spacing: 2px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;


}

.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
    color: var(--textcolor);

}
.content-table tbody tr:nth-of-type(even){
    /* background-color: #f3f3f3; */
    background-color:rgba(105, 105, 105, 0.33);

}
.content-table tbody tr:last-of-type{
    border-bottom: 2px solid orange;
}

.content-table thead .active-row{
    font-weight:  bold;
    color: orange;
}


.header{
  width: 85%;
  margin: auto;
  margin-top: 100px;
    /* margin-left: 650px; */
    color: var(--textcolor);
    background-color: rgba(105, 105, 105, 0.33);

 
    letter-spacing: 10px;
    text-align: center;
}


.nn{
    width:100px;
    /* background: #ff7200; */
    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:var(--textcolor);
    transition: 0.4s ease;

}


.nn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    
}


</style>
<body>


<?php

require_once('connection.php');
$query="select *from feedback";
$queryy=mysqli_query($con,$query);
$num=mysqli_num_rows($queryy);


?>


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
              <!-- <a class="nav-link active" aria-current="page" href="index.php">Home</a> -->
              <a class="nav-link " href="adminusers.php">USERS</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="adminvehicle.php">VEHICLE MANAGEMENT</a>
            </li>

            <li class="nav-item">
              <!-- <a class="nav-link" href="login.php">Login/Signup</a> -->
              <a class="nav-link active" href="admindash.php">FEEDBACKS</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="adminbook.php">BOOKING REQUEST</a>

            </li>

            <li class="nav-item">
            <a class="nav-link" href="logout.php">LOGOUT</a>

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


    <div class="hai">
        <!-- <div class="navbar">
            <div class="icon">
                <h2 class="logo">RENTASTIC</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="adminvehicle.php">VEHICLE MANAGEMENT</a></li>
                    <li><a href="adminusers.php">USERS</a></li>
                    <li><a href="admindash.php">FEEDBACKS</a></li>
                    
                    <li><a href="adminbook.php">BOOKING REQUEST</a></li>
                  <li> <button class="nn"><a href="index.php">LOGOUT</a></button></li>
                </ul>
            </div> 
            
          
        </div> -->
        <div class="t_main">
            <h1 class="header">FEEDBACKS</h1>
            <div class="t_div" >
                <div >
                    <table class="content-table">
                <thead>
                    <tr>
                        <th>FEEDBACK_ID</th> 
                        <th>EMAIL</th>
                        <th>COMMENT</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
                
                while($res = mysqli_fetch_array($queryy)){
                
                
                ?>
                <tr  class="active-row">
                    <td><?php echo $res['FED_ID'];?></php></td>
                    <td><?php echo $res['EMAIL'];?></php></td>
                    <td><?php echo $res['COMMENT'];?></php></td>
                    <!-- <td>1</td>
                    <td>anshulchaurasiya05@gmail.com</td>
                    <td>hai I am satisfied with your service </td> -->
                </tr>
               <?php } ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     



</body>
</html>
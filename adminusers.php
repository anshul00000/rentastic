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
<body>
<style>
*{
    margin: 0;
    padding: 0;
    color: white;

}
.hai{
    width: 100%;
    /* background-color: red; */
    /* background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%),url("../images/carbg2.jpg"); */
    background-position: center;
    background-size: cover;
    /* height: 109vh; */
    /* animation: infiniteScrollBg 50s linear infinite; */
    /* padding-bottom: 100px; */
}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%);
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: infiniteScrollBg 50s linear infinite;
}
/* .navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width:200px;
    float: left;
    height : 70px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float:left;
    padding-top: 10px;

}
.menu{
    width: 400px;
    float: left;
    height: 70px;

}

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
    color: black;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

} */
.tabil_div{
    width: 85vw;
    /* height: 100vh; */
    margin: auto;
    margin-top: 40px;
   margin-bottom: 200px;
    /* background-color: red; */
    overflow-x: auto;

}






.content-table{
   border-collapse: collapse;
    
    font-size: 1em;
    /* min-width: 400px; */
    border-radius: 5px 5px 0 0;
    box-shadow:0px 0px 20px black;

    /* margin-left : 100px ; */
    margin: auto;
    width: 1300px;
    /* height: 300px; */
    /* width: 20px  !important; */
    /* background-color: red; */
    /* width: 110px ; */
    /* height: 20px ; */
    /* overflow: hidden; */
}
.content-table thead tr{
    background-color: darkcyan;
    /* background-color: #ff7200; */
    color: white;
    text-align: left;
}

.content-table th,
.content-table td{
    padding: 32px 15px;


}

.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
}
.content-table tbody tr:nth-of-type(even){
    background-color: rgba(105, 105, 105, 0.33);

}
.content-table tbody tr:last-of-type{
    border-bottom: 2px solid orange;
}

.content-table thead .active-row{
    /* font-weight:  bold; */
    color: orange;
    
}


.header{
    /* margin-top: -700px; */
    /* margin-left: 650px; */
    width: 85%;
    margin: auto;
    background-color: rgba(105, 105, 105, 0.33);
    text-align: center;
    margin-top: 100px;
}


.nn{
    width:100px;
    /* background: #ff7200; */
    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:white;
    transition: 0.4s ease;

}


.nn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    
}


.add{
    width: 200px;
    height: 40px;
   
    background: black;
    border:none;
    font-size: 18px;
    /* border-radius: 10px; */
    border-radius: 10% 10px ;
    display: block;
     margin: auto;
     margin-right: 10% ;
    cursor: pointer;
    color:#fff;
    /* transition: 0.4s ease; */
    margin-top: 10px;
    /* margin-left: 1200px; */
}

.add a{
    text-decoration: none;
    color: white;
    font-weight: bolder;
    
}
.but{
    background-color: black;
    border: none;
    border-radius: 10% 10px ;
}
.but a{
  display: block;
    text-decoration: none;
    color: white;
    padding: 10px 20px;
   
   
}

</style>
<?php

require_once('connection.php');
$query="select *from users";
$queryy=mysqli_query($con,$query);
$num=mysqli_num_rows($queryy);


?>
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
            </div> -->



                             
<div class="fullnav">
  </div>
  <nav class="navbar navbar-expand-lg   navbaarrr">
    <div class="container-fluid blur_nav ">
      <a class="navbar-brand brand_name" href="index.php">RENTASTIC</a>
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
            <li class="nav-item ">
              <!-- <a class="nav-link active" aria-current="page" href="index.php">Home</a> -->
              <a class="nav-link active" href="adminusers.php">USERS</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="adminvehicle.php">VEHICLE MANAGEMENT</a>
            </li>

            <li class="nav-item">
              <!-- <a class="nav-link" href="login.php">Login/Signup</a> -->
              <a class="nav-link " href="admindash.php">FEEDBACKS</a>
            </li>

            <li class="nav-item">
            <a class="nav-link " href="adminbook.php">BOOKING REQUEST</a>

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






            
          
        </div>
        <div>
            <h1 class="header">USERS</h1>
            <div>
                <div class="tabil_div">
                    <table class="content-table">
                <thead>
                    <tr>
                        <th>NAME</th> 
                        <th>EMAIL</th>
                        <th>LICENSE NUMBER</th>
                        <th>PHONE NUMBER</th> 
                        <th>GENDER</th> 
                        <th>DELETE USERS</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
                
                while($res=mysqli_fetch_array($queryy)){
                
                
                ?>
                <tr  class="active-row">
                    <td><?php echo $res['FNAME']."  ".$res['LNAME'];?></php></td>
                    <td><?php echo $res['EMAIL'];?></php></td>
                    <td><?php echo $res['LIC_NUM'];?></php></td>
                    <td><?php echo $res['PHONE_NUMBER'];?></php></td>
                    <td><?php echo $res['GENDER'];?></php></td>
                    <td><button type="submit" class="but" name="approve"><a href="deleteuser.php?id=<?php echo $res['EMAIL']?>">DELETE USER</a></button></td>
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
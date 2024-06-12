<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
     <!-- font asasom cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   
    <link rel="stylesheet" href="mycss/deshbord_.css">
    <link rel="stylesheet" href="mycss/navbar_.css">

</head>

<body>



    
   <?php
    require_once('connection.php');
    session_start();
    if ($_SESSION['email']) {

        $value = $_SESSION['email'];
        $_SESSION['email'] = $value;

        $sql = "select * from users where EMAIL='$value'";
        $name = mysqli_query($con, $sql);
        $rows = mysqli_fetch_assoc($name);
        $sql2 = "select *from cars where AVAILABLE='Y'";
        $cars = mysqli_query($con, $sql2);

    


    ?>



    
    <!-- <div class="fullnav">
    </div> -->
    <nav class="navbar navbar-expand-lg   navbaarrr">
        <div class="container-fluid blur_nav ">
            <a class="navbar-brand brand_name brand_name_1" href="#">RENTASTIC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="offcanvas bg-transparent offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header nav_manu_togal nav_togal ">
                    <h5 class="offcanvas-title  brand_name brand_name_2" id="offcanvasNavbarLabel">RENTASTIC.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body nav_manu_togal">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 me-5 brand_name_2 ">
                        <li class="nav-item ">
                            <a class="nav-link " aria-current="page" href="index.php"><i class="fa-solid fa-house header_icon"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="dashbord.php"><i class="fa-solid fa-bars-staggered header_icon"></i>Deshbord</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="logout.php"><i class="fa-solid fa-door-closed header_icon"></i>Logout</a>
                        </li>
                     
                    </ul>

                </div>
            </div>
        </div>
    </nav>







    <!-- main deshbord  -->



       

    <div class="about_div">
        
        <button id="close_admin"><i class="fa-solid fa-reply fa-fade"></i></button>
            <div class="about_details">
                <div class="about_details_photo">
                    <div class="img_div">

                    </div>
                </div>
                <div class="about_details_details">
                    <div>
                        <h3>HELLO! </h3>
                        <p><?php echo $rows['FNAME'] . " " . $rows['LNAME'] ?></p>
                        <p><?php echo $rows['EMAIL'] ?></p>
                        <p>+91 <?php echo $rows['PHONE_NUMBER'] ?></p>
                        <p>lic_number : <?php echo $rows['LIC_NUM'] ?></p>
                        <p>GENDER : <?php echo $rows['GENDER'] ?></p>
                        <p>📍 Gwalior ( 472118 )</p>

                        <a class="btnn" href="feedback/Feedbacks.php">FEEDBACK</a>
                        <a class="btnn" href="logout.php">LOGOUT</a>
                        <!-- <a class="btnn" id="stat" href="bookinstatus.php">BOOKING STATUS</a> -->

                    </div>
                </div>
            </div>

      

         
     <div class="DASHBORD_TABLE">
         <h1 class="text-center mb-5">BOOKING STATUS</h1>
         <table>
             <thead>
                        <th>Sno.</th>
                        <th>Car Name</th>
                        <!-- <th>Fuel Type</th> -->
                        <th>Duration</th>
                        <th>Price</th>
                        <th>Place</th>
                        <th>Destination</th>
                        <th>Date</th>
                        <th>Status</th>
            </thead>
            <tbody>
                

            <?php
            
            

            $book_sql = "select * from booking where EMAIL='$value'";
            $book_name = mysqli_query($con, $book_sql);
            // $book_rows = mysqli_fetch_assoc($book_name);
            $num = mysqli_num_rows($book_name);
            $count = 1;
            if( $num > 0 ){
            while ($book_result = mysqli_fetch_array($book_name)) {
    
                echo '<tr>
                <td>'.$count.'</td>
                <td>'.$book_result["CAR_NAME"].'</td>
                <td>'.$book_result["DURATION"].'- days</td>
                <td> &#8377;'.$book_result["PRICE"].' </td>
                <td>'.$book_result["BOOK_PLACE"].'</td>
                <td>'.$book_result["DESTINATION"].'</td>
                <td>'.$book_result["BOOK_DATE"].'</td>
                <td>'.$book_result["BOOK_STATUS"].'</td>
            </tr>';

            $count++;

            } }
            else{
                echo '<tr>
                <td colspan="8" class="text-center">NO BOOKING FOUND</td>
            </tr>';
            }



        

            
            
            ?>



                 <!-- <tr>
                    <td>1</td>
                    <td>MY CAR</td>
                    <td>deisel</td>
                    <td>7</td>
                    <td> &#8377; 4500</td>
                    <td>Gwalior</td>
                    <td>26-05-024</td>
                </tr> -->


            </tbody>
        </table>



     </div>
        



            <?php

                } else {
                   header("Location: login.php");
                }

             ?>

            
</div>


       




    <!-- main  end   -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <script>
      let close_admin = document.getElementById("close_admin");
      let about_details = document.getElementsByClassName("about_details");
      close_admin.addEventListener("click", ()=>{
    
        about_details[0].classList.toggle("left");


      });
    </script>
</body>

</html>
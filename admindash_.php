
<?php

session_start();
require_once('connection.php');
if(isset($_GET['id'])){
    $_SESSION['admin_id'] = $_GET['id'];

    $value = $_SESSION['admin_id'];
    $sql = "select * from admin where ADMIN_ID ='$value'";
    $name = mysqli_query($con, $sql);
    $rows = mysqli_fetch_assoc($name);


    $_SESSION['admin_email'] = $rows['EMAIL'];

    
}
if($_SESSION['admin_id'] or isset($_GET['id'])){
    
    // echo $_GET['id']."aa gya bhai ";

    // if(isset($_GET['id'])){
    //     $_SESSION['admin_id'] = $_GET['id'];
    // }
    
        $value = $_SESSION['admin_id'];
        $_SESSION['admin_id'] = $value;

        $sql = "select * from admin where ADMIN_ID ='$value'";
        $name = mysqli_query($con, $sql);
        $rows = mysqli_fetch_assoc($name);
    
  


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
     <!-- font asasom cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   
    <!-- scroll effext  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">




    <link rel="stylesheet" href="mycss/deshbord_.css">
    <link rel="stylesheet" href="mycss/admin_desh_.css">
    <link rel="stylesheet" href="mycss/navbar_.css">




</head>

<body>

    <!-- <div class="fullnav">
    </div> -->
  <?php

     include 'admin_header.php';
?>




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
                        <h3>HELLO ADMIN !</h3>
                        <p><?php echo $rows['NAME']  ?></p>
                        <p>@<?php echo $rows['ADMIN_ID']  ?></p>
                        <p><?php echo $rows['EMAIL']  ?></p>
                        <p><?php echo $rows['PHONE']  ?></p>
                        <p>📍<?php echo $rows['ADDRESS']  ?> </p>

                        <a class="btnn" href="admin_vehicle_.php">VEHICLE MANAGEMENT </a>
                        <a class="btnn" href="admin_book_.php">BOOKING REQUEST</a>
                        <a class="btnn" href="admin_feedback_.php">FEEDBACK</a>
                        <a class="btnn" href="logout.php">LOGOUT</a>

                    </div>
                </div>
            </div>

      



            <div class="admin_dash">


            <h1>ADMIN_DASHBORD</h1>



            <?php
            
            
            $value = $_SESSION['admin_id'];
            // $_SESSION['admin_id'] = $value;
    
            $cars_sql = "SELECT *from cars";
            $cars_name = mysqli_query($con, $cars_sql);
            $cars_rows = mysqli_num_rows($cars_name);

            // echo  $cars_rows ; 
            

             $book_query="SELECT *from booking ORDER BY BOOK_ID DESC";    
             $book_queryy=mysqli_query($con,$book_query);
             $book_num=mysqli_num_rows($book_queryy);

            // echo $book_num; 


            $feedback_query="select *from feedback";
            $feedback_queryy=mysqli_query($con,$feedback_query);
            $feedback_num=mysqli_num_rows($feedback_queryy);
            
        
            // echo $feedback_num;
            
            ?>






            <div class="admin_dash_cards">

               <div class="admin_dash_card">
                 <div class="admin_dash_card_P">
                    <div class="admin_dash_card_c"> <h1 data-aos="zoom-in-down"><?php echo $cars_rows; ?></h1> </div>
                </div>
                <div class="admin_card_btn_div">
                     <!-- <button>click</button> -->
                     <h3>Vehicle</h3>
                    <a href="admin_vehicle_.php"> <button>click</button></a>
                </div>
              </div>

               <div class="admin_dash_card">
                 <div class="admin_dash_card_P">
                    <div class="admin_dash_card_c"> <h1 data-aos="zoom-in-up"><?php echo $book_num; ?></h1> </div>
                </div>
                <div class="admin_card_btn_div">
                     <!-- <button>click</button> -->
                     <h3>Booking</h3>
                    <a href="admin_book_.php"> <button>click</button></a>
                </div>
              </div>

               <div class="admin_dash_card">
                 <div class="admin_dash_card_P">
                    <div class="admin_dash_card_c"> <h1 data-aos="zoom-in-down"><?php echo  $feedback_num; ?></h1> </div>
                </div>
                <div class="admin_card_btn_div">
                     <!-- <button>click</button> -->
                     <h3>Feedback</h3>
                    <a href="admin_feedback_.php"> <button>click</button></a>
                </div>
              </div>



             



                


            </div>

            </div>





<!--          
     <div class="DASHBORD_TABLE">
        <table>
             <thead>
                        <th>Sno.</th>
                        <th>Car Name</th>
                        <th>Fuel Type</th>
                        <th>Capicity</th>
                        <th>Price</th>
                        <th>Place</th>
                        <th>Date</th>
            </thead>
            <tbody>
                 <tr>
                    <td>1</td>
                    <td>MY CAR</td>
                    <td>deisel</td>
                    <td>7</td>
                    <td>4500</td>
                    <td>Gwalior</td>
                    <td>26-05-024</td>
                </tr>
                 <tr>
                    <td>2</td>
                    <td>MY CAR</td>
                    <td>deisel</td>
                    <td>7</td>
                    <td>4500</td>
                    <td>Gwalior</td>
                    <td>26-05-024</td>
                </tr>
                 <tr>
                    <td>3</td>
                    <td>MY CAR</td>
                    <td>deisel</td>
                    <td>7</td>
                    <td>4500</td>
                    <td>Gwalior</td>
                    <td>26-05-024</td>
                </tr>
                 <tr>
                    <td>4</td>
                    <td>MY CAR</td>
                    <td>deisel</td>
                    <td>7</td>
                    <td> &#8377; 4500</td>
                    <td>Gwalior</td>
                    <td>26-05-024</td>
                </tr>
            </tbody>
        </table>



     </div>
        

 -->

        

            
</div>


       




    <!-- main  end   -->



    <!-- scroll effect -->


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
     AOS.init();
   </script>

   <!-- scroll effect -->




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


<?php


}else{
 
    header("location:adminlogin.php");

}


?>
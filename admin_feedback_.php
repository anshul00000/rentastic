
<?php

session_start();
   if( $_SESSION['admin_id']){
    require_once('connection.php');

        $value = $_SESSION['admin_id'];
        // $_SESSION['admin_id'] = $value;

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
                        <a class="btnn  admin_active" href="admin_feedback_.php">FEEDBACK</a>
                        <a class="btnn" href="logout.php">LOGOUT</a>

                    </div>
                </div>
            </div>

      

         <?php

          $query="select *from feedback";
          $queryy=mysqli_query($con,$query);
          $num=mysqli_num_rows($queryy);


        ?>
 
                
            
            
            
            <div class="DASHBORD_TABLE">
         <h1 class="text-center mb-5">Admin Feedback</h1>
        <table>
             <thead>
                        <th>Sno.</th>
                        <th>EMAIL</th>
                        <th>Comment</th>
                        
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


<?php


}else{
 
    header("location:adminlogin.php");

}


?>
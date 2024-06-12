
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
  

     <style>
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
    margin-bottom: 10px;
    /* margin-left: 1200px; */
}

a{
    text-decoration: none;
    /* color: white; */
    font-weight: bolder;
    
}
     </style>
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

                        <a class="btnn  admin_active" href="admin_vehicle_.php">VEHICLE MANAGEMENT </a>
                        <a class="btnn" href="admin_book_.php">BOOKING REQUEST</a>
                        <a class="btnn" href="admin_feedback_.php">FEEDBACK</a>
                        <a class="btnn" href="logout.php">LOGOUT</a>

                    </div>
                </div>
            </div>

            <?php

        //   require_once('connection.php');

           $admin_email_id =  $rows['EMAIL'];
           $query="SELECT *from cars where ADMIN ='$admin_email_id'";   
           
         $queryy=mysqli_query($con,$query);
          $num=mysqli_num_rows($queryy);


              ?>
                
                <div class="DASHBORD_TABLE">
                    <h1 class="text-center mb-5">ADMIN_VEHICLE</h1>
                    <a href="addcar.php"  ><button class="add">+ ADD CAR</button></a>
                    <table>
             <thead>
                        <th>Sno.</th>
                        <th>Car Name</th>
                        <th>Fuel Type</th>
                        <th>Capicity</th>
                        <th>Price</th>
                        <th>AVAILABLE</th>
                        <th>DELETE</th>
            </thead>
            <tbody>
            <?php
                
               if($num >0 ) {
                while($res=mysqli_fetch_array($queryy)){
                
                
                ?>
                <tr  class="active-row">
                    
                    <td><?php echo $res['CAR_ID'];?></php></td>
                    <td><?php echo $res['CAR_NAME'];?></php></td>
                    <td><?php echo $res['FUEL_TYPE'];?></php></td>
                    <td><?php echo $res['CAPACITY'];?></php></td>
                    <td><?php echo $res['PRICE'];?></php></td>
                    <td><?php  
                    if($res['AVAILABLE']=='Y')
                    {
                        echo 'YES';
                    }
                    else{
                        echo 'NO';
                    }
                    
                    
                    
                    
                    ?></php></td>
                    <td><a href="deletecar.php?id=<?php echo $res['CAR_ID']?>"><button style="color:red" type="submit" class="btn" name="approve">DELETE CAR</button></a></td>
    
                </tr>
               <?php } }else{

              echo' <tr>
                <td style="color:red">NA</td>
                <td style="color:red">NA</td>
                <td style="color:red">NA</td>
                <td style="color:red">NA</td>
                <td style="color:red">NA</td>
                <td style="color:red">NA</td>
                <td style="color:red">NA</td>
               </tr>';

               } ?>
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
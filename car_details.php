
<?php

if($_GET["id"]){

 
    $id = $_GET["id"] ;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

       <!-- font asasom cdn  -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  


    <title>RENTASTIC </title>

  <link rel="stylesheet" href="mycss/navbar_.css">
  <link rel="stylesheet" href="mycss/footer_.css">
 
    
     
  <style>

@font-face {
  font-family: 'MyCustomFont';
  src: url('file.woff2') format('woff2');
  font-weight: normal;
  font-style: normal;
}


  .item_main_div{
    padding-top: 150px;
    width: 100%;
    height: auto;
    background-color: #dde1e7;
    padding-bottom: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 100px;
    align-items: center;
    justify-content: center;
  }

    .image_box{
        position: relative;
      width: 400px;
      height: 250px;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 10px 10%;

    }
    .image_box img{
        height: 100%;
    }

  .text_box_box{
    /* background-color: red; */
    margin: 25px;
    display: flex;
    gap: 20px;
    font-size: 20px;
  }

  .text_box_box ion-icon{
    color: rgb(0, 132, 255);
    font-size: 30px;
    padding: 0px 20px 0px 0px;
  }

  .discription{
    /* background-color: rgb(161, 176, 176); */
    background-color: #b1bac4;

    padding-bottom: 20px;
    
    display: flex;
    gap: 100px;
    flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      /* background-color: brown; */

  }

  .dis_text{
    width: 700px;
    /* background-color: blueviolet; */
  }

  .dis_p{
    /* width: 40%; */
    padding-top: 10px;
    border-top: 1px solid black;
    border-bottom: 1px solid black;
  }

  

  .brand h1{
    font-family: 'MyCustomFont' , 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;
    /* background-color: red; */
     
  }

  .btn{
    position: relative;
    /* background: var(--background, var(--carolina-blue)); */
    background: linear-gradient(270deg, #1caba2 20%, #1c7fab);
    color:white;
   
    padding: 10px 0px;
    width: 200%;
    /* width: 200px; */
    
    display: flex;
   justify-content: space-around;
    /* display: grid;
    place-items: center; */
    border-radius: 10px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: 100;
    overflow: hidden;

  }

  
  .btn ion-icon {
    font-size: 22px;
    --ionicon-stroke-width: 40px;
  }
  
  .btn::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, hsla(0, 0%, 100%, 0.4), transparent);
    opacity: 0;
    pointer-events: none;
    transition: transparent;
  }
  
  .btn:is(:hover, :focus) { box-shadow: black; }
  
  .btn:is(:hover, :focus)::before { opacity: 1; }
  

  </style>

  </head>
  <body>



  
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
                            <a class="nav-link active " aria-current="page" href="index.php"><i class="fa-solid fa-house header_icon"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashbord.php"><i class="fa-solid fa-bars-staggered header_icon"></i>Deshbord</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="logout.php"><i class="fa-solid fa-door-closed header_icon"></i>Logout</a>
                        </li>
                     
                    </ul>

                </div>
            </div>
        </div>
    </nav>

<?php 
    require_once('connection.php');
  
    $carid=$_GET['id'];
    
    $sql="select *from cars where CAR_ID='$carid'";
    $cname = mysqli_query($con,$sql);
    $email = mysqli_fetch_assoc($cname);


?>



    <div class="item_main_div">

        <div class="image_box">
            <img src="images/<?php  echo "".$email['CAR_IMG']  ?>" alt="">
        </div>



        <div class="text_box">

            <h1><?php echo "".$email['CAR_NAME'] ?></h1>
            <div class="text_box_box">
                <div>
                     <ion-icon name="people-outline"></ion-icon>
                     <span class="card-item-text"><?php echo "".$email['CAPACITY'] ?> People</span>   
                </div>
                <div>
                    <ion-icon name="flash-outline"></ion-icon>
                    <span class="card-item-text"><?php echo "".$email['FUEL_TYPE'] ?> fule type</span>
                </div>
            </div>


            <div class="text_box_box">
                <div>
                     
                  <ion-icon name="speedometer-outline"></ion-icon>
                  <span class="card-item-text">₹<?php echo "".$email['PRICE'] ?>/- Per/Day</span>
                  <!-- <span class="card-item-text">7.2km / 1-litre</span> -->   
                </div>
                <div>
                    <ion-icon name="hardware-chip-outline"></ion-icon>

                    <!-- <span class="card-item-text">Automatic</span> -->
                    <span class="card-item-text"><?php echo "".$email['CAR_NAME'] ?></span>
                </div>
            </div>

            <div class="text_box_box">
                <div class="card-price-wrapper">

                    <p class="card-price">
                      <strong>₹<?php echo "".$email['PRICE'] ?></strong> / day
                    </p>
    
                    <!-- <button class="btn fav-btn" aria-label="Add to favourite list">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button> -->
    
                   <!--  <button class="btn">Rent now</button> -->
                    <a class="btn" type="submit" name="booknow" class="utton" href="booking.php?id=<?php echo $id ?>"><i class="fa-solid fa-check-double fa-bounce"></i>Rent now</a>
    
                  </div>
            </div>

        

        </div>

    </div>


   <div class="discription pt-5 ps-5">
   
     <div class="dis_text">
    <h3 >Discription</h3>

    <div class="dis_p">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aperiam corporis, minima animi quidem consequatur inventore veritatis ut repudiandae magni ducimus porro quia deserunt voluptate non, modi veniam impedit doloribus! Impedit qui dignissimos nobis totam doloribus quas in unde aspernatur! Sit quod placeat doloremque hic?</p>
   

    </div>
     </div>

     <div class="brand"><h1>RENTASTIC</h1></div>


   </div>



   
  <?php

include 'footer.php';
// require_once('footer.php');


?>



  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
  </body>
</html>

<?php
}
else{
    header("Location: index.php");
}
?>
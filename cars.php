
<?php

if($_GET["brand"]){

 
    $brand_name = $_GET["brand"] ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rentastic_cars</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
  <link rel="stylesheet" href="mycss/navbar_.css">
  <link rel="stylesheet" href="mycss/car_cards_.css">
  <link rel="stylesheet" href="mycss/footer_.css">



    
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
              <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house header_icon"></i>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="dashbord.php"><i class="fa-solid fa-bars-staggered header_icon"></i>Dashbord</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="login.php"><i class="fa-solid fa-door-open header_icon"></i>Login</a> <!-- Signup -->
            </li>

          </ul>

        </div>
      </div>
    </div>
  </nav>


  <?php
  require_once('connection.php');

  $sql2 = "select *from cars where AVAILABLE='Y' AND BRAND ='$brand_name'";
  $cars = mysqli_query($con, $sql2);


  


  ?>

  <!-- <h1 class="container mt-4">Featured cars</h1> -->


  <section class="section featured-car" id="featured-car">
    <div class="container">

      <div class="title-wrapper">
        <h2 class="h2 text-capitalize section-title">Featured cars > <?php echo  $_GET["brand"]; ?> <i class="fa-solid fa-caret-down fa-bounce"></i></h2>

        <a href="#" class="featured-car-link">
          <!-- <span>View more</span>  <ion-icon name="arrow-forward-outline"></ion-icon> -->
        </a>

      </div>
  
      <ul class="featured-car-list">
        <?php

           if ($cars->num_rows > 0) {
    
           while ($result = mysqli_fetch_array($cars)) {


        ?>
          <li>
            <div class="featured-car-card">

              <figure class="card-banner">
                <img src="images/<?php echo $result['CAR_IMG'] ?>" alt="" loading="lazy" width="440" height="300" class="w-100">
              </figure>
              <?php $res = $result['CAR_ID']; ?>

              <div class="card-content">

                <div class="card-title-wrapper">
                  <h3 class="h3 card-title">
                    <p><?php echo $result['CAR_NAME'] ?></p>
                  </h3>

                  <!-- <data class="year" value="2019"><?php echo $result['BRAND'] ?></data> -->
                </div>

                <ul class="card-list">

                  <li class="card-list-item">
                    <ion-icon name="people-outline"></ion-icon>

                    <span class="card-item-text"><?php echo $result['CAPACITY'] ?> People</span>
                  </li>

                  <li class="card-list-item">
                    <ion-icon name="flash-outline"></ion-icon>

                    <span class="card-item-text"><?php echo $result['FUEL_TYPE'] ?></span>
                  </li>

                  <li class="card-list-item">
                    <ion-icon name="speedometer-outline"></ion-icon>

                    <span class="card-item-text">₹/- Per/Day</span>
                    <!-- <span class="card-item-text">7.2km / 1-litre</span> -->
                  </li>

                  <li class="card-list-item">
                    <ion-icon name="hardware-chip-outline"></ion-icon>

                    <!-- <span class="card-item-text">Automatic</span> -->
                    <span class="card-item-text"><?php echo $result['BRAND'] ?></span>
                  </li>

                </ul>

                <div class="card-price-wrapper">

                  <p class="card-price">
                    <strong>₹<?php echo $result['PRICE'] ?>/-</strong> / day
                  </p>

                  <!-- <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button> -->

                  <!-- <button class="btn">Rent now</button> -->
                  <a class="btn" type="submit" name="booknow" class="utton" href="car_details.php?id=<?php echo $res; ?>">Rent now</a>

                </div>
   
              </div>

            </div>
          </li>



        <?php
        }

        }else{
            echo "<h1>Sorry ".$brand_name." is not Available <i class='fa-solid fa-question fa-bounce' style='color: #B197FC;'></i>
            <i class='fa-solid fa-question fa-bounce' style='color: #63E6BE;'></i></h1>";
             }

        ?>



      </ul>

    </div>
  </section>





  <!-- 
        - #GET START
      -->

  <section class="section get-start">
    <div class="container">

      <h2 class="h2 section-title">Get started with 4 simple steps</h2>

      <ul class="get-start-list">

        <li>
          <div class="get-start-card">

            <div class="card-icon icon-1">
              <ion-icon name="person-add-outline"></ion-icon>
            </div>

            <h3 class="card-title">Create a profile</h3>

            <p class="card-text">
              <!-- If you are going to use a passage of Lorem Ipsum, you need to be sure. -->
            </p>

            <a href="#" class="card-link">Get started</a>

          </div>
        </li>

        <li>
          <div class="get-start-card">

            <div class="card-icon icon-2">
              <ion-icon name="car-outline"></ion-icon>
            </div>

            <h3 class="card-title">Tell us what car you want</h3>

            <p class="card-text">
              <!-- Various versions have evolved over the years, sometimes by accident, sometimes on purpose -->
            </p>

          </div>
        </li>

        <li>
          <div class="get-start-card">

            <div class="card-icon icon-3">
              <ion-icon name="person-outline"></ion-icon>
            </div>

            <h3 class="card-title">Match with seller</h3>

            <p class="card-text">
              <!-- It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic -->
            </p>

          </div>
        </li>

        <li>
          <div class="get-start-card">

            <div class="card-icon icon-4">
              <ion-icon name="card-outline"></ion-icon>
            </div>

            <h3 class="card-title">Make a deal</h3>

            <p class="card-text">
              <!-- There are many variations of passages of Lorem available, but the majority have suffered alteration -->
            </p>

          </div>
        </li>

      </ul>

    </div>
  </section>



  <!-- SECOND BOX END -->

  <?php

  include 'footer.php';
  // require_once('footer.php');


  ?>




  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

<?php
}
else{
    header("Location: index.php");
}
?>
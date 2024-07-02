<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CAR RENTAL</title>
  <script type="text/javascript">
    window.history.forward();

    function noBack() {
      window.history.forward();
    }
  </script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- font awasom cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- scroll effext  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">




  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">


  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap" rel="stylesheet">




  <link rel="stylesheet" href="mycss/navbar_.css">
  <link rel="stylesheet" href="mycss/index_.css">
  <link rel="stylesheet" href="mycss/deshbord_.css">
  <link rel="stylesheet" href="mycss/footer_.css">
  <link rel="stylesheet" href="mycss/car_cards_.css">

  <!-- <link  rel="stylesheet" href="mycss/style.css"> -->
  <!-- <link  rel="stylesheet" href="css/style.css"> -->







  <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>



</head>

<body>

  <!-- <div class="plan"><img src="public/plane.png" alt=""></div> -->
  <div class="holo"></div>
  <div class="holo2"></div>


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
              <a class="nav-link " href="dashbord.php"><i class="fa-solid fa-bars-staggered header_icon"></i>Dashbord</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="login.php"><i class="fa-solid fa-door-open header_icon"></i>Login</a> <!-- Signup -->
            </li>

          </ul>

        </div>
      </div>
    </div>
  </nav>


  <!-- first box  start -->



  <div class="main_hero">
    <div class="main_hero2_1">
      <!-- <img class="hero_img" src="public/mycar.svg" alt=""> -->
      <h1 class="y_r " data-aos="zoom-out-right"><span class="font">Your</span> <span style=color:orange; class="font">Ride</span> </h1>
      <h1 class="y_w " data-aos="zoom-out-left"><span class="font">Your</span> <span class="way font">Way.</span> </h1>
      <a href="dashbord.php">
        <button class="btn" type="submit">View Cars -> </button>
      </a>
    </div>

    <div class="main_hero_form">
      <div>
        <!-- <img src="public/mycar.svg" alt="mycar" width='200px' /> -->
        <h1>WITH <span class="font" style=color:darkorange>RENTASTIC</span></h1>
        <p>Get car to your mood </p>
      </div>

      <div class="form_file">
        <!-- <form>
          <input type="text" placeholder="location" name="location" onChange={myfun} />
          <p>start-end time</p>

          <input type="datetime-local" name="starttime" id="startdatetime2" placeholder="enter " />

          <input type="datetime-local" name="endtime" id="startdatetime2" onChange={myfun} placeholder="date " />

        
          <button class="btn" type="submit">
            Search
          </button>
        </form> -->

        <!-- <img class="index_img" src="public/car2.svg" alt="...">
        <img class="index_img" src="public/car1.svg" alt="..."> -->

      </div>
    </div>
  </div>




  <!-- first box  end -->




  <!-- category start -->

  <div>
    <!-- <h1 class="ms-5 mb-5 ">categories</h1> -->
    <h1 class="ms-5 mb-5 ">Car Brands <i class="fa-solid fa-car fa-bounce"></i></h1>
    <div class="categorys">

     <a href="cars.php?brand=maruti suzuki"><div class="category_box c_box0"><h1 class="font">maruti suzuki</h1></div></a> 
     <a href="cars.php?brand=nissan"><div class="category_box c_box1"><h1 class="font">NISSAN</h1></div></a> 
     <a href="cars.php?brand=honda"><div class="category_box c_box2"><h1 class="font">HONDA</h1></div></a> 
     <a href="cars.php?brand=hyundai"><div class="category_box c_box3"><h1 class="font">HYUNDAI</h1></div></a> 
     <a href="cars.php?brand=kia"><div class="category_box c_box4"><h1 class="font">KIA</h1></div></a> 
     <a href="cars.php?brand=mahindra"><div class="category_box c_box5"><h1 class="font">MAHINDRA</h1></div></a> 
     <a href="cars.php?brand=tata"><div class="category_box c_box6"><h1 class="font">TATA</h1></div></a> 
     <a href="cars.php?brand=toyota"><div class="category_box c_box7"><h1 class="font">TOYOTA</h1></div></a> 
   
    </div>

  </div>

  <!-- category end -->








  <!-- SECOND BOX START -->
  <?php
  require_once('connection.php');

  $sql2 = "select *from cars where AVAILABLE='Y'";
  $cars = mysqli_query($con, $sql2);




  ?>

  <!-- <h1 class="container mt-4">Featured cars</h1> -->


  <section class="section featured-car" id="featured-car">
    <div class="container">

      <div class="title-wrapper">
        <h2 class="h2 section-title">Featured cars <i class="fa-solid fa-caret-down fa-bounce"></i></h2>

        <a href="#" class="featured-car-link">
          <!-- <span>View more</span>  <ion-icon name="arrow-forward-outline"></ion-icon> -->
        </a>

      </div>

      <ul class="featured-car-list">
        <?php
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
                  <!-- <a class="btn" type="submit" name="booknow" class="utton" href="booking.php?id=<?php echo $res; ?>">Rent now</a> -->
                  <a class="btn" type="submit" name="booknow" class="utton" href="car_details.php?id=<?php echo $res; ?>">Rent now</a>

                </div>

              </div>

            </div>
          </li>



        <?php
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



  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script> -->

  <!-- scroll effect -->


  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- scroll effect -->

</body>

</html>
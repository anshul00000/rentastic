
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

    <link rel="stylesheet" href="mycss/navbar_.css">
   <link rel="stylesheet" href="mycss/index_.css">

    <!-- <link  rel="stylesheet" href="mycss/style.css"> -->
    <!-- <link  rel="stylesheet" href="css/style.css"> -->
   






    <!-- <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script> -->
  


</head>
<body>




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
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashbord.php">Deshbord</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="login.php">Login/signup</a>
                        </li>
                     
                    </ul>

                </div>
            </div>
        </div>
    </nav>


    <!-- first box  start -->


      
  <div class="main_hero">
    <div class="main_hero2_1">
      <h1 class="y_r">Your <span style=color:orange>Ride</span> </h1>
      <h1 class="y_w">Your <span style="color:black;">Way.</span> </h1>
      <a href="dashbord.php">
      <button class="btn" type="submit">View Cars -> </button>
      </a>
     
    </div>

    <div class="main_hero_form">
      <div>
        <img src="public/mycar.svg" alt="mycar" width='200px' />
        <p>Get car with your mood </p>
      </div>

      <div class="form_file">
        <form>
          <input type="text" placeholder="location" name="location" onChange={myfun} />
          <p>start-end time</p>

          <input type="datetime-local" name="starttime" id="startdatetime2" placeholder="enter " />

          <input type="datetime-local" name="endtime" id="startdatetime2" onChange={myfun} placeholder="date " />

        
          <button class="btn" type="submit">
            Search
          </button>
        </form>
      </div>
    </div>
  </div>




    <!-- first box  start -->
  





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script> -->
</body>
</html>

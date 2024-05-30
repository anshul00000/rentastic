<?php 

echo '
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
                       
                        <li class="nav-item">
                            <a class="nav-link active " href="admindash_.php"><i class="fa-solid fa-bars-staggered header_icon"></i>Dashbord</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " href="logout.php"><i class="fa-solid fa-door-closed header_icon"></i>Logout</a>
                        </li>
                     
                    </ul>

                </div>
            </div>
        </div>
    </nav>
';


?>
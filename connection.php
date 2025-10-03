<?php 
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "company";


    //  $servername = "sql106.infinityfree.com";
    //  $username = "if0_40074899";
    //  $password = "O3VKLSLXbmTR1";
    //  $databasename = "if0_40074899_company";



    $con = mysqli_connect($servername , $username , $password , $databasename );
    if(!$con)
    {
        echo 'please check your Database connection';
    }


?>
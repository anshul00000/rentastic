<?php 
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "company";


    $con = mysqli_connect($servername , $username , $password , $databasename );
    if(!$con)
    {
        echo 'please check your Database connection';
    }



?>
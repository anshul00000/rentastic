<?php 
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "company";


    //  $servername = "sql104.infinityfree.com";
    //  $username = "if0_36372269";
    //  $password = "j6ZA4KYMH4TT0x";
    //  $databasename = "if0_36372269_company";



    $con = mysqli_connect($servername , $username , $password , $databasename );
    if(!$con)
    {
        echo 'please check your Database connection';
    }


?>
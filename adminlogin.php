<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <!-- <link rel="stylesheet" href="css/adlog.css">     -->

    <!-- <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script> -->



  <style>


:root {
    --bgcolor: #dde1e7;
    --textcolor: rgb(0, 0, 0);
    --boxshadow: rgb(0, 0, 0);
    /* --buttoncolor : rgb(238, 0, 255) ; */
  }
  



body{
    /* width: 100%; */
    background-color: var(--bgcolor);
   
}

::-webkit-scrollbar {
  
  width: 5px;
}

::-webkit-scrollbar-track{
  background:var(--bgcolor);
}
::-webkit-scrollbar-thumb {

  background-color: rgb(255, 255, 255);
  border-radius: 50px;

}


.form{
    width: 60%;
    margin: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    padding: 20px 20px ;
    box-shadow: 0px 0px 5px var(--textcolor);
    /* border: 1px solid white; */
    /* background-color: lightslategrey; */
    
    /* height: 400px; */
    /* background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%); */
    /* position: absolute; */
    /* top:200px; */
    /* left:800px; */
    /* border-radius: 10px; */
    /* padding: 20px; */
    

}

.form h2{
    width:60%;
    font-family: sans-serif;
    text-align: center;
    color: var(--textcolor);
    font-size: 22px;
    /* background-color: white; */
    border-top: 1px solid var(--textcolor) ;
    border-bottom: 1px solid var(--textcolor) ;
    border-radius: 5px;
    margin: 2px;
    padding: 8px;

}

 .h{
    width: 60%;
    height: 75px;
    background: transparent !important;
    border-bottom: 1px solid var(--textcolor);
    border-top: none;
    border-right: none;
    border-left:none;
    color:var(--textcolor);
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}
.h:focus{
    outline: none;
}

::placeholder{
    color:var(--textcolor);
    font-family: Arial;
    
}

.btnn{
    width: 300px;
    height: 40px;   
    
    background: aqua;
    border:none;
    margin-top: 70px;
    font-size: 18px;
    /* border-radius: 10px; */
    cursor: pointer;
    color:black;
  
}

.btnn:hover{
    background-color:black;
    border: 1px solid white ;
    color:white ;
}

.btnn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
    color: var(--textcolor);
}

.form .link a{
    text-decoration: none;
    color:red !important;
}



.helloadmin{
    margin: auto;
    width: 63%;
    /* height: 100%; */
    margin-top: 60px;
    text-align: center;
}
.helloadmin h1{
    padding: 5px 0px ;

    /* margin-top: 650px; */
    /* margin-left: 425px; */
    /* margin-bottom: 200px !important; */
    /* padding-bottom: 20px; */
    /* display: inline; */
    /* font-family: 'Times New Roman'; */
    background-color: black;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    /* font-size: 3vw; */
    color: white;
}

.back{
    position: absolute;
    left: 5px ;
    top: 10px;
    width: 150px;
    height: 40px;   
  background: aqua;
    border:none;
    /* margin-top: 0px; */
    /* margin-left:1300px; */
    /* font-size: 18px; */
    /* border-radius: 10px; */
    cursor: pointer;
    color:var(--textcolor);
}

.back2{
    position: absolute;
    right: 5px ;
    top: 10px;
    width: 150px;
    height: 40px;   
  background: aqua;
    border:none;
    /* margin-top: 0px; */
    /* margin-left:1300px; */
    /* font-size: 18px; */
    /* border-radius: 10px; */
    cursor: pointer;
    color:var(--textcolor);
    
}

 a{
    text-decoration: none;
    color: var(--textcolor);
    font-weight: bold;
}


</style>


</head>
<body>


<?php
    require_once('connection.php');

    if(isset($_POST['adlog'])){
        $id=$_POST['adid'];
        $pass=$_POST['adpass'];
        
        
        if(empty($id)|| empty($pass))
        {
            echo '<script>alert("please fill the blanks")</script>';
        }

        else{
            $query="select *from admin where ADMIN_ID='$id'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['ADMIN_PASSWORD'];
                if($pass  == $db_password)
                {
                    
                    // session_start();
                    // $_SESSION['email'] = $email;
                    // echo '<script>alert("Welcome ADMINISTRATOR!");</script>';
                    // header("location:admindash_.php?id=$id");
                    echo '<script> window.location.href = "admindash_.php?id='.$id.'";</script>';
                    
                }
                else{
                    echo '<script>alert("Enter a proper password")</script>';
                }



                



            }
            else{
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }




    







?>




<a href="index.php"><button class="back">Go To Home</button></a>
<a href="admin_register.php"><button class="back2">register as admin</button></a>
<br><br><br><hr>
    <div class="helloadmin">
    <h1>HELLO ADMIN!</h1>
</div>

    
    <form class="form" method="POST">
        <h2>Admin Login</h2>
        <input class="h" type="text" name="adid" placeholder="Enter admin user id">
        <input class="h" type="password" name="adpass" placeholder="Enter admin password">
        <input type="submit" class="btnn" value="LOGIN" name="adlog" >
    </form>
    
    

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
</head>
<body>
<style>

:root {
    --bgcolor: #dde1e7;
    --textcolor: rgb(0, 0, 0);
    --boxshadow: rgb(0, 0, 0);
    /* --buttoncolor : rgb(238, 0, 255) ; */
  }
  

*{
    margin: 0;
    padding: 0;

}
body{
    background-color: var(--bgcolor);
      
}
.main{
    width: 400px;
    margin: 100px auto 0px auto;
    margin-top: 30px;
}
.btnn{
    width: 240px;
    height: 40px;
    background: black;
    border:none;
    margin-top: 30px;
    margin-left: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:var(--bgcolor);
    transition: 0.4s ease;
}

.btnn:hover{
    background: #fff;
    color:#ff7200;
}

.btnn a{
    text-decoration: none;
    color: var(--textcolor);
    font-weight: bold;
}

h2{
    text-align: center;
    padding: 20px;
    font-family: sans-serif;

}
.register{
    background-color: var(--bgcolor);
    width: 100%;
    font-size: 18px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.3);
    /* box-shadow: 2px 2px 15px rgba(0,0,0,0.3); */
    box-shadow: -5px -5px 9px #ffffff61 , 5px 5px 7px #5e687993;

    color: var(--textcolor);
    margin: auto;

}

form#register{
    margin: 40px;
    margin-top: 10px;

}

label{
    font-family: sans-serif;
    font-size: 18px;
    font-style: italic;
}

input#name{
    width:300px;
    border:1px solid #ddd;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    background-color: var(--bgcolor);
    /* box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3); */
    /* box-shadow: -5px -5px 9px #ffffff61 , 5px 5px 7px #5e687993; */
    box-shadow:inset -5px -5px 9px #ffffff61 ,inset 5px 5px 7px #5e687993;
    
}


#back{
    width: 100px;
    height: 40px;
    background:  var(--textcolor);
    border:none;
    margin-top: 10px;
    margin-left: 20px;
    font-size: 18px;
   

}


#back a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    color: var(--bgcolor);
}

#fam{
    color: var(--textcolor);
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top:-10px;
    text-align: center;
    letter-spacing: 2px;
    display: inline;
    margin-left: 250px;
}

.reg{
    width: 100%;
}



</style>






<button id="back"><a href="admin_vehicle_.php">HOME</a></button> 
    
 <div class="main">
        
        <div class="register">
        <h2>Enter Details Of New Car</h2>
        <form id="register"  action="upload.php" method="POST" enctype="multipart/form-data">    
            <label>Car Name : </label>
            <br>
            <input type ="text" name="carname"
            id="name" placeholder="Enter Car Name" required>
            <br><br>

            <label>Fuel Type : </label>
            <br>
            <input type ="text" name="ftype"
            id="name" placeholder="Enter Fuel Type" required>
            <br><br>

            <label>Capacity : </label>
            <br>
            <input type="number" name="capacity" min="1"
            id="name" placeholder="Enter Capacity Of Car" required>
            <br><br>
            
            <label>Price : </label>
            <br>
            <input type="number" name="price" min="1"
            id="name" placeholder="Enter Price Of Car for One Day(in rupees)" required>
            <br><br>

            <label>Car Image : </label>
            <br>
            <input type="file" name="image" required>
           <br><br>

            <input type="submit" class="btnn"  value="ADD CAR" name="addcar">
            
        
        
        </input>
            
        </form>
        </div> 
    </div.main>
</body>
</html>
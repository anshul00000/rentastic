<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awasom cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="mycss/booking_.css">

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
div.main{
    /* width: 80%; */
    /* margin: 100px auto 0px auto;
    margin-top: 30px; */
    margin: 50px auto 0px auto;

    /* background-color: red; */
}
/* .btnn{
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
} */

.btnn:hover{
    background: #fff;
    color:black;
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
    /* background-color: blue; */
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
    padding: 10px 5px;
    margin: 10px 5px;
    border: 1px solid black;
    /* box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3); */
    /* box-shadow: -5px -5px 9px #ffffff61 , 5px 5px 7px #5e687993; */
    /* box-shadow: -5px -5px 9px #ffffff61 , 5px 5px 7px #5e687993; */
    
}

.img_btn{
    margin-top: 20px;
}


#back{
    width: 100px;
    height: 40px;
    /* background:  var(--bgcolor); */
    background-color: cadetblue;
    
    border:none;
    margin-top: 10px;
    margin-left: 20px;
    font-size: 18px;
   

}


#back a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    /* color: var(--bgcolor); */
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






<button id="back"><a href="admin_vehicle_.php"><i class="fa-solid fa-arrow-left fa-fade"></i>  Home</a></button> 
    
 <div class="main">
        
        <div class="register">
        <h2>Enter Details Of New Car</h2>
        

        <!-- <form id="register"  action="upload.php" method="POST" enctype="multipart/form-data">    
            <label>Car Name : </label>
            <br>
            <input type ="text" name="carname"
            id="name" placeholder="Enter Car Name" required>
            <br><br>

            <label>Brand Name : </label>
            <br>
            <input type ="text" name="brand"
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
            <input type="file" name="image" class="img_btn" required>
           <br><br>

            <input type="submit" class="btnn" value="ADD CAR" name="addcar">
            
        
        
        </input>
            
        </form> -->




    
        <form class="row g-3 ps-5 pe-5" id="register"  action="upload.php" method="POST" enctype="multipart/form-data"  >
  <div class="col-md-6">
    <label  for="" class="form-label">Car Name : </label>
    <input class="form-control name" type ="text" name="carname" placeholder="Car Name"  required >
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Brand Name :</label>
    <input class="form-control name" type ="text" name="brand"  placeholder="Car Brand" required>
  </div>

  <div class="col-md-6">
    <label  for="" class="form-label">Fuel Type :</label>
    <input  class="form-control name" type ="text" name="ftype" placeholder="Enter Fuel Type" required  >
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Capacity :</label>
    <input class="form-control name" type="number" name="capacity" min="1"  placeholder="Enter Capacity Of Car" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Price : </label>
    <input class="form-control name" type="number" name="price" min="1" placeholder="Enter Price Of Car for One Day(in rupees)" required>
  </div>

  <div class="col-md-6">
    <label for="inputGroupFile04" class="form-label">Car Image : </label>
    <input type="file" name="image" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
</div>



  <div class="col-12">
    <button type="submit" value="ADD CAR" name="addcar" class=" btn-primary btnn"><i class="fa-solid fa-plus fa-bounce" ></i> add car</button>
    <!-- <input type="submit" class="btnn" value="ADD CAR" name="addcar"> -->

  </div>
</form>
















        </div> 
    </div.main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
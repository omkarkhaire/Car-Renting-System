<?php
session_start();
$email=$_SESSION['mail'];
// echo $email;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorent</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

        <style>
 #omkar{
     border-radius: 50%;
     border: 2px solid rgb(5, 5, 207);
  
   }
   #navbtn {
      background-color: red;
     border-radius: 50%
     

    }
    #navbtn img{
     position: relative;
     left: -14px;
     bottom: 6px;
     border-radius: 50%;
      background-size: cover;

    }
        </style>


</head>

<body class="bg-light">

    <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;"">
    <div class=" container-fluid">
    <a class="navbar-brand " href="#">
      <img
        src="https://thumbs.dreamstime.com/b/cartoon-man-black-suv-car-happy-cartoon-man-black-suv-car-happy-eps-vector-illustration-174797497.jpg"
        alt="" width="50" height="54" class="d-inline-block align-top" style="border-radius: 50%;">
      <span class="display-6 text-primary" style="font-family: 'Times New Roman', Times, serif;">AUTORENT</span>
    </a>
    <button class="navbar-toggler text-center " style="color: red;height: 40px; width: 40px;border: 2px solid red;" id="navbtn"
      type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQWATuCnPUgN4rA7nWyfxLZVjIqb0KnKNOuWg&usqp=CAU"
        alt="" width="40px" height="40px">

    </button>
    <div class="collapse navbar-collapse  " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
        <li class="nav-item text-dark">
          <a class="nav-link active " aria-current="page" href="mainpage.php">Home</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-expanded="false">
            OPTIONS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <hr class="dropdown-divider ">
            </li>
            <li><a class="dropdown-item " href="adminlogin.php">Administrator</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled text-dark" href="#" tabindex="-1" aria-disabled="false">ABOUT</a>
        </li>
      </ul>

    </div>
    </div>
  </nav>
   <!-- navbarend -->

 
   <p class="text-center text-danger mt-4 mb-5 text-capitalize">please fill out all the details</p>

    <div class="container card  border border-4 p-3 shadow-lg rounded border-info mb-5">

        <form   method="post" action="bookingphplcars.php"  class="row g-3 text-capitalize">
            <div class="col-md-6">

            <?php

$conn= mysqli_connect('localhost:3307','root','9822920917');

if(!mysqli_select_db($conn,'autorent'))
 {
   echo "database not found";
 }
 else
 {
   $query="select * from usersdata where email='$email'";
   $query_run=mysqli_query($conn,$query);
   $check_cars=mysqli_num_rows($query_run);
   if($check_cars)
   {
        while($row=mysqli_fetch_array($query_run))
        {
           ?>

            
                <label for="name" class="form-label">full name</label>
                <input type="text" class="form-control" id="name"  name="name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone No</label>
                <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $row['phoneno']; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>

            <?php
        }
      }
      
    }
               
               
               ?>

            <div class="col-md-4">
                <label for="inputState" class="form-label">Select Car</label>
                <select id="inputState" class="form-select" name="carname" required>

                    <?php
                $conn= mysqli_connect('localhost:3307','root','9822920917');

                if(!mysqli_select_db($conn,'autorent'))
                 {
                     echo "database not found";
                }
                else
                {
                  $query='select * from luxarycars';
                 $query_run=mysqli_query($conn,$query);
                 $check_cars=mysqli_num_rows($query_run);

              if($check_cars)
             {
                    while($row=mysqli_fetch_array($query_run))
                    {
                        ?>
                         <!-- <option><?php echo $row['carname']; ?></option> -->
                         <option value="<?php 
                 
                 if($row['noofcars']>0)
                 {
                   echo $row['carname'];
                 }
            ?>"><?php
            if($row['noofcars']>0)
                 {
                   echo $row['carname'];
                 }  ?></option>
                        
                        <?php


                       
                     }
            }
            else {
                ?>
                <option s><?php echo"no cars in database"; ?></option>
               
                <?php
                    echo "no cars in database";
                 }
            }

             ?>
              </select>
            </div>
        
            <div class="col-12">
                <label for="inputAddress" class="form-label"> Departure Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="departure" required>
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Destination Address</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="destination" required>
            </div>
            
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Tour Date</label>
                <input type="date" class="form-control" id="inputZip" name="date" required >
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Total Travellers</label>
                <input type="number" class="form-control" id="inputZip" name="nooftravellers" required>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Total Tour Days</label>
                <input type="number" class="form-control" id="inputZip" name="tourdays" required >
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Departure Time</label>
                <input type="time" class="form-control" id="inputZip" name="departuretime" required >
            </div>
            <div class="col-md-4">
    <label for="inputState" class="form-label">Driver required</label>
    <select id="inputState" class="form-select" name="driver">
      <option values="yes">Yes</option>
      <option values="no">No</option>
    </select>
  </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Book Now</button>
            </div>
        </form>

    </div>




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
        integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD"
        crossorigin="anonymous"></script>
</body>

</html>
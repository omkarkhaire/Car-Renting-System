<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>everydaycars</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <style>
       img{
        border-radius: 20%;
       }
       h1{
         font-size:40px;
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
<body class="">
    <!-- navbarstart -->
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
         <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQWATuCnPUgN4rA7nWyfxLZVjIqb0KnKNOuWg&usqp=CAU"  alt="" width="40px" height="40px"> -->
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
                <li><a class="dropdown-item " style="text-transform: uppercase;" href="#">Action</a></li>
                <li><a class="dropdown-item " style="text-transform: uppercase;" href="#">Options</a></li>
                <li>
                  <hr class="dropdown-divider ">
                </li>
                <li><a class="dropdown-item " href="#">Administrator</a></li>
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
      <!-- cardsstart -->
      <h1 class="text-center text-info text-uppercase bg-dark p-4 " >every day car's</h1>

    <div class="container-fluid omkar bg-light mt-0 py-5">
            <div class="row mt-4">
            <?php

             $conn= mysqli_connect('localhost:3307','root','9822920917');

             if(!mysqli_select_db($conn,'autorent'))
              {
                echo "database not found";
              }
              else
              {
                $query='select * from everydaycars';
                $query_run=mysqli_query($conn,$query);
                $check_cars=mysqli_num_rows($query_run);
                if($check_cars)
                {
                     while($row=mysqli_fetch_array($query_run))
                     {
                        ?>
                            <div class="mx-auto col-lg-3 col-md-6 col-sm-12  mx-auto my-2 text-center ">
                              <div class="card shadow shadow-lg rounded border border-warning  border-3">
                             <div class="card-body">
                             <img class="mx-auto" src="<?php echo $row['image']; ?>"  alt="..." width="220px" height="220px">
                                <h5 class="card-title text-canter"><?php echo $row['carname']; ?></h5>
                                <p class="">Seating Capaticy: <span> <?php echo $row['noofseats']; ?></span> </p>
                  
                                  <p class="">Rate/KM: <span><?php echo $row['rateperhour']." ₹/km"; ?></span> </p>
                                  <p class="  ">Fuel Type: <span><?php echo $row['fuel']; ?></span> </p>
                  
                                  <p class="  ">Available cars with us: <span>
                                  <!-- echo $row['noofcars']; -->
                                  <?php 
                                  
                                     $number=$row['noofcars'];
                                     if($number<=0)
                                     {
                                      
                                       ?>
                                       <span style="color:red;">Currently<br> Unavailable</span> 
                                      <?php
                                     }
                                     else{
                                      echo $row['noofcars'];
                                     }
                                  
                                  ?>
                                
                                </span> </p>
                                  <a href="booking.php" class="btn btn-outline-primary">BOOK NOW</a>
                                </div>
                         </div>
                         </div>

                        <?php


                       
                     }
                }
                else {
                  echo "no cars in database";
                }
              }
            
            ?>
              
              </div>
    </div>
    <!-- cardsend -->


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
    integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD"
    crossorigin="anonymous"></script>
</body>
</html>
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
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
    <style>
    
    #omkar{
        display:none;
    }
    </style>
   
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;"">
    <div class=" container-fluid">
    <a class="navbar-brand " href="#">
      <img
        src="https://thumbs.dreamstime.com/b/cartoon-man-black-suv-car-happy-cartoon-man-black-suv-car-happy-eps-vector-illustration-174797497.jpg"
        alt="" width="50" height="54" class="d-inline-block align-top" style="border-radius: 50%;">
      <span class="display-6 text-primary" style="font-family: 'Times New Roman', Times, serif;">Your Bookings</span>
    </a>
    <button class="navbar-toggler text-center " style="color: red;height: 40px; width: 40px;border: 2px solid red;" id="navbtn"
      type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQWATuCnPUgN4rA7nWyfxLZVjIqb0KnKNOuWg&usqp=CAU"  alt="" width="40px" height="40px">

    </button>
    <div class="collapse navbar-collapse  " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
        <li class="nav-item text-dark">
          <a class="nav-link inactive " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-expanded="false">
            OPTIONS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <!-- <li><a class="dropdown-item " style="text-transform: uppercase;" href="myorders.php">My Orders</a></li> -->
            <li><a class="dropdown-item " style="text-transform: uppercase;" href="feedback.php">Give Feedback</a></li>
            <li>
              <hr class="dropdown-divider ">
            </li>
            <li><a class="dropdown-item " href="adminlogin.php">Administrator</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" href="about.php" tabindex="-1" aria-disabled="false">ABOUT</a>
        </li>
      </ul>

    </div>
    </div>
  </nav>
  <!-- nav bar end -->

  <div class="container text-center mt-5 ">
  <h3 class="mt-2"><span class="text-danger"><?php echo $email?></span> Your Active Bookings will Appear Here</h3>
  </div>

  <div class="conatiner bg-secondary mt-2 ">
        <div class="row">
        <?php

$conn= mysqli_connect('localhost:3307','root','9822920917');

if(!mysqli_select_db($conn,'autorent'))
 {
   echo "database not found";
 }
 else
 {
   $query="select * from bookings where email='$email'";
   $query_run=mysqli_query($conn,$query);
   $check_cars=mysqli_num_rows($query_run);
   if($check_cars >=1)
   {
     if($check_cars)
      {
        while($row=mysqli_fetch_array($query_run))
        {
           ?>
        <div class="toast"  data-animation="true"  data-autohide="false" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="https://thumbs.dreamstime.com/b/cartoon-man-black-suv-car-happy-cartoon-man-black-suv-car-happy-eps-vector-illustration-174797497.jpg"  alt="" width="50" height="54" class="d-inline-block align-top" style="border-radius: 50%;">
                <strong class="mr-auto" style="font-family:Lobster;font-size:17px"><?php echo $row['name']; ?></strong>
                <small><?php echo $row['bookingtime']; ?></small>
                <button type="button" class="btn-close" data-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body " >
            Booking Id:<span class="text-danger" style="font-weight:bold"><?php echo $row['orderid']; ?></span><br>
              car name:<span class="text-danger" style="font-weight:bold"><?php echo $row['carname']; ?></span><br>
              phone no:<span class="text-danger" style="font-weight:bold"><?php echo $row['phoneno']; ?></span><br>
              email id:<span class="text-danger" style="font-weight:bold"><?php echo $row['email']; ?></span><br>
              tourdate:<span class="text-danger" style="font-weight:bold"><?php echo $row['tourdate']; ?></span><br>
              Total Travellers:<span class="text-danger" style="font-weight:bold"><?php echo $row['nooftravellers']; ?></span><br>
               departure location:<span class="text-danger" style="font-weight:bold"><?php echo $row['departurelocation']; ?></span><br>
               departure time:<span class="text-danger" style="font-weight:bold"><?php echo $row['departuretime']; ?> AM</span><br>
               destination location:<span class="text-danger"  style="font-weight:bold"><?php echo $row['destinationlocation']; ?></span><br>
               tour days:<span class="text-danger" style="font-weight:bold" ><?php echo $row['tourdays']; ?></span><br>
               Driver required:<span class="text-danger" style="font-weight:bold" ><?php echo $row['driver']; ?></span><br>
            

            </div>
        </div> 
        <!-- endtoast -->
        <?php                       
                }
        }
        else {
                echo "<h1>NO ORDERS YET</h1>";
                }

            }  
            else{
                ?>

            <h1 class="text-center">NO Active Bookings</h1>
                <?php
            }        
    }

?>
        </div>
    </div>

    <div class="container text-center mb-5">
    
    <div class="container mt-5 mx-auto text-center">
    <h4 style="font-family:Lobster;font-size:30px" class="text-danger">For Cancelling Any Bookings</h4>
        <Button  class=" btn btn-outline-danger px-4 py-2 text-uppercase"  onclick="myFunction()">Cancel Bookings</Button>
    </div>

    <div class="container-fluid mt-3 bg-secondary" id="omkar">

    <form action="cancelPHP.php" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label text-white">Enter Order Id</label>
            <input type="number" class="form-control text-center" id="exampleFormControlInput1" name="email" placeholder="1">
          </div>
          

          <input type="submit" class="btn btn-danger mb-2" value="Cancel Booking">


       </form>
    
    </div>

    <div class="container mt-5">
    <h1 style="font-family:Lobster;font-size:30px" class="text-primary">Your Bookings History</h1>
    
    <div class="container bg-secondary mt-1 ">
        <div class="row">
        <?php

$conn= mysqli_connect('localhost:3307','root','9822920917');

if(!mysqli_select_db($conn,'autorent'))
 {
   echo "database not found";
 }
 else
 {
   $query="select * from completedorders where email='$email'";
   $query_run=mysqli_query($conn,$query);
   $check_cars=mysqli_num_rows($query_run);
   if($check_cars >=1)
   {
   if($check_cars)
   {
        while($row=mysqli_fetch_array($query_run))
        {
           ?>
        <div class="toast"  data-animation="true"  data-autohide="false" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="https://thumbs.dreamstime.com/b/cartoon-man-black-suv-car-happy-cartoon-man-black-suv-car-happy-eps-vector-illustration-174797497.jpg"  alt="" width="50" height="54" class="d-inline-block align-top" style="border-radius: 50%;">
                <strong class="mr-auto" style="font-family:Lobster;font-size:17px"><?php echo $row['name']; ?></strong>
                <small><?php echo $row['bookingtime']; ?></small>
                <button type="button" class="btn-close" data-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" >
            Booking Id:<span class="text-danger" style="font-weight:bold"><?php echo $row['orderid']; ?></span><br>
              car name:<span class="text-danger" style="font-weight:bold"><?php echo $row['carname']; ?></span><br>
              phone no:<span class="text-danger" style="font-weight:bold"><?php echo $row['phoneno']; ?></span><br>
              email id:<span class="text-danger" style="font-weight:bold"><?php echo $row['email']; ?></span><br>
              tourdate:<span class="text-danger" style="font-weight:bold"><?php echo $row['tourdate']; ?></span><br>
              Total Travellers:<span class="text-danger" style="font-weight:bold"><?php echo $row['nooftravellers']; ?></span><br>
               departure location:<span class="text-danger" style="font-weight:bold"><?php echo $row['departurelocation']; ?></span><br>
               departure time:<span class="text-danger" style="font-weight:bold"><?php echo $row['departuretime']; ?> AM</span><br>
               destination location:<span class="text-danger"  style="font-weight:bold"><?php echo $row['destinationlocation']; ?></span><br>
               tour days:<span class="text-danger" style="font-weight:bold" ><?php echo $row['tourdays']; ?></span><br>
               Driver required:<span class="text-danger" style="font-weight:bold" ><?php echo $row['driver']; ?></span><br>
               <!-- booking status:<span class="text-danger" style="font-weight:bold" ><?php echo $row['orderstatus']; ?></span><br> -->
            

            </div>
        </div> 
        <!-- endtoast -->
        <?php                       
                }
        }
        else {
                echo "<h1>NO ORDERS YET</h1>";
                }

            }  
            else{
                ?>

            <h1 class="text-center">NO Bookings History</h1>
                <?php
            }        
    }

?>
        </div>
    </div>
    </div>
</div>

    

    


<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
    integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD"
    crossorigin="anonymous"></script>
</body>
<script>

var toastElList = [].slice.call(document.querySelectorAll('.toast'))
var toastList = toastElList.map(function (toastEl) {
    
 return new bootstrap.Toast(toastEl)
})
// toastList[0].show();

for (let index = 0; index <toastList.length; index++) {
    toastList[index].show();
    
}



function myFunction() {
  var x = document.getElementById("omkar");
  
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</html>
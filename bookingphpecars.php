<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
<?php


$name= $_POST['name'];
$phone=$_POST['phone'];
$email= $_POST['email'];
$car= $_POST['carname'];
$departure= $_POST['departure'];
$destination= $_POST['destination'];
$date= $_POST['date'];
$travellers= $_POST['nooftravellers'];
$tourdays= $_POST['tourdays'];
$departuretime= $_POST['departuretime'];
$driver=$_POST['driver'];


// Create connection
$conn = new mysqli('localhost:3307','root','9822920917','autorent');
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO bookings (name,phoneno,carname,email,tourdate,nooftravellers,departurelocation,destinationlocation,tourdays,departuretime,driver)
VALUES ('$name',$phone,'$car','$email','$date',$travellers,'$departure','$destination',$tourdays,'$departuretime','$driver')";

if ($conn->query($sql) === TRUE) {
  ?>
  <?php
  ?>
         <div style="background-color:gold;text-align:center;padding:10%">
           <h1 style="font-size:35px;color:green"  class="text-uppercase"> car booked successfully <br> you  will receive a call from us within 30 minutes for conformation of booking </h1>
           </div>
<?php
} else {
 echo "Error:". $sql . $conn->error;
}

$omkar="update everydaycars set noofcars=noofcars-1 where carname='$car'";
$result=mysqli_query($conn,$omkar);

?>

<div class="container mt-5 mx-auto text-center">
        <a href="mainpage.php" class=" btn btn-outline-danger px-4 py-2 text-uppercase">back</a>
    </div>





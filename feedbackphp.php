<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
<?php

 
 $email= $_POST['email'];
 $feed= $_POST['feed'];

 



// Create connection
$conn = new mysqli('localhost:3307','root','9822920917','autorent');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO feedback (email,feed)
VALUES ('$email','$feed')";

if ($conn->query($sql) === TRUE) {
  ?>
  <?php
  ?>
         <div style="background-color:gold;text-align:center;padding:10%">
           <h1 style="font-size:35px;color:green"  class="text-uppercase"> feedback subimitted successfully </h1>
           </div>
<?php
} else {
  echo "Error:". $sql . $conn->error;
}
?>

<div class="container mt-5 mx-auto text-center">
        <a href="feedback.php" class=" btn btn-outline-danger px-4 py-2 text-uppercase">back</a>
    </div>


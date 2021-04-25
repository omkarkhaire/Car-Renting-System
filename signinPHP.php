<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
<?php

   session_start();

 $conn= mysqli_connect('localhost:3307','root','9822920917');

 $email= $_POST['email'];
 $password= $_POST['password'];
 
if(!mysqli_select_db($conn,'autorent'))
{
    echo "database not found ".$name;
}
else{
    echo "connection to database established successfully";
        $s="select * from usersdata where email='$email'";

        $result=mysqli_query($conn,$s);

        $n=mysqli_num_rows($result);

    if($n==1)
{  ?>
    <script>alert("login successfull");</script>
    <?php
          $_SESSION['mail']=$email;
    header('location:mainpage.php');
}
else{
    ?>
   <?php
   ?>
          <div style="background-color:gold;text-align:center;padding:10%">
            <h1 style="font-size:35px;color:green"  class="text-uppercase"> YOU DONT HAVE AN ACCOUNT ON AUTORENT SO PLEASE<br>
            SIGNUP(REGISTER) ON THIS SITE </h1>
            </div>
            

            <?php
            
}



}
// session_start();
// $_SESSION['mail']=$email;


     //One page 1



?>
<div class="container mt-5 mx-auto text-center">
        <a href="signup.php" class=" btn btn-outline-danger px-4 py-2 text-uppercase">SIGN  UP</a>
    </div>

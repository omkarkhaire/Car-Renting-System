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
        $s="select * from admintable where email='$email'";

        $result=mysqli_query($conn,$s);

        $n=mysqli_num_rows($result);

    if($n)
{
    echo "login successfull";
    header('location:orders.php');
}
else{
    echo "<h5>you'r are not an admin or contact to developer</h5>" ;
   
}



}


?>
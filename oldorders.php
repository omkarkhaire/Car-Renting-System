<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorent</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
<style>
  

</style>
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;"">
    <div class=" container-fluid">
        <a class="navbar-brand " href="#">
            <img src="https://thumbs.dreamstime.com/b/cartoon-man-black-suv-car-happy-cartoon-man-black-suv-car-happy-eps-vector-illustration-174797497.jpg"
                alt="" width="50" height="54" class="d-inline-block align-top" style="border-radius: 50%;">
            <span class="display-6 text-primary" style="font-family: 'Times New Roman', Times, serif;">COMPLETED ORDERS</span>
        </a>
        <button class="navbar-toggler text-center " style="color: red;height: 40px; width: 40px;border: 2px solid red;"
            id="navbtn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           

        </button>
        <div class="collapse navbar-collapse  " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
                <li class="nav-item text-dark">
                    <a class="nav-link active " aria-current="page" href="mainpage.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled text-dark" href="#" tabindex="-1" aria-disabled="false">ABOUT</a>
                </li>
            </ul>

        </div>
        </div>
    </nav>
    <!-- navbarend -->

    <div class="conatiner bg-secondary">
        <div class="row">
        <?php

$conn= mysqli_connect('localhost:3307','root','9822920917');

if(!mysqli_select_db($conn,'autorent'))
 {
   echo "database not found";
 }
 else
 {
   $query='select * from completedorders';
   $query_run=mysqli_query($conn,$query);
   $check_cars=mysqli_num_rows($query_run);
   if($check_cars)
   {
        while($row=mysqli_fetch_array($query_run))
        {
           ?>
        <div class="toast"  data-animation="true"  data-autohide="false" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="https://thumbs.dreamstime.com/b/cartoon-man-black-suv-car-happy-cartoon-man-black-suv-car-happy-eps-vector-illustration-174797497.jpg"  alt="" width="50" height="54" class="d-inline-block align-top" style="border-radius: 50%;">
                <strong class="mr-auto"><?php echo $row['name']; ?></strong>
                <small><?php echo $row['bookingtime']; ?></small>
                <button type="button" class="btn-close" data-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body " >
            order id:<span class="text-danger" style="font-weight:bold"><?php echo $row['orderid']; ?></span><br>

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

?>
        </div>
    </div>
    <!-- btn -->

    
    <div class="container mt-5  mb-4mx-auto text-center">
        <a href="orderscompleted.php" class=" btn btn-outline-danger">back</a>
    </div>

    

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
        integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD"
        crossorigin="anonymous"></script>

        <script>

            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function (toastEl) {
                
             return new bootstrap.Toast(toastEl)
            })
            // toastList[0].show();

            for (let index = 0; index <toastList.length; index++) {
                toastList[index].show();
                
            }
        </script>
</body>

</html>
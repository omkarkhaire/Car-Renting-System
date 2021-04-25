
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
<style>
  .omkar{
      height: 20vh;
  }

</style>
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;"">
    <div class=" container-fluid">
        <a class="navbar-brand " href="#">
            <img src="https://thumbs.dreamstime.com/b/cartoon-man-black-suv-car-happy-cartoon-man-black-suv-car-happy-eps-vector-illustration-174797497.jpg"
                alt="" width="50" height="54" class="d-inline-block align-top" style="border-radius: 50%;">
            <span class="display-6 text-primary" style="font-family: 'Times New Roman', Times, serif;">UPDATION</span>
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

    <div class="container-fluid bg-info omkar p-5">

      <h3 class="text-danger my-auto text-capitalize text-center"> please Enter valid car details </h3>

    </div>

    
    <div class="container mt-4 bg-light">

        <form action="updatephp.php" method="post">

        <div class="col-md-4">
                <label for="inputState" class="form-label">Select Car Category</label>
                <select id="inputState" class="form-select" name="database" required>
                <option value="everydaycars">Everday cars</option>
                <option value="luxarycars">luxary cars</option>
                </select>
            </div>


        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Enter Car Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="carname" placeholder="enter valid car name it should match name in categories" required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Total no Of vailable Cars</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="noofcars" placeholder="enter no of available cars" required>

          </div>

          <input type="submit" class="btn btn-outline-danger" value="UPDATE">


       </form>
    </div>

    

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
        integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD"
        crossorigin="anonymous"></script>

       
</body>

</html>
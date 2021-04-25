<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminworkspace</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <script>
          //  alert("welcome admin");
        
    </script>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;"">
    <div class=" container-fluid">
    <a class="navbar-brand " href="#">
      <img
        src="https://thumbs.dreamstime.com/b/cartoon-man-black-suv-car-happy-cartoon-man-black-suv-car-happy-eps-vector-illustration-174797497.jpg"
        alt="" width="50" height="54" class="d-inline-block align-top" style="border-radius: 50%;">
      <span class="display-8 text-primary text-uppercase" style="font-family: 'Times New Roman', Times, serif;">AUTORENT Adminworkspace</span>
    </a>
    <button class="navbar-toggler text-center " style="color: red;height: 40px; width: 40px;border: 2px solid red;" id="navbtn"
      type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">

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
  <!-- navbar end -->
  <h1 class="text-center text-uppercase bg-info">add new car</h1>
  <div class="container">

  <form action="addnewcar.php" method="post">

<div class="form-floating w-50 mx-auto mt-5  p-1 mb-3">
        <div class="mb-3 row">
            <label for="database" class="col-sm-2 col-form-label">Select database:</label>
            <div class="col-sm-10">
            <select class="form-select" required aria-label="Default select example"id="database" name="database">
               <option value="1">everydaycars</option>
               <option value="2">luxarycars</option>
                  </select>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="carname" class="col-sm-2 col-form-label">enter car name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="carname" name="carname" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="noofseats" class="col-sm-2 col-form-label">enter seating capacity:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="noofseats" required name="noofseats">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="rate/hour" class="col-sm-2 col-form-label">enter rate/hour:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="rate/hour" required name="rate/hour">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="fuel" class="col-sm-2 col-form-label">enter fuel type</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fuel" required name="fuel">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="noofcars" class="col-sm-2 col-form-label">enter no of cars with you</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="noofcars" required name="noofcars">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="image" class="col-sm-2 col-form-label">enter image address:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="image" required name="imageurl" placeholder="enter image address from chrome">
            </div>
          </div>

          <div class="text-center">
          <input type="submit" class="btn btn-primary" value="add this car">
</div>
</form>
   </div>


  </form>

  </div>

  <p class="bg-danger">...</p>



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
    integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD"
    crossorigin="anonymous"></script>
</body>
</html>
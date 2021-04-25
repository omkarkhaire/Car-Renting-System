<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoRent</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
<style>
.car-road{
    width:110px;
    overflow:hidden;
}
.car{
    width: 100%;
    position:relative;
}

@-webkit-keyframes rotateWheel {
    from {transform: rotate(0deg);}
    to {transform: rotate(360deg);}
}

/* Standard syntax */
@keyframes rotateWheel {
    from {transform: rotate(0deg);}
    to {transform: rotate(360deg);}
}

.car-base{
    background: #cc1c5d;
    width: 100%;
    height: 22px;
    border-radius: 2px 5px 10px 10px;
}
.car-top{
    height: 36px;
    width: 66px;
    background: #cc1c5d;
    margin-bottom: -18px;
    border-radius: 100px / 60px;
    margin-left: 15px;
    position:relative;
}

.car-top::before{
    width: 0;
    height: 0;
    border-top: 18px solid transparent;
    border-bottom: 12px solid transparent;
    border-right: 43px solid #cc1c5d;
    position: absolute;
    left: -10px;
    content: '';
}

.car-top::after{
    border-top: 7px solid transparent;
    border-bottom: 8px solid transparent;
    border-left: 72px solid #cc1c5d;
    position: absolute;
    right: -29px;
    content: '';
    top: 14px;
    border-radius: 50%;
}

.window{
    position: absolute;
    background: white;
    width: 42px;
    height: 11px;
    top: 3px;
    border-radius: 50% 50% 0 0;
    left: 12px;
}

.window::before{
    content: '';
    position: absolute;
    left: 20px;
    background: #cc1c5d;
    height: 100%;
    width: 5px;
}

.wheel{
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: #4a4a4a;
    position: absolute;
    border: 2px solid white;
    -webkit-animation: rotateWheel 0.7s infinite linear;
    animation: rotateWheel 0.6s infinite linear;

}

.wheel::before{
    content:'';
    width: 14px;
    height: 14px;
    top:4px;
    left:4px;
    border-radius: 50%;
    background: white;
    position: absolute;

}

.wheel:after{
    content: '';
    position: absolute;
    top: 4px;
    bottom: 4px;
    width: 3px;
    left: 50%;
    transform: translateX(-50%);
    background: #4a4a4a;
}

.wheel-left{
    left: 12px;
    bottom: -10px;
}

.wheel-right{
    right: 12px;
    bottom: -10px;
}
.wheel-spike{
    position: absolute;
    top: 50%;
    bottom: 4px;
    width: calc(100% - 8px);
    left: 4px;
    height: 3px;
    transform: translateY(-50%);
    background: #4a4a4a;
}
.wheel-center{
    position: absolute;
    top: 50%;
    left:50%;
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background:white;
    z-index: 2;
    transform: translate(-50%, -50%);
}

.head-light{
    position: absolute;
    background: #e2dfcb;
    right: 1px;
    top: 19px;
    border-radius: 50% 15px 15px 50%;
    width: 10px;
    height: 4px;
}

.road{
    position:relative;
    width: 100%;
    margin-top: 8px;
    animation: border-dance 0.5s infinite linear;
    height:3px;
    background-image: linear-gradient(to left, #ccc 0%, #ccc 20%, #fff 20%, #fff 40%, #ccc 40%, #ccc 60%, #fff 60%, #fff 80%, #ccc 80%);
}

@keyframes border-dance {
    0% {
        left: 40px;
    }

    100% {
        left: 0px;
    }

}


</style>

</head>
<body class="bg">

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
            <li><a class="dropdown-item " style="text-transform: uppercase;" href="feedback.php">Give Feedback</a></li>
            <li>
              <hr class="dropdown-divider ">
            </li>
            <li><a class="dropdown-item " href="adminlogin.php">Administrator</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link inactive text-dark" href="#" tabindex="-1" aria-disabled="false">ABOUT</a>
        </li>
      </ul>

    </div>
    </div>
  </nav>
  <!-- navbar end -->


  
        
        <div class="container-fluid p-5 text-center  shadow shadow-lg rounded">
        <div class="car-road mx-auto mt-5">
            <div class="car">
                <div class="car-top">
                    <div class="window" ></div>
                </div>
                <div class="car-base" ></div>
                <div class="wheel-left wheel">
                    <div class="wheel-spike" ></div>
                    <div class="wheel-center" ></div>
                </div>
                <div class="wheel-right wheel">
                    <div class="wheel-spike" ></div>
                    <div class="wheel-center" ></div>
                </div>
                <div class="head-light" ></div>
            </div>
            <div class="road" ></div>
        </div>
      
        <!-- </div> -->
           <h1  style="letter-spacing:0.1rem;font-family:lobster" class="text-primary text-uppercase">AUTORENT</h1>
        <p class="text-capitalize">AUTORENT is made to make renting cars easy so you can focus more on you'r priorities.</p>
        </div>



  <div class="container-fluid bg-dark text-center p-5 ">
  
        <h1 style="letter-spacing:1rem;font-family:lobster" class="text-white text-uppercase">Site Developed By </h1>

        <h4 class="text-warning" style="font-family: 'Piedra', cursive;font-size:40px">Omkar khaire</h4>
        
       
  </div>
  <div class="conatiner-fluid bg-secondary border border-5">
  <marquee behavior="alternate">
  <h2  class="text-warning" style="font-family: 'Piedra', cursive;font-size:40px" > Thank you for being our valued customer</h2>
  </marquee>
  </div>


  <!-- <div class="container text-center ml-5"> -->

 

    








<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
    integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD"
    crossorigin="anonymous"></script>
</body>
</html>
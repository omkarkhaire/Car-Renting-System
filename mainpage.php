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
  <title>AUTORENT</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">


  <style>
    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
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
      .card:hover{
        border: 10px groove black;
        box-shadow: 5px 4px 4px white;
      }

    .carousel-item img {
      width: 100%;
      height: 90vh;
      vertical-align: middle;

    }

    .advantages img {
      border-radius: 50%;
     width: 100%;
    }

    .advantages p {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .omkarkhaire{
      font-size:20px;
      font-style:italic;
    }
    
    @media (max-width:700px) {
      .covid{
        width:auto;
      }

    }
  
  </style>
</head>

<body>
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
          <li><a class="dropdown-item " style="text-transform: uppercase;" href="myorders.php">My Orders</a></li>
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
  <!-- navbar end -->

  <!-- carosal start -->
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active " data-interval="1000">
        <img
          src="https://www.gannett-cdn.com/-mm-/8ebd837023d1fbc2dbf21782321e83c2610fb3ae/c=0-104-2129-1307/local/-/media/2015/07/02/USATODAY/USATODAY/635714302418162912-XXX-467103541.jpg?width=660&height=373&fit=crop&format=pjpg&auto=webp"
          class="d-block w-100" alt="details">
        <div class="carousel-caption d-md-block">
          <h5>We Provide You Cars 24x7</h5>
          <p style="text-transform: capitalize;">We Are Only dedicated to make our customers fully satisfied by our
            service </p>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="https://www.speedautosystems.com/wp-content/uploads/2015/08/Car-rental-Software-Systems.jpg"
          class="d-block w-100" alt="omkar khaire">
        <div class="carousel-caption  d-md-block">
          <h5 style="text-transform: capitalize;">choose your favourite car</h5>
          <p style="text-transform: capitalize;">we have wide veriety of cars to choose from (enjoy your choise)</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.rentalcars.com/images/rc-guides/luxurycarpic1.jpg"
          class="d-block w-100" alt="omkar khaire">
        <div class="carousel-caption  d-md-block">
          <h5 style="color:red;font-weight:bold">Luxary Cars</h5>
          <p style="color:red;font-weight:bold">We Have Wide Collection Of Luxary Cars</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
  <!-- carosal ed -->

  <!-- advantages -->

  <div class=" container-fluid bg-info advantages">
    <h2 class="text-center pt-3">THE AUTORENT ADVANTAGES</h2>
    <P class="text-center">We simplified car rentals, so you can focus on what's important to you.</P>
    <div class="row">
      <div class="mx-auto col-lg-3 col-md-6 col-sm-12  mx-auto my-2 text-center ">
        <img
          src="data:image/png;base64,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"
          alt="" height="200px" width="200px">
        <h4>Fuel Cost Included</h4>
        <br>
        <p>Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!</p>

      </div>

      <div class="mx-auto col-lg-3 col-md-6 col-sm-12  mx-auto my-2 text-center ">
        <img
          src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAvVBMVEX///8xXJgnsVouWpcqWJYjVJT2+Pt6krn8/f8eUpNwjLUisFcnVpUer1Xx9Pjs8PWLoMFJcaUWTpEArEzt+PH4/fpGa6E+u27T3OmQpcXe4+tdw4EAqke2xdrG6NKEzp2tvdQ4YpzBzN7I0uJWdqdng6+Cmb1Ku3HT797d8eRsw4fb4uw+Z6Brh7IMSo+arcq14cSV16yq3bt2zZWd2LDY8eFSwXw1tmWltc+Iz5/J69WZ165bfq685MpuypAmTHjnAAAPA0lEQVR4nO1dWXuqOhRVAyoCoqAWtbbgWKtWawetx57//7OuU48E9g5RA9r7sZ58QGCRlT1lSqUSJEiQIEGCBAkSJEiQIMG1kM8aRmODtrOFvf1pGNlrv5UoGHZ7Oc2ty2PFNJU9TFMal3u5qdO2i9d+vUvRmea6NVfRJImQtAeEEEmSZbe2zk3ta7/kuTAa9bVpyj5qPmyIyqbSdRrGtV/3VGQ707UkM8l5aSrp3tLOX/ulT0C23htvGo+L3gGSNl47v6RTFjuTjTZPYXdoSUlRJqPbN7BFZ6Kc1noUSS3XunGOrS45o/k8HDWp17o2CRxZZ2xyGhdWO5pu+0bbsV0wL6W3hyTlOtcmA8AouBfp0wuiufVbs6vFpaSJ4reDLDk3JdVRTxMj0COI0m9cm9YRrbLYBtxT1MrtaxM7oNgzhfVACtJL/ybCVXstR8Jvx7F3A4lHqxZNAx4ojq9NMV9/EW1iaBBpedWco9i/OIYJpajVr0lxwq/QbVKv/UCSTojOldLVKDa6fDZmk8drbrnbm/Tre/QLvW7Z3RDlpJi7UoDT6HF5QU0ZT6ZOe0QZ/rwxarfqPVfhuoWcu0orZsvhTUBkk5Rsowi/YN5odHLE5AiHriLU4jr082vuuj4KvdGo1E2H3uoKQi3mwlpQTpc6fK9ltHNuWI+WcxETCiDH1tbGtkwb/MrKjuqmzBarsoyQDYC6yXobIpXrp96xWC8z25FosVJsucwGTE/PSXxGpTRL+cSNMdUYjRmKIsr6zOJu3u4qrBu7seXEWUYfJFrtklrZdMxoRm0dE8Vsn9FhtFy4f2DB7in4zaWYQtQWHm2Tl+mlnzmbYyiVxFKDs9M4wTLzDarVyh7VKusyRsZJzDgcfxd9vrbGFTpczeZfj8093r7ms1UFvdbGO6PWj16nDtpP5DL2gVevz4OFaum6uoe++bX4fH4dItfbjKQlcp2OaphGpQLYBStPbztuGR+2PO8zj0OwKY0CRlEqR1ycyvexIFkuQI8ezpuW7ifnoamrzzOIo4GWt5STo6XTYGMtKJeBFqy+D3QGvx109fMdeFADo0iUaBvRRRhCEq3OdSsgTqghrcx30LgaWH4tTaIk2EICbmkd/LCrZ4uD3kGsf1eB/zew0DDK+DTbQ8z4S5Dg1yJMn5RWF/PAHdpIcIiYNCFYwn2DBE34x4BLoF6pNgO+o400ohJZIxprsAmJNPW74dnglAY8NOPdk+8u+RLyRctRMWzDD9R6ftXM1dMJbpX67aeIGDYzqlI//Dwi+UKZ6iu3iaGhWn98T7ThR0qFaAjasCGV/dWFV7wBt/Eay0NaPnuTn8L9IqLxmhzooLSCrwnf8RZUF29bBEO4I3wUi3DX16ZRELTBiJTUfJ+TQTBj7QO0IX6Fas18TwUDfVKLIrBxwCaUfWHid4bRQPf7ayoD/BpV91lUOLSJwmEUwXEmf0paYRH8x7DJuEhv0pG4DRFMSz3xDEdgxdbXhNVPppvgYZix3qggNT8FG/FFfFwzhZwhqdGFUYYZ9TJkfwedzjXg/q84whmCcbDPpj0xNarq1v6y6uu9BSXF/66jdVqAuockfBxjBDlDUqMLMwsGQVUf/D0akY/ZV3OBcdSfeR4t2iWCItX61DUzhqPQB/MP+o7V1TuaftDhGyRTQkRP0ixA/d2kcorKJ9qE6v0rVKv4QP6hP1PGBsxKRTv9BjTgS9LUNe+o/VAH/rThgD/IX+jozQAf3hXr9Nsu8Bll6jPiflwdIGVD1G2oC+9lYBZFiNiJfQ70DI2yM3gvvEdakBG+WVRVowWV2RWhldMsVESUepROUEOqv2K3naMfhTanBlRn95m5C2F0gY9Ii/TjHnlZdeHV6Mfq++Hp42BI8NhGpRN+aNKA2Ey/4UIdgbLXX5id0b+OhnH1PFhkFneD5uMuhWB5F8rWgAUiUyRDKPklZW83ZLiKo3Ob3euqui/oW9brELOkO4ZUAN6A/IV52UglDegbSj1v/elhEa63atNLSWeGeJkMZX8hbyw0gyoBT6B7+hxrD/XzX2M83Z1QYbSouGYN2QGRkzOgWoLseC6o/uVgSLdhCPS/3heoQ5+4JJAhlFhQJT2Guz8yTM0xewv9L+N9gTZQzNBEDmCAHd2b3Q8ZEZunQ33d87fivTc2hUyNFKjTXoAXiKH3gm/c8C8ePNc9PWd4OVpej2gAKiLAcNC5gDI0MvZewTD8dMpe/X7jLIhT0TcUckhdcZEppBHS9V7xxqgC+0pL1cqbyjNsQwV7BjDqJTIJ7gAMaWeB+/tNYwTi0ur8Uw3lqD96/lEEShkiGbYgS0YVSpiezl8C3aAy/wwb3KCC7yzgkW+IIZgfVh5DpBrKMJ0WF9SADCl/y45W9Ix/3GyLB1bh6gYYUiFNCMOMqr8DdZoHdtk0VKVRtyFlaUIjTr05C96XVZy7fhue0A/3L2zdzfzdsYomlVwMBU7KEMFwO3J29+6bVMLKNiiG+YhtKZQA8/tDD0d90Xyg7syIFPQvz3XQyJdIhmDcW+N8Ux9Hi5qP8IT3xFhjGjBqo+JSvBocJGm9e7IGnCE1GgwVhUXGpeG5xcMp0y+8VSbcJ1K5BVgKE1n1hgbTTe/9h6fMgFIXR+eI1gYylvcFoOyGLhRdCGj0h6o5s4bmgZc/ug20A9OFfdCai5xVA83YowpBVZapCSSEHoaoEdbfvC8AlsJE1mnAoj7lEGeMBPHzmR4M9dZC0X9ZlFspR11rg6avS9QKlhUjjH5KPXwtjpmEvjj6/Qo+FkAFstAaDKFDM2DNm3JHeM17l+NXh7OmtR281y3rzjMYjHoZ/W8l5PlpU+TwGjhfV6LGLdBpGMc6zfD7/ev12/vm+HfRqUAdGmMnikCC8MxSjVqci+ot84DeNjXH/uNLmieQHViLZJgFR2Hpat4d3IjoAPAGQ3zMkbKk4Bi7UFMKjwGnFSouRPJZ+l0pVPCJmBY1ccOBZtSIHQNOdcbAM+j0ogKPSlApAoUhPjVKHXgvhJcDumLH8cFx5jQ9FwMefkLnYXwz5oLTA09Qwds/xn45wMXpCmVNq/Cg9XYWfqBIU1k1GaU2nZ68t4TCYln0JFpwyZpvvjWWYOj655/vDw/L4bzJKu2rC7oUAC8mEz3D1IASKH8OinasjUkZfD6/Hlqm8sleDeUzTh3o49Jj7EIARYb+/Spw678bvL8/5IVD9jAinVUgcxPFzjXZAZQpGdMGDfXgO/yMJg3Z6bJK1x074IqECOaXNsDO4HO71WeW/PgYWrR7gapsacFTTfbIwosRfGu6qkhkw8/QNy8x1QFnX2tRbATigIvU/UuPV6wKKAdDegbVBvAuOHIUy4FHoK1Ju75nzfGRQbW5v4QxYKzqvjgdmqIgfurlAXCHkPwP+8aXxOiZuw0WrEU1PoINeG1+RPucjCCXCAQXc3yy036xOn8LImYmAme4B7IxlOwPgeeshU0MqLp/fKoDr86LwBnuYcPbAAV0mno4aYXsD/RPf4xuIJvaCp2z50URWQasBXbiWp0yv+uHYGCZLOKgIlkSdICD7JRHHP+VlbeT1wE/BhKQJbyJCpGj2y0yi+0iCCxbnZ+yFFjV74LVHGxpfFAyAmHD5hQ0bsMv7mZUM1/BYo6N7DgQ1QLSA7CtW0AX/M23ZF237obBPRVG2KMiM6R7NLDtd7QxNFFw1cyEeI5NJvwc3E+BtUeNFO1mUfk69mB4b5Pqw+OC0ZCqdfcFTbVJjVCCQkcrIDTw/WngyZDV4XxwD6zF22TEltWcVcANlVCJpjWBUy4RwKHwjqKGPbw6e2wOFhlL/4GVWQyeH4EdTQ7PQFswYjOzB7r9T1qqMXKa4cNs/vq4x5/59wqvhKNbfmygRLJM3Qck3N9/4ZBOUt2DfdES2wRnu19hLBu2gevYDhTN3KXdpNjFt6Tzl4Uiw5SxLZ62vqyOydzAPr5toVlvIbmXbLuXwxW6hfDFvxjARZ3/oIzPPGOk2CIh2+1KL1uKnRh2iIRrmD8gSv+MQlG+MwnZhnZLcdxJdcomGF2IRYu92bzknrwFpl1weXa+JjVn4yyj3CrqB/WQz62ZPZv/LYzO+oVz+3Kya2hwezixyNfDdtSXlILD15AjZ33yEVhwGCwU2QnDZxw4klo/1HcUW4WadMYBEnEIdRK6mTohmvLSW46QwxyLhr2smece8RWDUItIocj/sWWlnJu2OrZx1NWGW9uZFspyuPVkUIxeqMUe5xFW0vZwhFp3PfnBultztRNP1wNuG4NQSye85O7YygPIpeT2iMOiTvFNheNADEJNOYLOWjsTcQjVxndOjgMxCDXVyDFPEbgIHB8vDqFm6xGd2aUpPEcRxSHUiI7t2h7Y1WGdUXBAHEJNGae4DU5+0nK7HL7DcQpNHEJN5dtj1sENJ4Mo5UM63+K4bSxC3eRTNWFHBBKt5vy775LH3MQh1E1vLJ1zDDAAzfUcMdSBp4D4KcYh1N0ZI+bl7bjJnUfHktqI83TTmIS6+eITrloECiK7fSptLvE625iEuuXYT5+dEhFlXPfVsPI5XkcUk1A3yDbqaeX0rJ1ImjmeGoGSbzEXWks4IDahbtEqdKWTTpclGinn4HJvvsRLMT6hbtFw+mWeM+P29JRyv4UOSdyiUHfIGp3++EXRNvkufjANkWTzpVaykUrOHjcq1D2MVr3XLadlmSa6zfc1WXZr3dy0HT7acqtC/YFht5xpv9cbj11zB8Ud19aT0tRp25yqulmhepA1ig0PDIOpywBuWqhicOtCFYDfINQLkQg1EeqvQCLURKi/AolQE6H+Cpwg1NhmiQkGt1CJGeMhyULBLVTiXvtVzwW3UE3Rp2DEBl6hCt1LKl5wClX8YS3xgU+oIvfHjB18QlWiXp4RJbiEGt/E6SjAI1St9EtDtz04hCpHuZQvBoQLNfJlUlEjVKjSr3X5PwgR6m/2hz9gC1Xo+QnXAlOowvdaugoYQiXStV9ODHCh/npL+gNMqLL/JN/fC1ioMayojQ8boQaG0rWodkC5DrIl37oNSZn8rwimttOxybEdJan864OZIIqtvmvKmqbJCpk4Ma2njRnZRmeZ6+em7cb/xoYmSJAgQYIECRIkSJAgQYIECRIk+L34D1CBR8BG9+BBAAAAAElFTkSuQmCC"
          alt="" height="200px" width="200px">
        <h4>No Hidden Charges</h4>
        <br>
        <p>Our prices include taxes and insurance.
          What you see is what you really pay!</p>
      </div>

      <div class="mx-auto col-lg-3 col-md-6 col-sm-12  mx-auto my-2 text-center ">
        <img src="https://image.freepik.com/free-vector/flat-color-location-icon-paper-map_52465-148.jpg" alt=""
          height="200px" width="200px">
        <h4>Go Anywhere</h4>
        <br>
        <p>Our cars have all-India permits. Just remember to pay state tolls and entry taxes</p>
      </div>


      <!-- second advantages -->

      <div class="mx-auto col-lg-3 col-md-6 col-sm-12  mx-auto my-2 text-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSTum-CCBmFpm2DifTMSmTGosjIekM4SkPxXw&usqp=CAU"
          alt="" height="200px" width="200px">
        <h4>24x7 Roadside Assistance</h4>
        
        <p>We have round-the-clock, pan India partners.Help is never far away from you.</p>

      </div>

      <div class="mx-auto col-lg-3 col-md-6 col-sm-12  mx-auto my-2 text-center ">
        <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRksfEXuFccN7-H-ntaFuyXu_XBKMFyFF5oBA&usqp=CAUC"
          alt="" height="200px" width="200px">
        <h4>Damage Insurance</h4>
        <br>
        <p>Our prices include taxes and insurance.
          What you see is what you really pay!</p>
      </div>
      <div class="mx-auto col-lg-3 col-md-6 col-sm-12  mx-auto my-2 text-center ">
        <img
          src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSExMVFhUXFxcXGBgXFxgaGhgXGBUWFxgaGRsbHSggGB8mHhcYITEiJSkrLi4uGCAzODMtNygtLisBCgoKDg0OGxAQGy8mICUtLS8tLy8tLS0tLS0tLS0tLS0tLS0tLS8vLS0tLS0tLS01LzAvLS0tLS0tLS0tLS0tLf/AABEIALwBDAMBEQACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAABgIHAwQFAQj/xABBEAACAAMFBQYDBwIFBAMBAAABAgADEQQSITFBBQZhcYEHEyJRkfAyYqEjQlJykrHBFNEzQ4Ki8SSywuFTY8MX/8QAGgEBAAIDAQAAAAAAAAAAAAAAAAMEAQIFBv/EADURAAIBAgMGBQMDBQEBAQEAAAABAgMRBBIhBTFBQlHwEzJhcZEiI6GBsdEUM1LB4WLxU0P/2gAMAwEAAhEDEQA/ALxgAgAgAgAgAgAgAgAgAgAgAgAgAgAgAgAgAgAgAgAgCMxwoqSABmSaCASb3GpY9r2eaSsqfKmEYEJMRiD5EA4RhST3G86c4eZNe6N2MmgQAQAQAQAQAQAQAQAQAQAQAQAQAQAQAQAQAQAQAQAQAQAQAQAQAQAQAQBqW/acmSKzZqJ+ZgCeQzPSMOSW8kp0p1HaCbFDa3ajYpVRLvTTwF0epxHpEEsRBbjpUdjYifm0774iZtbtatL1ElElDzpVvVqj6CIZYmT3HVo7Dox1qO/4QmbT3itM81mznfqSByrlyiCUpS3s6VKhQpf24/Hf7nNLanPzJxjXXgTvK19a7790djZu99tk4SrXNHBmvjor1HpEqq1I8SjPAYOq/Kv00GzZva7bE/xZUqaOFZbHqKr/ALREqxT4oo1NgQfkk176jVs3tdsj4Tpc2UdTQOvqvi/2xKsTB7znVdi4mHls/Yatmb22K0UEq0yiTkpa636Go30iZTi9zOfUw1an54tfodkGNiA9gAgAgAgAgAgAgAgAgAgAgAgAgAgAgAgAgAgAgAgDwmAOHtTe+xSK356VGim8eRpgOpERyqxjvZbpYHEVfLF/sJm1u1+WKizySx83P/iMxyaIJYpcEdWjsGb/ALkre3f+hL2v2j26dh3vdqdJfh9CMT6mIZV5yOnS2VhaW9Xfrr3+grT7W7klmZq51OZ/mIn6svxUYq0I/wCjXZ/Mjp7/AHgkJTtvfwRveQJ5xm3UjzX8sb+56a6kCGnBGXn5nYgLvFjGdTT7fBNsmL3kAIxoSfctpZLvvqRqBmxPKM69DS8U7uTZK+TkPWNbLiSZ5vyr5JFhrSFuhs5pL6rHR2Xt+0yadxaJssDJVdrv6fhPpG6nOPErSwuGr74L4t+w17N7VbfLoHMqcNb6XW6FCB6iJI4qS3lGrsKjLyNr8jTs3tikmgn2eYh85bK461ukehiaOKi95zquwq8fI0/wPWwt4rNa07yRMDLWhzBVhmGU4qcRnoQcjFhNNXRx6lOVOTjJWaOrGTQIAIAIAIAIAIAIAIAIAIAIAIAIA17ZbZcoXpkxEHmzBf3jDaW83hTlN2irirtbtKsMmoV2mt5IKCvEtT6AxDLEQR0aOyMTU3q3uJe1u12e1RIlLLHmfEw6nD1WIJYp8EdSjsKmtakr/gStq71Wq0f4s92H4QTT0yXpEMpzlvZ06WFw9HyR1OQ7k4n1JjSxZu1wt36GMzB5k8o2syJ1I9b+wAnQAc4acQnN+VWItT7zenv94yvRGsrc8u++oL8q9TD3Yi1yR+T1icKmlTQAZknIADEnlCKv5UYq1PDjmqzUV33oZrVYHlU7yU6lsQHFCcAcusbSjKO/Qio1qFVXp/UYvFwAjTQs/ctwSIGmpJjOvAjeTmbZJa6LTnGNOLN45uWNu++qPCPNugh7IxJf5y+AWmi15xnXizEcvJG5I11IEY04Gzz8zsQBHEn37xjOponBPS7ffepkBbyAEa2RKpVHwsN3ZptEyrWZdaCalRjm8s1GH5Wf9MW8LLRxOBt6jaUaq46fwfQFjm3kB4RbPOmeACACACACACACACACACAORtPeaySK97PQEZgG83ULUjrGkqkY72WaWErVfJFibtbtckJUSJTTD5sQBzAFajqIgliYrcdSjsKrLzu357/Il7X7TrbNqFcSlOiYeh+L6xDLETluOnS2RhqWstfcUrXtGbNJZ3dicyTnzrn1iFtvezowjCCtCJqs1MyBCxmU7b2kQv8AkCYzYjzp7k2em9qQPfvKGhs/E4tLvvcQ8PFozqR/b9WTFdAB795xjTibrPyq3fe8i1NWrGVfgjWWXnlc8LgCtKAanCFm9DDnGCzJWXVjDsLc+12og07mWfvMDeP5EwJ5mgxwrFmnh+LOLitsNfTTd/2LG2bu3Ydmp3k0hXp8b0aa3L8INNKCJ24wRx4xr4qfFsSd+96JdrCpKlBFRqhyfEwocKda6ZaxUq1Yz3I9Hs/AVcMm5StcTjd1JMRal95FvbZNa6CkYduLN1n5Y2776oiw826CHsjV255fAL8q+sZfqxG3JHvv9SRrq1IwrcEbPPzSsQF3QEmM6miyX0TZPxcFjGhJ9z0RA01JPv3lGdeBG8nM7997jd2dbe5myp+QlurH8taP/sLRvRllqFfaNLxcI7Ldr8f8PpTdyfeSlco6J4s7EAEAEAEAEAEAYrRaEQXnZUXzYgD1MYbsZjFydoq4sbW7Q7DIqO87xhogr9TQHpWIpV4LidCjsrE1OW3uJm1u19zUWeSq8XJY89KdQYglinwR1aOwYr+5L4Era++dstFRMntQ/dXAfpGHWkQyqTlvZ0qWCw1Hyx1+X/JwnmMcTU8zEZcu1uVjEZg868o2SI3UjxfweAnRep9/vDTizCcn5Y/IN8zekF6IxL/3L4PFpotYy78WYjl5I3JGupA9+8oxobvPzNLvvcQ8PFjGdSP7fq2TF7QAe/ecY0JF4nBJd97yLU1YmM68ERvLzSub+w9lzLTN7qUEU3bxZzSiggEgDFjiMsPMiJadLPvZRxu0FhUssNXuuWhsTcqy2NRPtDgsMe8m0wIGPdpkvMVPGLcYQpo87VxFfFy1d/Tgjp7v76WWfaJtmlArSVelzT95gSrCmlKoRQ4ivlCM1K6RithZUMsp8So95Xn/ANRMWe5JDHM1w060ihPzWep63Da0k4WijkG7xJjGpJ9u/FsmK6ACMacTdZ+VWImmrV4CM+yNXl5pX9gU+S9TB+rEX/hH57/6Tuscz6e/3jW6W4kyTl5meiUP+YZmZVGKPCp0IHv3lC6DjPcmkQIGpJMba8CFqCf1NtkhXRQOcY04s3WbljY9UZgmtffusYfVG8VdOMne/fdy8eyvaneWaTU4he7aud6WbhJ53QesdSMsyTPBV6TpVJQfBliRsRBABAGjtTa8izrenTFQaVzPIDExrKSjvJaVCpVdoK4l7W7WLLLqJKPNPngqnlmehpEEsTFbjq0diVp+d2/Il7X7VLZMqJZWUvyjHqTUg8iIgliZvcdSlsXD09Z6997xPt22J043pk13PmSf3P8AMRNt72dGnTpU1anH8GiW8yB79+cYsSOTW9pd99UQvjSpjNiLOnuTZ74uAENDb7luCRA3dSTGdSN5OLuSFdFpz9/vGNOLN1m5Y2PG4t0EZ9kayS55fALTRa8/f7QfqxG3JEka6kCMacDZ5+Z2IC7xYxnU0+3wTbOvsDYFotZ+yUJLBoZjfDUZhRm54ZeZETU8Pm1ZzMXtZUrwppX/AGLC2d2b2SSomWuZe+ac9xK/KgIB5G9FpU4QRw6mLxOIdrt+iMW3ZOxe4my5DSknBSVKSGWpGga4A3rnEVWdOStcvYDD4ylUU1HRla7Ot0yRNWcj3XWuQBqCKEEEUIP9jFaE3Hyo7eJwtOukq0t3Qz7W23OtLXpjM3kPujy9mMSlJ+ZmaNGlSVqUO+/YwWG2vImy54pWWwampXJl6qWHWNqM1GRFtGhOtQadlbVDf2jWFHEq2J4ldQCRkQRVTyxH6omxEXe6OfsitFxdOSu1uEkXtABFXQ7qz8EkQamrV5RlX4I0eXmlckp8l6mMe7Nov/CPyTVTqffH/wBxhtcCWMZXvJnf2ZsVLom2mZ3aH4VUVmNyGg/vG0YXOVjdrKk8lLV9eC7+DOlu2YLy9y7Y/F36KyjlRgp5mJVS03HHltTEt+f8IztsCzWhf+jmP3lKiTNpeYfIy+GYeAoeBjV01wLmH21Ui7VlddVvFefKZSVIowwxiHc9T0MZqpDPTe/j3/8ATWan3m6e/wCY3XoiGSXPI9lnyXrGH6s2g1f6Y/qWD2TbQuTJsnis5etJb+l2X+qLuGleFuh5nbdHJiM63SRecpqgGLBxicAEAfPvantCZMt8xGJupRVGmWJ9ajpHOrybme02TSjDDKS3sS2can0iJL0Lkqi4y+DwE6L1MZ92YTb8sf1YNXVqcoL0RiSlzyseCmgJjOvE1WTlVyXi4ARjQk+5bWyXffAgbupJMZ1I34fFtkxXQAc4xpxZus/LGxFqat0EZXojWVuaXwC/Kvr7/aHuxG3JHvvoZ7LZZs1+7lqzv+FBWnFjgFHEkRtCm5bkV8VjI0F9yWvRb+/gntHZr2d7k1CHpWlQfqMDCUZJ2ZtQrUqsc0E333/JubtbHa12gSj4ZYF+aRgblaBQdCxw5XjpElCmpO7KW1cZUow8OOjf7Fj7f3mk7ORZUpFM26AqAC7LXIYZD30sVauXRHIwOB8Z5p7is9q7btFoYvNcmvmTSnrlFKUrvVnpqVKNKNqcUl1Zl2Ju1abXQy1oh/zH8KH8uFX5gU4iJoUG9+hzsVtWnDSLzP03f9+BwkdkU8rVZ6ltA0oheVb5I50PKJHh1bRlGntmUZfVBWEfbGy51mmtKneBlzH9j5RVlHK7WPQUq3jQU1KyNDw8SYxqbfbvom333xLA3Omf1Vgm2N/ilfBr4DVpZHLxL/pWLitUpnmpqWDxl1on+zEKdLusVckkEgjiDQxT14HpPoavKV++/U8FdFpzjHuzeN+SPyBHm3QQ9kZabf1SOhsyWperfCgLEedMh6kRiKzMg2jXdDDvLveiGjd7Yxtc5jNqZaXQ4qRfmMA4l+YRVZSRqWxyMX6UFa54uci4djbvy5aABVUAYKoAAHkAMBE5Gc3evcqRNltMlKJc1fECmFSMa4fe45/xHOmnqbxlYp/eUmaonuAJoYy5tMLzrQFjxOZ41OsUaseJ6DYuIam6T3PVe4tMMcBj5xGvVnfmmn9MSLA6tTlGdOCNHfmlb2O1unbu6tkh6+Fm7puUzAf7wh6RNhnadjmbapKph1UXB/ufR2xZ16WOEXzyZvwAQBSnbVsy5aUnAYTFoeYyH/cesUcTG0rnqth1c1J03wKzFdF6mIPdnVV07Rj33+gMPNuggvRGJJ88vgitNFrGdeLNVk5Y3Jm9qQBGNDd57atJEPDxYxnU0+36tkxe0AEY04kiz8qsRamrV4CM68EaPLzSuSkgswSXLLMfhUAljyA/eNowlIgrYqlQjdq3uO+7nZzPnENaWKL/APFLIvH875LyWp4iLUMPFas4OK2xWqfTDRfkbrTtHZ+zJfdqFZh/lyvPzZtTxNeJEbyqxgVaGBrYh3t+pW29m8cy2zA7IksKCBdGNDTM9B5xSqVFN3PTYPByw0Mqdjv9lRQf1JrVgZZPndCuRTrfyi1Q8hwdqq+KSburIV2kWq2TndJDszsSWoQgxpi5ooAGGdaDKIVRlN3Z1ZbSoYeCjDh0Hrdrs6RB31rZZhGJBwkp0P8AiHi2HCLMKUYHDxOPr4l2b06LvU2d4N/pNnrLsi944wMw/CvKv8/SNKldLRFrCbJnP6qi0EM7dttotMljOcze9S4ATgbwJ1qFABJ0oDENKblM6GOw9OhhpJ2XRcb9+4zdrTBjZ5hFXbvBzAuZ+ojfE70V9iv6ZJq5X/i4ARV0O/8ActwSOpurtcWW1JNLEqapMoCfCcQcM6MFPnSvnE9CeV67jkbUwvjQTg7yRl3tmyntLPZ8UYAk0oAxzA4Up9YjqZXK6ZcwUa0aKUo2ZxG+ZsTgAMyTkAM41im/KiarOMFerOwybI3JtU1TM7sSgBUCZW+cjW6PgwrnQ4ZaxP8A08st2zlra9FVVGEdOr776HOsoKmYhwahBHFWxH0iGl5ibbSzUIyW6/7os3s/mLfmrl9t3nNZstGU/Rl5yz5Rfp+U8pLeWuuUSGoOaAkwB86bxTgf6kr8L2liv+kkV63vpFCqzsbJi3iYvpf9hWm086fzEET1VW3F2ICmi1jZ34shWTljfvvoTN6h0OhGhGIPrGItRkmjerTdWjKEuKPoncPagnSUmDDvEV6eRIBI6Go6R1TwLVnZjZAwEAI/a5szvbCXA8Uo3umv7U6xXxEbwOtsat4eIt1KBmDzNB5RSXoj1VRK/wBUtOhFaaLXn7/tGXfizSOXkjfvvoSNdSBGNOBs8/M0iHh4sYzqafbvxbBptMyq8yIKN/UxKtk0bUfdhVdWry9/tDXoLwerlf27/Y3NjyJcyfJlzKrLeYFZhgca3RXSrXQTmAYkpRTlaRT2hVqU6DlSVvUt+VZtn7Mkd6yhLxyFS7nE0Z2qx1wJPARclKMEebp0quKnvv1bErePtFnTwZche6lcMyOJ/vhyirOtJ+h3sLs6lS1azP8AAt7L2TarW32S1FcZjEhAeLY3jwWsIUHLVm2J2pGj9Md/RfyO/wD/ADRJdmZ5k0mZQkMxCJWmSrXrmThpE06MVHQ5mH2jVnXTlqugkbA2vNss4TpYGV1lJoHWtaGmRBxB041INenVyPqdjG4D+qSssrXEsab2uSrgrZquB956gHoBX1ETf1PRHMWxbP65r9BK3h3ytVrNGN1NFGAHv661iCdSUt7OthsHTo/24XfVnCkWeZMcS0BdzkiDHn8o4nCMQg5eVEmJxMaCvVlb0W/v8FnbmbnLZVNpnsO8umrfdlrmVXzJpi3QUFa3oxUEeVr16mKqWS9kJe+W2za55ZfDKQXJdfIZtzJ5GlIpVJqcrnpsDhZ4ell3dRfN3UkxpqWXk4ts9L0FaBR5nCMWv6mXNxV7KK6s7uw90LVaqGhlyz99wakfImBbmaDyJizCg+JxcVtaK+mm7vrwLH2XuvYtnJ3s0gPT43o0w/lGSDlQecWLxgjjqNfFT0u2cHeDtIahl2RRKX8ZxY8vY6xXniG9InZw+xow+qs/0EWXayX7xjeJYltLxJ8VeJrFW7TudqrRhXoumt2743DhsLaKoUa/3bLhLnFSyMhN4yZ6r4gAalXGKknAgkG3TqWPGYjDzpScJqzRaWyt7AU+0RcBW9LnSHQ8iXVvVQeETeKitkYu757/ACGW0qQwvMKMwNQgOdSMCeArj9NJVL7jeMNSo7XabwCjBVyr1xPHEnrFOpK7PWbKwbow8Se9/hGgXrkK8Yxa29l5zUndRuemupAhpwMvPzOwSyK4Ekwd7GKbgpaNt998S1eyDaX2ZlH/ACphA/JM8Y/3Fx0joUJZoI8htSj4WJkuD1+S4AYlOeewBq7VsgmyZksit5SOtMPrSMSV1YkpTyTUujPlzaNmMuY6UqVYrjwOccq1nY96pZ4KaV7998TWaupAjKtwNXn5pWMYK1AALsSAAASSTkABiTwxjdRlLRFepXoUk5Sd7D9ux2dzJtGtNUGfdSzjT53GXJfXSLUMPFay1OBitsVan00vpXpv79hqm7Q2Xs1boClvwSFUk82JF48akxJKpGJUpYOtXd/3NDbcmxbTsT2uyyzLnoWVgwAYlKGjUNGwKkHyJ6R1YxnHMW8DXq4Wv4LKocV+JuY9/wAxTT6I9LOKatUl+nf+yw9kXtobMEhRfnyWEtakCpBUKxLHIoVJOt1qVOEXZLxII8tTqf0WJlpdd2OhsfsxEvx2x1e7iVHhkrlnXGZ1oD+GMwowhqa4naWIxH0rRdEbO2d+bJZB3VmUTZgFBQURaaAe6eRjE6yW43wuzJVHee78ldbb3itVrYtNc00FcBwp/GEU5TzPVnoqGGVKNoRS9e//AKcuXJLAsA7KuDMqkqDStC1KA0xoYzlla6Qdei55JTu+iOlsrd21zwrSbPVGrR2ZFGBI1N7MeRiSOHlJXbKVXa9ClJxhHVDbsfsrnuQbRNoPwSQf+9hh0XrE0cPFbzmV9s16mkdBmJ2dsuWVFy9+CX4mYj8b4knnUjyiSVSMCpRwdfEyuk/crze3fGda/DUSpAyQa/m/tX1winOq5ux6PDYGOFjmk0vVmnsndO1WihSUQpyeaSgPIULkf6acY3jQm9+hXr7Vw8HaN5P4X8nd2h2cWmTIadfRroqVVGH1Jx9NYTw9lc1wu13UqKGVRuQ7MkszTnScqNOJVpbOATcANRLByKkFiRjiPKJcO1l0KO2I1FWvJ3VtPT0Gbe/fs2Z2s9mk0cYGY/8AH/r1EYq17aIkwOy/FSnLVFaWq1Wi1TaMzzZjYhVqx8q00Hmx6mK6UpvRHYqTpYSFpSS9FvG/dvszeZR7SaDPu0bT55n8L+qLUKKW84GJ2nOppT0X577uYu0HZ1jkiWLM0sODR0QUFCPiqMDkPrxiDEZL6bzrbIeIjG0/L6ijZ7SV+FuY0PSK+qOtVpUa6yzSffe7Qym1k6L6Rv4rOc9iUG9G/wAGKbOJzMaucmWqGAw+H+pLXq+7f7MBmeQr795xjL1LDqt+VX773nhrqQIzpwNXn5pWIC7oCTGdTT7d9E2yYveQAjGhIvE4JJDZ2cWopbCoymS2rzlspU+jMOsWcK96OFt+mvon7o+grBNvIp4RcPOGxABAHz72q7L7m3OQKLMF4c9fQUjnV45Zns9lVfFwyXTQSBd0BJjTUsrJfRNstXsrWS1mQsiXpTTQxCi8KsWz1JQrj00joU2nFM8djKco4iUXpr++442+W/rTC0iz1lygSpp8TUNDX30itUrSeiO5g9nUaaUqmrFPY+zJ9rmXJK6+OY1SqfmP3m8lzPLGNadFz1ZLi9pQw6y00s3e/u5dGwNzytl/p5bmWCpBmFbzEt8bUqBeNcNBhgQKRdyq1keY8aTqeJLVi3beyJaN/S2m+6it2ZcNeFUpc5kGIZ0E1ozqYfa1SnL7kbr8ixubaplit/dTfD3lJTA4UcEmWfUsvN40w7s3En2vS8SnGurdP4NztL2xaTaDLd2MsgFFGApTh/HnjWNKzlmtfQsbMp4fwlJRvITrFZZ05+7kyy7eSjLixPhUcWpGkKTkW8Tj40FZ2T6Lf37lgbudmdftLW9+mJQErLUfOxoW+g5xbhRjE87ido1q7snZHW29vFYLNKNmloJpu3bqUVFHCg/inONataCVifA7OxEpKotLCNuzvhOsUvu1EtgGZlvAkreoSBQjCtTkcWMQxrySskdKrsmlOo5zlv4IybV3/ttoBUzGCnRQFFPKgAB64xrKrN72TUcDh4eSF369/wAC6FmzXCirzHNFUYsx65ADEk0oATGkI5nZE+Ir/wBPTzTdl0XEs3dTciTZ1FotLK0xcS7fBL4Swcz8xx8qZRfjCMEeTrYitip9eiDbnaOsuqWOWCf/AJXoeoGI+hEQzxK5Tp4bYs3rV0Eu276W2Zev2qYQwKlVNFIOfhGHURA6s2dOGAwtPhdnFsdraVMSdLXxS2DjStM16io6wpyyyu2ZxlDx6DjCPqi2bVuem1Jku0CcVlmWCQg8cyuK+I4KKU0JqTlnFx0oylmZ5unj61Kl4UHY2XmbP2XLKALe/BLxZiMKu+JJ51I4QlUjAxQwdfEu6T92I+8e/lptFUQiTK/CuZHH2ekVZ13Lcegwuy40dZb/AFFFEvuFUPMmMcFUFmJ5DHrGkYzluRZrV8PQV6krm9tDZNokXe9ld3eyqVOnykiv9jCcMj+oYXFrERvSVjRJ829I19kWG0vNL4AHyXqf/cY92E7+WPyBrq1OUFbgjLzc0rd99URF3QExnU0WTgmyfi4ARjQk+41wSJJKNQAC7EgKAKkscgBqYzFObsjSrKFCLqVGWz2f7mmV9o9DOcUYjEItQbinXECp1IGgjoU6agrI8djcZPE1M0t3BFrWeSFUL5RIUzLABAFY9tuzL0mVaAMUN0ngcvqfpFTFR0ud/YVa1R0+pTDV8wB794RUVj0Us996SOzuRtYWa2S2veGb9k/lVj4D0ag4BjFrDyd7M4O2KEXBVIu7W/2Hs9mqzp0y0PMAklqiUlQSKCpmPhdFa4LjreGUSqhG92c+W1KzpqnDTTVrezZt+8th2cglSgruuSIKIp40z89K+cZnWUdEYw+zqlV5puy/Ii7e35tdqqCxVPwLgtOWR5xUnUlLezv4fBUaXkhd9WY9wknG3y3RiO7DNMIrgjIyhTobzEYfKTpEuGWraKO26n0RhJq++3RG52pUFsDLXvO6RiRo95yDzwBhVbVS6M4CEamEcJK97jtYt35e1ZdmmzyyDug7IhHiLqpu3xiFBvVpicMRTGw6cZO7OLSxdWjB04O1ydu2xs/Zid2gVmGUuVlXzJ1PH1MYlUjEkoYKrXd3ohA3h33tVq8I+zl6KuH7fvjzipOq5b2eiwuAjR8sderFhvmb0iJeiLsl/nL4OnM2BNSzJarqGW4VhRiWAalLwoADjkD5+UTVKTirtlDCY+nWm4Qhr6nNNdSBEKtwOi89vqdix+zbYay5Rtcz4pilgT9yQMRjpepePC75R0KcckdTx2MrPE1/p1W5C9vjvVMtb3JZuSFwUZXvmP8Ab14VKtVTZ6LA4CWHje1n1FY01JPL3+0R68C48nNK/fe4kvBfWMP1ZtG/JH5JrJdgx8RC/EVUkDAnE0oMAcD5Rsou10iOVWOfw5z16FgdnO02mWWdZFch0BuHW49SAK+TXl4ArFyDcqfqeZxNOGHxd7Xi9dfUQrb3gmETG8d67qSTWgA1PCkU1G7stT00qqhTzSkoxGTd/s/tFoIabelIdM5p6ZS+tT8sWoUP8jg4raqelL5f+l37D9Ksez9lob11WOag3pjnPxscemmgiSU4wRQo4WvipXXyxA323vFtCyxLVJaNVaDxZEUJ6/8AEValVz3I9Dg8DTwyvKV2+m4VlPkvUxD7s6Cf+EfkGrq1OUNOCMvNzysRFNATGdeJosnKrk/FwAjGhJ9y3BLvvqerLxGbMSAABUljgABqT5QV5OyNKjp0IupUe4tXcDcsyyJs0Az2HMSlP3VOrebdBhn0KVJQR5DHY6eKnd7uCLXsVkWWtBEpRNmACACAOJvns4T7HOl63SRwIGfpWI6kc0Wi1gqvhV4y9T5mnpQ4g1ypx4xzY33Ht6ii7SauY2UkEUuj6xsmk7kU4SqQcLJJ6d/9LNn7Um2rZN9HYOv+KFNKsnhbLKuY/OIu1G5QvE8xgoQpYpwqlZX9QONT+8UrX3s9OpKKvGOnVnZ2DuxabWQVFyUf8xgaEfIuBfngOMWKdC+rORjNrKP003d/gsyXZbLsmzVbPMKaGZNcjNuJ6DkBhYlKMEcahQq4up16sqfa20JlomvOmEAua8hkB0FBjHPk1J3PX0qUqVNQVkkZ7NvJOkyP6dZpEsV6AkkivlUnOtNKRJ4lRqxU/o8JTk6j1e/0NzYW6lrtZvhe6Rse8mAlm4qmBOmJIBrhWJI4dvWTKdfbMaf00Ir3HeV2bWOSl61zyAfvTZqyx/pC3f5ibwqceBy3jsXWekm/b/hw97Nw5cmQLXYpyz5BrUhle7QmtGXBhgR5gimNcIKtKyzJ6HV2ftBzl4VSP1df59T3cKcJ9mn2CZmAWT8jk4Dk9ekwRLTaqU7FLFwlhcXn3J6/yIlvs1xnl43gStfLSv8AMVoJ5kmdvEVIeBKUbt2ffehaW/loMiwiVL8N9ll8paqSQP0gciYs4iVo2OJsei51XPoVWbupJinrwPSPJzO5Ja6LTnGHbizeLlyRseNxJJNAFUVJJwAAzJJwpSNopt2iiKtUjTi51Z7i2d2dhpZLC/f/AIWmTvzEDwjzoAq8SCdYvtKMLM8lCdStiVKG9sQdzbW0u3SGqFDlpZ4hlJVerqlONIrYaSzWR2ttUpujGUuD/cto2LZtkVrVMCpNclmYm9MNfurU+BcgAKDDUxabjBanBhTrYiSSuxN3g7R5jAy7GolJlfPxH+306xWniL6I7mF2Nl+qoV/aZ5di0x2duJ905RXu2dZQpxVm/gitdF6mMP1ZvG/JH5BuLdBBeiEr88vgitNFrGdeLNVk5Y3Jm9qQBGNDd57atJHoSlM2JIAGZJOAAGZJyAgrydkYm6dGLqVHuLR3A3KZCJ04AzyMBmJKnMDzcjNugwqT0KVJQR5DHY+eKnfcuCLbsNjWWtBEpQNmACACACAPGUEEHIwB80b67OMi2TpeXiJB4E5+tY5dSOWdj3eDqurh4yT1sL5pq1eUNeCNnl5pXHTsvtX2s+znBHQOAc6g3GI0yKV5DjFug7xcWec2tHw60asFb/g7JuVsyxhZs11LUvXp7Bm86rLAuinmFrxiVRhAozrYnFPVt/t/Bytt9pMmVVLHLLtl3jZDlp+/SIp10txew2yZS1qfBW+1NpzrQ5mTplWPmcq6CKjlmd956GnS8KOWNoohsmwrPnypHeXb5IvEE0orNQCoqTSgxpj0iWlDO7PQpY/ErD01KP1O/Hv/AIWZuz2dJJ/6i0Mj0YlaiktAD4Wofic4HHI4DEVNqFNQV2cHFY2pipZYqy4JGPeTtElyayrJRmyM04/p914iIp13uiXcJsqNs1Z/oiuNobVmzmLuzuzHWpJJyFPvHQDOK9pTdmzs3pYem5RjZLi+/wAFkbBsTWPZc7vzS8syY61wDOAFQcfCo51i40oU7HmYVJYjF5912V3u9tMWa0ypwrdBuzD/APW2DE8sG/0xXoSalrxOztShCpRvFNuOv6cRg7TdlETO9WgWaMT89PeWgEZqpQmpGmz6ksRhpUb2srHV3rb+s2dKtKAsFo7AY3SQVYHk1QT5gRLXTcU0UdlVIU6rhU7ZXi10AHP3+8UtOLPTpy5Y2Mtjskyc1yUrTW/Cgy/MckH5sIkhTlLcinicZRpf3J3fRd/uWZuXuIJB/qJ5UzAMPwShrQn4m49ANTchBQR5nFYqeJnZLTgjidoO9Anf9NIaklTVmGcxh/A4fxjWq1c2iO5s7Z7oLPN2bEhSK1FSa1B4jI+8YivJa7joyjSkrNZjYtVrmzMXYmn4jX2ecYbT36m8ISivpSijWNNSTDXgYeTmdyS10WnOMacWbxzckbd99Qbi3QQ9kYkv85fB4tNFrz9/2jOvFmscvJG/ffQka6kCMacDd5+ZpAEAxxJwAzJJOAAGZJypBXk7IxPw6MfEm93Us/cDctlYTpy1nH4VzElTnzcjM6ZDUnoUqSgvU8hj8fPFT6RW5Fu2CxLLWgziUoG1ABABABABABAFN9tuzLs6VaAMHF08xl9B9YpYqNnc9RsKtmhKm+BVuOi9Yr+7OvZp2hElJnMjBxMKsK0KmhxwOX7RmMmvKRVaUKn91pmxZlnWmZ3ctXmucTjgPmYnBRz6RJGnOZVr4vDYVaRu+g/7A7NAR3lqmXgBUqrGXKUcWwZudVHCLMKEInCr7VxFZ2i7Lov53nRtbbBs/geXJmMM7khXP6iMeYJjZ1IIip4PE1NUn/s5u19iWWWsnauzWvSlYs8vEUXxJMADYqaXxQ5EDQxo0oPOtxZhVqYmH9LPeno/9Mz75bQNq2ZKnyXYSzi6DPUFTTyIYH8vGFe7jdDZfhxrONRalZWWS8xxLkyi7nJRnTzNchxOHGK0Kbmzu4jGUsPG7X89+5Z26O5a2cf1NpZS6itfuSvO5X4m+b0pjW5CnGmjzWKxlbFys93BC9v1vYtoPcSAe5Q1J/Gw15D3kIrVqjk7cDt7OwaorNJXl+wnMScCVA6RBodSWZq0mkiwNlkW7ZRlnxTZHhrqbgBU4+a3anzDRdl9dO55ehbC4xweq7scDdHemdYXNEvSifHLJoQciyk5GmYOBpmM4ip18iszpY3ZbxD8Smsr/ceU23u9OF+bIly3OJU2YnHiJassTqpT3nJngcWvpev6mxO352ZIS7Z5bTKDwqqiWnpmPQRiWIgjelsjETeqsIu9G+totfgLCVK/AmFRx91itOs5naw2zaeH1b1FYXdATEepdWTgrk/FwA9+8YxoSfctwSIG7qSYzqRvJxbbJrXRaRh24s3i5ckbEWHm3QRleiNZf+5fALTRa84e7Ebckb+/f8EjXUgRjTgjZ5+aVgCAY4n1rjlQfxjBZpOyMSVKlHxJvRdSzdwdzGDLPnL9qfgQ5SgdT85HpkNYv0qSgvU8ltDHyxU+kVuRb2z7EJa0GcTHONuACACACACACACAE7tU2Z31gcgeKX4x00HOgiDERvA6eya3h4hX4nz1NA1OHlFCPoetqpXvKQw7kbCkWsz0e+HVUuN91Q14E01NRkdMot0qalHU89tDF1KFdeHutxLKtEmxbIkgYeYWtXmNT4nOZPvAZTynGCObQw9XFTu37tla7yb5z7W1LxWWPhRcAPT+OtYpzqTl6HpMNgqFBfSszF0lqZU+pJ4eZ+sRqKbtvLdSpKnBydopFm2Cwmy7ImrOwYyphYHR5tbqcwWUc6xekstOx5ShN1sYpvi7nI7OLWsxZ9gmFlVwXQilQGosyl4EYG6wBr8RjWi1KGVljaMJUMQq1NWv+/EtXY26FlsyjulCJmSTVmPm7HE/sNKROkktDkznKpLNJ3Zi3gsuy5oC2m0SyBkhtJRf0I63utY1k4cWT0qWIf8Abi/0TF17Ju/LzNmI4SzM/wDFqxr4lNcSZ4TGS3xf66fueS9sbvJgoldLIw//ADh4sOpqtn4lvy/lCjZdtWeybRnPJq9lmqAaAChGKmhIwALA/mPlEMasItrgdSts/EV4Qk0lJaMVtuTZTT5jSi3dliVrnx5Y1iu9/wBKOtTjaCVWV36Gmvyr6+/2jV+rJo/+I/Pf7Aa6tTlBeiEr88rexEU0BMZ14mqycquTN7gIxoSfctrZIh4fMkxnUjfh31bbJiugAjGnFm8c/LGxFgNW6CM+yNZW55fALwXqYe7EWuSPySusczTlGt0iTJUlvdgKKueenmTwH/MZWaWiNZqlRWab+e/5LJ3B3Ma8s+cv2mctD/lA/eb5/wDt55X6VJQXqeS2htCWJlZaRW5Fw7OsIlrTWJjmm5ABABABABABABABAGC3WcTJbyz95SPUYRhq6sbQlkkpdD5d2vZDKmzJdMUYgA+VcPpSOU1Z2PfQnnpqcVcybA2w1knrPJF3BZi4/wCGWUsQBqKVGevnE9Cai7dTl7VwsqtLO3rHh6DL2oWSs1LQKsrrTOoBGOHPE4cI2xEXe5BserB08mW7QlyZcx2EtFJZvhVRVj04ak0pEUIZnodPEYpUI3m0vTi+/wBCydzNxu6ItFpIMxcQK1SVxr95+OmnnF2FNQR5XFYypip24cEcXf3ejvyLPI/wUNS3428+Q9D0BitWqKWnA7uzMFOgs7X1PrwFbZtvNnnS59amW1SBqhwcdVJ60jWjLLLcSbSoeLQd5arVIcu0uzljKtKeNWUCuYyqCOmvERJiI63uU9jVU4uCjdoRmZtWoOcVtOB3Gp8zSMfh4sffvGM6mn2/Vkxe0AEY0JPucFZEDTUkxnXgiN5OaVyS/Kvr7/aMP1ZtG/JHvvoDDzb0gvRCV+eXwRFNFrz9/vGdeLNVl5Y3773kze1IEY0JHn4tIh4eLGM6kf278W+++JMV0AEYduJus78qsHdVzNYxm6G3gt+Z99+zJyJd5rqKXb8KKXb0AJjZQnLciGpiMNQ80l+7GHZ25dunZShLHnMahpwVbx6GkTRwr4s51bb1KOlOLf4G7ZPZNWhnTXbggEteWrehETxw8EcqttjE1NzsvQddi7hWWz0KSkVh96lW/W1W+sTJJbjmzqSm7ydxnstiSX8IjJobEAEAEAEAEAEAEAEAEAEAUJ2u7L7q3FwKCaL3XU/UDpHPxEbTuew2PV8TD5emgggLoCYj1Llqe5K5ZO6MgbRsIskyYZbSnVCwAZrgoVpU4EpRanVCaHKLyUasVc8pUlVwNeSjp0/0Mr7P2fslWJIB1xvTX1F9s+noI2cowRDClWxU7u7fVlfb177TrXWXLHdSfw6kfN7P8RUqVc2h6PBbP8DW2vVimR5t0EReyL7S55fAL8q+sPdhW5I39xilbyf9AbHNQEgUR72QDVWop90YDHGg8omlWzRtY5lHZjo1nUz2XQXBd8iffvOIdTpfb4Jsn4uCxjQk+56Igaakn37yjOvAjeTmdyS10WnOMe7N45uSNgYfib0gvRGJL/OXweCmi15+/wB4zrxZqnHljcnRjrTlGt4kuWo97seGWoxJ9TGbt7jDpwirzfyb2z9mT53+BImODkQtEP8Arai/WJI0JyKdXauFpaJ39u7DTszs2tczGY6SxhgoMxuNfhUc8YmjhVxZzK23pvSnG3vqOOyeyizrQzA00/8A2Nh+laKeoMTxpQjuRyq2PxFbzSY6bO3akylCoiqo+6qhR6DCJCmdSVZlXJRAGaACACACACACACACACACACACACAK47atmX7Mk4DGW1DyP/JPSKuJjeNzubDrZarg+JSL18wBFNWPSzz332R3dw9qiz2xPEbs2ktvK9Wss/q8P+uLeHk72ZwNs0IuKqRd2tH7cDNv9Y5ku1sa1V/EpJyrmB9CecRVo2lqX9m1nUorIkrbxZIGrV4CI16IuPLzSv7Avyr1MYfqxF/4R+T1q6tTlDTgjaWbnlYiLugJjOposnBXJ+LgsY0JPueiIG7qSffvKM6kbycW2SWuigc4w7cWbrNyxse92TmffvzjGZLcbeFKXmZ6iCoUCrHJQCzHkBU/SNkpy3Ec6mHoedpfud7Z+6dtnUuyCg0M03P9tC4/TEscNJ7znVtuUYaU03+F/I27K7KHahnTmPyy1CD9TVJ6BYnjhoLecuttrET8to+w6bH7ObJJoRKS8PvN42rwZ6kdImUUtxy6lapUd5tsaJGy5a6VjYjNxUAyEASgAgAgAgAgAgAgAgAgAgAgAgAgAgAgAgDk71bPE+yTpR1Q/QV/uOsaVI3i0WMJV8KtGXqfMVplXSQwxUlSOIMcxX3HuamVpSauYyGIoBd45EcRTLpGyai7kVSm6sHBxSTOptzb821CWJzKe7rS6AKk0qTTlpxjedSU+BWw+Do4dWUm7nLXgvUxG/VluP8A4j8g1dWpy9/vD2Qlfnl331IimgJjOvE1WTlVyYDHyHv3lGPpJLVH6B3QzJ9YZnwHgxWsmbVgsUydhJlPM4opK9W+EdSI3VGpLgVam0cJR5k/bXv9xn2Z2eWyb8dySD5/aMOYWi/7jE0cL1ZzK23/AP8AKPyOOyeyaSKGaZk0/M11f0pSo4EmJ40YR4HKrbSxNXfLT00HTZW6dnkC6ktEHkihR1pnEpSbb3nZlWNFyUQMGYCAPYAIAIAIAIAIAIAIAIAIAIAIAIAIAIAIAIAIAIACIA+bd/tmdxbZyDAE3l5HX6E9Y5lWOWbPc4Cq6uGi09RYNNSTGNeCN3k5pXJKfJfWMP1Zsr8kfk9uE5n09/vGLpbkb+HOXmkF1QQNTgBqScqD+0ZWaW40m6FHWbS9+/8Ah2tn7tWydS5Z3A/FM+zHo3i9AYljhpveUK228PDSF3+ENeyuyuc+M6dT5ZS/+bjH9IieOGit5yq23K8vIkvy+/0HTZHZlZJVCZSs2dZlZhqNReqAeQETxhGO5HLq4irVd5ybG2zbHlpTDKNiE3UlAZAQBOACACACACACACACACACACACACACACACACACACACACACACACAKn7adhOxl2pELKAVmFRW75FqZCgGOWfmIqYmm3Zo9DsTFwgpU5u3S5U9jkNMNJMtphy+zUtTmQKDrFdUqkuB1547CUuZfpr3+oy7N3Cts2lVSUPnN5uipUdCwiaOFfFnNrbej//ADj89/7G/ZPZKmBnPMmcK92vQL4h+qJ40ILgcqttXE1Oay9NB22PuZZpA+zlonndUAnmcz1iaxz3Jt3Z3ZNhRclEDBsAQB7ABABABABABABABABABABABABABABABABABABABABABABABABABABABAGrMsMsmpUQBmlyVXICAMkAEAEAEAEAEAEAEAEAEAEAEAEAEAEAEAEAEAEAEAEAEAEAEAEAEAf/2Q=="
          alt="" height="200px" width="200px">
        <h4>Flexi Pricing Packages</h4>
        <br>
        <p>One size never fits all! Choose a balance of time and kilometers that works best for you.</p>
      </div>
    </div>
  </div>


  <!-- end of advantages -->

  <!-- covid 19 -->
  <div class="bg-secondary p-5">
    <div class="container covid bg-light text-center border border-2 shadow-lg rounded  my-3 mx-auto p-4 ">
      <p class="text-danger" style="font-size: 35px; font-weight: bolder;">Your safety is our priority-AUTORENT is your
        partner in safe travel</p>
      <p style="font-size: 16px; margin-top: 2px;">To ensure you travel safely, we have taken stringent Covid-19<br>
        safety measures to protect each of our guest</p>
       <div class="row">
     
        <div class="mx-auto col-lg-3 col-md-6 col-sm-12  mx-auto my-2 text-center ">
          <img src="https://www.avis.co.in/images/disinfecting-cars.png" alt="">
          <p>Disinfecting cars before
            & after each ride.</p>

        </div>

        <div class="mx-auto col-lg-3 col-md-6 col-sm-12  mx-auto my-2 text-center ">
          <img src="https://www.avis.co.in/images/equipping-cars.png" alt="">
          <p>Equipping cars with hand
            sanitizer & disinfectants.</p>
        </div>

        <div class="mx-auto col-lg-3 col-md-6 col-sm-12  mx-auto my-2 text-center ">
          <img src="https://www.avis.co.in/images/chauffeurs-times.png" alt="">
          <p>Chauffeurs will wear masks
            & gloves at all times</p>
        </div>

      
    </div>


    </div>
  </div>











  <h1 class=" text-center font-weight-bolder display-3 text-warning  text-capitalize bg-info" style="font-family: 'Orbitron', sans-serif;">our car collection</h1>

  <!-- cards -->

  <div class="d-flex bg-info justify-content-around pb-3 row row-cols-2 row-cols-lg-5 g-2 g-lg-3 border border-info p-0">



    
    <div class="card shadow-lg rounded  " style="width: 18rem;">
      <img
        src="https://qph.fs.quoracdn.net/main-qimg-3073bb2def647238ebf782e6aa36bdac"
        class="card-img-top" alt="everydar cars">
      <div class="card-body border border-warning border-2 mb-1">
        <h5 class="card-title text-center text-danger">EVERYDAY CARS</h5>
        <p class="text-center" style="text-transform: capitalize;">this category consist of cars from various brand such as maruti suzuki,honda,hundai,tata,ford</p>
        
        <div class="text-center">
        <a href="everydaycar.php" class="btn btn-primary">Explore</a>
        </div>
      </div>
    </div>
    <div class="card shadow-lg rounded" style="width: 18rem;">
      <img
        src="https://www.rentalcars.com/images/rc-guides/luxurycarpic1.jpg"
        class="card-img-top" alt="luxary cars" >
      <div class="card-body  border border-warning border-2 mb-1">
        <h5 class="card-title text-center text-danger">LUXURY CAR'S</h5>
        <p class="card-text text-capitalize text-center">this category consist of cars from various premium brand such as 
          Mercedes-Benz ,BMW,BENTLEY,VOLVO </p>
          <div class="text-center">
        <a href="luxarycars.php" class="btn btn-primary">explore</a>
        </div>
      </div>
    </div>
  </div>
  <!-- cards ending -->


  <!-- why AUTORENT -->


<div class="">
  <div class="container mx-auto  text-center mt-5 bg-secondry border border-3 shadow-lg rounded p-2">

    <h3 class="text-danger text-center mt-3">WHY AUTORENT?</h3>
    <div class="row">


      <div class=" mx-auto col-lg-3 col-md-6 col-sm-12  mx-auto my-2">
        <img
          src="https://previews.123rf.com/images/get4net/get4net1101/get4net110100446/8637671-illustration-of-best-price-tag-on-white-background.jpg"
          alt="best price" width="200px" height="200px">
        <p class="text-center">Best Price
          Guarantee</p>
      </div>
      <div class="mx-auto col-lg-3 col-md-6 col-sm-12  mx-auto my-2">
        <img
          src="data:image/jpeg;base64,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"
          alt="best price" width="200px" height="200px">
        <p class="text-center">24x7
          Customer Care</p>
      </div>
      <div class="mx-auto col-lg-3 col-md-6 col-sm-12  mx-auto my-2">
        <img
          src="data:image/png;base64,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"
          alt="best price" width="200px" height="200px">
        <p class="text-center">Customer
          Satisfaction</p>
      </div>

      
    </div>
  </div>
</div>
  <!-- omkar -->






  <footer class=" conatiner-fluid mt-5 border border-info bg-primary ">

    <h1 class="text-center text-warning text-uppercase">Feedbacks</h1>
  
    <div class="text-center">
    <div class="row text-center" >
    <?php

$conn= mysqli_connect('localhost:3307','root','9822920917');

if(!mysqli_select_db($conn,'autorent'))
 {
   echo "database not found";
 }
 else
 {
   $query='select * from feedback';
   $query_run=mysqli_query($conn,$query);
   $check_cars=mysqli_num_rows($query_run);
   if($check_cars)
   {
        while($row=mysqli_fetch_array($query_run))
        {
           ?>
        <div class="toast mx-auto"  data-animation="true"  data-autohide="false" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="https://thumbs.dreamstime.com/b/cartoon-man-black-suv-car-happy-cartoon-man-black-suv-car-happy-eps-vector-illustration-174797497.jpg"  alt="" width="50" height="54" class="d-inline-block align-top" style="border-radius: 50%;">
                <strong class="mr-auto"><?php echo $row['email']; ?></strong>
                <small><?php echo $row['time']; ?></small>
                <button type="button" class="btn-close" data-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
            <span class="text-danger text-capitalize omkarkhaire"><?php echo $row['feed']; ?></span><br>


            </div>
        </div> 
        <!-- endtoast -->
        <?php                       
                }
        }
        else {
                echo "no feedback yet";
                }
    }

?>
</div>

  </div>
  </footer>





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
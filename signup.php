<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <title>SIGNUP</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        
        @media(max-width:700px) {
            .login{
            
                width: 100vw;
                height: auto;
                margin-top: 80px;
                
                 margin-top: none;

            }
            
    
        }

   #omkar{
     border-radius: 50%;
     border: 2px solid rgb(5, 5, 207);
  
   }
   #quotes{
     letter-spacing: 0.2em;
     word-spacing: 0.2em;
     text-decoration: underline;
   }

    </style>
</head>
<body class="bg-info">
    
    
    <div class="container  login mx-auto w-45  border border-5 pb-5 pl-5 pr-5 pt-2 bg-light shadow-lg mb-4 mt-4 ">
      <div class="text-center">
        <img src="https://thumbs.dreamstime.com/b/cartoon-man-black-suv-car-happy-cartoon-man-black-suv-car-happy-eps-vector-illustration-174797497.jpg"  id="omkar"   width="200px" height="200px"  alt="car image">
      </div>
      <h1 class="text-center text-primary font-monospace display-3" id="quotes">AUTORENT</h1>
      <h6 class="text-center mt-0 font-italic text-muted " >Renting Car Made Easy</h6>
        <div class="row mt-5" style="font-family: 'Times New Roman', Times, serif;">

        <div class="col-lg-12 col-md-12 col-sm-12">
  
            
        <form action="signupPHP.php" method="post">

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="fullname" required>
                </div>
              </div> 
              
              <div class="row mb-3">
                <label for="phoneno" class="col-sm-2 col-form-label">Mobile NO</label>
                <div class="col-sm-10">
                  <input type="PHONENUMBER" class="form-control" id="phoneno" name="phoneno"  minlength="10"  required>
                </div>
              </div>

        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" name="email"   required>
          </div>
        </div>
       
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="password" required minlength="8">
          </div>
        </div>
        <div class="align-item-center text-center">
        <button type="submit" class="btn btn-primary ">Sign Up</button>
        <div class="mt-3">
          <p>Already Have An Account?<a href="signin.php"> Sign In</a></p>
        </div>

      </div>  
    </form>
    </div>
</div>
</div>
    

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>   
</body>
</html>
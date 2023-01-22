<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="d-flex justify-content-center"><img src="/RegistrationForm/ELTSLogo_dark.png" class="img-fluid" alt="..."></div>
<div class="d-flex justify-content-center"><h1>Business Registration</h1></div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
            <form action="index.php" method="post" class="row g-3 mx-4">
              <div class="fw-light fs-3">Contact info:</div>
                <div class="col-12">
                  <label for="inputname" class="form-label"></label>
                  <input type="text" class="form-control rounded-0" id="inputName" placeholder="Name">
                </div>
              <div class="col-12">
                <label for="inputemail" class="form-label"></label>
                <input type="email" class="form-control rounded-0" id="inputemail" placeholder="E-mail">
              </div>
              <div class="col-12">
                <label for="inputphone" class="form-label"></label>
                <input type="number" class="form-control rounded-0" id="inputphone" placeholder="Phone">
              </div>
              <div class="col-12">
                <label for="inputpass" class="form-label"></label>
                <input type="password" class="form-control rounded-0" id="inputpass" placeholder="Password">
              </div>
            </form>
        </div>
        <div class="carousel-item ">
                 <form action="index.php" method="post" class="row g-3 mx-4">
                     <div class="fw-light fs-3">Address:</div>
                        <div class="col-12">
                          <label for="inputname" class="form-label"></label>
                          <input type="text" class="form-control rounded-0" id="inputBname" placeholder="Business Name" name="business">
                        </div>
                        <div class="col-12">
                          <label for="inputarea" class="form-label"></label>
                          <input type="text" class="form-control rounded-0" id="inputarea" placeholder="Street/Area" name="area">
                        </div>
                        <div class="col-12">
                          <label for="inputcity" class="form-label"></label>
                          <input type="text" class="form-control rounded-0" id="inputcity" placeholder="City" name="city">
                        </div>
                        <div class="col-12">
                          <label for="inputpincode" class="form-label"></label>
                          <input type="number" class="form-control rounded-0" id="inputnumber" placeholder="Pincode" name="pincode">
                        </div>
                  </form>
         </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev " aria-hidden="true">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next " aria-hidden="true">Next</span>
    </a>
</div>
</body>
</html>
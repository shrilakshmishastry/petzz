<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pet Adoption | Pet Services | Nutrition Counselling</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/petzz/css/style.css')?>">
</head>
  <body>
    <div class="container-fluid">
      <!-- navigation bar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a href="#" class="navbar-brand navbarActive">
          <img class="" src="<?php echo base_url('/petzz/images/petzz.png') ?>" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5 ms-md-0 mt-3 mt-md-0 " id="navbar">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item  ms-md-4">
              <a href="#" class="nav-link navbarText">
                Home
              </a>
            </li>

            <li class="nav-item dropdown ms-md-4 ">
              <a class="nav-link dropdown-toggle navbarText" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Services
       </a>
       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
         <li><a class="navbarText dropdown-item" href="#">Grooming</a></li>
         <li><a class="navbarText dropdown-item" href="#">Nutrition Counselling</a></li>
       </ul>
     </li>
            <li class="nav-item  ms-md-4">
              <a href="<?php echo base_url('/petzz/index.php/Hello/index')?>" class="nav-link navbarText">
                Forum
              </a>
            </li>
            <li class="nav-item  ms-md-4">
              <a href="#" class="nav-link navbarText">
                Contact us
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- footer -->
      <footer class="ps-2 ">
        <div class="row justify-content-center mt-5">
            <div class="col-md-3 ms-3 ms-md-0">
              <div class="row ">
                  <img class="" src="<?php echo base_url('/petzz/images/logoLarge.png') ?>" alt="logo">
              </div>
              <div class="row">
                <p class="themeFontLight small mt-3 text-left">
                  Petzz offers
                   pet health check-up, Vaccinations,
                   Deworming, Skin treatment, Pet Grooming,
                   Health packages and pet food directly at your doorstep .
                </p>

              </div>
            </div>
            <div class="col-md-2 mt-5 mt-md-4 ps-md-5 ">
              <p class="themeFontMedium ">Company</p>
              <p class="themeFontLight mb-2">
                <a href="#"class="text-dark" >Home</a>
              </p>
              <p class="themeFontRegular mb-2">
                <a href="#"class="text-dark" >Forum</a>
              </p>
            </div>
            <div class="col-md-2 mt-5 mt-md-4 ">
              <p class="themeFontMedium ">Service</p>
              <p class="themeFontLight mb-2">
                <a href="#"class="text-dark" >Grooming</a>
              </p>
              <p class="themeFontRegular mb-2">
                <a href="#"class="text-dark" >Nutrition Counselling</a>
              </p>
            </div>
            <div class="col-md-3 mt-5 mt-md-4">
              <p class="themeFontRegular ">Contact  us on help@petzz.com </p>
              <p class="themeFontLight mb-2">
                <a href="#"class="text-dark" >Find us on: </a>
              </p>
              <p class="themeFontRegular mb-2 d-flex flex-row">
                <a href="#"class="me-3 text-info" >
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#"class="text-primary" >
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </p>
            </div>
        </div>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>

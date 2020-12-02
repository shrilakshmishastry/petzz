<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pet Adoption | Pet Services | Nutrition Counselling</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/bcit-ci-CodeIgniter-b73eb19/css/style.css')?>">
</head>
  <body>
    <div class="container-fluid">
      <!-- navigation bar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white pl-md-5 pr-md-5">
        <a href="#" class="navbar-brand navbarActive">
          <img class="" src="<?php echo base_url('/bcit-ci-CodeIgniter-b73eb19/images/petzz.png') ?>" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-5 ml-md-0 mt-3 mt-md-0 " id="navbar">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item  ml-md-4">
              <a href="<?php echo base_url('/bcit-ci-CodeIgniter-b73eb19/index.php/Index/home'); ?>" class="nav-link navbarText">
                Home
              </a>
            </li>
            <li class="nav-item dropdown  ml-md-4">
  						<a href="#" class="nav-link dropdown-toggle navbarActive" id="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  							Services
  						</a>
  						<div class="dropdown-menu " aria-labelledby="dropdown">
  							<a href="#" class="dropdown-item navbarText">
  								Grooming
  							</a>
  							<a href="#" class="dropdown-item  navbarActive">
  								Nutrition Counselling
  							</a>
  						</div>
  					</li>
            <li class="nav-item  ml-md-4">
              <a href="<?php echo base_url('/bcit-ci-CodeIgniter-b73eb19/index.php/Hello/index')?>" class="nav-link navbarText">
                Forum
              </a>
            </li>
            <li class="nav-item  ml-md-4">
              <a href="#" class="nav-link navbarText">
                Contact us
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- row land -->
      <div class="row  mt-md-2">
        <div class="col-md-4 offset-md-1">
          <img class="img-fluid " src="<?php echo base_url('/bcit-ci-CodeIgniter-b73eb19/images/nutrition.png') ?>" alt="A beautiful dog image">
        </div>
        <div class="col-md-6 ml-md-5  mt-md-5 pt-lg-5">
          <h1 class="themeFontExtraBold align-middle mt-lg-5">
  					Nutrition
  					<span class="textPrimary">Counsel</span>ling
  				</h1>
  				<p class="themeFontMedium">Get The Right Diet For YourPet</p>
  				<a href="#dietChart" class="themeFontMedium mt-3 btn btn-outline-primary pl-md-5 rounded-pill pr-md-5">
  				    Know more
  				</a>
        </div>
      </div>
      <!-- row for importance of nutrition Counselling -->
      <div class="row whoWeArebg mt-5 mt-md-0 pb-md-5">
        <div class="col-md-6 pt-md-5 d-block d-sm-none ">
          <img class="img-fluid " src="<?php echo base_url('/bcit-ci-CodeIgniter-b73eb19/images/nut.png') ?>" alt="A beautiful dog image">
        </div>
        <div class="col-lg-4 col-md-6 offset-lg-2 mt-md-5">
          <h3 class="themeFontBold pt-md-5">Why
            <span class="textPrimary">Nutrition Counselling </span>
            is Important
          </h3>
          <p class="themeFontLight mt-md-5">Pet parents are often confused regarding the proper diet
             routine for their pet. We often see pets suffer for want of
              proper nutritions or even from excess of nutritions,
              leading to obesity or malnutrition.
              Proper nutrition counselling is one of the most
              important elements of your pet's health.
          </p>
        </div>
        <div class="col-md-6 d-none d-sm-block">
          <img class="img-fluid mt-md-5 mt-lg-0" src="<?php echo base_url('/bcit-ci-CodeIgniter-b73eb19/images/nut.png') ?>" alt="A beautiful dog image">
        </div>
      </div>
      <!-- row for essential ele of nutrition counselling -->
      <div class="row justify-content-center pt-5 mt-5" id="dietChart">
          <div class="col-md-8 text-center">
            <h3 class="themeFontBold">
              Essential Elements of
              <span class="textPrimary">Nutrition</span>
               Counselling
            </h3>
          </div>
      </div>
      <!-- <div class="row justify-content-center">
        <p class="text-center themeFontLight" >
          Proper nutrition counselling is one of the most
          important elements of your pet's health.
        </p>
      </div> -->
      <div class="row pt-md-5 pb-md-5 justify-content-center">
        <div class=" col-md-3 col-lg-2 col-8 pl-0 pr-0 ml-md-5 mt-5 my-md-0">
          <div class="card shadow">
            <div class="card-body">
              <div class=" text-center">
                  <img class="img-fluid mb-3" src="<?php echo base_url('/bcit-ci-CodeIgniter-b73eb19/images/vegetables.png') ?>" alt="A beautiful dog image">
              </div>

              <h6 class="font-weight-bold">Diet Chart</h6>
              <p class="text-muted small">Proper food intake guidelines, depending on your pet's age and breed</p>
            </div>

          </div>
        </div>
        <div class=" col-md-3 col-lg-2 ml-md-5 col-8 mt-5 my-md-0 pl-0 pr-0">
          <div class="card shadow">
            <div class="card-body">
              <div class=" text-center">
                  <img class="img-fluid mb-3" src="<?php echo base_url('/bcit-ci-CodeIgniter-b73eb19/images/diet.png') ?>" alt="A beautiful dog image">
              </div>

              <h6 class="font-weight-bold">Proper Nutrient Intake</h6>
              <p class="text-muted small">What are the essential nutrients and minerals for your pet</p>
            </div>

          </div>
        </div>
        <div class=" col-md-3 col-lg-2 ml-md-5 mt-5 col-8 my-md-0 pl-0 pr-0">
          <div class="card shadow">
            <div class="card-body">
              <div class=" text-center">
                  <img class="img-fluid mb-3" src="<?php echo base_url('/bcit-ci-CodeIgniter-b73eb19/images/calories.png') ?>" alt="A beautiful dog image">
              </div>

              <h6 class="font-weight-bold">Proper Calorie Intake</h6>
              <p class="text-muted small">How many calories does your pet ideally need</p>
            </div>

          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class=" col-md-3 col-lg-2 ml-md-5 mt-5 my-md-0 col-8 pl-0 pr-0">
          <div class="card shadow">
            <div class="card-body">
              <div class=" text-center">
                  <img class="img-fluid mb-3" src="<?php echo base_url('/bcit-ci-CodeIgniter-b73eb19/images/feed.png') ?>" alt="A beautiful dog image">
              </div>

              <h6 class="font-weight-bold">Right Diet Constituents</h6>
              <p class="text-muted small">What to feed and what not to</p>
            </div>

          </div>
        </div>
      </div>

      <!-- row for for forum -->
      <div class="row justify-content-center mt-5 whoWeArebg pt-5 pb-5">
        <div class="col-md-5">
          <h4 class="themeFontMedium">
            At <span class="textPrimary">Petzz</span>
          </h4>
          <p class="themeFontRegular">
            We ensure that all our clients have access to the
             right nutritional counelling via forum
             to maks sure your pets are healthy and happy.
          </p>
        </div>
        <div class="col-md-5 ">
          <h3 class="themeFontMedium">
            Discuss Nutrition Counselling With Experts
          </h3>
          <a href="#" class="themeFontMedium mt-3 btn btn-outline-primary pl-md-5 rounded-pill pr-md-5">
  				    Forum
  				</a>
        </div>
      </div>
      <!-- footer -->
  		<footer>
  			<div class="row justify-content-center mt-5">
  					<div class="col-md-3 ml-3 ml-md-0">
  						<div class="row ">
  								<img class="" src="<?php echo base_url('/bcit-ci-CodeIgniter-b73eb19/images/petzz.png') ?>" alt="logo">
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
  					<div class="col-md-2 mt-5 mt-md-4 pl-md-5 ">
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
  							<a href="#"class="mr-3 text-info" >
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

    <!-- link for fontawesome -->
  	<script src="https://kit.fontawesome.com/0295f823fc.js" crossorigin="anonymous"></script>
  	<!-- jQuery library -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  	<!-- Popper JS -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  	<!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
  </body>
</html>

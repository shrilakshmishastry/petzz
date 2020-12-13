<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pet Adoption | Pet Services | Nutrition Counselling</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
		  rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/petzz/css/style.css') ?>">
</head>

<body>
<div class="container-fluid">
	<!-- navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<a href="#" class="navbar-brand navbarActive">
			<img class="" src="<?php echo base_url('/petzz/images/petzz.png') ?>" alt="logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
				aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse  d-lg-flex mr-lg-5  pr-md-5 justify-content-lg-end mt-3 mt-md-0 " id="navbar">
			<ul class="navbar-nav ml-md-5">
				<li class="nav-item  ml-md-4">
					<a href="#" class="nav-link navbarActive">
						Home
					</a>
				</li>
				<li class="nav-item dropdown  ml-md-4">
					<a href="#" class="nav-link dropdown-toggle navbarText" id="dropdown" role="button"
					   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Services
					</a>
					<div class="dropdown-menu " aria-labelledby="dropdown">
						<a href="/petzz/grooming" class="dropdown-item navbarText">
							Grooming
						</a>
						<a href="/petzz/nutrition-counselling" class="dropdown-item navbarText">
							Nutrition Counselling
						</a>
						<a href="/petzz/pet-adoption" class="dropdown-item navbarText">
							Pet Adoption
						</a>
					</div>
				</li>
				<li class="nav-item  ml-md-4">
					<a href="/petzz/forum" class="nav-link navbarText">
						Forum
					</a>
				</li>
				<!--				<li class="nav-item  ml-md-4">-->
				<!--					<a href="#footer" class="nav-link navbarText">-->
				<!--						Contact us-->
				<!--					</a>-->
				<!--				</li>-->
				<li id="profile" class="nav-item dropdown ml-4 d-none">
					<a class="nav-link dropdown-toggle navbarText " href="#" id="navbarDropdown" role="button"
					   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item navbarText" href="/petzz/order-history">Order History</a>
						<button class="dropdown-item mb-0 navbarText" href="" id="logout" >Logout</button>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	<!-- row of Adoption -->
	<div class="row pt-lg-5 pb-md-5 pb-lg-0">
		<div class="col-md-5 offset-md-1  mt-lg-5">
			<h1 class="themeFontExtraBold align-middle mt-lg-5">
				Because Your Pet
				<span class="textPrimary">Deserves</span>The Best Care
			</h1>
			<p class="themeFontMedium">Expert Veterinary Care At Your Home</p>
			<a href="/petzz/pet-adoption"
			   class="themeFontMedium mt-3 btn btn-outline-primary pl-md-5 rounded-pill pr-md-5">
				Adopt a Pet
			</a>
		</div>
		<div class="col-md-6 mt-md-5">
			<img class="img-fluid" src="<?php echo base_url('/petzz/images/3.png') ?>" alt="A beautiful dog image">
		</div>
	</div>
	<!-- row of who we are -->
	<div class="row  justify-content-center pt-3 whoWeArebg">
		<div class="col-md-8 mt-5 ">
			<h2 class="themeFontBold mt-md-3 text-center">Who We Are?</h2>
			<p class="themeFontMedium text-center">We will take a great care for your pet.
				We provide you with the necessary tools, benefits, health care to make
				your pet more engaging and understandable.</p>
		</div>
	</div>
	<!-- row for img of cats -->
	<div class="row justify-content-center whoWeArebg">
		<div class="col-md-8">
			<img class="img-fluid"
				 src="<?php echo base_url('/petzz/images/who_we_are_below_img-removebg-preview.png') ?>"
				 alt="Group of images">
		</div>
	</div>
	<!-- row for Services -->
	<div class="row  mt-5">
		<div class="col-md-8  mt-md-5 offset-md-1">
			<div class="row justify-content-center">
				<h2 class="themeFontBold ml-4 ml-md-0">
					What Services We Offer?
				</h2>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5  mt-5 ">
					<div class=" d-inline-flex">
						<img class="mr-3 " src="<?php echo base_url('/petzz/images/bone.png') ?>" alt="bone image">
						<p class="themeFontMedium text-left pt-3 h5">
							Food will be delivered to your home
						</p>
					</div>
					<div class=" d-inline-flex mt-5">
						<img class="mr-3 " src="<?php echo base_url('/petzz/images/bone.png') ?>" alt="bone image">
						<p class="themeFontMedium text-left pt-3 h5">
							Food will be delivered to your home
						</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-5   mt-5 ">
					<div class=" d-inline-flex">
						<img class="mr-3 " src="<?php echo base_url('/petzz/images/bone.png') ?>" alt="bone image">
						<p class="themeFontMedium text-left pt-3 h5">
							Food will be delivered to your home
						</p>
					</div>
					<div class=" d-inline-flex mt-5">
						<img class="mr-3 " src="<?php echo base_url('/petzz/images/bone.png') ?>" alt="bone image">
						<p class="themeFontMedium text-left pt-3 h5">
							Food will be delivered to your home
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 d-none d-sm-block ">
			<img class="img-fluid" src="<?php echo base_url('/petzz/images/services_side_dog.png') ?>"
				 alt="beautiful dog image">
		</div>
		<div class="d-block d-sm-none">
			<img class="img-fluid" src="<?php echo base_url('/petzz/images/5.png') ?>" alt="beautiful dog image">
		</div>
	</div>
	<!-- row for why petzz -->
	<div class="row mt-5 whoWeArebg pb-md-5 pb-lg-0">
		<div class="col-md-6 d-none d-sm-block ">
			<img class="img-fluid" src="<?php echo base_url('/petzz/images/6.png') ?>" alt="beautiful dog image">
		</div>
		<div class="col-md-5 col-lg-3 mt-5 ml-3  ">
			<div class="d-flex flex-row pl-md-3">
				<hr class="hr  mt-2 mr-3">
				<p class="themeFontMedium h5 ">
					why petzz?
				</p>
			</div>
			<div class="row">
				<h2 class="themeFontBold pl-md-3">We are best for your pets</h2>
				<ul class="mt-5">
					<li class="themeFontMedium h5 ">Comprehensive
						<span class="textPrimary h5">Petcare</span>
						Solutions
					</li>
					<li class="themeFontMedium h5"><span class="textPrimary">100+ </span>
						Vets to Solve Your Doubts
					</li>
					<li class="themeFontMedium h5">Bets Services for
						<span class="textPrimary">Your Petzz </span>
					</li>
				</ul>
				<!-- <p class="themeFontMedium mt-4 h5">Comprehensive
					<span class="textPrimary h5" >Petcare</span>
					Solutions
				</p>
				<p class="themeFontMedium h5">
					<span class="textPrimary">100+ </span>
					Vets to Solve Your Doubts
				</p>
				<p class="themeFontMedium h5">

					Bets Services for
					<span class="textPrimary">Your Petzz </span>
				</p> -->
			</div>
		</div>
		<div class="col-lg-2 col-md-1 ">

		</div>
		<div class=" d-block d-sm-none ">
			<img class="img-fluid" src="<?php echo base_url('/petzz/images/6.png') ?>" alt="beautiful dog image">
		</div>
	</div>

	<!-- row for book visit -->
	<div class="row mt-5 justify-content-center ">
		<div class="col-md-8 text-center  d-none d-sm-block">
			<a href="#"
			   class="bg-primary text-white pt-md-3 pb-md-3 h6 themeFontMedium  btn btn-outline-primary pl-md-5 rounded-pill pr-md-5">
				Now Book a Service At your Home @499 Rupees
			</a>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-md-3 offset-md-2 mt-md-5 ">
			<h5 class="themeFontMedium mt-lg-5">
				Avoid the Stress of Travel and Save Time.
				Book a Home Visit With Our
				Experienced Vets Today.
			</h5>
			<a href="#" class="bg-primary text-white  themeFontMedium  btn btn-primary pl-md-5  pr-md-5">
				Book Now
			</a>
		</div>
		<div class="col-md-6 ">
			<img class="img-fluid" src="<?php echo base_url('/petzz/images/book_service.png') ?>"
				 alt="beautiful dog image">

		</div>
		<div class="col-md-1 ">

		</div>
	</div>
	<div class="row mt-5 justify-content-center d-block d-sm-none">
		<div class="col-md-8 text-center">
			<a href="#"
			   class="bg-primary text-white pt-md-3 pb-md-3 h6 themeFontMedium  btn btn-outline-primary pl-md-5 rounded-pill pr-md-5">
				Now Book a Service At your Home @499 Rupees
			</a>
		</div>
	</div>
	<!-- row for cat advance
		<div class="row mt-5 whoWeArebg">
			<div class="col-md-6 mt-lg-5 mt-md-5  d-none d-sm-block">
				<img class="img-fluid mt-md-5 mt-lg-0" src="<?php echo base_url('/petzz/images/8.png') ?>" alt="beautiful dog image">
			</div>
			<div class="col-md-4 col-lg-4  mt-5">
				<h5 class="themeFontMedium pr-lg-5 pl-md-4 mr-lg-5">
					<span class="textPrimary" >Catzz</span>
					Advanced <br> ₹ 2000 / Year
				</h5>
				<ul class="mt-5">
 					<li class="themeFontMedium h6 ">Full Body Bath</li>
 					<li class="themeFontMedium h6">Full Body Degreasing</li>
 					<li class="themeFontMedium h6">Full Body Conditioning</li>
					<li class="themeFontMedium h6">Blow Drying</li>
					<li class="themeFontMedium h6">Complete De-Shedding</li>
					<li class="themeFontMedium h6">Full Body Brushing</li>
					<li class="themeFontMedium h6">Nail Triming</li>
					<li class="themeFontMedium h6">Ear Cleaning</li>
					<li class="themeFontMedium h6">Teeth Brushing</li>
					<li class="themeFontMedium h6">Tear Stain Cleaning</li>
					<li class="themeFontMedium h6">Trimming Face, Feet and Sanitary Area</li>
				</ul>
			</div>
			<div class="col-md-2 col-lg-2 ">

			</div>
			<div class="d-block d-sm-none">
				<img class="img-fluid" src="<?php echo base_url('/petzz/images/8.png') ?>" alt="beautiful dog image">
			</div>
		</div> -->
	<!-- row for testimonals -->


	<div id="carousel" class="styleCarousel mt-5 pb-5 pt-5 carousel slide" data-ride="carousel">
		<div class="carousel-inner pt-md-5 pb-md-5">
			<div class="carousel-item active">
				<div class="row justify-content-center">
					<div class="col-md-8 text-center">
						<h3 class="themeFontBold">Testimonials</h3>
					</div>
				</div>
				<div class="row justify-content-center mt-5">
					<div class="col-md-2 col-8 offset-md-2">
						<img class="img-fluid rounded-circle" src="<?php echo base_url('/petzz/images/girl.jpg') ?>"
							 alt="beautiful dog image">
					</div>
					<div class="col-md-6 col-8 mt-5 mt-md-0 pl-md-5">
						<div class="row ">
							<h6 class="themeFontRegular">Shrilakshmi</h6>
							<p class="themeFontLight small">
								As a Customer of Petzz, and being the owner of two Boxer puppies,
								I am Extremely satisfied with the care and treatment,
								your organization is giving to my puppies.
								The Veterinary doctor is so punctual, caring
								and very affectionate with the puppies.

								So overall I recommend Petzz to few of my
								friends having pets in our gated community.
								Thank you for your Excellent Service, and keep it up.
							</p>
						</div>
					</div>
					<div class="col-md-2">

					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row justify-content-center">
					<div class="col-md-8 text-center">
						<h3 class="themeFontBold">Testimonials</h3>
					</div>
				</div>
				<div class="row justify-content-center mt-5">
					<div class="col-md-2 col-8  offset-md-2">
						<img class="img-fluid rounded-circle" src="<?php echo base_url('/petzz/images/girl.jpg') ?>"
							 alt="beautiful dog image">
					</div>
					<div class="col-md-6 col-8 mt-5 mt-md-0 pl-md-5">
						<div class="row ">
							<h6 class="themeFontRegular">Shrilakshmi</h6>
							<p class="themeFontLight small">
								As a Customer of Petzz, and being the owner of two Boxer puppies,
								I am Extremely satisfied with the care and treatment,
								your organization is giving to my puppies.
								The Veterinary doctor is so punctual, caring
								and very affectionate with the puppies.

								So overall I recommend Petzz to few of my
								friends having pets in our gated community.
								Thank you for your Excellent Service, and keep it up.
							</p>
						</div>
					</div>
					<div class="col-md-2">

					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row justify-content-center">
					<div class="col-md-8 text-center">
						<h3 class="themeFontBold">Testimonials</h3>
					</div>
				</div>
				<div class="row justify-content-center mt-5">
					<div class="col-md-2 col-8 offset-md-2">
						<img class="img-fluid rounded-circle" src="<?php echo base_url('/petzz/images/girl.jpg') ?>"
							 alt="beautiful dog image">
					</div>
					<div class="col-md-6 col-8 mt-5 mt-md-0 pl-md-5">
						<div class="row ">
							<h6 class="themeFontRegular">Shrilakshmi</h6>
							<p class="themeFontLight small">
								As a Customer of Petzz, and being the owner of two Boxer puppies,
								I am Extremely satisfied with the care and treatment,
								your organization is giving to my puppies.
								The Veterinary doctor is so punctual, caring
								and very affectionate with the puppies.

								So overall I recommend Petzz to few of my
								friends having pets in our gated community.
								Thank you for your Excellent Service, and keep it up.
							</p>
						</div>
					</div>
					<div class="col-md-2">

					</div>
				</div>
			</div>
		</div>
		<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
		</a>
		<a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
			<span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
		</a>
	</div>

	<!-- footer -->
	<footer id="footer">
		<div class="row justify-content-center mt-5">
			<div class="col-md-3 ml-3 ml-md-0">
				<div class="row ">
					<img class="" src="<?php echo base_url('/petzz/images/petzz.png') ?>" alt="logo">
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
					<a href="/petzz/" class="text-dark">Home</a>
				</p>
				<p class="themeFontRegular mb-2">
					<a href="/petzz/forum" class="text-dark">Forum</a>
				</p>
			</div>
			<div class="col-md-2 mt-5 mt-md-4 ">
				<p class="themeFontMedium ">Service</p>
				<p class="themeFontLight mb-2">
					<a href="/petzz/grooming" class="text-dark">Grooming</a>
				</p>
				<p class="themeFontLight mb-2">
					<a href="/petzz/nutrition-counselling" class="text-dark">Nutrition Counselling</a>
				</p>
				<p class="themeFontLight mb-2">
					<a href="/petzz/pet-adoption"class="text-dark" >Pet Adoption</a>
				</p>
			</div>
			<div class="col-md-3 mt-5 mt-md-4">
				<p class="themeFontRegular ">Contact us on help@petzz.com </p>
				<p class="themeFontLight mb-2">
					<a href="#" class="text-dark">Find us on: </a>
				</p>
				<p class="themeFontRegular mb-2 d-flex flex-row">
					<a href="#" class="mr-3 text-info">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="#" class="text-primary">
						<i class="fab fa-linkedin-in"></i>
					</a>
				</p>
			</div>
		</div>
	</footer>

</div>
<script type="text/javascript">

	var sessionValue = "<?php echo $this->session->userdata('email');?>";
	if (sessionValue.length == 0) {
		const ulTag = document.getElementsByClassName('navbar-nav');
		var node = document.createElement("li");
		node.className = "nav-item  ml-md-4";
		var aTag = document.createElement('a');
		aTag.href = "<?php echo base_url('/petzz/login'); ?>"
		aTag.className = "nav-link navbarText";
		aTag.innerHTML = "Login";
		node.appendChild(aTag);
		console.log(localStorage.getItem('userInfo'));
		ulTag[0].appendChild(node);
	} else {
		var profileUl = document.getElementById("profile");
		profileUl.className = "nav-item dropdown ml-4";
		profileUl.childNodes[1].innerHTML = sessionValue;
	}

</script>
<!--link for jquery cookie-->

<!-- link for fontawesome -->
<script src="https://kit.fontawesome.com/0295f823fc.js" crossorigin="anonymous"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="module" src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.mjs"></script>
<script type="text/javascript" src="<?php echo  base_url('/petzz/js/logout.js') ?>"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

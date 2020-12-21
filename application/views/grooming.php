<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pet Adoption | Pet Services | Nutrition Counselling</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/petzz/css/style.css')?>">
</head>
<body>
<div class="container-fluid">
	<!-- navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white pl-lg-5 pr-lg-5">
		<a href="#" class="navbar-brand navbarActive">
			<img class="" src="<?php echo base_url('/petzz/images/petzz.png') ?>" alt="logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse ml-5 ml-md-0 mt-3 mt-md-0 " id="navbar">
			<ul class="navbar-nav ml-auto ">
				<li class="nav-item  ml-md-4">
					<a href="<?php echo base_url('/petzz/'); ?>" class="nav-link navbarText">
						Home
					</a>
				</li>
				<li class="nav-item dropdown  ml-md-4">
					<a href="#" class="nav-link dropdown-toggle navbarActive" id="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Services
					</a>
					<div class="dropdown-menu " aria-labelledby="dropdown">
						<a href="#" class="dropdown-item navbarActive">
							Grooming
						</a>
						<a href="<?php echo base_url('/petzz/nutrition-counselling'); ?>" class="dropdown-item navbarText">
							Nutrition Counselling
						</a>
						<a href="<?php echo base_url('/petzz/pet-adoption'); ?>" class="dropdown-item navbarText">
							Pet Adoption
						</a>
					</div>
				</li>
				<li class="nav-item  ml-md-4">
					<a href="<?php echo base_url('/petzz/forum')?>" class="nav-link navbarText">
						Forum
					</a>
				</li>
				<li id="profile" class="nav-item dropdown ml-4 d-none">
					<a class="nav-link dropdown-toggle navbarText " href="#" id="navbarDropdown" role="button"
					   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item navbarText" href="/petzz/order-history">Order History</a>
						<a class="dropdown-item navbarText" href="/petzz/cart">My Cart</a>
						<button class="dropdown-item mb-0 navbarText" href="" id="logout" >Logout</button>
					</div>
				</li>
			</ul>
		</div>
	</nav>


	<!-- row for land -->
	<div class="row">
		<div class="col-md-6 ml-lg-5">
			<img class="img-fluid" src="<?php echo base_url('/petzz/images/grooming.jpeg') ?>" alt="logo">
		</div>
		<div class="col-lg-4 col-md-6 mt-lg-5 mt-md-4 pt-lg-5 ">
			<h1 class="themeFontExtraBold align-middle mt-lg-5">
				Expert
				<span class="textPrimary">Dog and Cat</span>
				Grooming Services
			</h1>
			<p class="themeFontMedium">It's More Than Just A Bath </p>
			<a href="#plans" class="themeFontMedium mt-3 btn btn-outline-primary pl-md-5 rounded-pill pr-md-5">
				Know more
			</a>
		</div>
		<div class="col-lg-1">

		</div>
	</div>
	<!-- row for plans -->
	<div id="plans" class="row whoWeArebg pt-5 pb-5 justify-content-center mt-5">
		<div class="col-md-10 text-center mt-5">
			<h2 class="themeFontBold" >
				Introducing
				<span class="textPrimary">Dogs Grooming</span>
				Plans
			</h2>
			<p class="themeFontRegular">
				We believe that every pet is special and
				hence we have instituted dedicated
				grooming packages based on your pet's breed and specie
			</p>
		</div>
	</div>
	<div class="row  pb-5  whoWeArebg justify-content-center pb-md-5">
		<?php
		foreach ($value as $item){
			?>
			<div class="col-md-4  col-lg-3 col-10 mt-5 mt-md-0">
				<div class="card cardGrroming pb-5 pb-lg-0">
					<div class="card-body">
						<div class=" text-center">
							<img class="img-fluid mb-3" src="<?php echo base_url($item->product_image) ?>" alt="A beautiful dog image">
						</div>

						<h4 class="font-weight-bold themeFontMedium textPrimary ml-lg-4">
							<?php echo $item->product_name ; ?>
						</h4>
						<?php
						$myArray = explode(',', $item->description);
						foreach ($myArray as $val){
							?>
							<ul class="mt-3">
								<li class="themeFontMedium h6 ">
									<?php  echo $val; ?>
								</li>
							</ul>
						<?php } ?>
					</div>
					<a href="#" data-product='<?php echo json_encode($item)?>' class="bookNowBtn2 themeFontMedium mt-2 btn btn-outline-primary pl-md-5 rounded-pill pr-md-5 pl-0 pr-0">
						Book Know
					</a>
				</div>
			</div>
		<?php } ?>
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
					<a href="/petzz/"class="text-dark" >Home</a>
				</p>
				<p class="themeFontLight  mb-2">
					<a href="/petzz/forum/"class="text-dark" >Forum</a>
				</p>
			</div>
			<div class="col-md-2 mt-5 mt-md-4 ">
				<p class="themeFontMedium ">Service</p>
				<p class="themeFontLight mb-2">
					<a href="/petzz/grooming/"class="text-dark" >Grooming</a>
				</p>
				<p class="themeFontLight  mb-2">
					<a href="/petzz/nutrition-counselling"class="text-dark" >Nutrition Counselling</a>
				</p>
				<p class="themeFontLight mb-2">
					<a href="/petzz/pet-adoption"class="text-dark" >Pet Adoption</a>
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
					<a href="#"class="text-primary " >
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

<!-- link for fontawesome -->
<script src="https://kit.fontawesome.com/0295f823fc.js" crossorigin="anonymous"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!--link for grooming js-->
<script src="<?php echo base_url('/petzz/js/grooming.js')?>" ></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

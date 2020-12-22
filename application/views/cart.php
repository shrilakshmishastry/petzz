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
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" >
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse ms-5 ms-md-0 mt-3 mt-md-0 " id="navbar">
			<ul class="navbar-nav ms-auto pe-lg-5 me-lg-5">
				<li class="nav-item  ms-md-4">
					<a href="/petzz/" class="nav-link navbarText">
						Home
					</a>
				</li>

				<li class="nav-item dropdown ms-md-4 ">
					<a class="navbarText nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Services
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

						<li><a class="navbarText dropdown-item" href="/petzz/grooming/">Grooming</a></li>
						<li><a class="navbarText dropdown-item" href="/petzz/nutrition-counselling/">Nutrition Counselling</a></li>
						<li><a class="navbarText dropdown-item" href="/petzz/pet-adoption/">Pet Adoption</a></li>
					</ul>
				</li>
				<li class="nav-item  ms-md-4">
					<a href="<?php echo base_url('/petzz/forum/')?>" class="nav-link navbarText">
						Forum
					</a>
				</li>
				<li class="nav-item dropdown ms-md-4 d-none" id="profile">
					<a class="nav-link dropdown-toggle navbarText" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="navbarText dropdown-item" href="/petzz/order-history/">Order History</a></li>
						<li><a class="dropdown-item navbarActive" href="/petzz/cart">My Cart</a></li>
						<li><button class="navbarText dropdown-item"id="logout" >Logout</button></li>
					</ul>
				</li>
			</ul>

		</div>
	</nav>

	<!-- row for  cart -->
	<div class="row  pt-3 pb-5  whoWeArebg ps-md-5">
		<div class="col-md-8 ">
			<ul class="cartList  list-group">
				<li class="list-group-item">
					<p class="themeFontMedium fs-5">
						My Cart
					</p>
				</li>

				<!--				condition to check whether cart is empty-->
				<?php

				if(count($values['res'])==0){
					?>
					<li class="noItem list-group-item d-flex flex-row justify-content-around">
						<div>
							<p class="themeFontRegular text-secondary fs-6">
								You don't have any  items in the cart
							</p>
						</div>
						<div>
							<a  href="/petzz/" class="textPrimary fs-5" >
								ADD
							</a>
						</div>
					</li>
					<?php
				}
				?>
				<li class=" d-none" id="addItem" >
					<div>
						<p class="themeFontRegular text-secondary fs-6">
							You don't have any  items in the cart
						</p>
					</div>
					<div>
						<a  href="/petzz/" class="textPrimary fs-5" >
							ADD
						</a>
					</div>
				</li>
				<?php
				$res = $values['res'];
				foreach ( $res as $item){
					$dataProduct = json_encode($item);
					?>
					<li id="<?php echo str_replace(" ","",$item->product_name) ?>" class="cart list-group-item d-flex flex-column pt-3 pb-3 cart-item"
						data-product='<?php echo $dataProduct?> '>
						<div class="d-flex flex-row ">
							<div class="" style="width:150px;height: 100px">
								<img class="img-fluid" src="<?php echo base_url($item->image) ?>" alt="logo">
							</div>
							<div class="d-flex flex-column ps-md-3">
								<div class="">
									<h6 class="themeFontRegular">
										<?php
										echo $item->product_name;
										?>
									</h6>
								</div>
								<div class="">
									<small class="themeFontLight text-secondary">
										<?php
										echo $item->description;
										?>
									</small>
								</div>
								<div class="d-flex flex-row mt-2">
									<div >
										<img class="img-fluid" src="<?php echo base_url('/petzz/images/price-tag.png') ?>" alt="logo">
									</div>
									<div class=" ms-3">
										<p >₹<?php
											echo $item->price;
											?>
										</p>

									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-end pe-md-5">
							<a  id="<?php echo "btn".str_replace(" ","",$item->product_name) ?>" href="#" class="text-danger cart-remove" >
								REMOVE
							</a>
						</div>
					</li>

				<?php } ?>
				<?php

				if(count($values['res'])!=0){
					?>
					<li class="totalAmount list-group-item d-flex flex-row justify-content-between">
						<div>
							<p class="total themeFontMedium">
								Total Amount &nbsp;₹<?php echo $values['total'];?>
							</p>
							<p class=" d-none themeFontMedium" id="total">₹

							</p>
						</div>
					</li>
					<?php
				}
				?>

			</ul>
		</div>
	</div>
	<!--	row for petstore list-->
	<div class="row ps-md-5  pt-5 whoWeArebg">
		<div class="col-md-8 mb-5">
			<ul  class="list-group bg-white" id="shop">
				<li class="list-group-item">
					<p class="themeFontMedium fs-5">
						Available Shops
					</p>
				</li>
				<?php
				foreach ($values['pet_store'] as $petShop){
					$shopList = json_encode($petShop);
					?>
					<li  data-shop='<?php echo $shopList ?>' class="shopPet  list-group-item d-flex flex-column">
						<p class="themeFontBold">
							<input type="radio" class="option" name="" id="">
							&nbsp;<?php
							echo $petShop->shop_name;
							?>
						</p>
						<p class="themeFontMedium ps-4">
							<i class="fas fa-map-marker-alt textPrimary"></i>
							&nbsp; Address:&nbsp;
							<small class="themeFontRegular">
								<?php
								echo $petShop->shop_address;
								?>
							</small>
						</p>
						<p class="themeFontMedium ps-4">
							<i class="fas fa-eject textPrimary"></i>
							&nbsp; Description:&nbsp;
							<small class="themeFontRegular">
								<?php
								echo $petShop->description;
								?>
							</small>
						</p>
					</li>
				<?php } ?>
				<?php

				if(count($values['res'])==0){
					?>
					<li class="list-group-item d-flex flex-row justify-content-end" >
						<div>
							<button id="placeOrder" class="themeFontMedium  btn btn-primary" disabled>
								PLACE ORDER
							</button>
						</div>
					</li>
					<?php
				}
				?>
				<?php

				if(count($values['res'])!=0){
					?>
					<li class="list-group-item d-flex flex-row justify-content-end">
						<div>
							<button id="placeOrder" class="themeFontMedium  btn btn-primary">
								PLACE ORDER
							</button>
						</div>
					</li>
					<?php
				}
				?>
			</ul>
		</div>
	</div>
</div>
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
				<a href="/petzz/"class="text-dark" >Home</a>
			</p>
			<p class="themeFontLight mb-2">
				<a href="/petzz/forum"class="text-dark" >Forum</a>
			</p>
		</div>
		<div class="col-md-2 mt-5 mt-md-4 ">
			<p class="themeFontMedium ">Service</p>
			<p class="themeFontLight mb-2">
				<a href="/petzz/grooming"class="text-dark" >Grooming</a>
			</p>
			<p class="themeFontLight mb-2">
				<a href="/petzz/nutrition-counselling"class="text-dark" >Nutrition Counselling</a>
			</p>
			<p class="themeFontLight mb-2">
				<a href="/petzz/pet-adoption"class="text-dark" >Pet Adoption</a>
			</p>
		</div>
		<div class="col-md-3 mt-5 mt-md-4">
			<p class="themeFontRegular ">Contact  us on help@petzz.com </p>
			<p class="themeFontLight mb-2">
				<a href="#" class="text-dark" >Find us on: </a>
			</p>
			<p class="themeFontRegular mb-2 d-flex flex-row">
				<a href="#" class="me-3 text-info" >
					<i class="fab fa-twitter"></i>
				</a>
				<a href="#"class="text-primary" >
					<i class="fab fa-linkedin-in"></i>
				</a>
			</p>
		</div>
	</div>
</footer>
<!-- link for fontawesome -->
<script src="https://kit.fontawesome.com/0295f823fc.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script type="text/javascript">

	var sessionValue = "<?php echo $this->session->userdata('email');?>";

	if (sessionValue.length==0) {
		const ulTag = document.getElementsByClassName('navbar-nav');
		var node = document.createElement("li");
		node.className = "nav-item  ms-md-4";
		var aTag = document.createElement('a');
		aTag.className="nav-link navbarText";
		aTag.innerHTML = "Login";
		aTag.href = "/petzz/login";
		node.appendChild(aTag);
		console.log(localStorage.getItem('userInfo'));
		ulTag[0].appendChild(node);
	}
	else{
		var profileUl = document.getElementById("profile");
		profileUl.className="nav-item dropdown ms-4";
		profileUl.childNodes[1].innerHTML = sessionValue;
	}


	$('.option').click(function (){
		$('.option').not(this).prop('checked', false);
	});


</script>
<script src="<?php echo  base_url('/petzz/js/cart.js') ?>"></script></script>
<script type="text/javascript" src="<?php echo  base_url('/petzz/js/logout.js') ?>"></script>
</body>
</html>

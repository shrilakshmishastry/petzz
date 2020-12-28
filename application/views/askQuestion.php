<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Adoption | Pet Services | Nutrition Counselling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="icon" href="<?php echo base_url('/petzz/images/favicon.png') ?>" type="image/png" sizes="16x16">
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
                        <li><a class="navbarText dropdown-item" href="/petzz/pet-adoption">Pet Adoption</a></li>
                    </ul>
                </li>
                <li class="nav-item navbarActive ms-md-4">
                    <a href="<?php echo base_url('/petzz/forum/')?>" class="nav-link navbarActive">
                        Forum
                    </a>
                </li>

                <li class="nav-item dropdown ms-md-4 d-none" id="profile">
                    <a class="nav-link dropdown-toggle navbarText" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item navbarText" href="/petzz/cart">My Cart</a></li>
                        <li><a class="navbarText dropdown-item" href="/petzz/order-history/">Order History</a></li>
                        <li><button class="navbarText dropdown-item" id="logout">Logout</button></li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>
    <!--    row for question form-->
    <div class="row pt-5 pb-5 whoWeArebg ps-5 justify-content-center ">
        <div class="col-12 col-md-8 col-lg-8 ">
            <div class="card shadow-sm rounded">
                <div class="card-body pb-5 pt-5 ps-5 pe-5">
                    <p class="themeFontMedium border-bottom pb-3 border-secondary fs-5">
                        Your question goes here!!
                    </p>
                    <form >
                        <div class="mb-5 pt-md-4 ">
                            <label for="title" class="themeFontMedium form-label">Question Title</label>
                            <input type="text" id="title" class="form-control" size="50" required >
                            <small class="text-secondary">The title must contain a maximum of 50 characters </small>
                        </div>
                        <div class="">
                            <label for="description " class="themeFontMedium">Description</label>
                            <textarea class="form-control " name="" id="description" cols="30" rows="10" required></textarea>
                            <small class="text-secondary">Give your title some description.Description of what it will be. </small>
                        </div>
                        <div class="d-flex justify-content-end mt-5">
                            <button type="submit" id="submit" class="themeFontMedium  btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<footer class="ps-2 ">
    <div class="row justify-content-center pt-3">
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
<!-- link for fontawesome -->
<script src="https://kit.fontawesome.com/0295f823fc.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<!--link for js-->
<script type="text/javascript" src="<?php echo  base_url('/petzz/js/logout.js') ?>"></script>
<script type="text/javascript" src="<?php echo  base_url('/petzz/js/question.js') ?>"></script>
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

</script>
</body>
</html>
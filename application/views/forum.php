<!DOCTYPE html>
<html lang="en" dir="ltr">
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
                        <li><a class="navbarText dropdown-item" href="/petzz/pet-adoption/">Pet Adoption</a></li>
                    </ul>
                </li>
                <li class="nav-item  ms-md-4">
                    <a href="<?php echo base_url('/petzz/forum/')?>" class="nav-link navbarActive">
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
    <!--    row for add question-->
    <div class="row whoWeArebg ps-md-5 pt-3 pb-5">
        <div class="col-md-10 ps-lg-5 mt-lg-3 ms-3">
            <h3 class="themeFontMedium">Brand New
                <span class="textPrimary">Forum</span>
                <a  class="badgeLink badge bg-secondary">
                    Clarify your doubts now!!
                </a>
            </h3
        </div>
    </div>
    <!-- row for  question list -->
    <div class="row  pt-md-3 pb-3 mt-md-3  whoWeArebg ps-md-5">
        <div class="col-md-10 col-12 ">
            <ul class="list-group ps-md-3 pe-md-3 ">
                <li class="mb-4 border-start-0 border-end-0 list-group-item  pt-4 pb-3">
                    <div class="row">
                        <div class="col-md-1 offset-lg-1 ">
                        </div>
                        <div class="col-md-4  ms-md-5">
                            <p class="themeFontBold">Discussion</p>
                        </div>
                        <div class="col-md-5 col-lg-3 text-center ">
                            <a class="askQuestionNow">
                                Ask question now!!
                            </a>
                        </div>
                    </div>
                </li>
                <?php
                foreach ($values as $val){
                    ?>
                    <li   class="border-start-0 border-end-0 list-group-item pt-4 mb-5 pb-0">
                        <div class="row">
                            <div   class="col-md-1 col-1  offset-lg-1 text-center mt-md-4">
                                <i class="fs-1  fas fa-user-circle textPrimary"></i>
                            </div>
                            <div  class="col-md-7 col-11 ">
                                <div class="d-flex flex-column  ms-3 ms-md-5">
                                    <div>
                                        <h6 class="themeFontRegular">
                                            <?php
                                            echo $val->title;
                                            ?>
                                        </h6>
                                    </div>
                                    <div>
                                        <small class="text-secondary themeFontRegular">
                                            <?php
                                            echo $val->description;
                                            ?>
                                        </small>
                                    </div>
                                    <div class="mt-3 ">
                                        <small class="text-secondary themeFontLight">
                                            By, <?php
                                            echo $val->user_email;
                                            ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 offset-md-1 d-none d-sm-block col-2 mt-lg-5">
                                <button  type="button" class="btn rounded-pill btn-sm btn-primary ansBtn"
                                         data-bs-toggle="modal"  data-bs-target="#answer"
                                         data-bs-question = '<?php echo json_encode($val) ?>'
                                >
                                    Answer
                                </button>

                            </div>
                        </div>
                        <div class="d-block d-sm-none text-center mt-4">
                            <button  type="button" class="btn rounded-pill btn-sm btn-primary ansBtn"
                                     data-bs-toggle="modal"  data-bs-target="#answer"
                                     data-bs-question = '<?php echo json_encode($val) ?>'
                            >
                                Answer
                            </button>

                        </div>
                        <div class="row text-center mt-4 ">
                            <div class="col-md-12 bgSecondary">
                                <p class="listQuestion text-white pt-3" data-question = '<?php echo json_encode($val) ?>'>
                                    View all  responses
                                </p>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="modal  fade" id="answer" tabindex="-1" aria-labelledby="answerModalLabel"
             aria-hidden="true">
            <div class="modal-dialog pt-md-5 modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header d-flex border-0  flex-column align-items-start">
                        <button type="button" class="ansBtnClose btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div>
                            <h5 class="modal-title themeFontRegular" id="answerModalLabel">
                            </h5>
                            <small class="description themeFontLight text-secondary"></small>
                        </div>
                    </div>
                    <form email="<?php echo $this->session->userdata('email');?>">
                        <div class="modal-body border-0 -block">
                            <textarea  cols="30" maxlength="300" class=" border-top-0 border-start-0 border-end-0 border-primary" required></textarea>
                        </div>
                        <div class="modal-footer ">
                            <button type="submit" class="answerBtn btn btn-sm btn-outline-primary" >
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

    let sessionValue = "<?php echo $this->session->userdata('email');?>";
    $('.badge').on('click',function () {
        if(sessionValue.length==0){
            let alertBox =  $("<div></div>").text("Please login!!");
            alertBox.addClass("alert alert-danger text-center alert-dismissible fade show");
            alertBox.attr("role","alert");
            let aTag = $('<a class="ms-md-5" href="/petzz/login">Click here to login.</a>');
            alertBox.append(aTag);
            let button = $("<button></button>");
            button.addClass("btn-close  text-center ");
            button.attr({
                "type":'button',
                "data-bs-dismiss":"alert",
                "aria-label":'Close',
            });
            alertBox.append(button);
            $('nav').after(alertBox);
        }
        else{
            $(this).attr('href','/petzz/forum/ask-question');
        }
    })
    $('.askQuestionNow').on('click',function () {
        if(sessionValue.length==0){
            let alertBox =  $("<div></div>").text("Please login!!");
            alertBox.addClass("alert alert-danger text-center alert-dismissible fade show");
            alertBox.attr("role","alert");
            let aTag = $('<a class="ms-md-5" href="/petzz/login">Click here to login.</a>');
            alertBox.append(aTag);
            let button = $("<button></button>");
            button.addClass("btn-close  text-center ");
            button.attr({
                "type":'button',
                "data-bs-dismiss":"alert",
                "aria-label":'Close',
            });
            alertBox.append(button);
            $('nav').after(alertBox);
        }
        else{
            $(this).attr('href','/petzz/forum/ask-question');
        }
    })
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
    let myModal = document.getElementById('answer');
    myModal.addEventListener('show.bs.modal',function (event) {
        let button = event.relatedTarget;
        let recipient = button.getAttribute('data-bs-question');
        let modalTitle =    myModal.querySelector('.modal-title');
        let des = myModal.querySelector('.description');
        // let btn  = document.getElementById('answerBtn');
        // btn.setAttribute('data-bs-question',recipient);
        des.textContent = JSON.parse(recipient).description;
        modalTitle.textContent = JSON.parse(recipient).title ;
        modalTitle.setAttribute('data-bs-question',recipient);

    })
</script>
<script type="text/javascript" src="<?php echo  base_url('/petzz/js/logout.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/petzz/js/answerForum.js')?>" ></script>
</body>
</html>

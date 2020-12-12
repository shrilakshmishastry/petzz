$(document).ready(function() {
  $("form").submit(function (event) {
    event.preventDefault();
    var name = $('#FullName');
    var email = $('#Email');
    var password = $('#Password');
    $.post("/petzz/index.php/Signup/handle_register",{
      name:name.val(),
      email:email.val(),
      password: password.val()
    }).done(function (data,status) {
      console.log(data ,status);
      if(data ==="user exist" ){
      	console.log("user exist",name);
	  }
      else if(data === 'successful'){
      	console.log("success",);
      	localStorage.setItem("name",name.val());
      	localStorage.setItem("email",email.val());
      	// console.log(localStorage.getItem("name"));
		window.location.replace("/petzz/index.php/Index/home");
	  }

    })

  })
})

$(document).ready(function() {
	$("form").submit(function (event) {
		event.preventDefault();
		var email = $('#Email');
		var password = $('#Password');
		$.post("/petzz/index.php/Signup/handle_register",{
			email:email.val(),
			password: password.val()
		}).done(function (data,status,name) {
			console.log(data ,status,name);
			if(data ==="user exist" ){
				console.log("user exist",name);
			}
			else if(data === 'successful'){
				console.log("success",);
				localStorage.setItem("name",name);
				localStorage.setItem("email",email.val());
				// console.log(localStorage.getItem("name"));
				window.location.replace("/petzz/index.php/Index/home");
			}

		})

	})
})

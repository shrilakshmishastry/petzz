$(document).ready(function() {
	$("form").submit(function (event) {
		event.preventDefault();
		var email = $('#Email');
		var password = $('#Password');
		$.post("/petzz/handle_login",{
			email:email.val(),
			password: password.val()
		}).done(function (data,status) {
			console.log(data ,status);
			if(data ==="matched" ){
				window.location.replace("/petzz/");
			}
			else if(data === 'incorrect password'){
				var alertBox =  $("<div></div>").text("Wrong password entered!!");
				alertBox.addClass("alert alert-danger text-center alert-dismissible fade show");
				alertBox.attr("role","alert");
				var button = $("<button></button>");
				button.addClass("btn-close  text-center text-danger");
				button.attr({
					"type":'button',
					"data-bs-dismiss":"alert",
					"aria-label":'Close',
				});
				alertBox.append(button);
				$('nav').after(alertBox);

			}
			else if(data === 'user  does not exist'){
				var alertBox =  $("<div></div>").text("User doesn't exist. Please signup");
				alertBox.addClass("alert alert-danger text-center alert-dismissible fade show");
				alertBox.attr("role","alert");
				var button = $("<button></button>");
				button.addClass("btn-close  text-center text-danger");
				button.attr({
					"type":'button',
					"data-bs-dismiss":"alert",
					"aria-label":'Close',
				});
				alertBox.append(button);
				$('nav').after(alertBox);

			}

		})

	})
})

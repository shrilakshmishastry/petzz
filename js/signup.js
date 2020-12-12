$(document).ready(function() {
  $("form").submit(function (event) {
    event.preventDefault();
    var name = $('#FullName');
    var email = $('#Email');
    var password = $('#Password');
    $.post("/petzz/handle_register",{
      name:name.val(),
      email:email.val(),
      password: password.val()
    }).done(function (data,status) {
      console.log(data ,status);
      if(data ==="user exist" ){
      	// console.log("user exist",name);
		var alertBox =  $("<div></div>").text("User aleready exist!! Please try with new user.");
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
      else if(data === 'successful'){
      	// console.log("success",);
      	localStorage.setItem("name",name.val());
      	localStorage.setItem("email",email.val());
      	// console.log(localStorage.getItem("name"));
		window.location.replace("/petzz/");
	  }

    })

  })
})

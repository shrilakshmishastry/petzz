$(document).ready(function (){
	$('.adopt').on('click',function () {
		if($(this).attr('email')){
			$.post('/petzz/add-cart-item',{
				id : JSON.parse($(this).attr('data-product'))['id']
			}).done(function (data,status){
				if(data==1){

					var alertBox =  $("<div></div>").text("Item has been added to cart successfully!!");
					alertBox.addClass("alert alert-success text-center alert-dismissible fade show");
					alertBox.attr("role","alert");
					let aTag = $('<a class="ms-md-5" href="/petzz/cart">Click here to place an order.</a>');
					alertBox.append(aTag);
					var button = $("<button></button>");
					button.addClass("btn-close  text-center text-success");
					button.attr({
						"type":'button',
						"data-bs-dismiss":"alert",
						"aria-label":'Close',
					});
					alertBox.append(button);
					$('nav').after(alertBox);
				}
			})
		}else {
			var alertBox =  $("<div></div>").text("Please login to place an order");
			alertBox.addClass("alert alert-danger text-center alert-dismissible fade show");
			alertBox.attr("role","alert");
			let aTag = $('<a class="ms-md-5" href="/petzz/login">Click here to Login.</a>');
			alertBox.append(aTag);
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

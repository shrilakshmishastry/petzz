$(document).ready(function (){
	$('.bookNowBtn2').on('click',function () {
		if($(this).attr('email')){
			$.post('/petzz/add-cart-item',{
				id : JSON.parse($(this).attr('data-product'))['id']
			}).done(function (data,status){
				if(data==1){

					let alertBox =  $("<div></div>").text("Item has been added to cart successfully!!");
					alertBox.addClass("alert alert-success text-center alert-dismissible fade show");
					alertBox.attr("role","alert");
					let aTag = $('<a class="ml-md-5" href="/petzz/cart">Click here to place an order.</a>');
					alertBox.append(aTag);
					let button = $("<button></button>");
					button.addClass("close  ");
					button.attr({
						"type":'button',
						"data-dismiss":"alert",
						"aria-label":'Close',
					});
					let span = $("<span aria-hidden=\"true\">&times;</span>");
					button.append(span);
					alertBox.append(button);
					$('nav').after(alertBox);
				}
			})

		}else{
			let alertBox =  $("<div></div>").text("Please login to place an order");
			alertBox.addClass("alert alert-danger text-center alert-dismissible fade show");
			alertBox.attr("role","alert");
			let aTag = $('<a class="ml-md-5" href="/petzz/login">Click here to Login.</a>');
			alertBox.append(aTag);
			let button = $("<button></button>");
			button.addClass("close  ");
			button.attr({
				"type":'button',
				"data-dismiss":"alert",
				"aria-label":'Close',
			});
			let span = $("<span aria-hidden=\"true\">&times;</span>");
			button.append(span);
			alertBox.append(button);
			$('nav').after(alertBox);
		}

	})
})

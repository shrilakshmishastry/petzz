$(document).ready(function() {
	var order = {
		shopDetails :[],
		orderItems :[],
	};

	$(".cart-remove").on("click", function (){
		console.log($('.cartList').children().length);
		if($('.cartList ').children().length-4 == 0){
			$('#addItem').removeClass('d-none');
			$('#addItem').addClass('noItem list-group-item d-flex flex-row justify-content-around');
			$('.total ').remove();
			$('#placeOrder').prop('disabled',true);
		}
		let cartItem = $(this).closest(".cart-item");
		let data = cartItem.attr('data-product');
		console.log(data);
		$.post('/petzz/remove-cart-item',{
			id : JSON.parse(data)['cart_id']
		}).done(function (data,status){
			$('#total').text("Total Amount "+"\t"+"₹"+data);
		})
		cartItem.remove();
		let total = $('.total').text();
		console.log($('.total').text());
		console.log($('.total').attr('class')+"hello");
		if($('.total').attr('class').split(" ")[2]=='d-none'){
			// console.log($('#total').text().trim().split(" "));
			// let sum = parseInt($('#total').text().trim().split(" ")[4].split("₹")[1])-parseInt(JSON.parse(data)['price']);
			// $('#total').text("Total Amount "+"\t"+"₹"+sum);
		}else{
			let sum = parseInt(total.trim().split(" ")[2].split("₹")[1])-parseInt(JSON.parse(data)['price']);
			$('#total').removeClass('d-none');
			$('#total').text("Total Amount "+" "+" "+"₹"+sum);
			$('.total').addClass('d-none');
		}


	});
	$("#placeOrder").on("click",function (){
		var checkBox = validateCheckBox();
		// checking atleast one checkBox is selected
		if(checkBox == 'noone'){
			let alertBox =  $("<div></div>").text("Please select a pet shop");
			alertBox.addClass("alert alert-danger text-center alert-dismissible fade show");
			alertBox.attr("role","alert");
			let button = $("<button></button>");
			button.addClass("btn-close  text-center text-danger");
			button.attr({
				"type":'button',
				"data-bs-dismiss":"alert",
				"aria-label":'Close',
			});
			alertBox.append(button);
			$('nav').after(alertBox);
		}else{
			let data = [];
			$('.cart').each(function (idx, element){
				data.push( JSON.parse($(element).attr("data-product")));
			});
			$.post('/petzz/place-order',{
				data : data,
				shopDetail : checkBox,
			}).done(function (data,status){
				let alertBox =  $("<div></div>").text("Order Placed successful");
				alertBox.addClass("alert alert-success text-center alert-dismissible fade show");
				alertBox.attr("role","alert");
				let button = $("<button></button>");
				button.addClass("btn-close  text-center text-success");
				button.attr({
					"type":'button',
					"data-bs-dismiss":"alert",
					"aria-label":'Close',
				});
				alertBox.append(button);
				$('nav').after(alertBox);

				window.location.replace("/petzz/order-success");
			})
		}

	})
	
	function validateCheckBox() {
		let checkBox = $('.option');
		// loop to check atleaset one checkBox is checked
		for (let i=0;i<checkBox.length;i++) {
			if(checkBox[i].checked){
				$list = checkBox[i].closest('li');
				return JSON.parse($list.dataset['shop'])['shop_name'];
			}
		}
		return 'noone';
	}


});

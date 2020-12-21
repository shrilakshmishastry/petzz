$(document).ready(function() {
	var order = {
		shopDetails :[],
		orderItems :[],
	};

	$(".cart-remove").on("click", function (){
		let cartItem = $(this).closest(".cart-item");
		let data = cartItem.attr('data-product');
		cartItem.remove();
		$.post('/petzz/remove-cart-item',{
			id : JSON.parse(data)['cart_id']
		})
	});
	$("#placeOrder").on("click",function (){
		var checkBox = validateCheckBox();
		if(checkBox === 0){
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
			$('.cart').each(function (idx, element){
				console.log($(element).attr("data-product"));
			});
			// console.log(cartItems);

		}

	})
	
	function validateCheckBox() {
		var checkBox = $('.option');
		// console.log(checkBox)
		// loop to check atleaset one checkBox is checked
		for (var i=0;i<checkBox.length;i++) {
			console.log(checkBox[i].checked);
			if(checkBox[i].checked){
				return i;
			}
		}
		return 0;
	}
	
	function placeOrder(orderDetails) {
		
	}

});

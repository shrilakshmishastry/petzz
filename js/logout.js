$(document).ready(function () {
	$('#logout').click(function () {
		$.post("/petzz/logout").done(function (data,status) {
			if(data==='success'){
				window.location.replace("/petzz/");
			}
		})
	})
});

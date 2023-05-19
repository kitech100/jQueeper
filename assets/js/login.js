$(document).ready(function () {
	$(document).on("submit", "#logIn", function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "Auth_controller/login",
			data: $(this).serialize(),
			dataType: "json",
			success: function (response) {
				console.log(response);
			},
		});
	});
});

$(document).ready(function () {
	$("#logIn").on("submit", function (e) {
		e.preventDefault();

		$.ajax({
			type: "POST",
			url: "Auth_controller/login",
			data: $(this).serialize(),
			dataType: "json",
			success: function (response) {
				console.log(response);

				if (response.success) {
					// Redirect to dashboard
					window.location.href = response.redirect_url;
				} else {
					// Display error message on the login form
					if (response.error) {
						$("#main_Container").prepend(`
					<div id="alertLoginFailed" class="alert alert-danger" role="alert">
					${response.error}
					</div>`);
					}

					$("#logIn")[0].reset();

					setTimeout(function () {
						$("#alertLoginFailed").fadeOut(500, function () {
							$(this).remove();
						});
					}, 3000);
				}

				// reset error
				$("#emailLogInErr").html("");
				$("#passwordLogin").html("");

				// if error exist display
				if (response.form_errors) {
					$("#emailLogInErr").html(response.form_errors.email);
					$("#passwordLogin").html(response.form_errors.password);
				}
			},
		});
	});
});

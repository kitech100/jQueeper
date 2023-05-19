$(document).ready(function () {
	$(document).on("submit", "#signUp", function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "Auth_controller/signup",
			data: $(this).serialize(),
			dataType: "json",
			success: function (response) {
				console.log(response);

				// if success sign up prompt
				if (response.message) {
					$("#main_Container").prepend(`
				<div id="alertSignUpSucess" class="alert alert-success" role="alert">
				${response.message}
				</div>`);

					$("#signUp")[0].reset();

					setTimeout(function () {
						$("#alertSignUpSucess").fadeOut(500, function () {
							$(this).remove();
						});
					}, 3000);
				}

				// reset error
				$("#firstNameErr").html("");
				$("#lastNameErr").html("");
				$("#userNameErr").html("");
				$("#emailErr").html("");
				$("#passwordErr").html("");
				$("#confirmPassErr").html("");

				// display error

				if (response.form_errors) {
					$("#firstNameErr").html(response.form_errors.firstname);
					$("#lastNameErr").html(response.form_errors.lastname);
					$("#userNameErr").html(response.form_errors.username);
					$("#emailErr").html(response.form_errors.email);
					$("#passwordErr").html(response.form_errors.password);
					$("#confirmPassErr").html(response.form_errors.confirmpassword);
				}
			},
		});
	});
});

$(document).ready(function () {
	$(document).on("click", "#deleteKey", function () {
		let id = $(this).siblings("input[type=hidden]").val();
		console.log(id);
		$.ajax({
			type: "POST",
			url: `delete/${id}`,
			data: "data",
			dataType: "json",
			success: function (response) {
				console.log(response);
				if (response.message) {
					$("#addKeysModalOpen").modal("hide");
					$("#main_Container").prepend(`
				<div id="alertSignUpSucess" class="alert alert-danger" role="alert">
				${response.message}
				</div>`);

					setTimeout(function () {
						$("#alertSignUpSucess").fadeOut(300, function () {
							$(this).remove();
						});
					}, 2500);
				}

				$.ajax({
					type: "GET",
					url: "Password_controller/show_password_manager",
					dataType: "json",
					success: function (response) {
						// console.log(response);

						if (response.length) {
							$("#keysDisplay").children().remove();
							$.each(response, function (index, value) {
								let completeURL = value.url.startsWith("http")
									? value.url
									: "http://" + value.url;

								$("#keysDisplay").append(`
								<input id="inputHiddenUrl" type="hidden" value="${value.url}">
								<div class="card mb-3">
								<div class="card-header d-flex align-items-center justify-content-between">
									<h6>
										Link : <a href="${completeURL}" target="_blank">${value.url}</a>
									</h6>
									<div class="d-flex flex-wrap gap-2">
									<button id="openEditModal" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
											<i class="fa-regular fa-pen-to-square"></i>
										</button>
										<input id="inputHiddenId" type="hidden" value="${value.id}">
										<button id="deleteKey" class="btn btn-danger">
											<i class="fa-regular fa-trash-can"></i>
										</button>
									</div>
								</div>
								<div class="card-body">
									<div class="d-flex justify-content-between flex-wrap mb-3">
										<h6>Username/Email:</h6>
										<p>${value.username_email}</p>
									</div>
									<div class="d-flex flex-wrap justify-content-between">
										<label for="">Password: </label>
										<div class="mb-3">
										<form>
											<input type="password" id="passwordField" placeholder="Password" value="${value.password}" autocomplete="off">
											<button class="btn" type="button" id="togglePasswordBtn">
												<i id="togglePasswordIcon" class="fas fa-eye"></i>
											</button>
											</form>
										</div>
									</div>
									<div class="d-flex gap-3">
										Tag:
										<span class="badge text-bg-secondary">${value.tag}</span>
									</div>
								</div>
							</div>
								`);
							});
						} else {
							$("#keysDisplay")
								.append(`<div class="text-center mx-auto card w-75 mb-3">
							<div class="card-body">
							  <h5 class="card-title">No keys was found</h5>
							  <p class="card-text">Please add your secret keys.</p
							</div>
						  </div>`);
						}

						$(document).on("click", "#togglePasswordBtn", function () {
							var passwordField = $(this).siblings("#passwordField");
							var togglePasswordIcon = $("#togglePasswordIcon");

							if (passwordField.attr("type") === "password") {
								passwordField.attr("type", "text");
								togglePasswordIcon
									.removeClass("fas fa-eye")
									.addClass("fas fa-eye-slash");
							} else {
								passwordField.attr("type", "password");
								togglePasswordIcon
									.removeClass("fas fa-eye-slash")
									.addClass("fas fa-eye");
							}
						});
					},
					error: function (error) {
						console.log("Error:", error);
					},
				});
			},
		});
	});
});

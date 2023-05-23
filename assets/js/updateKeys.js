$(document).ready(function () {
	$(document).on("click", "#updateKeysModal", function (e) {
		e.preventDefault();

		let id = $(this).siblings("input[type=hidden]").val();
		let email = $("[name=emailaddupdate]").val();
		let password = $("[name=passwordupdate]").val();
		let link = $("[name=linkupdate]").val();
		let tag = $("[name=tagupdate]").val();

		console.log(id);

		let formUpdateData = {
			id: id,
			email: email,
			password: password,
			link: link,
			tag: tag,
		};

		// alert();
		$.ajax({
			type: "POST",
			url: `update/${id}`,
			data: formUpdateData,
			dataType: "json",
			success: function (response) {
				// console.log(response);
			},
		});
	});
});

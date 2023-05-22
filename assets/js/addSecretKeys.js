$(document).ready(function () {
	$("#addKeysModal").click(function (e) {
		e.preventDefault();

		let formData = {
			email: $("#floatingInput").val(),
			password: $("#floatingInput").val(),
			link: $("#floatingInput").val(),
			tag: $("#floatingInput").val(),
		};

		$.ajax({
			type: "POST",
			url: "Password_controller/addkeys",
			data: $(this).serialize(),
			dataType: "dataType",
			success: function (response) {
				console.log(response);
				$("#addKeysModalOpen").modal("hide");
			},
		});
	});
});

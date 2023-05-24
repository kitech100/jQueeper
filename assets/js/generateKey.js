$(document).ready(function () {
	$(document).on("click", "#generateBtn", function () {
		$.ajax({
			type: "GET",
			url: "GeneratePassword_controller/generate",
			data: "data",
			dataType: "json",
			success: function (response) {
				// console.log(response);
				$("#inputKeyDisplay").val(response);
			},
		});
	});

	$(document).on("click", "#copyKeyDisplay", function () {
		let inputKey = $("#inputKeyDisplay");
		inputKey.blur();
		inputKey.select();
		document.execCommand("copy");

		var toast = new bootstrap.Toast($("#copyToast"));
		toast.show();
		// alert("Value copied");
	});
});

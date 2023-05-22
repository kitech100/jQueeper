$(document).ready(function () {
	let currentPath = window.location.pathname;

	$('a.nav-link[href="' + currentPath + '"]').addClass("active");
});

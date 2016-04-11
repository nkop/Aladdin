$(document).ready(function(){
$("#kappa").click(function() {
	$("#contactdiv").css("display", "block");
	$("#faqq").css("display", "none");
});
$("#contact #cancel").click(function() {
	$(this).parent().parent().hide();
	$("#faqq").css("display", "block");
});
// Contact form popup send-button click event.
$("#send").click(function() {
	var name = $("#name").val();
	var email = $("#email").val();
	var contact = $("#contactno").val();
	var message = $("#message").val();
	if (name == "" || email == "" || contactno == "" || message == "") {
		alert("Please Fill All Fields");
	} else {
		$("#contactdiv").css("display", "none");
		$("#faqq").css("display", "block");
	}
});
});


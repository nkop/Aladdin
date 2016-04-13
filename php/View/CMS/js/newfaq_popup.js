$(document).ready(function(){
$("#kappa").click(function() {
	$("#contactdiv").css("display", "block");
	$("#faqform").css("display", "none");
});
$("#contact #cancel").click(function() {
	$(this).parent().parent().hide();
	$("#faqform").css("display", "block");
});
// Contact form popup send-button click event.
$("#send").click(function() {
	var vraag = $("#vraag").val();
	var antwoord = $("#antwoord").val();
	var categorie = $("#categorie").val();
	if (vraag == "" || antwoord == "" || categorie == "") {
		alert("Vul alle velden in!");
	} else {
		$("#contactdiv").css("display", "none");
		$("#faqform").css("display", "block");
	}
});
});


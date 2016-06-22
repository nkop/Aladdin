$( document ).ready(function() {
	$(function() {
	    $('.confirm').click(function() {
	        return window.confirm("Weet u het zeker, deze actie kan niet worden teruggekeerd?");
	    });
	});
});
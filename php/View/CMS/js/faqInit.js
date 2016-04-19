$(document).ready(function(){
	
	    	  $('#leggo').iconpicker({placement:'top', defaultValue:'icon'});
	    	  $($('[id="kappa"]')).click(function() {
	    			$("#contactdiv").css("display", "block");
	    			$("#faqq").css("display", "none");
	    			$("#nieuwecategorieform").css("display", "none");
	    		});
	    		$("#contact #cancel").click(function() {
	    			$(this).parent().parent().hide();
	    			$("#faqq").css("display", "block");
	    			$("#nieuwecategorieform").css("display", "block");
	    		});
	    		// Contact form popup send-button click event.
	    		$("#send").click(function() {	
	    				$(this).parent().parent().hide();
	    				$("#faqq").css("display", "block");
	    				$("#nieuwecategorieform").css("display", "block");
	    			});

});
	      
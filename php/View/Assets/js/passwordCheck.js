    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Wachtwoorden moeten gelijk zijn');
            if(input.value.length < 6){
              input.setCustomValidity('Het wachtwoord moet 6 of meer karakters bevatten');
            }else{
              input.setCustomValidity('');
            }
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }

    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Wachtwoorden moeten gelijk zijn');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }

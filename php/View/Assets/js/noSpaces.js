$(function() {
    $('#password').on('keypress', function(e) {
        if (e.which == 32)
            return false;
    });
});

$(function() {
    $('#passwordconfirm').on('keypress', function(e) {
        if (e.which == 32)
            return false;
    });
});

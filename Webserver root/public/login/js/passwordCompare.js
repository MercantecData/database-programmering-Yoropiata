function CompareLogin() {
    if ($('#passwordsignup').val() == $('#passwordsignup_confirm').val()) {
        $('#validate').css('color', 'green');
    } else {
        $('#validate').css('color', 'red');
    }
}
function CompareLoginForSubmit() {
    if (!($('#passwordsignup').val() == $('#passwordsignup_confirm').val())) {
        var html = "Your password - Error: Passwords do not match!";
        $('#_register').html(html).css('color', 'red');
    }
    $('#signupsubmit').click();
}
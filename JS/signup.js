
//setTimeout(function(){go(50)},700);
//setTimeout(function(){go(500)},2000);
$('#ok').click(function(){go(500)});
function go(nr) {
    $('.bb').fadeToggle(200);
    $('.message').toggleClass('comein');
    $('.check').toggleClass('scaledown');
    $('#go').fadeToggle(nr);
}
jQuery(function() {
    $("#submit").click(function() {
        $(".error").hide();
        //password match check//
        var hasError = false;
        var passwordVal = $("#password").val();
        const checkVal = $("#password-check").val();
        if (passwordVal == '') {
            $("#password").before('<span class="error"  style="font-size: 10px">Please enter a password.</span>');
            hasError = true;
        } else if (checkVal == '') {
            $("#password-check").after('<span class="error"  style="font-size: 10px">Please re-enter your password.</span>');
            hasError = true;
        } else if (passwordVal != checkVal) {
            $("#password-check").after('<span class="error"  style="font-size: 10px">Passwords do not match.</span>');
            hasError = true;
        }
        if (hasError == true) {
            return false;
        }

    });
});



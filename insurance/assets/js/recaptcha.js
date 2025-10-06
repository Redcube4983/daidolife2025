// recaptcha
window.addEventListener('pageshow', function(event) {
	if (event.persisted) {
	  // history.backから戻ってきた場合
		if (typeof grecaptcha !== 'undefined') {
			grecaptcha.reset();
			$('#submit').addClass('false');
		}
	}
});
var check_on = function(response) {
	$('#submit').removeClass('false');
};
var check_false = function(response) {
	$('#submit').addClass('false');
};
function submitForm() {
	$.ajax({
		type: 'POST',
		url: 'assets/scripts/email_submit.php',
		data: $('#contact').serialize(),
		success: function(response) {
			$('#contact').find('.form_result').html(response);
			alert("Form Submitted!");
			$("#contact")[0].reset();
		},
		error: function() {
			alert("Oops, looks like something went wrong, please try again!");
		}
	});
	return false;
}
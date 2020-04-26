$(document).ready(function() {
	$('form').submit(function(event) {
		var json;
		event.preventDefault();
		console.log($(this).attr('action'));
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(result) {
				console.log(result);
				json = jQuery.parseJSON(result);
				if (json.url) {
					window.location.href = json.url;
				} else {
					alert(json.status + ' - ' + json.message);
				}
			},
			error: function(xhr, resp, text) {
				// вывод ошибки в консоль
				console.log(xhr, resp, text);
			}
		});
	});
});
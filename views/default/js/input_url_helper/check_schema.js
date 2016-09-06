define('input_url_helper/check_schema', ['jquery', 'elgg'], function($, elgg) {
	
	$(document).on('blur', 'input[type="url"].elgg-input-url', function() {
		
		var val = $(this).val();
		if (val === '' || val === undefined) {
			return undefined;
		}
		
		var patt = new RegExp(/[a-z]+:\S+/gi);
		var res = patt.test(val);
		if (res) {
			return undefined;
		}
		
		$(this).val('http://' + val);
		return undefined;
	});
});

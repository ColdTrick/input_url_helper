<?php
/**
 * Extends input/url to load the JS lib
 */

if (!elgg_is_xhr()) {
	elgg_require_js('input_url_helper/check_schema');
	return;
}
?>
<script type="text/javascript">
	require(['input_url_helper/check_schema']);
</script>

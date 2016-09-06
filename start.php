<?php
/**
 * Start file for this plugin
 */

// register default Elgg event
elgg_register_event_handler('init', 'system', 'input_url_helper_init');

/**
 * Called during system init
 *
 * @return void
 */
function input_url_helper_init() {
	
	elgg_extend_view('input/url', 'input_url_helper/extend', 400);
}

<?php
/**
 * Extends input/url to load the JS lib
 */

echo elgg_format_element('script', [], "require(['input_url_helper/extend']);");

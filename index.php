<?php
/**
 * index page for web-based applications
 *
 * @package Social
 * @subpackage Core
 */

/**
 * Start the engine
 */

// include "http://10.10.11.201:8081/social/mod/support_chat/js/im.load.js";

require_once(dirname(__FILE__) . "/engine/start.php");

elgg_set_context('main');

// allow plugins to override the front page (return true to stop this front page code)
if (elgg_trigger_plugin_hook('index', 'system', null, FALSE) != FALSE) {
	exit;
}

if (elgg_is_logged_in()) {
	forward('activity');
}


$content = elgg_view_title(elgg_echo('content:latest'));
$content .= elgg_list_river();

$login_box = elgg_view('core/account/login_box');

$params = array(
		'content' => $content,
		'sidebar' => $login_box
);
$body = elgg_view_layout('one_sidebar', $params);
echo elgg_view_page(null, $body);

<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));

$powered_url = elgg_get_site_url() . "_graphics/powered_by_elgg_badge_drk_bckgnd.gif";

echo '<div class="mts clearfloat float-alt">';
echo elgg_view('output/url', array(
	'href' => 'http://10.10.11.201:8081/social',
	'text' => "<!--<img src=\"$powered_url\" alt=\"Developed by - Team HTML\" width=\"106\" height=\"15\" /> -->",
	'class' => '',
	'is_trusted' => true,
));
echo '</div>';

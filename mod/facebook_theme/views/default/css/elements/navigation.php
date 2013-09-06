<?php
/**
 * Navigation
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style>
/* ***************************************
	PAGINATION
*************************************** */
.elgg-menu > li > a:hover,
.elgg-menu > li > a {
	text-decoration:none;
}

/* These menus always make room for icons: */
.elgg-menu-owner-block li > a > .elgg-icon,
.elgg-menu-extras li > a > .elgg-icon,
.elgg-menu-page li > a > .elgg-icon,
.elgg-menu-composer li > a > .elgg-icon {
	margin-left: -20px;
	margin-right: 4px;
}

.elgg-pagination {
	display: block;
	border: 1px solid #CCC;
	border-width: 1px 0;
	background: #F7F7F7;
	text-align: center;
}

.elgg-pagination > li {
	display:inline-block;
}

.elgg-pagination > li > a, 
.elgg-pagination > li > span {
	font-size: 13px;
	font-weight: bold;
	margin: 3px 11px 0 0;
	padding: 3px 4px 4px;
	text-align: center;
	display:block;
}
.elgg-pagination > li > a:hover {
	background: #3B5998;
	color: white;
	text-decoration: none;
}

.elgg-pagination > .elgg-state-selected > span {
	border-bottom: 2px solid #3B5998
}

/* ***************************************
	TABS
*************************************** */
.elgg-tabs {
	border-bottom: 1px solid #D8DFEA;
	display: block;
	width: 100%;
	padding-left:15px;
}

.elgg-tabs > li {
	margin: 2px 2px -1px 0;
	display: inline-block;
	background: #D8DFEA;
	border: 1px solid #D8DFEA;
	border-bottom: 0;
}

.elgg-tabs > :hover {
	background: #627AAD;
	border: 1px solid #627AAD;
	border-bottom: 0;
}

.elgg-tabs > li > a {
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	padding: 3px 11px 4px;
	display:block;
}
.elgg-tabs > :hover > a {
	color: white;
	text-decoration:none;
}

.elgg-tabs > .elgg-state-selected {
	border: 1px solid #D8DFEA;
	border-bottom: 0;
	margin-top: 0;
}

.elgg-tabs > .elgg-state-selected > a,
.elgg-tabs > .elgg-state-selected:hover > a {
	background: white;
	color: #333;
	padding: 5px 10px 4px
}

/* ***************************************
	BREADCRUMBS
*************************************** */
.elgg-breadcrumbs {
	font-size: 80%;
	font-weight: bold;
	line-height: 1.2em;
	color: #bababa;
}
.elgg-breadcrumbs > li {
	display: inline-block;
}
.elgg-breadcrumbs > li:after{
	content: "\003E";
	padding: 0 4px;
	font-weight: normal;
}
.elgg-breadcrumbs > li > a {
	display: inline-block;
	color: #999;
}
.elgg-breadcrumbs > li > a:hover {
	color: #0054a7;
	text-decoration: underline;
}

/* ***************************************
	TOPBAR MENU
*************************************** */
.elgg-menu-topbar {
	float: left;
}

.elgg-menu-topbar > li {
	float:left;
	position: relative;
}

.elgg-menu-topbar > li > a {
	color: white;
	display: block;
	font-weight: bold;
	height: 24px;
}

.elgg-menu-topbar-default > li > a {
	padding: 8px 4px 0;
	margin: 0 1px;
}

.elgg-menu-topbar-default > li > a:hover {
	/*background: #4B67A1;*/
	background-color: #202020;
	color: #4B67A1;
}

.elgg-menu-topbar-alt {
	float:right;
	margin-right: 1px;
}
.elgg-menu-topbar-alt > li > a {
	padding: 8px 7px 0;
}
.elgg-menu-topbar-alt > li > a:hover {
	/*background: #6D86B7;*/
	background: #202020;
}

.elgg-menu-topbar .elgg-menu-parent:after {
	content: " \25BC ";
	font-size: smaller;
}

.elgg-menu-topbar .elgg-child-menu {
	background: white;
	border: 1px solid #333;
	border-bottom: 2px solid #2D4486;
	margin-right: -1px;
	margin-top: -1px;
	min-width: 200px;
	padding: 4px 0;
	position: absolute;
	right: 0;
	top: 100%;
	display:none;
	z-index:1;
}

.elgg-menu-topbar .elgg-child-menu.elgg-state-active {
	display: block;
}

.elgg-menu-topbar .elgg-child-menu > li > a {
	border-bottom: 1px solid white;
	border-top: 1px solid white;
	color: #333;
	display: block;
	font-weight: normal;
	height: 18px;
	line-height: 18px;
	padding: 0px 22px;
	white-space: nowrap;
}

.elgg-menu-topbar .elgg-child-menu > li > a:hover {
	/*background: #6D84B4;*/
	background: #202020;
	border-bottom: 1px solid #3B5998;
	border-top: 1px solid #3B5998;
	color: white;
	text-decoration: none;
}

.elgg-menu-topbar > li > .elgg-menu-opened,
.elgg-menu-topbar > li > .elgg-menu-opened:hover {
	background: white;
	border: 1px solid #333;
	border-bottom: 0;
	margin: -1px -1px 0;
	color: #333;
	position:relative;
	z-index: 2;
}

/* ***************************************
	SITE MENU
*************************************** */
.elgg-menu-site:after {
	content: '.';
	clear:both;
	display:block;
	height:0;
	line-height:0;
}
.elgg-menu-site {
	background: #ECEFF5;
}
.elgg-menu-site > li {
	float: left;
}

.elgg-menu-site > li > a {
	padding: 8px 10px;
}

.elgg-menu-site > li > a:hover {
	background: white;
}

/* ***************************************
	TITLE
*************************************** */
.elgg-menu-title {
	float: right;
}

.elgg-menu-title > li {
	display: inline-block;
	margin-left: 4px;
}

/* ***************************************
	FILTER MENU
*************************************** */

.elgg-menu-filter {
	border-bottom: 1px solid #898989;
	display: block;	
	padding-left:10px;
}
.elgg-menu-filter:after {
	content: '.';
	display:block;
	clear:both;
	visibility:hidden;
	height:0;
	line-height:0;
}
.elgg-menu-filter > li {
	border: 1px solid #898989;
	float: left;
	background: #F1F1F1;
	margin: 0 -1px -1px 0;
}
.elgg-menu-filter > li > a {
	display: block;
	text-align: center;
	color: #333;
	padding: 0 8px 3px 9px;
	font-weight:bold;
	border-top: 2px solid #f4f4f4;
}

.elgg-menu-filter > .elgg-state-selected {
	background: #627AAD;
}
.elgg-menu-filter .elgg-state-selected a {
	border-top: 2px solid #627AAD;
	color: white;
}

/* ***************************************
	PAGE MENU
*************************************** */
.elgg-menu-page {
	border-bottom: 1px solid #EEE;
	margin-bottom: 7px;
	padding-bottom: 7px;
}

.elgg-menu-page li > a {
	display: block;
	color: #333;
	margin-bottom: 1px;
	padding: 3px 8px 3px 26px;
}

.elgg-menu-page li > a:hover {
	background-color: #EFF2F7;
}
.elgg-menu-page li.elgg-state-selected > a {
	background-color: #D8DFEA;
	font-weight:bold;
}
.elgg-menu-page .elgg-child-menu {
	display: none;
	margin-left: 15px;
}
.elgg-menu-page .elgg-menu-closed:before, 
.elgg-menu-page .elgg-menu-opened:before {
	display: inline-block;
	padding-right: 4px;
}
.elgg-menu-page .elgg-menu-closed:before {
	content: "\002B";
}
.elgg-menu-page .elgg-menu-opened:before {
	content: "\002D";
}

/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	display: none;
	position: absolute;
	z-index: 10000;

	width: 165px;
	border: solid 1px;
	border-color: #E5E5E5 #999 #999 #E5E5E5;
	background-color: #FFF;

	-webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	-moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
}
.elgg-menu-hover > li {
	border-bottom: 1px solid #ddd;
}
.elgg-menu-hover > li:last-child {
	border-bottom: none;
}
.elgg-menu-hover .elgg-heading-basic {
	display: block;
}
.elgg-menu-hover a {
	padding: 2px 8px;
	font-size: 92%;
}
.elgg-menu-hover a:hover {
	background: #ccc;
}
.elgg-menu-hover-admin a {
	color: red;
}
.elgg-menu-hover-admin a:hover {
	color: white;
	background-color: red;
}

/* ***************************************
	FOOTER
*************************************** */
.elgg-menu-footer > li,
.elgg-menu-footer > li > a {
	color:#999;
	display: inline-block;
}

.elgg-menu-footer > li:after {
	content: " \00B7 ";
	padding: 0 4px;
}

.elgg-menu-footer-default {
	float:right;
}

.elgg-menu-footer-alt {
	float: left;
}

/* ***************************************
	ENTITY
*************************************** */
.elgg-menu-entity {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #aaa;
}
.elgg-menu-entity > li {
	display: inline-block;
	margin-left: 15px;
}
.elgg-menu-entity > li > a {
	color: #aaa;
}

/* ***************************************
	OWNER BLOCK
*************************************** */


.elgg-menu-owner-block li > a {
	border-bottom: 1px solid #D8DFEA;
	padding: 3px 8px 3px 26px;
}
.elgg-menu-owner-block li > a:hover {
	/*background-color: #3B5998;*/
	background-color: #202020;
	color: white;
}
.elgg-menu-owner-block .elgg-state-selected > a {
	background-color: #D8DFEA;
}

.elgg-menu-owner-block .elgg-menu > li > a {
	padding-left: 44px;
}

/* ***************************************
	LONGTEXT
*************************************** */
.elgg-menu-longtext {
	float: right;
}

/* ***************************************
	RIVER
*************************************** */
.elgg-menu-river {
	color: #888;
	display: inline-block;
	margin: 3px 0 0 -3px;
}

.elgg-menu-river > li {
	display: inline;
}

.elgg-menu-river > li:before {
	content: " \00B7 ";
	display: inline-block;
	margin: 0 3px;
}

.elgg-menu-river > li > a {
	color: #6D84B4;
	display: inline;
}

.elgg-menu-river > li > a:hover {
	text-decoration: underline;
}

/* ***************************************
	SIDEBAR EXTRAS (rss, bookmark, etc)
*************************************** */
.elgg-menu-extras > li > a {
	padding: 3px 8px 3px 26px;
}

.elgg-menu-extras > li > a:hover {
	text-decoration:underline;
}

/* ***************************************
    COMPOSER
*************************************** */
.elgg-menu-composer {
	display:inline-block;
	height: 22px;
}

.elgg-menu-composer > li {
	font-weight:bold;
	margin-left: 10px;
}

.elgg-menu-composer > li > a {
	line-height: 16px;
	padding-left: 20px;
}

.elgg-menu-composer > li > a:hover {
	text-decoration: underline;
}

.elgg-menu-composer > li.ui-state-active > a {
	cursor: default;
	color: black;
	text-decoration: none;
}

.elgg-menu-composer > .ui-state-active > a:before,
.elgg-menu-composer > .ui-state-active > a:after {
	position: absolute;
	display: block;
	border-width: 8px;
	border-style: solid;
	content: " ";
	height: 0;
	width: 0;
	left: 0;
}

.elgg-menu-composer > .ui-state-active > a:before {
	top: 11px;
	border-color: transparent transparent #B4BBCD transparent;
}

.elgg-menu-composer > .ui-state-active > a:after {
	top: 12px;
	border-color: transparent transparent white transparent;
}
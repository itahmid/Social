/* <style>
/* ***************************************
	Modules
*************************************** */
/* Info */
.elgg-module-info > .elgg-head {
	background: #ECEFF5;
	border-top: 1px solid #94A3C4;
	margin-bottom: 5px;
	padding: 5px 8px;
}

/* Aside */
.elgg-module-aside {
	margin-bottom: 15px;
}

.elgg-module-aside > .elgg-head {
	background-color: #F2F2F2;
	border-bottom: none;
	border-top: solid 1px #E2E2E2;
	padding: 4px 5px 5px;
	margin-bottom: 5px;
}

.elgg-module-aside > .elgg-head > h3 {
	font-size: 1em;
}

.elgg-module-aside > .elgg-body {
	padding: 0 5px;
}

/* Popup */
.elgg-module-popup {
	background-color: white;

	z-index: 9999;
	margin-bottom: 0;

	box-shadow: 0 0 0 10px rgba(82, 82, 82, 0.7);
	border-radius: 8px;
}

.elgg-module-popup > .elgg-head {
	background: #6D84B4;
	border: 1px solid #3B5998;
	border-bottom: none;
	font-size: 14px;
	font-weight: bold;
	margin: 0;
	padding: 5px 10px;
}

.elgg-module-popup > .elgg-head > h3 {
	color: white;
}

.elgg-module-popup > .elgg-body {
	background: white;
	border: 1px solid #555;
	border-top: 0;
	padding: 10px;
}

.elgg-module-popup > .elgg-foot {
	margin-top: -1px;
	border: 1px solid #3B5998;
	border-top-color: #CCC;
	background: #F2F2F2;
	padding: 8px 10px;
	text-align:right;
}

/* Dropdown */
.elgg-module-dropdown {
	background-color: white;
	border: 1px solid #333;
	border-bottom: 2px solid #293E6A;

	z-index:100;
}

.elgg-module-dropdown > .elgg-body {
	padding: 8px;
}

.elgg-module-dropdown > .elgg-head {
	margin: 7px 8px 0;
	border-bottom: 1px solid #AAA;
	padding-bottom: .5em;
}

.elgg-module-dropdown > .elgg-foot {
	text-align: center;
}

/* Featured */
.elgg-module-featured {
	background-color: #F2F2F2;
	border: 1px solid #CCC;
	padding: 10px;
	margin-bottom: 20px;
}

.elgg-module-featured > .elgg-head {
	margin-bottom: 10px;
}

/* ***************************************
	Widgets
*************************************** */
.elgg-widgets {
	float: right;
	min-height: 30px;
}
.elgg-widget-add-control {
	text-align: right;
	margin: 5px 5px 15px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	background: #dedede;
	border: 2px solid #ccc;
}
<?php //@todo location-dependent style: make an extension of elgg-gallery ?>
.elgg-widgets-add-panel li {
	float: left;
	margin: 2px 10px;
	width: 200px;
	padding: 4px;
	background-color: #ccc;
	border: 2px solid #b0b0b0;
	font-weight: bold;
}
.elgg-widgets-add-panel li a {
	display: block;
}
.elgg-widgets-add-panel .elgg-state-available {
	color: #333;
	cursor: pointer;
}
.elgg-widgets-add-panel .elgg-state-available:hover {
	background-color: #bcbcbc;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
	color: #888;
}

.elgg-module-widget {
	background-color: #dedede;
	padding: 2px;
	margin: 0 5px 15px;
	position: relative;
}
.elgg-module-widget:hover {
	background-color: #ccc;
}
.elgg-module-widget > .elgg-head {
	background-color: #dedede;
	height: 30px;
	line-height: 30px;
	overflow: hidden;
}
.elgg-module-widget > .elgg-head h3 {
	float: left;
	padding: 0 45px 0 20px;
	color: #333;
}
.elgg-module-widget.elgg-state-draggable > .elgg-head {
	cursor: move;
}
.elgg-module-widget > .elgg-head a {
	position: absolute;
	top: 5px;
	display: inline-block;
	width: 18px;
	height: 18px;
	padding: 2px 2px 0 0;
	border: 1px solid transparent;
}
a.elgg-widget-collapse-button {
	left: 5px;
	background:transparent url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat 0px -385px;
}
a.elgg-widget-collapsed {
	background-position: 0px -365px;
}
a.elgg-widget-delete-button {
	right: 5px;
}
a.elgg-widget-edit-button {
	right: 25px;
}
a.elgg-widget-edit-button:hover, a.elgg-widget-delete-button:hover {
	border: 1px solid #ccc;
}
.elgg-module-widget > .elgg-body {
	background-color: white;
	width: 100%;
	overflow: hidden;
}
.elgg-widget-edit {
	display: none;
	width: 96%;
	padding: 2%;
	border-bottom: 2px solid #dedede;
}
.elgg-widget-content {
	padding: 10px;
}
.elgg-widget-placeholder {
	border: 2px dashed #dedede;
	margin-bottom: 15px;
}
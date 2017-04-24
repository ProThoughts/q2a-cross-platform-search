<?php
/*
	Plugin Name: Cross-Platform Search
	Plugin URI: https://github.com/stanhuan/q2a-cross-platform-search
	Plugin Description: Adds a button which allows you to perform a search on another platform
	Plugin Version: 1.0
	Plugin Date: 2017-04-24
	Plugin Author: Stanley Huang
	Plugin Author URI: http://stanhuan.com
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: https://raw.githubusercontent.com/stanhuan/q2a-cross-platform-search/master/qa-plugin.php

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.gnu.org/licenses/gpl.html
	
*/

if ( !defined('QA_VERSION') )
{
	header('Location: ../../');
	exit;
}

// page
qa_register_plugin_module(
	'widget', // type of module
	'qa-xsearch-widget.php', // PHP file containing module class
	'qa_xsearch_widget', // module class name in that PHP file
	'Cross Platform Search' // human-readable name of module
);
qa_register_plugin_module('module', 'qa-xsearch-admin.php', 'qa_xsearch_admin', 'Cross Platform Search');
/*
	Omit PHP closing tag to help avoid accidental output
*/

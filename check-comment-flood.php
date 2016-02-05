<?php
/*
Plugin Name: Check Comment Flood
Description: This Simple Plugin prevents most of the spam comments by checking the HTTP_REFERER variable. No complex configurations just simply activating the plugin will do the job. 
Version: 0.1
Author: SteakOverCooked
Author URI: https://steakovercooked.com
Plugin URI: 
License: Free
Text Domain: check-comment-flood 
*/

function check_referrer() {
	if (!isset($_SERVER['HTTP_REFERER']) || $_SERVER['HTTP_REFERER'] == '') {
		wp_die(__('Please do not access this file directly.'));
	}
}
add_action('check_comment_flood', 'check_referrer');

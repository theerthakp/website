<?php
/*
Plugin Name: Job Manager
Description: A plugin to manage job listings and applications.
Version: 1.0
Author: theertha
*/

// Start output buffering
ob_start();

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

define('JOB_MANAGER_VERSION', '1.0.0');

// Include the main class files
require plugin_dir_path(__FILE__) . 'includes/class-job-manager.php';
require plugin_dir_path(__FILE__) . 'includes/class-job-manager-rest-api.php';
require plugin_dir_path(__FILE__) . 'includes/class-job-manager-admin.php';
require plugin_dir_path(__FILE__) . 'includes/class-job-manager-meta-boxes.php';

// Run the plugin
function run_job_manager() {
    $plugin = new Job_Manager();
    $plugin->run();
}

register_activation_hook(__FILE__, array('Job_Manager', 'activate'));
register_deactivation_hook(__FILE__, array('Job_Manager', 'deactivate'));

run_job_manager();
function job_manager_enqueue_admin_scripts($hook) {
    if ('job-manager' !== $hook && strpos($hook, 'job-manager') === false) {
        return;
    }
    wp_enqueue_media();
    wp_enqueue_script(
        'job-manager-media-uploader',
        plugin_dir_url(__FILE__) . 'js/media-uploader.js',
        array('jquery'),
        '1.0',
        true
    );
}
add_action('admin_enqueue_scripts', 'job_manager_enqueue_admin_scripts');
function remove_existing_job_meta($post_id) {
    delete_post_meta($post_id, '_position_title');
    delete_post_meta($post_id, '_company_name');
    delete_post_meta($post_id, '_logo');
    delete_post_meta($post_id, '_job_type');
    delete_post_meta($post_id, '_category');
    delete_post_meta($post_id, '_expiry_date');
    delete_post_meta($post_id, '_application');
    delete_post_meta($post_id, '_description');
    delete_post_meta($post_id, '_location');
}

// Clean output buffering
ob_end_clean();

<?php
/**
 * @package codigolabs_plugin_alexis_rabiller
 * @version 1.0.0
 */
/*
Plugin Name: codigolabs_plugin_alexis_rabiller
Plugin URI: https://github.com/B3r4ti0n/wordpress_plugin
Description: a plugin 'test' return a script below the footer in the template
Author: Alexis Rabiller
Version: 1.0.0
Author URI: https://github.com/B3r4ti0n
*/
add_action('wp_footer', 'helloWorld');
add_action('wp_footer', 'addScript');
function helloWorld(){
    echo (
        '<p>HELLO WORLD !</p>'
    );
}
function addScript($dataAppId){
    echo (
        '
        <script async type=text/javascript src=https://cdglb-content-server.s3.amazonaws.com/scripts/tracker.js id=cdglb-tracker data-app-id=bue4f6tf2ic4vnm53fr0>
        </script>
        '
    );
}
?>
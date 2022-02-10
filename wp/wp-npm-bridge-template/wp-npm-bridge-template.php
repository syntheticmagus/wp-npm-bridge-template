<?php
/**
 * Plugin Name: NPM Bridge Template
 */

// This line causes wp-npm-bridge-template.js, which is our Webpack build artifact, to be included 
// in the header of every WordPress page. If there is automatically-executed functionality in this
// artifact, it will be automatically executed on every page. If there are functions defined and
// exposed in this artifact, they will be made available on every page. If you need more granularity
// in the exposure of your plugin's functionality, consider using wp_register_script(...) to 
// register your artifact separately from enqueuing it, then enqueuing only when appropriate.
// Information on how to do that is beyond the scope of this template.
wp_enqueue_script('npm-bridge-template', plugins_url('assets/js/wp-npm-bridge-template.js', __FILE__));

// Example shortcode handler. Shows how to extract attributes (arguments), provide default values, 
// and use the extracted results in returned output. Also shows the use of the <script> tag to 
// invoke CustomFunction(), which was defined previously by the Webpack build artifact we enqueued
// to be put in the page header. In this way, we can inject our functionality into specific 
// locations specifiable in WordPress via shortcode.
function npm_bridge_shortcode_function($atts = array()) {
    extract(shortcode_atts(array('message' => 'default'), $atts));

    return '
    <p>
        Here\'s your message: '.$message.'
    </p>
    <script>
        console.log("Calling CustomFunction()...");
        CustomFunction();
        console.log("Called!");
    </script>
    ';
}

// Register the shortcode with its handler function.
add_shortcode('npm-bridge', 'npm_bridge_shortcode_function');

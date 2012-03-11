<?php

/*

Plugin Name: Disable Editor

Plugin URI: http://maisdesign.it

Description: It disable Post editor for Non Administrators and let you create posts only using Custom Fields (remember to configure them first!)
It Uses: if ( ! current_user_can( 'install_plugins' ) )

Version: 0.1

Author: MaisDesign

Author URI: http://maisdesign.it

License: GPL2?

*/
/* Disable Post Edit */
add_action( 'add_meta_boxes', 'wpse45113_remove_editor' );
function wpse45113_remove_editor() {
    // change the capability and post type to whatever is appropriate
    if ( ! current_user_can( 'install_plugins' ) )
        remove_post_type_support( 'post', 'editor' );
}
;?>
<?php
/**
 * Plugin Name: MSCC Action Example
 * Description: Example taken from <a href="http://codex.wordpress.org/Plugin_API/Action_Reference/save_post">save_post</a> documentation
 */
defined('ABSPATH') or die;

function my_project_updated_send_email( $post_id ) {

    // If this is just a revision, don't send the email.
    if ( wp_is_post_revision( $post_id ) )
        return;

    $post_title = get_the_title( $post_id );
    $post_url = get_permalink( $post_id );
    $subject = 'A post has been updated';

    $message = "A post has been updated on your website:\n\n";
    $message .= $post_title . ": " . $post_url;

    // Send email to admin. UNCOMMENT TO TEST
    # wp_mail( 'admin@example.com', $subject, $message );
}
add_action( 'save_post', 'my_project_updated_send_email' );
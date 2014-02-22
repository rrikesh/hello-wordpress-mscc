<?php

function rr_minimal_shortcode( $atts ){
	return 'Hey, look at out our repositories on <a href="http://github.com/rrikesh">Github</a>?';
}
add_shortcode( 'git', 'rr_minimal_shortcode' );
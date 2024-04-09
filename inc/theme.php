<?php

add_filter( 'body_class', function( $classes ) {
	return array_merge( $classes, array( 'dda' ) );
} );

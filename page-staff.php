<?php
    if ( function_exists ( 'get_field' ) ) {
        if ( get_field( 'intro' ) ) {
            the_field( 'intro' );
        }
    }
?>
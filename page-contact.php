<?php
    if ( function_exists ( 'get_field' ) ) {
        if ( get_field( 'map' ) ) {
            the_field( 'map' );
        }
    }
?>
<?php
    if ( function_exists ( 'get_field' ) ) {
        if ( get_field( 'banner_slogan' ) ) {
            the_field( 'banner_slogan' );
        }
    }
?>
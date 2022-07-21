<?php
    if( $image ) {
        echo wp_get_attachment_image( $image, $size, '', array( 'class' => 'img-fluid' ) );
    }
?>
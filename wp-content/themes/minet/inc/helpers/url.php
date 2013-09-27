<?php
	function get_base_url($append = NULL) {
		return get_bloginfo( 'url' ) . $append;
	}

	function base_url($append = NULL) {
		echo get_base_url( $append );
	}

	function get_template_url($append = NULL) {
		return get_bloginfo( 'template_url' ) . $append;
	}
	
	function template_url($append = NULL) {
		echo get_template_url($append);
	}
?>
<?php
	function get_template_url($append = NULL) {
		return get_bloginfo('template_url') . $append;
	}
	
	function template_url($append = NULL) {
		echo get_template_url($append);
	}
?>
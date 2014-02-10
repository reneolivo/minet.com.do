<?php
	function get_posts_ids($posts) {
		$ids = array();
		
		foreach($posts as $post)
			$ids[] = $post->ID;
		
		return $ids;
	}
	
	
	function get_post_object() {
		global $post;
		
		if (!$post) return false;
		
		require_ormClass('OPost');
		
		return new OPost((array) $post);
	}
	
	function get_loop_posts_objects() {
		$posts = array();
	
		while(have_posts()) {
			the_post();
			
			$posts[] = 	get_the_post();
		}
		
		return $posts;
	}
?>
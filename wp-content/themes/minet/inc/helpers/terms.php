<?php
	function get_terms_ids(array $tags) {			
		$ids = array();
		
		foreach($tags as $tag)
			$ids[] = $tag->term_id;
		
		return $ids;
	}
?>
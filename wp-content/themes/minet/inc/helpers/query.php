<?php
	function query_posts_objects($args = array(), $className = 'OPost') {
		require_ormClass($className);
		
		$defaults = array(
		
		);
		
		$args		= array_merge($defaults, $args);
		
		$result		= get_posts($args);
		
		foreach($result as $i => $res)
			$result[$i] = new OPost((array) $res); //TODO: fix
		
		return $result;
	}
	
	### QUERY LOGS HELPERS:
	
	function get_all_queries() {
		global $wpdb;
		return $wpdb->queries;
	}
	
	function get_last_query() {
		$queries = get_all_queries();
		
		$last = end($queries);
		
		if (isset($last))
			return $last[0];
		else
			return '';
	}
	
	
	function print_all_queries() {
		echo "<pre>";
		print_r( get_all_queries() );
		echo "</pre>";
	}
	
	function print_last_query() {
		echo "<pre>";
		print_r( get_last_query() );
		echo "</pre>";
	}
?>
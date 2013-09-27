<?php
	function require_model($name) {
		$name = basename($name);
		
		require(__DIR__ . '/../models/' . $name . '.php');
		
		if (isset($model))
			return $model;
	}
	
	function require_ormClass($name) {
		$name = strtolower(basename($name));
		
		require_once(__DIR__ . '/../orm/' . $name . '.php');
	}
?>
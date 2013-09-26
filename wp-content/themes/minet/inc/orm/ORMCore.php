<?php
	class ORMCore {
		protected $_properties = array();
		
		public function __construct($properties) {
			$this->_properties = $properties;
		}
		
		public function __set($key, $value) {
			$this->_properties[$key] = $value;
		}
		
		public function __get($key) {
			if (isset($this->_properties['post_' . $key]) )
				return $this->_properties['post_' . $key];
			else
				return $this->_properties[$key];
		}
		
		public function __call($name, $args) {
			if ( method_exists($this, $name) ) {
				return call_user_func_array(array($this, $name), $args);
				
			} else if ( method_exists( $this, 'get' . $name )) {
				echo call_user_func_array(array($this, 'get' . $name), $args);
			
			} else if ( isset($this->_properties[$name]) OR isset($this->_properties['post_' . $name]) ) {
				echo isset($this->_properties[$name]) ? 
					$this->_properties[ $name ] : 
					$this->_properties[ 'post_' . $name ]
				;
			}
		}
	}
?>
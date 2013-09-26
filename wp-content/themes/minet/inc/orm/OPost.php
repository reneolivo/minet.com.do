<?php
	require_ormClass('ORMCore');
	
	class OPost extends ORMCore {
		public function __construct($properties) {
			parent::__construct($properties);
		}
		
		### LINKS:
		
		public function getPermalink() {
			return get_permalink( $this->ID );
		}
		
		### THUMBNAIL:
		
		public function getThumbnail($size = 'thumbnail', $attrs = array()) {
			return get_the_post_thumbnail($this->ID, $size, $attrs);
		}
		
		public function getThumbnailSource($size = 'thumbnail') {
			$thumbnailID	= get_post_thumbnail_id( $this->ID );
			
			$src			= wp_get_attachment_image_src( $thumbnailID, $size );
			
			if (is_array($src))
				return $src[0];
			else
				return '';
		}
		
		### DATE / TIME:
		
		public function theDate($format = 'd/m/y') {
			echo date($format, strtotime($this->post_date));
		}
		
		
		public function theTime() {
			echo date('h:i a', strtotime($this->post_date));
		}
		
		### TERMS:
		
		public function getTerms($termsName) {
			return get_the_terms( $this->ID, $termsName );
		}
		
		public function getTermsString($termsName) {
			return get_the_terms_string( $this->ID, $termsName );
		}
		
		public function getTermsIds( $termsName ) {
			$terms = $this->getTerms();
			
			return get_terms_ids($terms);
		}
		
		### TAGS:
		
		public function getTags() {
			return wp_get_post_tags( $this->ID );
		}
		
		public function getTagsIds() {		
			$tags = $this->getTags();
			
			return get_terms_ids($tags);
		}
		
		### META:
		
		public function meta($fieldName) {
			echo $this->getMeta($fieldName);
		}
		
		public function getMeta($fieldName) {
			return get_field($fieldName, $this->ID);
		}
	}
?>
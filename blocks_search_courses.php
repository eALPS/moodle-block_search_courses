<?php
class block_search_courses extends block_base {
	function init() {
		$this->title   = get_string('search_courses', 'block_search_courses');
		$this->version = 2012120700;
	}
	
	function get_content() {
		if ($this->content !== NULL) {
			return $this->content;
		}

		$this->content = new stdClass;
		$this->content->text = 'The content of our SimpleHTML block!';
		$this->content->footer = 'Footer here...';

		return $this->content;
	}
}// Here's the closing curly bracket for the class definition
// and here's the closing PHP tag from the section above.
?>
<?php

class block_search_courses extends block_base {

	function init() {
		$this->title = get_string('pluginname', 'block_search_courses');
		//$this->version = 2012120700;
	}

	function applicable_formats() {
		return array('all' => true);
	}

/*
	function specialization() {
		$this->title = isset($this->config->title) ? format_string($this->config->title) : format_string(get_string('newhtmlblock', 'block_html'));
	}
*/

	function instance_allow_multiple() {
		return true;
	}

	function get_content() {
		global $CFG;
		if ($this->content !== NULL) {
			return $this->content;
		}
		
		$renderer = $this->page->get_renderer('block_search_courses');

		$this->content = new stdClass;
		var_dump($CFG);
		$this->content->text = 'まだ作ってる最中';
		$this->content->footer = $renderer->search_form(new moodle_url("$CFG->wwwroot/$CFG->course/search.php"), optional_param('query', '', PARAM_RAW));
		//$this->content->footer = 'ここはフッター';

/*
		global $CFG;

		require_once($CFG->libdir . '/filelib.php');

		if ($this->content !== NULL) {
			return $this->content;
		}

		$filteropt = new stdClass;
		$filteropt->overflowdiv = true;
		if ($this->content_is_trusted()) {
			// fancy html allowed only on course, category and system blocks.
			$filteropt->noclean = true;
		}

		$this->content = new stdClass;
		$this->content->footer = '';
		if (isset($this->config->text)) {
			// rewrite url
			$this->config->text = file_rewrite_pluginfile_urls($this->config->text, 'pluginfile.php', $this->context->id, 'block_html', 'content', NULL);
			// Default to FORMAT_HTML which is what will have been used before the
			// editor was properly implemented for the block.
			$format = FORMAT_HTML;
			// Check to see if the format has been properly set on the config
			if (isset($this->config->format)) {
				$format = $this->config->format;
			}
			$this->content->text = format_text($this->config->text, $format, $filteropt);
		} else {
			$this->content->text = '';
		}

		unset($filteropt); // memory footprint
*/

		return $this->content;
	}

}// Here's the closing curly bracket for the class definition
// and here's the closing PHP tag from the section above.
?>
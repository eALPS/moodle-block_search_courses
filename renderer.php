<?php

class block_search_courses_renderer extends plugin_renderer_base {

	public function search_courses_form(moodle_url $formtarget, $searchvalue) {
		$content = html_writer::start_tag('form', array('method'=>'get', 'action'=>$formtarget));
		$content .= html_writer::start_tag('div');
		$content .= html_writer::tag('label', s(get_string('pluginname', 'block_search_courses')), array('for'=>'coursesearchbox', 'class'=>'accesshide'));
		$content .= html_writer::empty_tag('input', array('id'=>'searchcoursequery', 'type'=>'text', 'name'=>'search', 'value'=>s($searchvalue)));
		$content .= html_writer::empty_tag('input', array('type'=>'submit', 'value'=>s(get_string('search'))));
		$content .= html_writer::end_tag('div');
		$content .= html_writer::end_tag('form');
		return $content;
	}

}

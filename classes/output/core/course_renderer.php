<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Course renderer.
 *
 * @package    theme_noanme
 * @copyright  2016 Frédéric Massart - FMCorz.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_fordson\output\core;
defined('MOODLE_INTERNAL') || die();

use moodle_url;
use lang_string;
use coursecat_helper;
use coursecat;
use stdClass;
use course_in_list;
use context_course;
use pix_url;

require_once($CFG->dirroot . '/course/renderer.php');

/**
 * Course renderer class.
 *
 * @package    theme_noanme
 * @copyright  2016 Frédéric Massart - FMCorz.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class course_renderer extends \core_course_renderer {

    /**
     * Renders html to display a course search form.
     *
     * @param string $value default value to populate the search field
     * @param string $format display format - 'plain' (default), 'short' or 'navbar'
     * @return string
     */
    public function course_search_form($value = '', $format = 'plain') {
        static $count = 0;
        $formid = 'coursesearch';
        if ((++$count) > 1) {
            $formid .= $count;
        }

        switch ($format) {
            case 'navbar' :
                $formid = 'coursesearchnavbar';
                $inputid = 'navsearchbox';
                $inputsize = 20;
                break;
            case 'short' :
                $inputid = 'shortsearchbox';
                $inputsize = 12;
                break;
            default :
                $inputid = 'coursesearchbox';
                $inputsize = 30;
        }

        $data = (object) [
            'searchurl' => (new moodle_url('/course/search.php'))->out(false),
            'id' => $formid,
            'inputid' => $inputid,
            'inputsize' => $inputsize,
            'value' => $value
        ];

        return $this->render_from_template('theme_boost/course_search_form', $data);
    }
    
    public function frontpage_available_courses() {
    	/* available courses */
    if (theme_fordson_get_setting('enablefrontpageavailablecoursebox')) {
    	global $CFG, $OUTPUT, $PAGE;
    	require_once($CFG->libdir. '/coursecatlib.php');
    
    	$chelper = new coursecat_helper();
    	$chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_EXPANDED)->set_courses_display_options(array(
    			'recursive' => true,
    			'limit' => $CFG->frontpagecourselimit,
    			'viewmoreurl' => new moodle_url('/course/index.php'),
    			'viewmoretext' => new lang_string('fulllistofcourses')
    	));

    	$chelper->set_attributes(array('class' => 'frontpage-course-list-all'));
    	$courses = coursecat::get(0)->get_courses($chelper->get_courses_display_options());
    	$totalcount = coursecat::get(0)->get_courses_count($chelper->get_courses_display_options());

    	$rcourseids = array_keys($courses);
    	$acourseids = array_chunk($rcourseids, 3);
    	$newcourse = get_string('availablecourses');

    	$header = '
    			<div id="frontpage-course-list">
    				<div class="class-list">
        				<h2>'.$newcourse.'</h2>
        			</div>
        			<div class="courses frontpage-course-list-all">';
    	
    	$content = '';
    	
    	$footer = '
        			</div>
       			</div>';
    
    	if (count($rcourseids) > 0) {
    		foreach ($acourseids as $courseids) {
    			$content .= '<div class="container-fluid"> <div class="row">';
    			$rowcontent = '';
    
    			foreach ($courseids as $courseid) {
    				$course = get_course($courseid);

                    $summary = theme_fordson_strip_html_tags($course->summary);
                    $summary = theme_fordson_course_trim_char($summary, 90);
                    $trimtitle = theme_fordson_course_trim_char($course->fullname, 30);

    				$noimgurl = $OUTPUT->pix_url(noimg, 'theme');
    				$courseurl = new moodle_url('/course/view.php', array('id' => $courseid ));
    
    				if ($course instanceof stdClass) {
    					require_once($CFG->libdir. '/coursecatlib.php');
    					$course = new course_in_list($course);
    				}
    
    				// Load from config if usea a img from course summary file if not exist a img then a default one ore use a fa-icon
    				
	    				$imgurl = '';
	    				$context = context_course::instance($course->id);
	    				
	    				foreach ($course->get_course_overviewfiles() as $file) {
	    					$isimage = $file->is_valid_image();
	    					$imgurl = file_encode_url("$CFG->wwwroot/pluginfile.php",
	    							'/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
	    							$file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
	    					if (!$isimage) {
	    						$imgurl = $noimgurl;
	    					}
	    				}
                        if (empty($imgurl)) {
                        $imgurl = $PAGE->theme->setting_file_url('headerdefaultimage', 'headerdefaultimage', true);
                        if (!$imgurl) {
                            $imgurl = $noimgurl;
                        }
                    }
                    
    
    			   $rowcontent .= '
    					<div class="col-md-4">
                        	<div class="class-box" style="background-image: url('.$imgurl.');background-repeat: no-repeat;background-size:cover; background-position:center;">
                        		';
    			   //$rowcontent .= $courseimg;
                   $rowcontent .= '
                                
                        		<div class="course-title">
                       				<h3><a data-toggle="tooltip" data-placement= "top" title="'.$course->fullname.'" href="'.$courseurl.'">'.$trimtitle.'</a></h3>
                        		</div>
                        	</div>
                        </div>';
    			}
    			$content .= $rowcontent;
    			$content .= '</div> </div>';
    		}
    	}
    
    	$coursehtml = $header.$content.$footer;
    	echo $coursehtml;
    
    	if (!$totalcount && !$this->page->user_is_editing() && has_capability('moodle/course:create', context_system::instance())) {
    		// Print link to create a new course, for the 1st available category.
    		echo $this->add_new_course_button();
    	}
    }
else {
    global $CFG;
        require_once($CFG->libdir. '/coursecatlib.php');

        $chelper = new coursecat_helper();
        $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_EXPANDED)->
                set_courses_display_options(array(
                    'recursive' => true,
                    'limit' => $CFG->frontpagecourselimit,
                    'viewmoreurl' => new moodle_url('/course/index.php'),
                    'viewmoretext' => new lang_string('fulllistofcourses')));

        $chelper->set_attributes(array('class' => 'frontpage-course-list-all'));
        $courses = coursecat::get(0)->get_courses($chelper->get_courses_display_options());
        $totalcount = coursecat::get(0)->get_courses_count($chelper->get_courses_display_options());
        if (!$totalcount && !$this->page->user_is_editing() && has_capability('moodle/course:create', context_system::instance())) {
            // Print link to create a new course, for the 1st available category.
            return $this->add_new_course_button();
        }
        return $this->coursecat_courses($chelper, $courses, $totalcount);
    }
}

}
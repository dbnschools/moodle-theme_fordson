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
 * course_overview block rendrer
 *
 * @package    block_course_overview
 * @copyright  2012 Adam Olley <adam.olley@netspot.com.au>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace theme_fordson\output;
defined('MOODLE_INTERNAL') || die();

use moodle_url;
use stdClass;
use course_in_list;
use context_course;
use pix_url;

require_once($CFG->dirroot . '/blocks/course_overview/renderer.php');
require_once($CFG->dirroot . '/course/renderer.php');

/**
 * Course_overview block rendrer
 *
 * @copyright  2012 Adam Olley <adam.olley@netspot.com.au>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_course_overview_renderer extends \block_course_overview_renderer {

    /**
     * Construct contents of course_overview block
     *
     * @param array $courses list of courses in sorted order
     * @param array $overviews list of course overviews
     * @return string html to be displayed in course_overview block
     */
    public function course_overview($courses, $overviews) {
    	global $DB,$USER,$CFG;
    	$sql =("SELECT (CASE WHEN bp.region IS NULL THEN b.defaultregion ELSE bp.region END) as region FROM ".$CFG->prefix."context c JOIN ".$CFG->prefix."block_instances b ON c.id = b.parentcontextid LEFT JOIN ".$CFG->prefix."block_positions bp ON bp.blockinstanceid = b.id  WHERE b.pagetypepattern = 'my-index' and b.blockname = 'course_overview' and c.contextlevel = 30 and c.instanceid = ".$USER->id);
    	$blockinstance = $DB->get_record_sql($sql);
    	if($blockinstance->region == "content"){
    		return $this->fordson_course_overiew($courses,$overviews);
    	}
    	else{
    		return parent::course_overview($courses, $overviews);
    	}
    }
    
    public function fordson_course_overiew($courses,$overviews) {
    	/* available courses */
    	global $CFG, $OUTPUT, $PAGE;
    	require_once($CFG->libdir. '/coursecatlib.php');
    	
    	$rcourseids = array_keys($courses);
    	asort($rcourseids);

    	$header = '
    			<div id="course-overiew-course-list">
        			<div class="courses course-overiew-course-list-all">';
    	 
    	$content = '';
    	 
    	$footer = '
        			</div>
       			</div>';

    	if (count($rcourseids) > 0) {
    		foreach ($rcourseids as $courseids) {
    				$content .= '<div class="container-fluid"> <div class="row">';
    				$rowcontent = '';
    
    				$course = get_course($courseids);
    			
    				$trimtitlevalue = $PAGE->theme->settings->trimtitle;
                    $trimsummaryvalue = $PAGE->theme->settings->trimsummary;

                    $summary = theme_fordson_strip_html_tags($course->summary);
                    $summary = theme_fordson_course_trim_char($summary, $trimsummaryvalue);

                    
                    $trimtitle = theme_fordson_course_trim_char($course->fullname, $trimtitlevalue);
    
    				$noimgurl = $OUTPUT->pix_url(noimg, 'theme');
    				$courseurl = new moodle_url('/course/view.php', array('id' => $course->id ));
    
    				if ($course instanceof stdClass) {
    					require_once($CFG->libdir. '/coursecatlib.php');
    					$course = new course_in_list($course);
    				}
    
    				// Load from config if usea a img from course summary file if not exist a img then a default one ore use a fa-icon
    
    				$imgurl = '';
    				$context = context_course::instance($course->id);
    	            $activityoverview = get_string('dashactivityoverview' , 'theme_fordson');

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
                        <div class="col-md-5">
                            <div class="class-box">
                                ';
    				
    				if ($PAGE->theme->settings->titletooltip) {
    					$tooltiptext = 'data-toggle="tooltip" data-placement= "top" title="'.$course->fullname.'"';
    				} else {
    					$tooltiptext = '';
    				}
    				
    				$rowcontent .= '
                                    <div class="course-title">
                                    	<p><b><a '.$tooltiptext.' href="'.$courseurl.'">'.$trimtitle.'</a></b></p>
                                    </div>
                                    <a href="'.$courseurl.'">
                                        <div class="dash-course-image-view" style="background-image: url('.$imgurl.');background-repeat: no-repeat;background-size:cover; background-position:center;">
                                        </div>
                                    </a>
                                   	<div class="course-summary">
				    				'.$summary.'
				    				</div>';
				    				
    		      $rowcontent .= '
    						</div>
    					</div>';
    				
    			   $rowcontent .= '
                        <div class="col-md-7">
                            <div class="class-box">
                                ';
                                    	
                   $rowcontent .= '
                            	<div class="course-summary-dashboard"> '.$activityoverview.'
                                	'.$this->activity_display($course->id, $overviews[$course->id]).'
                                </div>
                        	</div>
                        </div>';
    
    			$content .= $rowcontent;
    			$content .= '</div> </div>';
    		}
    	}
    	$coursehtml = $header.$content.$footer;
    	$coursehtml .= '<br/><br/>';
    	return $coursehtml;
    }
}

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
use html_writer;
use heading;

require_once($CFG->dirroot . '/course/renderer.php');

/**
 * Course renderer class.
 *
 * @package    theme_noanme
 * @copyright  2016 Frédéric Massart - FMCorz.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if (theme_fordson_get_setting('enablefrontpageavailablecoursebox')) {
class course_renderer extends \core_course_renderer {
    
    protected $countcategories = 0;
    
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

        return $this->render_from_template('theme_fordson/course_search_form', $data);
    }
    

    public function frontpage_available_courses($id=0) {
    	/* available courses */
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
    	$courses = coursecat::get($id)->get_courses($chelper->get_courses_display_options());
    	$totalcount = coursecat::get($id)->get_courses_count($chelper->get_courses_display_options());

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

                    $trimtitlevalue = $PAGE->theme->settings->trimtitle;
                    
                    $trimtitle = theme_fordson_course_trim_char($course->fullname, $trimtitlevalue);

    				$noimgurl = $OUTPUT->pix_url('noimg', 'theme');
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
                        	<div class="class-box-fp" style="background-image: url('.$imgurl.');background-repeat: no-repeat;background-size:cover; background-position:center;">
                        		';
    			                
                                if ($PAGE->theme->settings->titletooltip) {
                                $tooltiptext = 'data-toggle="tooltip" data-placement= "top" title="'.$course->fullname.'"';
                                } else {
                                $tooltiptext = '';
                                }

                       $rowcontent .= '
                                    <div class="course-title">
                                    <h4><a '.$tooltiptext.' href="'.$courseurl.'">'.$trimtitle.'</a></h4>
                                    </div>
                                </div>
                        </div>';
                        }

    			$content .= $rowcontent;
    			$content .= '</div> </div>';
    		}
    	}
    
    	$coursehtml = $header.$content.$footer;

    	if($id == 0){
            echo $coursehtml;
            if (!$totalcount && !$this->page->user_is_editing() && has_capability('moodle/course:create', context_system::instance())) {
                // Print link to create a new course, for the 1st available category.
                echo $this->add_new_course_button();
            }
        }else{
            $coursehtml .= '<br/><br/>';
            return $coursehtml;
        }
    }

    public function view_available_courses($id = 0, $courses = NULL, $totalcount = NULL) {
        /* available courses */
        global $CFG, $OUTPUT, $PAGE;
        require_once($CFG->libdir. '/coursecatlib.php');
    
        $chelper = new coursecat_helper();
        $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_EXPANDED)->set_courses_display_options(array(
                'recursive' => false,
                'limit' => $CFG->frontpagecourselimit,
                'viewmoreurl' => new moodle_url('/course/index.php'),
                'viewmoretext' => new lang_string('fulllistofcourses')
        ));

        $chelper->set_attributes(array('class' => 'category-course-list-all'));
        if (!$courses) {
            $courses = coursecat::get($id)->get_courses($chelper->get_courses_display_options());
            $totalcount = coursecat::get($id)->get_courses_count($chelper->get_courses_display_options());
        }

        $rcourseids = array_keys($courses);
        $acourseids = array_chunk($rcourseids, 3);
        
        if($id!=0){
        $newcourse = get_string('availablecourses');
        } else {
            $newcourse = NULL;
        }

        $header = '
                <div id="category-course-list">
                    <div class="class-list">
                        <h2>'.$newcourse.'</h2>
                    </div>
                    <div class="courses category-course-list-all">';
        
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

                    $trimtitlevalue = $PAGE->theme->settings->trimtitle;
                    $trimsummaryvalue = $PAGE->theme->settings->trimsummary;

                    $summary = theme_fordson_strip_html_tags($course->summary);
                    $summary = theme_fordson_course_trim_char($summary, $trimsummaryvalue);

                    
                    $trimtitle = theme_fordson_course_trim_char($course->fullname, $trimtitlevalue);
    
                    $noimgurl = $OUTPUT->pix_url('noimg', 'theme');
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
                            <div class="class-box">
                                ';
                                
                                if ($PAGE->theme->settings->titletooltip) {
                                $tooltiptext = 'data-toggle="tooltip" data-placement= "top" title="'.$course->fullname.'"';
                                } else {
                                $tooltiptext = '';
                                }

                       $rowcontent .= '
                                    <div class="course-title">
                                    <h4><a '.$tooltiptext.' href="'.$courseurl.'">'.$trimtitle.'</a></h4>
                                    </div>
                                    <a href="'.$courseurl.'">
                                    <div class="course-image-view" style="background-image: url('.$imgurl.');background-repeat: no-repeat;background-size:cover; background-position:center;">
                                    </div>
                                    </a>
                                    <div class="course-summary">
                                    '.$summary.'
                                    </div>
                                </div>
                        </div>';
                        }

                $content .= $rowcontent;
                $content .= '</div> </div>';
            }
        }
    
        $coursehtml = $header.$content.$footer;

            $coursehtml .= '<br/><br/>';
            return $coursehtml;
    }



    /**
     * Returns HTML to display the subcategories and courses in the given category
     *
     * This method is re-used by AJAX to expand content of not loaded category
     *
     * @param coursecat_helper $chelper various display options
     * @param coursecat $coursecat
     * @param int $depth depth of the category in the current tree
     * @return string
     */
        protected function coursecat_category(coursecat_helper $chelper, $coursecat, $depth) {

        global $CFG, $OUTPUT;
        // open category tag
        $classes = array('category');
        if (empty($coursecat->visible)) {
            $classes[] = 'dimmed_category';
        }
        if ($chelper->get_subcat_depth() > 0 && $depth >= $chelper->get_subcat_depth()) {
            // do not load content
            $categorycontent = '';
            $classes[] = 'notloaded';
            if ($coursecat->get_children_count() ||
                    ($chelper->get_show_courses() >= self::COURSECAT_SHOW_COURSES_COLLAPSED && $coursecat->get_courses_count())) {
                $classes[] = 'with_children';
                $classes[] = 'collapsed';
            }
        } else {
            // load category content
            $categorycontent = $this->coursecat_category_content($chelper, $coursecat, $depth);
            $classes[] = 'loaded';
            if (!empty($categorycontent)) {
                $classes[] = 'with_children';
            }
        }
        
        $totalcount = coursecat::get(0)->get_children_count();
        
        $content = '';
        if($this->countcategories == 0 || ($this->countcategories % 3) == 0){
            if(($this->countcategories % 3) == 0 && $totalcount != $this->countcategories){
                $content .= '</div> </div>';
            }
            if($totalcount != $this->countcategories || $this->countcategories == 0){
                $categoryparam = optional_param('categoryid', 0, PARAM_INT);
                if($categoryparam){
                    $content .= $OUTPUT->heading(get_string('categories'));
                }
                $content .= '<div class="container-fluid"><div class="row">';
            }
        }

        // ADD HERE GRID OPTIONS AND BOX CSS
        $classes[] = 'col-md-3 box-class';
        $content = '<div class="'.join(' ', $classes).'" data-categoryid="'.$coursecat->id.'" data-depth="'.$depth.'" data-showcourses="'.$chelper->get_show_courses().'" data-type="'.self::COURSECAT_TYPE_CATEGORY.'">';
        $content .= '<div class="cat-icon">';

        // LOAD ICON
        $val = theme_fordson_get_setting('catsicon');
        $url= new moodle_url('/course/index.php', array('categoryid' => $coursecat->id));
        $content .= '<a href="'.$url.'">';
        $content .= '<i class="fa fa-5x fa-'.$val.'"></i>';
                //Cat title
        $categoryname = $coursecat->get_formatted_name();
        $content .= '<div>';
        $content .= '<div class="info-enhanced">';
        $content .= '<span class="class-category">'.$categoryname.'</span>';
        // ADD HERE A CLASS TO SHOW COURSES COUNT IN A CORNER OR WHERE YOU THINK IS BETTER.
        if ($chelper->get_show_courses() == self::COURSECAT_SHOW_COURSES_COUNT) {
            $coursescount = $coursecat->get_courses_count();
            $content .= '  <span class="numberofcourses" title="'.get_string('numberofcourses').'">('.$coursescount.')</span>';
        }
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</a>';

        $content .= '</div>'; // BORDER DIV END.
        $content .= '</div>'; // COL-MD-4 DIV END
        if($totalcount == $this->countcategories){
        }
        ++$this->countcategories;
        return $content;
    }
         
    protected function coursecat_courses(coursecat_helper $chelper, $courses, $totalcount = null) {
       
            $categoryid = optional_param('categoryid', 0, PARAM_INT);
            $content = '<div class="clearfix"></div>';
            $content .= $this->view_available_courses($categoryid, $courses, $totalcount);
            return $content;
    }
  
}
}
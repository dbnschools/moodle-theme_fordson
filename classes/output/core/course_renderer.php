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
use pix_icon;
use image_url;
use single_select;

require_once($CFG->dirroot . '/course/renderer.php');

/**
 * Course renderer class.
 *
 * @package    theme_noanme
 * @copyright  2016 Frédéric Massart - FMCorz.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class course_renderer extends \theme_boost\output\core\course_renderer {

    protected $countcategories = 0;

    public function frontpage_available_courses($id = 0) {
        /* available courses */
        global $CFG, $OUTPUT, $PAGE;
        require_once ($CFG->libdir . '/coursecatlib.php');

        $chelper = new coursecat_helper();
        $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_EXPANDED)->set_courses_display_options(array(
            'recursive' => true,
            'limit' => $CFG->frontpagecourselimit,
            'viewmoreurl' => new moodle_url('/course/index.php') ,
            'viewmoretext' => new lang_string('fulllistofcourses')
        ));

        $chelper->set_attributes(array(
            'class' => 'frontpage-course-list-all'
        ));
        $courses = coursecat::get($id)->get_courses($chelper->get_courses_display_options());
        $totalcount = coursecat::get($id)->get_courses_count($chelper->get_courses_display_options());

        $rcourseids = array_keys($courses);
        $acourseids = array_chunk($rcourseids, 3);
        $newcourse = get_string('availablecourses');

        $header = '
            <div id="category-course-list">
                <div class="courses category-course-list-all">
                <hr>
                <div class="class-list">
                    <h4>' . $newcourse . '</h4>
                </div>';

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

                    $trimtitle = theme_fordson_course_trim_char($course->fullname, $trimtitlevalue);

                    $summary = theme_fordson_strip_html_tags($course->summary);
                    $summary = theme_fordson_course_trim_char($summary, $trimsummaryvalue);

                    $noimgurl = $OUTPUT->image_url('noimg', 'theme');
                    $courseurl = new moodle_url('/course/view.php', array(
                        'id' => $courseid
                    ));

                    if ($course instanceof stdClass) {
                        require_once ($CFG->libdir . '/coursecatlib.php');
                        $course = new course_in_list($course);
                    }

                    // Load from config if usea a img from course summary file if not exist a img then a default one ore use a fa-icon.
                    $imgurl = '';
                    $context = context_course::instance($course->id);

                    foreach ($course->get_course_overviewfiles() as $file) {
                        $isimage = $file->is_valid_image();
                        $imgurl = file_encode_url("$CFG->wwwroot/pluginfile.php", '/' . $file->get_contextid() . '/' . $file->get_component() . '/' . $file->get_filearea() . $file->get_filepath() . $file->get_filename() , !$isimage);
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
                    if ($PAGE->theme->settings->coursetilestyle == 1) {
                        $rowcontent .= '
                    <div class="col-md-4">';
                        $rowcontent .= html_writer::start_tag('div', array(
                            'class' => $course->visible ? '' : 'coursedimmed1'
                        ));
                        $rowcontent .= '
                        <div class="class-box">
                            ';

                        if ($PAGE->theme->settings->titletooltip) {
                            $tooltiptext = 'data-tooltip="tooltip" data-placement= "top" title="' . $course->fullname . '"';
                        }
                        else {
                            $tooltiptext = '';
                        }

                        $rowcontent .= '
                                <a ' . $tooltiptext . ' href="' . $courseurl . '">
                                <div class="courseimagecontainer">
                                <div class="course-image-view" style="background-image: url(' . $imgurl . ');background-repeat: no-repeat;background-size:cover; background-position:center;">
                                </div>
                                <div class="course-overlay">
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                </div>
                                
                                </div>
                                <div class="course-title">
                                <h4>' . $trimtitle . '</h4>
                                </div>
                                </a>
                                <div class="course-summary">
                                ';
                        if ($course->has_course_contacts()) {

                            $rowcontent .= html_writer::start_tag('ul', array(
                                'class' => 'teacherscourseview'
                            ));
                            foreach ($course->get_course_contacts() as $userid => $coursecontact) {

                                $name = $coursecontact['rolename'] . ': ' . $coursecontact['username'];
                                $rowcontent .= html_writer::tag('li', $name);
                            }
                            $rowcontent .= html_writer::end_tag('ul'); // .teachers
                            
                        }
                        $rowcontent .= '
                                </div>
                            </div>
                    </div>
                    </div>';
                    }
                    if ($PAGE->theme->settings->coursetilestyle == 2) {
                        // Display course contacts. See course_in_list::get_course_contacts().
                        $enrollbutton = get_string('enrollcoursecard', 'theme_fordson');
                        $rowcontent .= '
                <div class="col-md-4">
                    ';
                        $rowcontent .= '
                <div class="tilecontainer">
                        <figure class="coursestyle2">
                            <div class="class-box-courseview" style="background-image: url(' . $imgurl . ');background-repeat: no-repeat;background-size:cover; background-position:center;">
                            ';
                        if ($PAGE->theme->settings->titletooltip) {
                            $tooltiptext = 'data-tooltip="tooltip" data-placement= "top" title="' . $course->fullname . '"';
                        }
                        else {
                            $tooltiptext = '';
                        }
                        $rowcontent .= html_writer::start_tag('div', array(
                            'class' => $course->visible ? '' : 'coursedimmed2'
                        ));
                        $rowcontent .= '
                            <figcaption>
                                <h3>' . $trimtitle . '</h3>
                                <div class="course-card">
                                <button type="button" class="btn btn-primary btn-sm coursestyle2btn">' . $enrollbutton . '   <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                ';
                        if ($course->has_course_contacts()) {

                            $rowcontent .= html_writer::start_tag('ul', array(
                                'class' => 'teacherscourseview'
                            ));
                            foreach ($course->get_course_contacts() as $userid => $coursecontact) {

                                $name = $coursecontact['rolename'] . ': ' . $coursecontact['username'];
                                $rowcontent .= html_writer::tag('li', $name);
                            }
                            $rowcontent .= html_writer::end_tag('ul'); 
                            
                        }
                        $rowcontent .= '  
                            </div>

                            </figcaption>
                                <a ' . $tooltiptext . ' href="' . $courseurl . '" class="coursestyle2url"></a>
                            </div>
                        </figure>
                </div>
                </div>
                    ';
                    }
                    if ($PAGE->theme->settings->coursetilestyle == 3) {
                        if ($PAGE->theme->settings->titletooltip) {
                            $tooltiptext = 'data-tooltip="tooltip" data-placement= "top" title="' . $course->fullname . '"';
                        }
                        else {
                            $tooltiptext = '';
                        }
                        $rowcontent .= '
                    <div class="col-md-4">
                    <div class="tilecontainer">
                        <div class="class-box-fp" style="background-image: url(' . $imgurl . ');background-repeat: no-repeat;background-size:cover; background-position:center;">
                            <a ' . $tooltiptext . ' href="' . $courseurl . '" class="coursestyle3url">';
                        $rowcontent .= html_writer::start_tag('div', array(
                            'class' => $course->visible ? '' : 'coursedimmed3'
                        ));
                        $rowcontent .= '
                                <div class="course-title">
                                <h4><a href="' . $courseurl . '">' . $trimtitle . '</a></h4>
                                </div>
                                </div>
                                </a>
                            </div>
                           </div> 
                    </div>';
                    }
                    if ($PAGE->theme->settings->coursetilestyle == 4) {
                        $rowcontent .= '
                    <div class="col-md-4">';
                        $rowcontent .= html_writer::start_tag('div', array(
                            'class' => $course->visible ? '' : 'coursedimmed1'
                        ));
                        $rowcontent .= '
                        <div class="class-box">
                            ';

                        if ($PAGE->theme->settings->titletooltip) {
                            $tooltiptext = 'data-tooltip="tooltip" data-placement= "top" title="' . $course->fullname . '"';
                        }
                        else {
                            $tooltiptext = '';
                        }

                        $rowcontent .= '
                                <a ' . $tooltiptext . ' href="' . $courseurl . '">
                                <div class="courseimagecontainer">
                                <div class="course-image-view" style="background-image: url(' . $imgurl . ');background-repeat: no-repeat;background-size:cover; background-position:center;">
                                </div>
                                <div class="course-overlay">
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                </div>
                                
                                </div>
                                <div class="course-title">
                                <h4>' . $trimtitle . '</h4>
                                </div>
                                </a>
                                <div class="course-summary">
                                ' . $summary . '
                                ';
                        if ($course->has_course_contacts()) {

                            $rowcontent .= html_writer::start_tag('ul', array(
                                'class' => 'teacherscourseview'
                            ));
                            foreach ($course->get_course_contacts() as $userid => $coursecontact) {

                                $name = $coursecontact['rolename'] . ': ' . $coursecontact['username'];
                                $rowcontent .= html_writer::tag('li', $name);
                            }
                            $rowcontent .= html_writer::end_tag('ul'); // .teachers
                            
                        }
                        $rowcontent .= '
                                </div>
                            </div>
                    </div>
                    </div>';
                    }

                }

                $content .= $rowcontent;
                $content .= '</div> </div>';
            }
        }

        $coursehtml = $header . $content . $footer;
        if ($id == 0) {
            echo $coursehtml;

        }
        else {
            $coursehtml .= '<br/><br/>';
            return $coursehtml;
        }

    }

    public function view_available_courses($id = 0, $courses = null, $totalcount = null) {

        /* available courses */
        global $CFG, $OUTPUT, $PAGE;

        $rcourseids = array_keys($courses);
        $acourseids = array_chunk($rcourseids, 4);

        if ($id != 0) {
            $newcourse = get_string('availablecourses');
        }
        else {
            $newcourse = null;
        }

        $header = '
            <div id="category-course-list">
                <div class="courses category-course-list-all">
                <hr>
                <div class="class-list">
                    <h4>' . $newcourse . '</h4>
                </div>';

        $content = '';

        $footer = '<hr>
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

                    $noimgurl = $OUTPUT->image_url('noimg', 'theme');

                    $courseurl = new moodle_url('/course/view.php', array(
                        'id' => $courseid
                    ));

                    if ($course instanceof stdClass) {
                        require_once ($CFG->libdir . '/coursecatlib.php');
                        $course = new course_in_list($course);
                    }

                    // Load from config if usea a img from course summary file if not exist a img then a default one ore use a fa-icon.
                    $imgurl = '';
                    $context = context_course::instance($course->id);

                    foreach ($course->get_course_overviewfiles() as $file) {
                        $isimage = $file->is_valid_image();
                        $imgurl = file_encode_url("$CFG->wwwroot/pluginfile.php", '/' . $file->get_contextid() . '/' . $file->get_component() . '/' . $file->get_filearea() . $file->get_filepath() . $file->get_filename() , !$isimage);
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

                    if ($PAGE->theme->settings->coursetilestyle == 1) {
                        $rowcontent .= '
                    <div class="col-md-3">';
                        $rowcontent .= html_writer::start_tag('div', array(
                            'class' => $course->visible ? '' : 'coursedimmed1'
                        ));
                        $rowcontent .= '
                        <div class="class-box">
                            ';

                        if ($PAGE->theme->settings->titletooltip) {
                            $tooltiptext = 'data-tooltip="tooltip" data-placement= "top" title="' . $course->fullname . '"';
                        } else {
                            $tooltiptext = '';
                        }

                        $rowcontent .= '
                                <a ' . $tooltiptext . ' href="' . $courseurl . '">
                                <div class="courseimagecontainer">
                                <div class="course-image-view" style="background-image: url(' . $imgurl . ');background-repeat: no-repeat;background-size:cover; background-position:center;">
                                </div>
                                <div class="course-overlay">
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                </div>
                                
                                </div>
                                <div class="course-title">
                                <h4>' . $trimtitle . '</h4>
                                </div>
                                </a>
                                <div class="course-summary">
                                
                                ';
                        if ($course->has_course_contacts()) {

                            $rowcontent .= html_writer::start_tag('ul', array(
                                'class' => 'teacherscourseview'
                            ));
                            foreach ($course->get_course_contacts() as $userid => $coursecontact) {

                                $name = $coursecontact['rolename'] . ': ' . $coursecontact['username'];
                                $rowcontent .= html_writer::tag('li', $name);
                            }
                            $rowcontent .= html_writer::end_tag('ul');
                            
                        }
                        $rowcontent .= '
                                </div>
                            </div>
                    </div>
                    </div>';
                    }
                    if ($PAGE->theme->settings->coursetilestyle == 2) {
                        // display course contacts. See course_in_list::get_course_contacts().
                        $enrollbutton = get_string('enrollcoursecard', 'theme_fordson');
                        $rowcontent .= '
                <div class="col-md-3">
                    ';
                        $rowcontent .= '
                <div class="tilecontainer">
                        <figure class="coursestyle2">
                            <div class="class-box-courseview" style="background-image: url(' . $imgurl . ');background-repeat: no-repeat;background-size:cover; background-position:center;">
                            ';
                        if ($PAGE->theme->settings->titletooltip) {
                            $tooltiptext = 'data-toggle="tooltip" data-placement= "top" title="' . $course->fullname . '"';
                        } else {
                            $tooltiptext = '';
                        }
                        $rowcontent .= html_writer::start_tag('div', array(
                            'class' => $course->visible ? '' : 'coursedimmed2'
                        ));
                        $rowcontent .= '
                            <figcaption>
                                <h3>' . $trimtitle . '</h3>
                                <div class="course-card">
                                <button type="button" class="btn btn-primary btn-sm coursestyle2btn">' . $enrollbutton . '   <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                ';
                        if ($course->has_course_contacts()) {

                            $rowcontent .= html_writer::start_tag('ul', array(
                                'class' => 'teacherscourseview'
                            ));
                            foreach ($course->get_course_contacts() as $userid => $coursecontact) {

                                $name = $coursecontact['rolename'] . ': ' . $coursecontact['username'];
                                $rowcontent .= html_writer::tag('li', $name);
                            }
                            $rowcontent .= html_writer::end_tag('ul'); 
                            
                        }
                        $rowcontent .= '  
                            </div>

                            </figcaption>
                                <a ' . $tooltiptext . ' href="' . $courseurl . '" class="coursestyle2url"></a>
                            </div>
                        </figure>
                </div>
                </div>
                    ';
                    }
                    if ($PAGE->theme->settings->coursetilestyle == 3) {
                        if ($PAGE->theme->settings->titletooltip) {
                            $tooltiptext = 'data-toggle="tooltip" data-placement= "top" title="' . $course->fullname . '"';
                        } else {
                            $tooltiptext = '';
                        }
                        $rowcontent .= '
                    <div class="col-md-3">
                    <div class="tilecontainer">
                        <div class="class-box-fp" style="background-image: url(' . $imgurl . ');background-repeat: no-repeat;background-size:cover; background-position:center;">
                            <a ' . $tooltiptext . ' href="' . $courseurl . '" class="coursestyle3url">';
                        $rowcontent .= html_writer::start_tag('div', array(
                            'class' => $course->visible ? '' : 'coursedimmed3'
                        ));
                        $rowcontent .= '
                                <div class="course-title">
                                <h4><a href="' . $courseurl . '">' . $trimtitle . '</a></h4>
                                </div>
                                </div>
                                </a>
                            </div>
                           </div> 
                    </div>';
                    }
                    if ($PAGE->theme->settings->coursetilestyle == 4) {
                        $rowcontent .= '
                    <div class="col-md-3">';
                        $rowcontent .= html_writer::start_tag('div', array(
                            'class' => $course->visible ? '' : 'coursedimmed1'
                        ));
                        $rowcontent .= '
                        <div class="class-box">
                            ';

                        if ($PAGE->theme->settings->titletooltip) {
                            $tooltiptext = 'data-toggle="tooltip" data-placement= "top" title="' . $course->fullname . '"';
                        } else {
                            $tooltiptext = '';
                        }

                        $rowcontent .= '
                                <a ' . $tooltiptext . ' href="' . $courseurl . '">
                                <div class="courseimagecontainer">
                                <div class="course-image-view" style="background-image: url(' . $imgurl . ');background-repeat: no-repeat;background-size:cover; background-position:center;">
                                </div>
                                <div class="course-overlay">
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                </div>
                                
                                </div>
                                <div class="course-title">
                                <h4>' . $trimtitle . '</h4>
                                </div>
                                </a>
                                <div class="course-summary">
                                ' . $summary . '
                                ';
                        if ($course->has_course_contacts()) {

                            $rowcontent .= html_writer::start_tag('ul', array(
                                'class' => 'teacherscourseview'
                            ));
                            foreach ($course->get_course_contacts() as $userid => $coursecontact) {

                                $name = $coursecontact['rolename'] . ': ' . $coursecontact['username'];
                                $rowcontent .= html_writer::tag('li', $name);
                            }
                            $rowcontent .= html_writer::end_tag('ul');
                            
                        }
                        $rowcontent .= '
                                </div>
                            </div>
                    </div>
                    </div>';
                    }

                }

                $content .= $rowcontent;
                $content .= '</div> </div>';
            }
        }

        $coursehtml = $header . $content . $footer;

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
        if (!theme_fordson_get_setting('enablecategoryicon')) {
            return parent::coursecat_category($chelper, $coursecat, $depth);
        }

        global $CFG, $OUTPUT;

        $classes = array(
            'category'
        );
        if (empty($coursecat->visible)) {
            $classes[] = 'dimmed_category';
        }
        if ($chelper->get_subcat_depth() > 0 && $depth >= $chelper->get_subcat_depth()) {
            $categorycontent = '';
            $classes[] = 'notloaded';
            if ($coursecat->get_children_count() || ($chelper->get_show_courses() >= self::COURSECAT_SHOW_COURSES_COLLAPSED && $coursecat->get_courses_count())) {
                $classes[] = 'with_children';
                $classes[] = 'collapsed';
            }
        } else {
            $categorycontent = $this->coursecat_category_content($chelper, $coursecat, $depth);
            $classes[] = 'loaded';
            if (!empty($categorycontent)) {
                $classes[] = 'with_children';
            }
        }

        $totalcount = coursecat::get(0)->get_children_count();

        $content = '';
        if ($this->countcategories == 0 || ($this->countcategories % 3) == 0) {
            if (($this->countcategories % 3) == 0 && $totalcount != $this->countcategories) {
                $content .= '</div> </div>';
            }
            if ($totalcount != $this->countcategories || $this->countcategories == 0) {
                $categoryparam = optional_param('categoryid', 0, PARAM_INT);
                if ($categoryparam) {
                    $content .= $OUTPUT->heading(get_string('categories'));
                }
                $content .= '<div class="container-fluid"><div class="row">';
            }
        }

        $classes[] = 'col-md-3 box-class';
        $content = '<div class="' . join(' ', $classes) . '" data-categoryid="' . $coursecat->id . '" data-depth="' . $depth . '" data-showcourses="' . $chelper->get_show_courses() . '" data-type="' . self::COURSECAT_TYPE_CATEGORY . '">';
        $content .= '<div class="cat-icon">';

        $val = theme_fordson_get_setting('catsicon');
        $url = new moodle_url('/course/index.php', array(
            'categoryid' => $coursecat->id
        ));
        $content .= '<a href="' . $url . '">';
        $content .= '<i class="fa fa-5x fa-' . $val . '"></i>';

        $categoryname = $coursecat->get_formatted_name();
        $content .= '<div>';
        $content .= '<div class="info-enhanced">';
        $content .= '<span class="class-category">' . $categoryname . '</span>';

        if ($chelper->get_show_courses() == self::COURSECAT_SHOW_COURSES_COUNT) {
            $coursescount = $coursecat->get_courses_count();
            $content .= '  <span class="numberofcourses" title="' . get_string('numberofcourses') . '">(' . $coursescount . ')</span>';
        }
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</a>';

        $content .= '</div>'; 
        $content .= '</div>';
        if ($totalcount == $this->countcategories) {
        }
        ++$this->countcategories;
        return $content;

    }

    protected function coursecat_courses(coursecat_helper $chelper, $courses, $totalcount = null) {

        global $CFG;

        if ($totalcount === null) {
            $totalcount = count($courses);
        }
        if (!$totalcount) {
            // Courses count is cached during courses retrieval.
            return '';
        }

        if ($chelper->get_show_courses() == self::COURSECAT_SHOW_COURSES_AUTO) {

            if ($totalcount <= $CFG->courseswithsummarieslimit) {
                $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_EXPANDED);
            } else {
                $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_COLLAPSED);
            }
        }

        $paginationurl = $chelper->get_courses_display_option('paginationurl');
        $paginationallowall = $chelper->get_courses_display_option('paginationallowall');
        if ($totalcount > count($courses)) {

            if ($paginationurl) {
                $perpage = $chelper->get_courses_display_option('limit', $CFG->coursesperpage);
                $page = $chelper->get_courses_display_option('offset') / $perpage;
                $pagingbar = $this->paging_bar($totalcount, $page, $perpage, $paginationurl->out(false, array(
                    'perpage' => $perpage
                )));
                if ($paginationallowall) {
                    $pagingbar .= html_writer::tag('div', html_writer::link($paginationurl->out(false, array(
                        'perpage' => 'all'
                    )) , get_string('showall', '', $totalcount)) , array(
                        'class' => 'paging paging-showall'
                    ));
                }
            } else if ($viewmoreurl = $chelper->get_courses_display_option('viewmoreurl')) {

                $viewmoretext = $chelper->get_courses_display_option('viewmoretext', new lang_string('viewmore'));
                $morelink = html_writer::tag('div', html_writer::tag('a', html_writer::start_tag('i', array(
                    'class' => 'fa-graduation-cap' . ' fa fa-fw'
                )) . html_writer::end_tag('i') . $viewmoretext, array(
                    'href' => $viewmoreurl,
                    'class' => 'btn btn-primary coursesmorelink'
                )) , array(
                    'class' => 'paging paging-morelink'
                ));

            }
        } else if (($totalcount > $CFG->coursesperpage) && $paginationurl && $paginationallowall) {

            $pagingbar = html_writer::tag('div', html_writer::link($paginationurl->out(false, array(
                'perpage' => $CFG->coursesperpage
            )) , get_string('showperpage', '', $CFG->coursesperpage)) , array(
                'class' => 'paging paging-showperpage'
            ));
        }

        $attributes = $chelper->get_and_erase_attributes('courses');
        $content = html_writer::start_tag('div', $attributes);

        if (!empty($pagingbar)) {
            $content .= $pagingbar;
        }
        $categoryid = optional_param('categoryid', 0, PARAM_INT);
        $coursecount = 0;

        $content .= $this->view_available_courses($categoryid, $courses, $totalcount);

        if (!empty($pagingbar)) {
            $content .= $pagingbar;
        }
        if (!empty($morelink)) {
            $content .= $morelink;
        }

        $content .= html_writer::end_tag('div');
        

        $content .= '<div class="clearfix"></div>';

        return $content;
    }

    public function course_modchooser($modules, $course) {

        // This HILLBROOK function is overridden here to refer to the local theme's copy of modchooser to render a modified.
        // Activity chooser for Hillbrook.
        if (!$this->page->requires->should_create_one_time_item_now('core_course_modchooser')) {
            return '';
        }
        $modchooser = new \theme_fordson\output\modchooser($course, $modules);
        return $this->render($modchooser);
    }

    protected static function timeaccesscompare($a, $b) {
        // timeaccess is lastaccess entry and timestart an enrol entry.
        if ((!empty($a->timeaccess)) && (!empty($b->timeaccess))) {
            // Both last access.
            if ($a->timeaccess == $b->timeaccess) {
                return 0;
            }
            return ($a->timeaccess > $b->timeaccess) ? -1 : 1;
        } else if ((!empty($a->timestart)) && (!empty($b->timestart))) {
            // Both enrol.
            if ($a->timestart == $b->timestart) {
                return 0;
            }
            return ($a->timestart > $b->timestart) ? -1 : 1;
        }
        // Must be comparing an enrol with a last access.
        // -1 is to say that 'a' comes before 'b'.
        if (!empty($a->timestart)) {
            // 'a' is the enrol entry.
            return -1;
        }
        // 'b' must be the enrol entry.
        return 1;
    }

    public function frontpage_my_courses() {
        global $USER, $CFG, $DB;

        if (!isloggedin() or isguestuser()) {
            return '';
        }

        $nomycourses = '<div class="alert alert-info alert-block">' . get_string('nomycourses', 'theme_fordson') . '</div>';

        $lastaccess = '';

        $output = '';
        if (theme_fordson_get_setting('frontpagemycoursessorting')) {
            $courses = enrol_get_my_courses(null, 'sortorder ASC');
            if ($courses) {
                // We have something to work with.  Get the last accessed information for the user and populate.
                global $DB, $USER;
                $lastaccess = $DB->get_records('user_lastaccess', array('userid' => $USER->id), '', 'courseid, timeaccess');
                if ($lastaccess) {
                    foreach ($courses as $course) {
                        if (!empty($lastaccess[$course->id])) {
                            $course->timeaccess = $lastaccess[$course->id]->timeaccess;
                        }
                    }
                }
                // Determine if we need to query the enrolment and user enrolment tables.
                $enrolquery = false;
                foreach ($courses as $course) {
                    if (empty($course->timeaccess)) {
                        $enrolquery = true;
                        break;
                    }
                }
                if ($enrolquery) {
                    // We do.
                    $params = array('userid' => $USER->id);
                    $sql = "SELECT ue.id, e.courseid, ue.timestart
                        FROM {enrol} e
                        JOIN {user_enrolments} ue ON (ue.enrolid = e.id AND ue.userid = :userid)";
                    $enrolments = $DB->get_records_sql($sql, $params, 0, 0);
                    if ($enrolments) {
                        // Sort out any multiple enrolments on the same course.
                        $userenrolments = array();
                        foreach ($enrolments as $enrolment) {
                            if (!empty($userenrolments[$enrolment->courseid])) {
                                if ($userenrolments[$enrolment->courseid] < $enrolment->timestart) {
                                    // Replace.
                                    $userenrolments[$enrolment->courseid] = $enrolment->timestart;
                                }
                            } else {
                                $userenrolments[$enrolment->courseid] = $enrolment->timestart;
                            }
                        }
                        // We don't need to worry about timeend etc. as our course list will be valid for the user from above.
                        foreach ($courses as $course) {
                            if (empty($course->timeaccess)) {
                                $course->timestart = $userenrolments[$course->id];
                            }
                        }
                    }
                }
                uasort($courses, array($this, 'timeaccesscompare'));
            } else {
                
                return $nomycourses;

            }

        $sortorder = $lastaccess;

        } else if (!empty($CFG->navsortmycoursessort)) {
            // sort courses the same as in navigation menu
            $sortorder = 'visible DESC,'. $CFG->navsortmycoursessort.' ASC';
            $courses  = enrol_get_my_courses('summary, summaryformat', $sortorder);
            if (!$courses) {
                return $nomycourses;
            }
        } else {
            $sortorder = 'visible DESC,sortorder ASC';
            $courses  = enrol_get_my_courses('summary, summaryformat', $sortorder);
            if (!$courses) {
                return $nomycourses;
            }
        }
        
        $rhosts   = array();
        $rcourses = array();
        if (!empty($CFG->mnet_dispatcher_mode) && $CFG->mnet_dispatcher_mode==='strict') {
            $rcourses = get_my_remotecourses($USER->id);
            $rhosts   = get_my_remotehosts();
        }

        if (!empty($courses) || !empty($rcourses) || !empty($rhosts)) {

            $chelper = new coursecat_helper();
            if (count($courses) > $CFG->frontpagecourselimit) {
                // There are more enrolled courses than we can display, display link to 'My courses'.
                $totalcount = count($courses);
                $courses = array_slice($courses, 0, $CFG->frontpagecourselimit, true);
                $chelper->set_courses_display_options(array(
                        'viewmoreurl' => new moodle_url('/my/'),
                        'viewmoretext' => new lang_string('mycourses')
                    ));
            } else {
                // All enrolled courses are displayed, display link to 'All courses' if there are more courses in system.
                $chelper->set_courses_display_options(array(
                        'viewmoreurl' => new moodle_url('/course/index.php'),
                        'viewmoretext' => new lang_string('fulllistofcourses')
                    ));
                $totalcount = $DB->count_records('course') - 1;
            }
            $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_EXPANDED)->
                    set_attributes(array('class' => 'frontpage-course-list-enrolled'));
            $output .= $this->coursecat_courses($chelper, $courses, $totalcount);

            // MNET
            if (!empty($rcourses)) {
                // at the IDP, we know of all the remote courses
                $output .= html_writer::start_tag('div', array('class' => 'courses'));
                foreach ($rcourses as $course) {
                    $output .= $this->frontpage_remote_course($course);
                }
                $output .= html_writer::end_tag('div'); // .courses
            } elseif (!empty($rhosts)) {
                // non-IDP, we know of all the remote servers, but not courses
                $output .= html_writer::start_tag('div', array('class' => 'courses'));
                foreach ($rhosts as $host) {
                    $output .= $this->frontpage_remote_host($host);
                }
                $output .= html_writer::end_tag('div'); // .courses
            }
        }
        return $output;
    }

}

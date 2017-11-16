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
 * The modchooser renderable.
 *
 * @package    core_course
 * @copyright  2016 Frédéric Massart - FMCorz.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_fordson\output;
defined('MOODLE_INTERNAL') || die();

use core\output\chooser;
use core\output\chooser_section;
use context_course;
use lang_string;
use moodle_url;
use pix_icon;
use renderer_base;
use stdClass;

/**
 * The modchooser renderable class.
 *
 * @package    core_course
 * @copyright  2016 Frédéric Massart - FMCorz.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class modchooser extends chooser {

    /** @var stdClass The course. */
    public $course;

    /**
     * Constructor.
     *
     * @param stdClass $course The course.
     * @param stdClass[] $modules The modules.
     */
    public function __construct($course, $modules) {
        global $PAGE;
        // This copy of the modchooser is modified for Hillbrook Anglican School theme fordson
        // It contains functionality to output a section of modules defined as "commonly used" in the theme_fordson settings
        $this->course = $course;

        $sections = [];
        $context = context_course::instance($course->id);
        $showonlycustom = get_config('theme_fordson', 'showonlycustomactivities');
        $showallmanager = get_config('theme_fordson', 'showalltomanager');
        $ismanager = has_capability('moodle/site:configview', $context);
        $issiteadmin = has_capability('moodle/site:config', $context);

        // Commonly Used - Only created if anything is configured in "commonlyused" theme setting
        $commonlyused = array();
        $commonlyusedsetting = get_config('theme_fordson', 'commonlyused');
        if (isset($commonlyusedsetting)) {
            // get list of commonly used mods
            $commonlyuseditems = explode(',', $commonlyusedsetting);
            foreach ($commonlyuseditems as $item) {
                $item = trim($item);
                // if mod is available then add it to $commonlyused array
                if (isset($modules[$item])) {
                    $commonlyused[$item] = $modules[$item];
                    // remove it from available mods so it won't appear a second time under Activities or Resources lists below
                    unset($modules[$item]);
                }
            }
        }

        // Commonly Used
        if (count($commonlyused)) {
            $sections[] = new chooser_section('commonlyused', new lang_string('modchoosercommonlyusedtitle', 'theme_fordson', $PAGE->theme->settings->modchoosercustomlabel) , array_map(function ($module) use ($context) {
                return new modchooser_item($module, $context);
            }
            , $commonlyused));
        }

        if ($showonlycustom == 0) {
            // Activities.
            $activities = array_filter($modules, function ($mod) {
                return ($mod->archetype !== MOD_ARCHETYPE_RESOURCE && $mod->archetype !== MOD_ARCHETYPE_SYSTEM);
            });
            if (count($activities)) {
                $sections[] = new chooser_section('activities', new lang_string('activities') , array_map(function ($module) use ($context) {
                    return new modchooser_item($module, $context);
                }
                , $activities));
            }

            // Resources
            $resources = array_filter($modules, function ($mod) {
                return ($mod->archetype === MOD_ARCHETYPE_RESOURCE);
            });
            if (count($resources)) {
                $sections[] = new chooser_section('resources', new lang_string('resources') , array_map(function ($module) use ($context) {
                    return new modchooser_item($module, $context);
                }
                , $resources));
            }
        }

        if ($showonlycustom == 1 && $ismanager && $showallmanager) {
            // Activities.
            $activities = array_filter($modules, function ($mod) {
                return ($mod->archetype !== MOD_ARCHETYPE_RESOURCE && $mod->archetype !== MOD_ARCHETYPE_SYSTEM);
            });
            if (count($activities)) {
                $sections[] = new chooser_section('activities', new lang_string('activities') , array_map(function ($module) use ($context) {
                    return new modchooser_item($module, $context);
                }
                , $activities));
            }

            // Resources
            $resources = array_filter($modules, function ($mod) {
                return ($mod->archetype === MOD_ARCHETYPE_RESOURCE);
            });
            if (count($resources)) {
                $sections[] = new chooser_section('resources', new lang_string('resources') , array_map(function ($module) use ($context) {
                    return new modchooser_item($module, $context);
                }
                , $resources));
            }
        }

        if ($issiteadmin && !$showallmanager && $showonlycustom) {
            // Activities.
            $activities = array_filter($modules, function ($mod) {
                return ($mod->archetype !== MOD_ARCHETYPE_RESOURCE && $mod->archetype !== MOD_ARCHETYPE_SYSTEM);
            });
            if (count($activities)) {
                $sections[] = new chooser_section('activities', new lang_string('activities') , array_map(function ($module) use ($context) {
                    return new modchooser_item($module, $context);
                }
                , $activities));
            }

            // Resources
            $resources = array_filter($modules, function ($mod) {
                return ($mod->archetype === MOD_ARCHETYPE_RESOURCE);
            });
            if (count($resources)) {
                $sections[] = new chooser_section('resources', new lang_string('resources') , array_map(function ($module) use ($context) {
                    return new modchooser_item($module, $context);
                }
                , $resources));
            }
        }

        $actionurl = new moodle_url('/course/jumpto.php');
        $title = new lang_string('addresourceoractivity');

        parent::__construct($actionurl, $title, $sections, 'jumplink');

        $this->set_instructions(new lang_string('selectmoduletoviewhelp'));
        $this->add_param('course', $course->id);
    }

    /**
     * Export for template.
     *
     * @param renderer_base  The renderer.
     * @return stdClass
     */
    public function export_for_template(renderer_base $output) {
        $data = parent::export_for_template($output);
        $data->courseid = $this->course->id;
        return $data;
    }

}


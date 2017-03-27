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
 * FileSettings Lib file.
 *
 * @package    theme_fordson
 * @copyright  2016 Chris Kenniburg
 * @credits    theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */

defined('MOODLE_INTERNAL') || die();

function theme_fordson_get_course_activities() {
    GLOBAL $CFG, $PAGE, $OUTPUT;
    // A copy of block_activity_modules.
    $course = $PAGE->course;
    $content = new stdClass();
    $modinfo = get_fast_modinfo($course);
    $modfullnames = array();

    $archetypes = array();

    foreach ($modinfo->cms as $cm) {
        // Exclude activities which are not visible or have no link (=label).
        if (!$cm->uservisible or !$cm->has_view()) {
            continue;
        }
        if (array_key_exists($cm->modname, $modfullnames)) {
            continue;
        }
        if (!array_key_exists($cm->modname, $archetypes)) {
            $archetypes[$cm->modname] = plugin_supports('mod', $cm->modname, FEATURE_MOD_ARCHETYPE, MOD_ARCHETYPE_OTHER);
        }
        if ($archetypes[$cm->modname] == MOD_ARCHETYPE_RESOURCE) {
            if (!array_key_exists('resources', $modfullnames)) {
                $modfullnames['resources'] = get_string('resources');
            }
        } else {
            $modfullnames[$cm->modname] = $cm->modplural;
        }
    }
    core_collator::asort($modfullnames);

    return $modfullnames;
}

function theme_fordson_strip_html_tags( $text ) {
    $text = preg_replace(
        array(
            // Remove invisible content.
            '@<head[^>]*?>.*?</head>@siu',
            '@<style[^>]*?>.*?</style>@siu',
            '@<script[^>]*?.*?</script>@siu',
            '@<object[^>]*?.*?</object>@siu',
            '@<embed[^>]*?.*?</embed>@siu',
            '@<applet[^>]*?.*?</applet>@siu',
            '@<noframes[^>]*?.*?</noframes>@siu',
            '@<noscript[^>]*?.*?</noscript>@siu',
            '@<noembed[^>]*?.*?</noembed>@siu',
            // Add line breaks before and after blocks.
            '@</?((address)|(blockquote)|(center)|(del))@iu',
            '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
            '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
            '@</?((table)|(th)|(td)|(caption))@iu',
            '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
            '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
            '@</?((frameset)|(frame)|(iframe))@iu',
        ),
        array(
            ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
            "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
            "\n\$0", "\n\$0",
        ),
        $text
    );
    return strip_tags( $text );
}

/**
 * Cut the Course content.
 *
 * @param $str
 * @param $n
 * @param $end_char
 * @return string
 */
function theme_fordson_course_trim_char($str, $n = 500, $endchar = '&#8230;') {
    if (strlen($str) < $n) {
        return $str;
    }

    $str = preg_replace("/\s+/", ' ', str_replace(array("\r\n", "\r", "\n"), ' ', $str));
    if (strlen($str) <= $n) {
        return $str;
    }

    $out = "";
    $small = substr($str, 0, $n);
    $out = $small.$endchar;
    return $out;
}


/**
 * Local plugin "Boost navigation fumbling" - Library
 *
 * @package    local_boostnavigation
 * @copyright  2017 Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
function fordson_boostnavigation_extend_navigation(global_navigation $navigation) {
    global $PAGE, $CFG;

    // Check if admin wanted us to remove the home node from Boost's nav drawer.
    if (!empty($PAGE->theme->settings->removehomenode)) {
        // If yes, do it.
        if ($homenode = $navigation->find('home', global_navigation::TYPE_ROOTNODE)) {
            // Hide home node.
            $homenode->showinflatnavigation = false;
        }
    }

    // Check if admin wanted us to remove the calendar node from Boost's nav drawer.
    if (!empty($PAGE->theme->settings->removecalendarnode)) {
        // If yes, do it.
        if ($calendarnode = $navigation->find('calendar', global_navigation::TYPE_CUSTOM)) {
            // Hide calendar node.
            $calendarnode->showinflatnavigation = false;
        }
    }

    // Check if admin wanted us to remove the privatefiles node from Boost's nav drawer.
    if (!empty($PAGE->theme->settings->removeprivatefilesnode)) {
        // If yes, do it.
        if ($privatefilesnode = fordson_boostnavigation_find_privatefiles_node($navigation)) {
            // Hide privatefiles node.
            $privatefilesnode->showinflatnavigation = false;
        }
    }

    // Check if admin wanted us to remove the mycourses node from Boost's nav drawer.
    if (!empty($PAGE->theme->settings->removemycoursesnode)) {
        // If yes, do it.
        if ($mycoursesnode = $navigation->find('mycourses', global_navigation::TYPE_ROOTNODE)) {
            // Hide mycourses node.
            $mycoursesnode->showinflatnavigation = false;

            // Hide all courses below the mycourses node.
            $mycourseschildrennodeskeys = $mycoursesnode->get_children_key_list();
            foreach ($mycourseschildrennodeskeys as $k) {
                // If the admin decided to display categories, things get slightly complicated.
                if ($CFG->navshowmycoursecategories) {
                    // We need to find all children nodes first.
                    $allchildrennodes = fordson_boostnavigation_get_all_childrenkeys($mycoursesnode->get($k));
                    // Then we can hide each children node.
                    // Unfortunately, the children nodes have navigation_node type TYPE_MY_CATEGORY or navigation_node type
                    // TYPE_COURSE, thus we need to search without a specific navigation_node type.
                    foreach ($allchildrennodes as $cn) {
                        $mycoursesnode->find($cn, null)->showinflatnavigation = false;
                    }
                }
                // Otherwise we have a flat navigation tree and hiding the courses is easy.
                else {
                    $mycoursesnode->get($k)->showinflatnavigation = false;
                }
            }
        }
    }

}

/**
 * Local plugin "Boost navigation fumbling" - Library
 *
 * @package    local_boostnavigation
 * @copyright  2017 Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
/**
 * Moodle core does not add a key to the privatefiles node when adding it to the navigation,
 * so we need to find it with some overhead.
 *
 * @param global_navigation $navigation
 * @return navigation_node
 */
function fordson_boostnavigation_find_privatefiles_node(global_navigation $navigation) {
    // Get front page course node.
    if ($coursenode = $navigation->find('1', null)) {
        // Get children of the front page course node.
        $coursechildrennodeskeys = $coursenode->get_children_key_list();

        // Get text string to look for.
        $needle = get_string('privatefiles');

        // Check all children to find the privatefiles node.
        foreach ($coursechildrennodeskeys as $k) {
            // Get child node.
            $childnode = $coursenode->get($k);
            // Check if we have found the privatefiles node.
            if ($childnode->text == $needle) {
                // If yes, return the node.
                return $childnode;
            }
        }
    }

    // This should not happen.
    return false;
}

/**
 * Local plugin "Boost navigation fumbling" - Library
 *
 * @package    local_boostnavigation
 * @copyright  2017 Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
/**
 * Moodle core does not have a built-in functionality to get all keys of all children of a navigation node,
 * so we need to get these ourselves.
 *
 * @param navigation_node $navigationnode
 * @return array
 */
function fordson_boostnavigation_get_all_childrenkeys(navigation_node $navigationnode) {
    // Empty array to hold all children.
    $allchildren = array();

    // No, this node does not have children anymore.
    if (count($navigationnode->children) == 0) {
        return array();
    }
    // Yes, this node has children.
    else {
        // Get own own children keys.
        $childrennodeskeys = $navigationnode->get_children_key_list();
        // Get all children keys of our children recursively.
        foreach ($childrennodeskeys as $ck) {
            $allchildren = array_merge($allchildren, fordson_boostnavigation_get_all_childrenkeys($navigationnode->get($ck)));
        }
        // And add our own children keys to the result.
        $allchildren = array_merge($allchildren, $childrennodeskeys);

        // Return everything.
        return $allchildren;
    }
}

/**
 * Extend navigation to add new options.
 *
 * @package    local_navigation
 * @author     Carlos Escobedo <http://www.twitter.com/carlosagile>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Extend Navigation block and add options
 *
 * @param object $navigation global_navigation
 * @return void
 */
function fordson_local_navigation_extend_navigation(global_navigation $navigation) {
    global $PAGE;

        $menu = new custom_menu($PAGE->theme->settings->adddrawermenu, current_language());
        if ($menu->has_children()) {
            foreach ($menu->get_children() as $item) {
                fordson_navigation_custom_menu_item($item, 0, null);
            }
        }
}
/**
 * Extend navigation to add new options.
 *
 * @package    local_navigation
 * @author     Carlos Escobedo <http://www.twitter.com/carlosagile>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
/**
 * ADD custom menu in navigation recursive childs node
 * Is like render custom menu items
 *
 * @param object $navigation global_navigation
 * @param int $parent is have a parent and it's parent itself
 * @param object $pmasternode parent node
 * @param int $flatenabled show master node in boost navigation
 * @return void
 */
function fordson_navigation_custom_menu_item(custom_menu_item $menunode, $parent, $pmasternode) {
    global $PAGE, $CFG;

    static $submenucount = 0;

    if ($menunode->has_children()) {
        $submenucount++;
        $url = $CFG->wwwroot;
        if ($menunode->get_url() !== null) {
            $url = new moodle_url($menunode->get_url());
        } else {
            $url = null;
        }
        if ($parent > 0) {
            $masternode = $pmasternode->add(fordson_local_navigation_get_string($menunode->get_text()), $url, navigation_node::TYPE_CONTAINER);
            $masternode->title($menunode->get_title());
        } else {
            $masternode = $PAGE->navigation->add(fordson_local_navigation_get_string($menunode->get_text()), $url, navigation_node::TYPE_CONTAINER);
            $masternode->title($menunode->get_title());
                $masternode->showinflatnavigation = true;
        }
        foreach ($menunode->get_children() as $menunode) {
            fordson_navigation_custom_menu_item($menunode, $submenucount, $masternode);
        }
    } else {
        $url = $CFG->wwwroot;
        if ($menunode->get_url() !== null) {
            $url = new moodle_url($menunode->get_url());
        } else {
            $url = null;
        }
        if ($parent) {
            $childnode = $pmasternode->add(navigation_get_string($menunode->get_text()), $url, navigation_node::TYPE_CUSTOM);
            $childnode->title($menunode->get_title());
        } else {
            $masternode = $PAGE->navigation->add(fordson_local_navigation_get_string($menunode->get_text()), $url, navigation_node::TYPE_CONTAINER);
            $masternode->title($menunode->get_title());
                $masternode->showinflatnavigation = true;
            }
    }

    return true;
}

/**
 * Extend navigation to add new options.
 *
 * @package    local_navigation
 * @author     Carlos Escobedo <http://www.twitter.com/carlosagile>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Translate Custom Navigation Nodes
 *
 * This function is based in a short peace of Moodle code
 * in  Name processing on user_convert_text_to_menu_items.
 *  
 * @param string $string text to translate.
 * @return string
 */
function fordson_local_navigation_get_string($string) {
    $title = $string;
    $text = explode(',', $string, 2);
    if (count($text) == 2) {
        // Check the validity of the identifier part of the string.
        if (clean_param($text[0], PARAM_STRINGID) !== '') {
            // Treat this as atext language string.
            $title = get_string($text[0], $text[1]);
        }
    } 
    return $title;
}

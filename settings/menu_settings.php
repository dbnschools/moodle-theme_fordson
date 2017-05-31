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
 * Heading and course images settings page file.
 *
 * @packagetheme_fordson
 * @copyright  2016 Chris Kenniburg
 * @creditstheme_boost - MoodleHQ
 * @licensehttp://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_fordson_menusettings', get_string('menusettings', 'theme_fordson'));

// This is the descriptor for Course Management Panel
$name = 'theme_fordson/coursemanagementinfo';
$heading = get_string('coursemanagementinfo', 'theme_fordson');
$information = get_string('coursemanagementinfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Show/hide coursemanagement slider toggle.
$name = 'theme_fordson/coursemanagementtoggle';
$title = get_string('coursemanagementtoggle', 'theme_fordson');
$description = get_string('coursemanagementtoggle_desc', 'theme_fordson');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Frontpage Textbox.
$name = 'theme_fordson/coursemanagementtextbox';
$title = get_string('coursemanagementtextbox', 'theme_fordson');
$description = get_string('coursemanagementtextbox_desc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Frontpage Textbox.
$name = 'theme_fordson/studentdashboardtextbox';
$title = get_string('studentdashboardtextbox', 'theme_fordson');
$description = get_string('studentdashboardtextbox_desc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Show/hide course editing cog.
$name = 'theme_fordson/courseeditingcog';
$title = get_string('courseeditingcog', 'theme_fordson');
$description = get_string('courseeditingcog_desc', 'theme_fordson');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Show/hide course editing cog.
$name = 'theme_fordson/showstudentgrades';
$title = get_string('showstudentgrades', 'theme_fordson');
$description = get_string('showstudentgrades_desc', 'theme_fordson');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Show/hide course editing cog.
$name = 'theme_fordson/showstudentcompletion';
$title = get_string('showstudentcompletion', 'theme_fordson');
$description = get_string('showstudentcompletion_desc', 'theme_fordson');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for nav drawer
$name = 'theme_fordson/mycoursesmenuinfo';
$heading = get_string('mycoursesinfo', 'theme_fordson');
$information = get_string('mycoursesinfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Toggle courses display in custommenu.
$name = 'theme_fordson/displaymycourses';
$title = get_string('displaymycourses', 'theme_fordson');
$description = get_string('displaymycoursesdesc', 'theme_fordson');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Set terminology for dropdown course list
$name = 'theme_fordson/mycoursetitle';
$title = get_string('mycoursetitle','theme_fordson');
$description = get_string('mycoursetitledesc', 'theme_fordson');
$default = 'course';
$choices = array(
	'course' => get_string('mycourses', 'theme_fordson'),
	'unit' => get_string('myunits', 'theme_fordson'),
	'class' => get_string('myclasses', 'theme_fordson'),
	'module' => get_string('mymodules', 'theme_fordson')
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


//Drawer Menu
// This is the descriptor for nav drawer
$name = 'theme_fordson/drawermenuinfo';
$heading = get_string('setting_removenodesheading', 'theme_fordson');
$information = get_string('setting_removenodesperformancehint', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Toggle Marketing Spots.
$name = 'theme_fordson/toggledrawermenu';
$title = get_string('toggledrawermenu' , 'theme_fordson');
$description = get_string('toggledrawermenu_desc', 'theme_fordson');
$alwaysdisplay = get_string('activateonboth', 'theme_fordson');
$displayhome = get_string('activateonhomepage', 'theme_fordson');
$displaycourse = get_string('activateoncoursepage', 'theme_fordson');
$default = '1';
$choices = array('1'=>$alwaysdisplay, '2'=>$displayhome, '3'=>$displaycourse);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordson/shownavclosed';
$title = get_string('shownavclosed', 'theme_fordson');
$description = get_string('shownavclosed_desc', 'theme_fordson');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordson/removehomenode';
$title = get_string('setting_removehomenode', 'theme_fordson');
$description = get_string('setting_removehomenode_desc', 'theme_fordson');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordson/removecalendarnode';
$title = get_string('setting_removecalendarnode', 'theme_fordson');
$description = get_string('setting_removecalendarnode_desc', 'theme_fordson');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordson/removeprivatefilesnode';
$title = get_string('setting_removeprivatefilesnode', 'theme_fordson');
$description = get_string('setting_removeprivatefilesnode_desc', 'theme_fordson');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordson/removemycoursesnode';
$title = get_string('setting_removemycoursesnode', 'theme_fordson');
$description = get_string('setting_removemycoursesnode_desc', 'theme_fordson');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordson/adddrawermenu';
$title = get_string('adddrawermenu', 'theme_fordson');
$description = get_string('adddrawermenu_desc', 'theme_fordson');
$setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);

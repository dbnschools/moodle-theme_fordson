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

// Show hide Course Activity Menu toggle.
$name = 'theme_fordson/activitymenu';
$title = get_string('activitymenu', 'theme_fordson');
$description = get_string('activitymenu_desc', 'theme_fordson');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Show hide user enrollment toggle.
$name = 'theme_fordson/userenrollmenu';
$title = get_string('userenrollmenu', 'theme_fordson');
$description = get_string('userenrollmenu_desc', 'theme_fordson');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Show hide user enrollment toggle.
$name = 'theme_fordson/groupmanagemenu';
$title = get_string('groupmanagemenu', 'theme_fordson');
$description = get_string('groupmanagemenu_desc', 'theme_fordson');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Show hide user enrollment toggle.
$name = 'theme_fordson/questionbankmenu';
$title = get_string('questionbankmenu', 'theme_fordson');
$description = get_string('questionbankmenu_desc', 'theme_fordson');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Show hide user enrollment toggle.
$name = 'theme_fordson/questioncategorymenu';
$title = get_string('questioncategorymenu', 'theme_fordson');
$description = get_string('questioncategorymenu_desc', 'theme_fordson');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Show hide user enrollment toggle.
$name = 'theme_fordson/activitylistingmenu';
$title = get_string('activitylistingmenu', 'theme_fordson');
$description = get_string('activitylistingmenu_desc', 'theme_fordson');
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

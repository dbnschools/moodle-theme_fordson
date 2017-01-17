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
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Show hide user enrollment toggle.
$name = 'theme_fordson/groupmanagemenu';
$title = get_string('groupmanagemenu', 'theme_fordson');
$description = get_string('groupmanagemenu_desc', 'theme_fordson');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Show hide user enrollment toggle.
$name = 'theme_fordson/questionbankmenu';
$title = get_string('questionbankmenu', 'theme_fordson');
$description = get_string('questionbankmenu_desc', 'theme_fordson');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Show hide user enrollment toggle.
$name = 'theme_fordson/questioncategorymenu';
$title = get_string('questioncategorymenu', 'theme_fordson');
$description = get_string('questioncategorymenu_desc', 'theme_fordson');
$default = 1;
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

// Must add the page after definiting all the settings!
$settings->add($page);

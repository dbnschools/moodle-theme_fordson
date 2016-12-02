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
 * Social networking settings page file.
 *
 * @package    theme_fordson
 * @copyright  2016 Richard Oelmann
 * @credits    theme_fordson - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Icon Navigation);
$page = new admin_settingpage('theme_fordson_iconnavheading', get_string('iconnavheading', 'theme_fordson'));
    
    // This is the descriptor for icon One
    $name = 'theme_fordson/navicon1info';
    $heading = get_string('navicon1', 'theme_fordson');
    $information = get_string('navicondesc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // icon One
    $name = 'theme_fordson/nav1icon';
    $title = get_string('navicon', 'theme_fordson');
    $description = get_string('navicondesc', 'theme_fordson');
    $default = 'home';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav1buttontext';
    $title = get_string('naviconbuttontext', 'theme_fordson');
    $description = get_string('naviconbuttontextdesc', 'theme_fordson');
    $default = 'My Home';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav1buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fordson');
    $description = get_string('naviconbuttonurldesc', 'theme_fordson');
    $default = '/my/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon One
    $name = 'theme_fordson/navicon2info';
    $heading = get_string('navicon2', 'theme_fordson');
    $information = get_string('navicondesc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/nav2icon';
    $title = get_string('navicon', 'theme_fordson');
    $description = get_string('navicondesc', 'theme_fordson');
    $default = 'calendar';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav2buttontext';
    $title = get_string('naviconbuttontext', 'theme_fordson');
    $description = get_string('naviconbuttontextdesc', 'theme_fordson');
    $default = 'Calendar';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav2buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fordson');
    $description = get_string('naviconbuttonurldesc', 'theme_fordson');
    $default = '/calendar/view.php?view=month';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon three
    $name = 'theme_fordson/navicon3info';
    $heading = get_string('navicon3', 'theme_fordson');
    $information = get_string('navicondesc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/nav3icon';
    $title = get_string('navicon', 'theme_fordson');
    $description = get_string('navicondesc', 'theme_fordson');
    $default = 'bookmark';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav3buttontext';
    $title = get_string('naviconbuttontext', 'theme_fordson');
    $description = get_string('naviconbuttontextdesc', 'theme_fordson');
    $default = 'Badges';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav3buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fordson');
    $description = get_string('naviconbuttonurldesc', 'theme_fordson');
    $default = '/badges/mybadges.php';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon four
    $name = 'theme_fordson/navicon4info';
    $heading = get_string('navicon4', 'theme_fordson');
    $information = get_string('navicondesc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/nav4icon';
    $title = get_string('navicon', 'theme_fordson');
    $description = get_string('navicondesc', 'theme_fordson');
    $default = 'book';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav4buttontext';
    $title = get_string('naviconbuttontext', 'theme_fordson');
    $description = get_string('naviconbuttontextdesc', 'theme_fordson');
    $default = 'All Courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav4buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fordson');
    $description = get_string('naviconbuttonurldesc', 'theme_fordson');
    $default = '/course/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon four
    $name = 'theme_fordson/navicon5info';
    $heading = get_string('navicon5', 'theme_fordson');
    $information = get_string('navicondesc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/nav5icon';
    $title = get_string('navicon', 'theme_fordson');
    $description = get_string('navicondesc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav5buttontext';
    $title = get_string('naviconbuttontext', 'theme_fordson');
    $description = get_string('naviconbuttontextdesc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav5buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fordson');
    $description = get_string('naviconbuttonurldesc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon six
    $name = 'theme_fordson/navicon6info';
    $heading = get_string('navicon6', 'theme_fordson');
    $information = get_string('navicondesc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/nav6icon';
    $title = get_string('navicon', 'theme_fordson');
    $description = get_string('navicondesc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav6buttontext';
    $title = get_string('naviconbuttontext', 'theme_fordson');
    $description = get_string('naviconbuttontextdesc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav6buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fordson');
    $description = get_string('naviconbuttonurldesc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon seven
    $name = 'theme_fordson/navicon7info';
    $heading = get_string('navicon7', 'theme_fordson');
    $information = get_string('navicondesc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/nav7icon';
    $title = get_string('navicon', 'theme_fordson');
    $description = get_string('navicondesc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav7buttontext';
    $title = get_string('naviconbuttontext', 'theme_fordson');
    $description = get_string('naviconbuttontextdesc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav7buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fordson');
    $description = get_string('naviconbuttonurldesc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // This is the descriptor for icon eight
    $name = 'theme_fordson/navicon8info';
    $heading = get_string('navicon8', 'theme_fordson');
    $information = get_string('navicondesc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/nav8icon';
    $title = get_string('navicon', 'theme_fordson');
    $description = get_string('navicondesc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav8buttontext';
    $title = get_string('naviconbuttontext', 'theme_fordson');
    $description = get_string('naviconbuttontextdesc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_fordson/nav8buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_fordson');
    $description = get_string('naviconbuttonurldesc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);

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
 * @creditstheme_fordson - MoodleHQ
 * @licensehttp://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_fordson_content', get_string('contentsettings', 'theme_fordson'));

    // allow or disallow teacher header images.
    $name = 'theme_fordson/searchtoggle';
    $title = get_string('searchtoggle', 'theme_fordson');
    $description = get_string('searchtoggle_desc', 'theme_fordson');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    //Topic and Weekly Section Titles Icon
    $name = 'theme_fordson/headericon';
    $title = get_string('headericon','theme_fordson');
    $description = get_string('headericon_desc', 'theme_fordson');
    $default = 'Clone';
    $choices = array(
        '""' => 'None - No Icon',
        '"\f24d"' => 'Clone',
        '"\f02e"' => 'Bookmark',
        '"\f02d"' => 'Book',
        '"\f0a3"' => 'Certificate',
        '"\f108"' => 'Desktop',
        '"\f19d"' => 'Graduation Cap',
        '"\f0c0"' => 'Users',
        '"\f0c9"' => 'Bars',
        '"\f1d8"' => 'Paper Plane',
        '"\f055"' => 'Plus Circle',
        '"\f0e8"' => 'Sitemap',
        '"\f12e"' => 'Puzzle Piece',
        '"\f110"' => 'Spinner',
        '"\f1ce"' => 'Circle O Notch',
        '"\f046"' => 'Check Square O',
        '"\f196"' => 'Plus Square O',
        '"\f138"' => 'Chevron Circle Right',
        '"\f0a9"' => 'Arrow Circle Right',
        '"\f0d7"' => 'Caret Down',
        '"\f04e"' => 'Forward',
        '"\f15c"' => 'File Text',
        '"\f038"' => 'Align Right',
        '"\f101"' => 'Angle Double Right',
        '"\f07c"' => 'Folder Open',
        '"\f07b"' => 'Folder',
        '"\f115"' => 'Folder Open O',
        '"\f054"' => 'Chevron Right',
        '"\f005"' => 'Star',
        '"\f2bd"' => 'User Circle',
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    //Topic and Weekly Section Titles Icon
    $name = 'theme_fordson/sectionicon';
    $title = get_string('sectionicon','theme_fordson');
    $description = get_string('sectionicon_desc', 'theme_fordson');
    $default = 'Folder Open';
    $choices = array(
        '""' => 'None - No Icon',
        '"\f24d"' => 'Clone',
        '"\f02e"' => 'Bookmark',
        '"\f02d"' => 'Book',
        '"\f0a3"' => 'Certificate',
        '"\f108"' => 'Desktop',
        '"\f19d"' => 'Graduation Cap',
        '"\f0c0"' => 'Users',
        '"\f0c9"' => 'Bars',
        '"\f1d8"' => 'Paper Plane',
        '"\f055"' => 'Plus Circle',
        '"\f0e8"' => 'Sitemap',
        '"\f12e"' => 'Puzzle Piece',
        '"\f110"' => 'Spinner',
        '"\f1ce"' => 'Circle O Notch',
        '"\f046"' => 'Check Square O',
        '"\f196"' => 'Plus Square O',
        '"\f138"' => 'Chevron Circle Right',
        '"\f0a9"' => 'Arrow Circle Right',
        '"\f0d7"' => 'Caret Down',
        '"\f04e"' => 'Forward',
        '"\f15c"' => 'File Text',
        '"\f038"' => 'Align Right',
        '"\f101"' => 'Angle Double Right',
        '"\f07c"' => 'Folder Open',
        '"\f07b"' => 'Folder',
        '"\f115"' => 'Folder Open O',
        '"\f054"' => 'Chevron Right',
        '"\f005"' => 'Star',
        '"\f2bd"' => 'User Circle',
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Frontpage Textbox.
    $name = 'theme_fordson/fptextbox';
    $title = get_string('fptextbox', 'theme_fordson');
    $description = get_string('fptextbox_desc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Frontpage Textbox Logged Out.
    $name = 'theme_fordson/fptextboxlogout';
    $title = get_string('fptextboxlogout', 'theme_fordson');
    $description = get_string('fptextboxlogout_desc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Slert setting.
    $name = 'theme_fordson/alertbox';
    $title = get_string('alert', 'theme_fordson');
    $description = get_string('alert_desc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Footnote setting.
    $name = 'theme_fordson/footnote';
    $title = get_string('footnote', 'theme_fordson');
    $description = get_string('footnotedesc', 'theme_fordson');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);

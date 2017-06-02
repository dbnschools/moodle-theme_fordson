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

$page = new admin_settingpage('theme_fordson_images', get_string('imagesettings', 'theme_fordson'));

// Header size setting.
$name = 'theme_fordson/headerimagepadding';
$title = get_string('headerimagepadding', 'theme_fordson');
$description = get_string('headerimagepadding_desc', 'theme_fordson');;
$default = '500px';
$choices = array(
        '100px' => '100px',
        '125px' => '125px',
        '150px' => '150px',
        '175px' => '175px',
        '200px' => '200px',
        '225px' => '225px',
        '250px' => '250px',
        '275px' => '275px',
        '300px' => '300px',
        '325px' => '325px',
        '350px' => '350px',
        '375px' => '375px',
        '400px' => '400px',
        '425px' => '425px',
        '450px' => '450px',
        '475px' => '475px',
        '500px' => '500px',
        '525px' => '525px',
        '550px' => '550px',
        '575px' => '575px',
        '600px' => '600px',
        '625px' => '625px',
        '650px' => '650px',
        '675px' => '675px',
        '700px' => '700px',
        '725px' => '725px',
        '750px' => '750px',
        '775px' => '775px',
        '800px' => '800px',
    );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Show hide user enrollment toggle.
$name = 'theme_fordson/showcourseheaderimage';
$title = get_string('showcourseheaderimage', 'theme_fordson');
$description = get_string('showcourseheaderimage_desc', 'theme_fordson');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// logo image.
$name = 'theme_fordson/headerlogo';
$title = get_string('headerlogo', 'theme_fordson');
$description = get_string('headerlogo_desc', 'theme_fordson');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'headerlogo');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Default header image.
$name = 'theme_fordson/headerdefaultimage';
$title = get_string('headerdefaultimage', 'theme_fordson');
$description = get_string('headerdefaultimage_desc', 'theme_fordson');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'headerdefaultimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Default background image.
$name = 'theme_fordson/backgroundimage';
$title = get_string('backgroundimage', 'theme_fordson');
$description = get_string('backgroundimage_desc', 'theme_fordson');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Default login page image.
$name = 'theme_fordson/loginimage';
$title = get_string('loginimage', 'theme_fordson');
$description = get_string('loginimage_desc', 'theme_fordson');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'loginimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);

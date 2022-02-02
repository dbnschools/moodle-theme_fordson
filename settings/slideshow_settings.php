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

$page = new admin_settingpage('theme_fordson_slideshow', get_string('slideshowsettings', 'theme_fordson'));


// Show hide user enrollment toggle.
$name = 'theme_fordson/showslideshow';
$title = get_string('showslideshow', 'theme_fordson');
$description = get_string('showslideshow_desc', 'theme_fordson');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Header size setting.
$name = 'theme_fordson/slideshowpages';
$title = get_string('slideshowpages', 'theme_fordson');
$description = get_string('slideshowpages_desc', 'theme_fordson');
$default = '0';
$choices = array(
        '0' => get_string('slideshowpages0', 'theme_fordson'),
        '1' => get_string('slideshowpages1', 'theme_fordson'),
        '2' => get_string('slideshowpages2', 'theme_fordson'),
    );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Whether to show slideshow to unauthorized users
$name = 'theme_fordson/showtounauthorized';
$title = get_string('showtounauthorized', 'theme_fordson');
$description = get_string('showtounauthorized_desc', 'theme_fordson');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Header size setting.
$name = 'theme_fordson/slideshowheight';
$title = get_string('slideshowheight', 'theme_fordson');
$description = get_string('slideshowheight_desc', 'theme_fordson');
$default = '250px';
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
    );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Header size setting.
$name = 'theme_fordson/slideshowspacer';
$title = get_string('slideshowspacer', 'theme_fordson');
$description = get_string('slideshowspacer_desc', 'theme_fordson');
$default = 'initial';
$choices = array(
        'initial' => 'initial',
        '50px' => '50px',
        '75px' => '75px',
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
    );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Multi-slide property pages for slideshow
// Loading current settings
global $PAGE;
$currentSlidesCount = (empty($PAGE->theme->settings->slideshowpages_count))?3:$PAGE->theme->settings->slideshowpages_count;

// Count of slides
// we'll better use this than simple textbox
use theme_foundation\admin_setting_configinteger;

$name = 'theme_fordson/slideshowpages_count';
$title = get_string('slideshowpages_count', 'theme_fordson');
$description = get_string('slideshowpages_count_desc', 'theme_fordson');
$default = 3;
$lower = 1;
$upper = 30;
$setting = new admin_setting_configinteger($name,$title,$description,$default, $lower, $upper);
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);

// After that is done let's create tabs with per-slide options

for ($slideIndex = 1; $slideIndex <= $currentSlidesCount; $slideIndex++) {
    $slideSettingsPage = new admin_settingpage('theme_fordson_slide' . $slideIndex . 'settings_page', get_string('slideshowpages_page','theme_fordson') . $slideIndex);
    
    // This is the descriptor for slide
    $name = 'theme_fordson/slide'.$slideIndex.'info';
    $heading = get_string('slideinfo', 'theme_fordson') . $slideIndex;
    $information = get_string('slideinfodesc', 'theme_fordson');
    $slideSettingsPageElement = new admin_setting_heading($name, $heading, $information);
    $slideSettingsPage->add($slideSettingsPageElement);

    // Slide title
    $name = 'theme_fordson/slide'.$slideIndex.'title';
    $title = get_string('slidetitle', 'theme_fordson');
    $description = get_string('slidetitle_desc', 'theme_fordson');
    $default = '';
    $slideSettingsPageElement = new admin_setting_configtext($name, $title, $description, $default);
    $slideSettingsPageElement->set_updatedcallback('theme_reset_all_caches');
    $slideSettingsPage->add($slideSettingsPageElement);

    // Slide click-to-visit URL
    $name = 'theme_fordson/slide'.$slideIndex.'url';
    $title = get_string('slideurl', 'theme_fordson');
    $description = get_string('slideurl_desc', 'theme_fordson');
    $default = '';
    $slideSettingsPageElement = new admin_setting_configtext($name, $title, $description, $default);
    $slideSettingsPageElement->set_updatedcallback('theme_reset_all_caches');
    $slideSettingsPage->add($slideSettingsPageElement);

    // Slide URL option - open in new tab
    $name = 'theme_fordson/slide'.$slideIndex.'url_newtab';
    $title = get_string('slideurl_newtab', 'theme_fordson');
    $description = get_string('slideurl_newtab_desc', 'theme_fordson');
    $default = false;
    $slideSettingsPageElement = new admin_setting_configcheckbox($name,$title,$description,$default);
    $slideSettingsPageElement->set_updatedcallback('theme_reset_all_caches');
    $slideSettingsPage->add($slideSettingsPageElement);

    //Slide Description
    $name = 'theme_fordson/slide'.$slideIndex.'content';
    $title = get_string('slidecontent', 'theme_fordson');
    $description = get_string('slidecontent_desc', 'theme_fordson');
    $default = '';
    $slideSettingsPageElement = new admin_setting_confightmleditor($name, $title, $description, $default);
    $slideSettingsPageElement->set_updatedcallback('theme_reset_all_caches');
    $slideSettingsPage->add($slideSettingsPageElement);

    // logo image.
    $name = 'theme_fordson/slide'.$slideIndex.'image';
    $title = get_string('slideimage', 'theme_fordson');
    $description = get_string('slideimage_desc', 'theme_fordson');
    $slideSettingsPageElement = new admin_setting_configstoredfile($name, $title, $description, 'slide'.$slideIndex.'image');
    $slideSettingsPageElement->set_updatedcallback('theme_reset_all_caches');
    $slideSettingsPage->add($slideSettingsPageElement);

    $settings->add($slideSettingsPage);
}

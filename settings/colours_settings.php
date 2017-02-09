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
 * Colours settings page file.
 *
 * @packagetheme_fordson
 * @copyright  2016 Chris Kenniburg
 * @creditstheme_fordson - MoodleHQ
 * @licensehttp://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_fordson_colours', get_string('colours_settings', 'theme_fordson'));
$page->add(new admin_setting_heading('theme_fordson_colours', get_string('colours_headingsub', 'theme_fordson'),
        format_text(get_string('colours_desc' , 'theme_fordson'), FORMAT_MARKDOWN)));


    // Raw SCSS to include before the content.
    $setting = new admin_setting_configtextarea('theme_fordson/scsspre',
        get_string('rawscsspre', 'theme_fordson'), get_string('rawscsspre_desc', 'theme_fordson'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $body-color.
    $name = 'theme_fordson/bodycolor';
    $title = get_string('bodycolor', 'theme_fordson');
    $description = get_string('bodycolor_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $link-color
    $name = 'theme_fordson/linkcolor';
    $title = get_string('linkcolor', 'theme_fordson');
    $description = get_string('linkcolor_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $brandprimary.
    $name = 'theme_fordson/brandprimary';
    $title = get_string('brandprimary', 'theme_fordson');
    $description = get_string('brandprimary_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $brandsuccess.
    $name = 'theme_fordson/brandsuccess';
    $title = get_string('brandsuccess', 'theme_fordson');
    $description = get_string('brandsuccess_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $brandwarning.
    $name = 'theme_fordson/brandwarning';
    $title = get_string('brandwarning', 'theme_fordson');
    $description = get_string('brandwarning_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $branddanger.
    $name = 'theme_fordson/branddanger';
    $title = get_string('branddanger', 'theme_fordson');
    $description = get_string('branddanger_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $brandinfo.
    $name = 'theme_fordson/brandinfo';
    $title = get_string('brandinfo', 'theme_fordson');
    $description = get_string('brandinfo_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $graybase.
    $name = 'theme_fordson/brandgraybase';
    $title = get_string('brandgray', 'theme_fordson');
    $description = get_string('brandgray_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $headings-color.
    $name = 'theme_fordson/headingcolor';
    $title = get_string('headingcolor', 'theme_fordson');
    $description = get_string('headingcolor_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $header-color.
    $name = 'theme_fordson/headercolor';
    $title = get_string('headercolor', 'theme_fordson');
    $description = get_string('headercolor_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // header overlay
    $name = 'theme_fordson/headerscreen';
    $title = get_string('headerscreen', 'theme_fordson');
    $description = get_string('headerscreen_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // @bodyBackground setting.
    $name = 'theme_fordson/bodybackground';
    $title = get_string('bodybackground', 'theme_fordson');
    $description = get_string('bodybackground_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // @breadcrumbBackground setting.
    $name = 'theme_fordson/breadcrumbbkg';
    $title = get_string('breadcrumbbkg', 'theme_fordson');
    $description = get_string('breadcrumbbkg_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // navbar.
    $name = 'theme_fordson/navbarbkg';
    $title = get_string('navbarbkg', 'theme_fordson');
    $description = get_string('navbarbkg_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // navbar links.
    $name = 'theme_fordson/navbarurl';
    $title = get_string('navbarurl', 'theme_fordson');
    $description = get_string('navbarurl_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // icon nav background.
    $name = 'theme_fordson/fpstartwrap';
    $title = get_string('fpstartwrap', 'theme_fordson');
    $description = get_string('fpstartwrap_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // icon color
    $name = 'theme_fordson/fpiconcolour';
    $title = get_string('fpicon-colour', 'theme_fordson');
    $description = get_string('fpicon-colour_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // icon rollover
    $name = 'theme_fordson/fpiconnavhover';
    $title = get_string('fpiconnavhover', 'theme_fordson');
    $description = get_string('fpiconnavhover_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // marketing tile text background
    $name = 'theme_fordson/markettextbg';
    $title = get_string('markettextbg', 'theme_fordson');
    $description = get_string('markettextbg_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // layout card background
    $name = 'theme_fordson/cardbkg';
    $title = get_string('cardbkg', 'theme_fordson');
    $description = get_string('cardbkg_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // layout drawer background
    $name = 'theme_fordson/drawerbkg';
    $title = get_string('drawerbkg', 'theme_fordson');
    $description = get_string('drawerbkg_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // layout footer background
    $name = 'theme_fordson/footerbg';
    $title = get_string('footerbg', 'theme_fordson');
    $description = get_string('footerbg_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

// Raw SCSS to include after the content.
$setting = new admin_setting_configtextarea('theme_fordson/scss', get_string('rawscss', 'theme_fordson'),
    get_string('rawscss_desc', 'theme_fordson'), '', PARAM_RAW);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);

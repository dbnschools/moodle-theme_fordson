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
 * Version file.
 *
 * @package    theme_fordson
 * @copyright  2016 Chris Kenniburg
 * @credits    theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


$plugin->version   = 2021072100;
$plugin->release  = 'Moodle 3.11 Fordson v3.11 release 1';
$plugin->maturity  = MATURITY_STABLE;
$plugin->requires  = 2021051100;
$plugin->component = 'theme_fordson';
$plugin->dependencies = array(
    'theme_boost'  => 2021051700,
    'theme_foundation' => 2021051804
    // theme_foundation required as we use admin_setting_configinteger in our slideshow_settings.php
);

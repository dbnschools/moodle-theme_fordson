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
 * SCSS Lib file.
 *
 * @package    theme_fordson
 * @copyright  2016 Chris Kenniburg
 * 
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Post process the CSS tree.
 *
 * @param string $tree The CSS tree.
 * @param theme_config $theme The theme config object.
 */
function theme_fordson_css_tree_post_processor($tree, $theme) {
    $prefixer = new theme_fordson\autoprefixer($tree);
    $prefixer->prefix();
}

/**
 * Returns the main SCSS content.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_fordson_get_main_scss_content($theme) {
    global $CFG;

    $scss = '';
    $filename = !empty($theme->settings->preset) ? $theme->settings->preset : null;
    $fs = get_file_storage();

    $context = context_system::instance();
    $iterator = new DirectoryIterator($CFG->dirroot . '/theme/fordson/scss/preset/');
    $presetisset = '';
    foreach ($iterator as $pfile) {
        if (!$pfile->isDot()) {
            $presetname = substr($pfile, 0, strlen($pfile) - 5); // Name - '.scss'.
            if ($filename == $presetname) {
                $scss .= file_get_contents($CFG->dirroot . '/theme/fordson/scss/preset/' . $pfile);
                $presetisset = true;
            }
        }
    }
    if (!$presetisset) {
        $filename .= '.scss';
        if ($filename && ($presetfile = $fs->get_file($context->id, 'theme_fordson', 'preset', 0    , '/', $filename))) {
            $scss .= $presetfile->get_content();
        } else {
            // Safety fallback - maybe new installs etc.
            $scss .= file_get_contents($CFG->dirroot . '/theme/fordson/scss/preset/default.scss');
        }
    }

    return $scss;
}

/**
 * Get SCSS to prepend.
 *
 * @param theme_config $theme The theme config object.
 * @return array
 */
function theme_fordson_get_pre_scss($theme) {
    global $CFG;

    $prescss = '';

    $configurable = [
    // Config key => variableName, ....
        'brandprimary' => ['brand-primary'],
        'brandsuccess' => ['brand-success'],
        'brandinfo' => ['brand-info'],
        'brandwarning' => ['brand-warning'],
        'branddanger' => ['brand-danger'],
        'brandgraybase' => ['gray-base'],
        'bodybackground' => ['body-bg'],
        'breadcrumbbkg' => ['breadcrumb-bg'],
        'navbarbkg' => ['navbar-light-color'],
        'cardbkg' => ['card-bg'],
        'drawerbkg' => ['drawer-bg'],
        'fpstartwrap' => ['fpstartwrap-bg'],
        'fpiconnavhover' => ['fpicon-hover'],
        'fpiconcolour' => ['fpicon-colour'],
        'headerimagepadding' => ['headerimagepadding'],
        'markettextbg' => ['markettextbg'],
        'navbarurl' => ['navbarurl'],
        'footerbg' => ['footer-bg'],
        'headerscreen' => ['headerfade-bg'],
        'iconwidth' =>  ['fpicon-width'],
        'headingcolor'  => ['headings-color'],
        'headercolor'  => ['header-color'],
        'bodycolor'  => ['body-color'],
        'linkcolor'  => ['link-color'],
        'sectionicon'  => ['sectionicon'],
        'headericon'  => ['headericon'],
        'courseboxheight'  => ['courseboxheight']
    ];

    // Add settings variables.
    foreach ($configurable as $configkey => $targets) {
        $value = $theme->settings->{$configkey};
        if (empty($value)) {
            continue;
        }
        array_map(function($target) use (&$prescss, $value) {
            $prescss .= '$' . $target . ': ' . $value . ";\n";
        }, (array) $targets);
    }

    // Prepend pre-scss.
    if (!empty($theme->settings->scsspre)) {
        $prescss .= $theme->settings->scsspre;
    }

    // Set the default image for the header.
    $headerbg = $theme->setting_file_url('headerdefaultimage', 'headerdefaultimage');
    if (isset($headerbg)) {
        // Add a fade in transition to avoid the flicker on course headers ***.
        $prescss .= 'header#page-header .card {background-image: url("'.$headerbg.'"); background-size:cover; background-position:center;}';
    }

    // Set the background image for the page.
    $pagebg = $theme->setting_file_url('backgroundimage', 'backgroundimage');
    if (isset($pagebg)) {
        $prescss .= 'body {background-image: url("'.$pagebg.'"); background-size:cover; background-position:center;}';
    }

    // Set the background image for the login page.
    $loginbg = $theme->setting_file_url('loginimage', 'loginimage');
    if (isset($loginbg)) {
        $prescss .= 'body#page-login-index {background-image: url("'.$loginbg.'") !important; background-size:cover; background-position:center;}';
    }

    // Set the default image for the header.
    $marketing1image = $theme->setting_file_url('marketing1image', 'marketing1image');
    if (isset($marketing1image)) {
        // Add a fade in transition to avoid the flicker on course headers ***.
        $prescss .= '.marketing1image {background-image: url("'.$marketing1image.'"); background-size:cover; background-position:center;}';
    }

    // Set the default image for the header.
    $marketing2image = $theme->setting_file_url('marketing2image', 'marketing2image');
    if (isset($marketing2image)) {
        // Add a fade in transition to avoid the flicker on course headers ***.
        $prescss .= '.marketing2image {background-image: url("'.$marketing2image.'"); background-size:cover; background-position:center;}';
    }

    // Set the default image for the header.
    $marketing3image = $theme->setting_file_url('marketing3image', 'marketing3image');
    if (isset($marketing3image)) {
        // Add a fade in transition to avoid the flicker on course headers ***.
        $prescss .= '.marketing3image {background-image: url("'.$marketing3image.'"); background-size:cover; background-position:center;}';
    }

    // Set the default image for the header.
    $marketing4image = $theme->setting_file_url('marketing4image', 'marketing4image');
    if (isset($marketing4image)) {
        // Add a fade in transition to avoid the flicker on course headers ***.
        $prescss .= '.marketing4image {background-image: url("'.$marketing4image.'"); background-size:cover; background-position:center;}';
    }

    // Set the default image for the header.
    $marketing5image = $theme->setting_file_url('marketing5image', 'marketing5image');
    if (isset($marketing5image)) {
        // Add a fade in transition to avoid the flicker on course headers ***.
        $prescss .= '.marketing5image {background-image: url("'.$marketing5image.'"); background-size:cover; background-position:center;}';
    }

    // Set the default image for the header.
    $marketing6image = $theme->setting_file_url('marketing6image', 'marketing6image');
    if (isset($marketing6image)) {
        // Add a fade in transition to avoid the flicker on course headers ***.
        $prescss .= '.marketing6image {background-image: url("'.$marketing6image.'"); background-size:cover; background-position:center;}';
    }

    return $prescss;
}

/**
 * Inject additional SCSS.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_fordson_get_extra_scss($theme) {
    // Adapted from Boost to allow other changes or settings if required.
    $extrascss = '';
    if (!empty($theme->settings->scss)) {
        $extrascss .= $theme->settings->scss;
    }

    return $extrascss;
}


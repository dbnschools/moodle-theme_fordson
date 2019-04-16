THEME_Fordson
===========

# Fordson

Fordson is focused on students going from login to learning, with features that help teachers build better courses and students engage with content. Your school is unique and Fordson provides impressive customizations for a professional and modern learning platform. 

# Install from Github
Click on the button to "Clone or Download" https://github.com/dbnschools/moodle-theme_fordson . When downloaded to your computer, unzip it. It should create a folder named "moodle-theme_fordson-master". Rename the folder so that it is "fordson" (without quotes). You can FTP that folder to your moodle site in /moodle/theme/ directory. Or you can create a new ZIP file of the "fordson" folder and upload and install it via the Plugin Administration in Site Administration.


# Versions and Updates

## Moodle 3.6 Fordson v3.6 release 1.3.1
* Many CSS Styling fixes when using the defaults for the new Perception Preset.
* When using Fordson custom dashboards (teacher & student) we added the ability to include the full Moodle Course Menu - the edit cog.  When turned on it will appear in the upper right of the teacher course management panel as well as the student panel.  This is useful if you use a 3rd party plugin and it injects a link into the main course menu.  Fordson can now display the default Moodle Course Menu within the teacher and student dashboard panels.
* Fixed break point for blocks on quiz and other modules/pages.  
* Fixed issue with footer and eLearning Preset
* Added multilanguage support for course tooltips on site home page

## Moodle 3.6 Fordson v3.6 release 1.3
* New default preset: Perception.
* New default settings for presets when installing brand new.  Defaults now work best with Perception preset.  Please be sure to re-configure your Fordson Presets after updating!
* Changed Topic/Weekly View Show One Topic Per Page layout so that view page button is above module listing and Progress bar is below module listings.
* We can now style the top navbar using SCSS variables used within the Fordson theme.  Just remove the !default and replace with your own colors.  
  * $topnavbarbg: 						$white !default;
  * $teachernavbarcolor: 				#f3e420 !default;
  * $studentnavbarcolor: 				$topnavbarbg !default;
  * $navbar-fhs-color:                  $black !default;
  * $navbar-fhs-active-color:           $black !default;              
  * $navbar-fhs-hover-color:            $black !default;
  * $navbar-fhs-disabled-color:         $black !default;
* Added progress bar (previously progress radial) back into Student Dashboard modal window. This follows the change in core Boost to drop radial course completion in favor of progress bar.
* New feature: In the student course dashboard only show the teacher that is in the same course group as the student.  Previously it would list all the teachers regardless of group affiliation.  This feature allows for multiple teachers using a single course and will only show the teacher grouped with their students. Thank you to Robynstar on github for sharing the code: https://github.com/dbnschools/moodle-theme_fordson/issues/40
* New Feature: My Courses can now be sorted by last access.  This feature previously applied to only the courses displayed on Site Home.  We extended this to include the drop down menu.  If you click the checkbox it will turn this sorting method on for both the Site Homepage and the My Courses drop down menu.

## Moodle 3.6 Fordson v3.6 release 1.2
* Fixed logo image on login page where it was not fluid/reponsive within the box.
* Changed login page to include an H1 tag around the SiteName to be ADA compliant.  Previous tag was H2.  ADA requires Headings begin with H1 before H2 for proper page structure.
* Fixed login as guest issue on custom login page.  Previously, this login form was missing logintoken when logging in as guest.
* Fixed login as guest when using default Moodle login page.
* Fixed scroll to top issue where the button would not appear.

## Moodle 3.6 Fordson v3.6 release 1.1
* Fixed icon display issue with Recently Accessed items block in dashboard.  Icons will be the same size as they appear in courses and this can be adjusted in Fordson settings to be larger or smaller based on preference.
* Dashboard Sidebar will switch display modes for blocks.  A block such as Recently Accessed Items which normally displays as a single row will display as a column when moved from the main area to the sidebar.  This just makes sense due to space limitations and wanting to see all recently accessed items without scrolling sideways.

## Moodle 3.6 Fordson v3.6 release 1
* Initial Release of Fordson for Moodle 3.6
* Fixed coursecat.php classes
* Fixed Footer display issue
* Requires Moodle 3.6 official release
* Supports new messaging layout and display
* On Dashboard Fordson uses Default Course Header Image set by Site Admin for Course Tiles.  This is instead of geometric shape image
THEME_Fordson
===========

# Fordson

Fordson is a child theme for Moodle's core theme Boost.
It is built on Boostrap4 and Mustache templates.

## Documentation can be found here: https://goo.gl/oUczeD

## Recommended Settings for Best Results
These settings below are found in the Moodle Site Administration Pages.  These are not related to the theme but will help bring out the best of Fordson.  

* defaulthomepage = SITE (Default homepage for users.  If set to Dashboard your users will not see the Enhanced Homepage upon login.)
* frontpage = none (Frontpage items to show. Part of Moodle Frontpage Settings tab.)
* frontpageloggedin = none or Enrolled Courses (Frontpage items to show when logged in. Part of Moodle Frontpage Settings tab.)
* Optional: forcelogin = Checked (This forces users to login before seeing the homepage.)

Fordson is a child theme of Boost.  
This means when Moodle updates the core Boost theme those changes will be applied to Fordson as well in most cases.
Documentation can be found here: https://goo.gl/oUczeD

# Install from Github
Click on the button to "Clone or Download" https://github.com/dbnschools/moodle-theme_fordson . When downloaded to your computer, unzip it. It should create a folder named "moodle-theme_fordson-master". Rename the folder so that it is "fordson" (without quotes). You can FTP that folder to your moodle site in /moodle/theme/ directory. Or you can create a new ZIP file of the "fordson" folder and upload and install it via the Plugin Administration in Site Administration.

## Moodle 3.5 Fordson v1 2018051400

* Fixed styling issues.
* Added 3 fullwidth horizontal course display options for listings and frontpage


## Moodle 3.5 Fordson v1BETA 2018051100
This is a beta release.
* Not backwards compatible.  Must be using Moodle 3.5.
* A new and reimagined way to customize a course using Page Layouts, Section Layouts, and Style Presets.
* Style Preset compatibility with Boost and Bootswatch (converted for Moodle) Presets:  https://github.com/bmbrands/Moodle-presets
* Simplified color choosers to target standard Bootstrap elements.
* New hidden blocks panel.  Each course has a 3 column collapseable panel that shows and hides course blocks.
* Ability to maintain look and feel of Boost but get all the enhancements of Fordson theme.
* 5 Page Layouts to choose from.
* 6 Weekly/Topic Section styles to choose from.
* 5 Course Listing styles to choose from.  These deal with course listings such as Frontpage Available Courses, My Courses, and listings of Courses in Category directories.  Choose from 4 tiled layouts and Moodle default.
* 2 Style Presets: Modern Moodle and e-Learner

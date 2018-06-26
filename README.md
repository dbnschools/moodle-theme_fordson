THEME_Fordson
===========

# Fordson

Fordson is focused on students going from login to learning, with features that help teachers build better courses and students engage with content. Your school is unique and Fordson provides impressive customizations for a professional and modern learning platform. 
It is built on Boostrap4 and Mustache templates.

## Documentation can be found here: https://bookshare.dearbornschools.org/fordsontheme/

## Recommended Settings for Best Results
These settings below are found in the Moodle Site Administration Pages.  These are not related to the theme but will help bring out the best of Fordson.

* defaulthomepage = SITE (Default homepage for users.  If set to Dashboard your users will not see the Enhanced Homepage upon login.)
* frontpage settings = none (Frontpage items to show. Part of Moodle Frontpage Settings tab.)
* frontpageloggedin = none or Enrolled Courses (Frontpage items to show when logged in. Part of Moodle Frontpage Settings tab.)
* Optional: forcelogin = Checked (This forces users to login before seeing the homepage and is recommended when using the Fordson Custom Login page.)

# Install from Github
Click on the button to "Clone or Download" https://github.com/dbnschools/moodle-theme_fordson . When downloaded to your computer, unzip it. It should create a folder named "moodle-theme_fordson-master". Rename the folder so that it is "fordson" (without quotes). You can FTP that folder to your moodle site in /moodle/theme/ directory. Or you can create a new ZIP file of the "fordson" folder and upload and install it via the Plugin Administration in Site Administration.


# Versions and Updates
## Moodle 3.5 Fordson v3.5 release 3 update 3
* Breadcrumb css fix for arrow placement
* New variables can be used to change the colors for breadcrumbs if needed:  $breadcrumb-bg-hover, $breadcrumb-text-color, & $breadcrumb-bg.  Only the background color can be changed on theme settings page.  By default the background color on hover is 15% darker than the initial color.  Default text color is white but can now be changed in Custom SCSS textbox by using the $breadcrumb-text-color variable.  
example for black text: $breadcrumb-text-color: #000; and put that in the bottom Raw SCSS box on the colors page.
* New!  Added color chooser for top nav bar background color.  Default is white.  SCSS variable is $topnavbarbg.

## Moodle 3.5 Fordson v3.5 release 3 update 2
* New breadcrumb styling brought over from our previous "evolve-D" theme.  Looks great on large screens and reverts back to just text (Default Boost) on smaller screens.
* Removed items from breadcrumbs which do not contain a link. This text just takes up space and does nothing for the end user.  Only breadcrumb items with links to pages will display.
* New Fordson SCSS variable: $breadcrumb-bg-hover can be set to a color if you wanted to change the hover effect on breadcrumbs.  Otherwise it will just darken the breadcrumb background color 15% which you can use the color picker on the colors page.


## Moodle 3.5 Fordson v3.5 release 3 update 1
* Fixed bug with customized activity menu where the labels were not appearing correctly.  This was also part of fixing language strings and filters for many of the text areas in Fordson: https://github.com/dbnschools/moodle-theme_fordson/issues/21
* Added progress bar for weeks course format when using show one topic per page. Per this request: https://moodle.org/mod/forum/discuss.php?d=360689#p1501221



## Moodle 3.5 Fordson v3.5 release 3 June 20th, 2018
* Fixed block display issue when on course pages where you could not add any new blocks to the page.
* Integrated new features that are activated in the theme when using iLearn Secure Browser Chromebook App and Moodle iLearn Quiz Restriction plugin. (Not yet released.  Will be open source soon.  Creates a secure assessment tool easily deployed to every chromebook in a school. Will include configurator page and easy to use tool to totally customize the App before you deploy it to devices.)
* Many bug fixes with CSS and other minor things.
* Fixed a few language strings (Course Completion Settings link, Grades link, Course Completion User Report link) to better reflect what they do in the course management panel.
* On small screen sizes the frontpage slideshow will be hidden.  Previously only the title and description were hidden but it would still show the images.  In our case this was useless and on a mobile device we feel it is best to just get into the course and focus on the learning.


## Moodle 3.5 Fordson v3.5 release 2 update 1
* Fixed Easy Enrollment Form showing to guest users.
* Fixed styling for 2 column course listing and course description text not appearing properly on smaller screens.


## Moodle 3.5 Fordson v3.5 release 2
* Fixed Icon Course Category displaying as a vertical list instead of horizontal.
* Fixed custom login page styling for icons and page background color extending to the bottom of the page.
* Added 2 column course listing display option based off tile 3 styling.
* Fixed question icons being too big on quiz editing page.
* Fixed some section styles not looking ideal when using one topic per page display option.
* Added toggle for Block Display.  This allows you to choose between the Fordson 3 column block display and Boost default single column blocks.
* Fixed homepage footer not displaying customizations.
* New Modern Moodle Preset colors and background images.
* New Footer Color chooser.
* Moved Course Blocks slider button from the center of the page to the upper right of the page.
* New documentation website using Pressbooks https://bookshare.dearbornschools.org/fordsontheme/

## Moodle 3.5 Fordson v3.5 release 1
* Initial release for Moodle 3.5.  This version is not backwards compatible.
* Fordson version 3.5 is a break from previous builds and versions.  Brand new for Moodle 3.5 is the ability of the Fordson theme to offer unprecendented customization of both page layout and style.  Fordson's new approach to layout and style offers more than 160 unique combinations.  This includes 2 Preset Styles, 5 Page Layouts, 8 Sections Styles, and 8 Course Listing Styles.  Mix and match any of these to create a unique and beautiful presentation of your Moodle site.
* Requires Moodle 3.5
* Fixed custom menu appearing in footer when not on mobile
* Fixed various styling issues
* Fixed buttons for Easy Enrollment Add-On styling
* Fixed issue where turning editing on did not return you to the proper place on the page.
* Fixed issue where scroll to top button wasn't working on course pages.

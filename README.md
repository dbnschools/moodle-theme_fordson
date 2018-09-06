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


## Moodle 3.5 Fordson v3.5 release 3 update 9
* Fixed media player issue with not displaying properly when added to main course page
* Fixed z-index for block curtain effect and Spectrum Preset
* Continued enhancements for the default presets and Spectrum.  Specifically focused on topics display and showing one topic per page.  Many styling enhancements.
* Display one topic/week per page is now very attractive with the default preset and theme settings.
* Added 3 additional marketing tiles for a total of 9
* New Marketing Tile Style Chooser.  Allows you to instantly change up the styles of the marketing tiles by choosing from a list of styles. There are 4 initial styles to choose from for marketing tiles.

## Moodle 3.5 Fordson v3.5 release 3 update 8
* Additional styling fixes.
* Fix progress bar issue
* Fixed section highlight issue when using Boost default presets

## Moodle 3.5 Fordson v3.5 release 3 update 7
* Numerous CSS and styling fixes.  
* New "Enhanced MyDashboard" feature can be used to make the MyDashboard page look like the Site homepage.  This is for people who prefer to use the My Dashboard as the homepage for users.  This brings all the features of the site home to the dashboard page such as the navigation icons, Easy Enrollment integration, custom homepage text, slideshow, and other Fordson enhancements.

## Moodle 3.5 Fordson v3.5 release 3 update 6
* Continued development and styling of the Spectrum-Achromatic preset
* Layout 5 "Default Boost Layout / Header Image in Course Title Box" is now default.  We spent some time developing this as a means to keep true to the Boost layout but also incorporate a header image.  
* Various CSS and other cosmetic fixes
* New default header image to better match the new Spectrum default
* Spectrum preset has new innovative "curtain" effect to show and hide blocks.
* e-Learner Preset updates and better styling.

## Moodle 3.5 Fordson v3.5 release 3 update 5
* Changed default settings during initial install so that you get a better experience out-of-the-box.  We are now using the Spectrum-Achromatic preset as the default.  
* Enhanced Spectrum Preset to include more unique styling for the various course layout options in Fordson.  
* Big enhancement to Spectrum and the Boost Layout with Header Image layout.
* Footer language filter fixes for organization name.
* NEW style preset: Spectrum-Achromatic.  A modern style with muted colors except where it matters.  Perfect for a clean, modern, and relevant look to your Moodle site. 
* Fixed icon navbar tooltip showing link instead of text.
* New Corporate Training My Courses Display.  Lists name of course, teacher, and percent complete in a bar graph.  Concise and compact.
* Fixed breadcrumb issue with default Boost layout.  Also made some styling tweaks to make default Boost layout more appealing within the Fordson theme and all of its features.
* Fixes and enhancements to the Pulse Preset to better work with Fordson.
* Course Tile Style One has been updated to be distinct from Tile 4.  Previously they looked the same but tile 4 had course summary.  Course tile one is clean and modern looking.  A perfect compliment to the new Spectrum-Achromatic preset style.

## Moodle 3.5 Fordson v3.5 release 3 update 4
* Added Enrollment Icons for course listing pages.  This shows you if the course requires a password or enrollment key.
* Added category context display for courses on listing pages and search pages.  This shows you what category the course is located.
* Fixed various styling issues with eLearning Preset for breadcrumbs and the course block button having white text on a white background.
* Breadcrumbs will now show all links even if they are blank.
* Made a change to help clean up "incourse" module pages where if editing was turned on the teacher had the Add a block box taking up space on the module pages.  Now when editing is turned on and a teacher is inside a module the add a block position is moved to the nav drawer like Boost default until the user returns to the course homepage where adding blocks is done in the collapsable drawer at the top of the page. This will help give the teacher more space on the screen while editing and still allow for adding blocks if needed. Discussion and code here: https://moodle.org/mod/forum/discuss.php?d=373317#p1505066  To sum this up... Once you leave the course homepage you will need to add blocks the traditional Boost way from the Nav Drawer. On the course homepage you can use the Block Administration block to add blocks to the 3 columns on the course homepage in a very obvious way. 
* Fixed issue with language filters and processing text as strings and text on homepage icon navigation and other various areas such as marketing spots.
* If course completion is enabled for a course the completion radial will appear on the Moodle Site Home and other areas where course listings occur. Only certain course listing layouts will have this feature.  Currently it is Tile Style 2, Tile Style 4, Horizontal Style 1, Horizontal Image Background Full Details, and Horizontal Image Background Title & Teacher Only.
* Other various bug fixes as reported in the Moodle.org theme forum.

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
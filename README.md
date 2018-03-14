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


## Fordson Moodle 34 version 1.7 2018020300
* Fixed tooltip displayed after click.
* Fixed missing topnavbar button for Easy Enrollment code button.
* Changed language string name for better translation support.
* Added course completion report link in teacher dashboard.
* Added Event Monitoring link in teacher dashboard.
* A few tweaks to styling for Moodle blogging pages and posts.
* Fixed completion box issue where manual and auto had the same checkbox which leads to confusion. Auto Completion now has a dashed box while manual completion is a solid box.
* Added better styling support for Collapsed Topic Course Format.  Topic Title styling will now match colors of the theme and override Collapsible Topic settings.


## Fordson Moodle 34 version 1.7 2018020200
* New navigation options in top navbar: Nav Drawer, Site Admin, Course Management, Student Dashboard, Course Editing Button, My Courses dropdown, This Course dropdown, Easy Enrollment Course Codes (When plugin is activated).
* Removed! -> Navdrawer Customizations have been removed.  We provided the ability to disable the nav drawer if needed and utilize our new topnav bar menus.  To customize the navdrawer please use this plugin:  https://moodle.org/plugins/local_boostnavigation and this plugin to add new menu items:  https://github.com/cescobedo/moodle-local_navigation .  Moving forward for sustainability and less issues we thought it best to remove these.  
A future version of Fordson may open up new possibilities to fully customize what appears in the nav drawer such as profile info, custom textbox, course nav, site nav, and other ideas we have to more fully utilize and provide valuable information to users.  The first step was removing added functionality not in core which is what we have done in this release.
* Course Edit Button (Turn editing on) is now in top nav drawer.  It is also location aware and will return the teacher to the exact place the button was pressed.  This saves a lot of scrolling up and down a page when turning editing on.
* Course Management and Student Dashboard will now be presented in modal boxes from anywhere in the course directly from the top nav bar.  
* 3 new block regions on Site Frontpage.
* New navigation option for My Courses and This Course.  This Course displays section names and items found in the nav drawer.  
* New color chooser for custom login form.
* New default preset named Fordson.
* Add a Block is now displayed when editing is turned on as it was prior to Boost.  It is located in the sidebar and makes adding blocks easier.
* Theme enhancement discussion: https://moodle.org/mod/forum/discuss.php?d=363298 


## Fordson Moodle 34 1.6.6
* New behavior when using My Courses on homepage.  If not enrolled in a course it will let user know and point them to the course category listings.  Default behavior is to show available courses which is often undesired.
* New Preset - MicroPD.  A brand new preset style will provide visual cues and styling that is ideal when using Moodle for micro-learning and chunking information in topics.
* Various CSS fixes.
* Changed language string for "Student Dashboard" to read "Course Dashboard" to be consistent with the teacher "Course Management"
* Moved activity navigation menu to be outside of the activity container.  This provides a degree of separation that our students need.  It can be confusing to have the activity navigation so close to navigation in the activity like a lesson or assignment.
* New styling for activity navigation.

## Fordson Moodle 34 1.6.5.1
* Fixed undefined variable introduced by the new feature of ordering courses by last access.
* Fixed course completion large icons.

## Fordson Moodle 34 1.6.5
* Fixed a few undefined variable notices fixed by hannaedelman on github.  https://github.com/dbnschools/moodle-theme_fordson/issues/12

## Fordson Moodle 34 1.6.4
* Fixed customlogin page header image size.  Previously it used the body tag and filled the whole page with an image.  The new method uses a special css selector on the custom login page and fills just the top area of the screen with an image.
* Moved Favicon image upload to the Custom Image page.  This makes more sense since it is an image.
* New color chooser for better control of the homepage icon navigation.  There are 4 main color choosers for this.  There is the navigation bar background color, icon color, button background color, and button hover background color.  
* Fixed Course Completion show/hide toggle for student dashboard was not working properly.  Thanks Michelle Lomman for bringing this to my attention.
* Added show/hide toggle for student dashboard to display the course admin cog link.  This is used if you allow students to unenroll but many didn't want it displayed so I added a toggle in the Menu Tab of Fordson. 
* New Feature - Frontpage My Courses sort by lastaccess.  This will allow you to keep the most used courses for a user displayed first on the frontpage of the site.  If turned off then normal sorting is used. This code was originally found in the Essential theme by Gareth Barnard and adapted to provide a new functionality.

## Fordson Moodle 34 1.6.3
* New Favicon upload.  A much requested feature has been added to Fordson.  

## Fordson Moodle 34 1.6.2
* New Customizable Login Page with 4 icons and 3 featured content areas.  This is designed to allow organizations to provide marketing to users as they visit the site's login page.  Many organizations force users to login before viewing the sites homepage.  This will allow those organizations to provide some information on the login page.  All settings are on the Site Admin > Appearance > Fordson > Custom Login page.
* Modified login form and login page.  Provides a toggle to turn custom login page on or off.
* Added activity next/previous jumping.

## Fordson Moodle 34 1.6.1
* New topic completion progress bar for each topic.  This small enhancement makes a big improvement for students.  It displays a progress bar based on course completion for each topic in a course.  To see it you must use topic course format and set Course Layout to "Show One Section Per Page".  On the main course page you will now see the progress bar for each topic.
* Dearborn Public Schools is now the default preset used by the theme
* Prevoius default.scss files were re-named to K-12, K-12 Fullscreen Header Image, and K-12 Vertical Block Titles.  
* New default background for theme: https://pixabay.com/en/background-abstract-futuristic-1462755/
* Default theme settings have been adjusted to reflect settings needed for the new Dearborn Public Schools preset.

## Fordson Moodle 34 1.6.1
* Initial release of a Moodle 3.4 version of Fordson
* Fixed changes in footer colors from Boost
* Removed Enrolled Users link from Teacher Dashboard. This is removed and replaced with Participants as they have merged.
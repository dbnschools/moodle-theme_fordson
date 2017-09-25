THEME_Fordson
===========

# Fordson

Fordson is a child theme for Moodle's core theme Boost.

It is built on Boostrap4 and Mustache templates.

Here are the main enhancements:
* Presets - Both uploaded and a set of pre-installed presets to quickly adjust colors
* Colours - A variety of color pickers to help customize and fine tune presets
* Images - Custom Login, Custom Page Header, Custom Course Header, and Custom Page Background image uploads
* Social Icons - Quickly add all your social media buttons in the footer
* Enhanced Frontpage - Navigation Iconbar, Custom Textbox, Alertbox, Six Marketing Tiles
* Customized Course Header Image - Teachers can upload an image into their course summary files and it will automatically be used in the header of their course.

## Recommended Settings for Best Results
These settings below are found in the Moodle Site Administration Pages.  These are not related to the theme but will help bring out the best of Fordson.  

* defaulthomepage = SITE (Default homepage for users.  If set to Dashboard your users will not see the Enhanced Homepage upon login.)
* frontpage = none (Frontpage items to show. Part of Moodle Frontpage Settings tab.)
* frontpageloggedin = none or Enrolled Courses (Frontpage items to show when logged in. Part of Moodle Frontpage Settings tab.)
* Optional: forcelogin = Checked (This forces users to login before seeing the homepage.)

Fordson is a child theme of Boost.  
This means when Moodle updates the core Boost theme those changes will be applied to Fordson as well in most cases.

# Install from Github
Click on the button to "Clone or Download" https://github.com/dbnschools/moodle-theme_fordson . When downloaded to your computer, unzip it. It should create a folder named "moodle-theme_fordson-master". Rename the folder so that it is "fordson" (without quotes). You can FTP that folder to your moodle site in /moodle/theme/ directory. Or you can create a new ZIP file of the "fordson" folder and upload and install it via the Plugin Administration in Site Administration. 

## Fordson Moodle 33 1.5.8
* Fixed issue where site uses custom roles to define teacher and non-editing teacher roles.  This caused Fordson to not identify the teacher role to display contact information to the student in the student "This Course" panel. This caused Fordson to display all users of the course as teachers.  This fix will show no users as teachers.  In file classes/output/core_renderer.php you can find code comments on where you should change the teacher and non-editing teacher shortnames to match your customized roles around lines 775 and 797.

## Fordson Moodle 33 1.5.7
* New Activity Completion Report Link was added to the teacher dashboard panel just below Participants link. 
* Unique CSS classes for student buttons in This Course dashboard.  Can be used to hide the Course Administration button for students if not needed.
* Fixed issue with $gradeslink variable for dashboard template.  Used same name twice.  Changed variable for grade view student to $gradeslinkstudent.

## Fordson Moodle 33 1.5.6
* New Course Style 4 is exactly the same as style one but adds a course summary back into the display.  This was at the request of a user.  It is the only course display option that includes a course summary.
* New Add Activity/Resource picker feature- Control the "Add an Activity or Resource" panel in courses.  Using a comma separated list you can add a list of top or commonly used activities or choose to only show custom items.  This gives you control over what items a teacher can use and how they are presented (ordering) to the teacher.  Special thanks to Oliver Jackson at https://www.hillbrook.qld.edu.au/.  I saw he had forked Fordson on Github and had added some customizations.  This being one of them.  This is a great feature!
* New Custom Label for Activity/Resource custom menu of modules.  This allows you to call the module label whatever you want. "Top Modules", "Most Used Activities", "Learning Tools", etc are examples.
* New permissions for Activity/Resource menu.  If restricted, teachers will only see the custom menu.  However, with the new checkbox you can allow users with the role of Manager to see all acitivities and resources.  Site Administrators will always see all menu items regardless of settings.
* Added Participants link for teachers in the course management panel.  This is still available in the nav drawer for students.  Since Moodle has announced the possible merging of participants and users I am holding off on any further integrations until we see what happens.

## Fordson Moodle 33 1.5.5
* New Feature:  Pick from 3 different styles to display courses on the frontpage as well as course category and search pages.  Each style has unique look and feel.  
* Cleaned up some of the content area settings page to group settings.
* Course Tile Height setting now applies to all three styles as well as anywhere the course tile may appear.
* New setting to control the spacing on the sides of the main content box.  
* CSS and styling fixes.
* Added teacher names to course tile display.  Removed course summary.  May revisit in future if I can find a cleaner way to all the information in a small tiled box. Our students need to see the teacher name to identify the proper course.

## Fordson Moodle 33 1.5.4
* Added option to toggle on/off course category icons.  The icons were removed in previous version but we realize some may find them useful and better than the Moodle default.  

## Fordson Moodle 33 1.5.3 2017062200
* Major change to course directory listings.  We opted to remove the icon display of categories.  User feedback suggested this was too many clicks and a useability issue when browsing for a course.  Instead of icons, we kept courses displayed as boxes and used the default Moodle list category display which allows the user to collapse and expand to view courses as boxes.  This makes browsing courses MUCH faster and easier for the user.
* Removed category icon setting.
* Added Manage Course Completion to the Teacher Dashboard as a menu item.
* Fixed issue when courseoverviewfileslimit is 0.  https://github.com/dbnschools/moodle-theme_fordson/issues/4

## Fordson Moodle 33 1.5.2 2017062000 Design and Style
* New Preset - Default Fullscreen Background.  This is exactly the same as the default preset but the image background for each course is fullscreen instead of just a block at the top of the page.
* New activity icon colors and size fixes thanks to Michelle Lomman.
* New icon for student dashboard (This Course) which will allow the student to unenroll.

## Fordson Moodle 33 1.5.1 2017060700 bug fixes
* Fixed student dashboard only showing one non-editing teacher in contact listing
* Added missing message contact option for non-editing teacher listing for student dashboard
* Enhanced icons with color and other styling
* Fixed proper use of icons when uploading a file or editing is turned on (ajax core renderer)
* Added dropdown setting for Activity Icon size in Fordson > Content Areas.  default 36px.
* Updated elearner and default_x style presets.

## Fordson Moodle 33 1.5.0 2017051900
* New feature on menu page to show the nav drawer collapsed by default for all users.
* Fixed slideshow so that you can use just an image. Text will only appear if you use a title.
* Removed scroll to top javascript when not activated.
* Added styling to Add activity or resource link so that it stands out more when editing a page.
* Added styling to Add topics/weeks link so that it stands out more when editing a page.
* Added messaging contact option - if messaging is activated - to show link in student dashboard to contact teachers.
* New Icons for Acitivities, Resources, and File Types.  Can be removed if you delete the pix_plugins & Pix_core folders. Icon credits: https://material.io , https://www.elegantthemes.com/blog/freebie-of-the-week/beautiful-flat-icons-for-free , https://www.iconfinder.com/
* CSS adjustments to maximize screen space on small devices.  Removed padding and margins for certain elements.

## Fordson Moodle 33 1.4.9 2017051900
* Fixed header image so that only one image is served to the page. This will help with page load times. It also eliminates using prescss to attach the background image to a css class.
* Added show/hide toggle for frontpage custom login form. Default is show.
* Added scroll to top button and admin setting to turn it on and off.


## Fordson Moodle 33 1.4.8 2017051800
* Continued fixes to templates for layout consistency.
* New branding in footer area with Organization name, website, email, phone
* Better layout in footer to better present footer content
* Smaller social icons in footer
* General CSS fixes
* Stripped html from course summary when displaying in student dashboard "This Course" drop down.  This will fix bad html and some other issues that caused display for students to not work as expected.
* Fixed language strings for Icon Navigation so that multilanguage plugins will work on the text links.
* Fixed header logo to utilize standard bootstrap responsive classes.

## Fordson Moodle 33 1.4.7 2017051700
* Fixed Radial Course Completion showing percent and decimal points.
* Added permissions for teacher dashboard links to check if they have the proper capability to access the links
* Fixed issue where hidden code for Course Management link was present for students in code.  Adjusted permission settings to completely remove it.
* Added frontpage custom login form just in case you do not force users to login.  This was sorely lacking in Fordson.
* Added course checks for: Show grades to students and enable course completion.  If the teacher shows the gradebook to students in course settings then a link to view grades will appear in the "This Course" sliding menu for students.  Same for course completion.  If course completion is set to Yes in course settings then a course completion radial will appear for students to view progress.
* SCSS fix to just import directly from Boost all default styles.
* Added theme admin setting to turn off completely show grade and course completion to students regardless of course settings.
* Fixed several layout and template issues.


## Fordson Moodle 33 1.4.6 2017051600
* Removed frontpage course search box as this can be accomplished by simply enabling it through normal frontpage settings for moodle.  We are also more focused on the Easy Enrollment form which allows students to enroll with a six digit code instantly.  It's not needed as it duplicates a built in function and we want to be as lean as possible.
* Cleaned up some language strings and Settings pages.
* Enhanced some of the styling when viewing course categories.  Applied a hover effect for activities in courses.
* Fixed undefined variable when using Easy Enrollment plugin at the site level but disabling it on a course. Also fixed unknown variable issue when Easy Enroll is not installed for some users.
* Changed some default settings for a better experience when first installing Fordson.
* First Implementation of the Student Dashboard slider now called "This Course". Will allow students to see course information at a glance. Very useful.
* This Course drop down menu has been incorporated into a new This Course slider (And Course Management slider if a teacher) which displays Course Completion, Gradebook Link, and other pertinent course information.
* Added logic so that teachers and non-editing teachers only see Course management panel while students only see This Course panel inside courses.  This eliminates any overlapping of sliding panels which can cause visual issues.

## Fordson Moodle 33 1.4.5 2017051200
* Fixed compatibility with collapsed topic course format thanks to Gareth
* Fixed issue when Easy Enrollment plugin was not installed and the course management panel integration
* Removed MarketingTile icon setting as it was never included in final implementation. An image uploader was used instead.
* Removed empty style folder carried over from Moodle 3.2 version
* New forumpost styling
* New Course Category display improvements such as hover effects and other micro interactions

## Fordson 1.4.4
* New integrations with Easy Enrollment plugin: When easy enrollment is activated on a course a new link appears which will show the teacher all their enrollment codes for the course.  This is in the header area just above the Turn Editing on button in the upper right of the course page.
* Prepped and ready for the release of Easy Enrollment Plugin on github
* Cleaned up classes and functions as to not override core more than needed.

## Fordson 1.4.3
* Added custom textbox to provide teachers a message in the Course Management Panel. 
* Added new items to Course Management Panel.
* Added logic to show/hide contextual menu when using the Course Management Panel.  This will hide the Editing Cog when using Course Management Panel and display it when not activated.  It also shows the menu only on the homepage when using Course Management Panel. You can also force the contextual menu to appear with the course management panel menu.
* Moved This Course drop down to be with the Course Management Panel menu. 
* fixed styling issues with presets and the new course management panel menu. 
* fixed responsive issues and the new course management panel menu. 
* Turn Editing On button is now visible at all times.  Previously it would hide when viewing on a phone but since you can now hide the contextual course editing cog it is important to be able to turn editing on from the button when not accessible from the menu. 
* Fixed ADA issue with each icon on homepage having the same ID=button.  Thanks Emma Richardson.
* Fixed HeaderLogo image on small screen sizes.  Thanks Emma Richardson.
 

## Fordson 1.4.2
* Introducing a brand new navigation concept: Teacher Course Management Panel.  This intuitive sliding panel displays a custom list of links that help the teacher manage the course.  It appears in the upper right side of the page just above the Turn Editing On button.  This is the first implementation and future plans include a custom textbox, icons, better descriptions, and other enahncements to make managing your course easier for the teachers.  
* Added Bootstrap Carousel left and right controls to autoplay slideshow.
* Multiple styling enhancements.


## Fordson 1.4.1
* Added Block Column width to control block widths in Fordson Content Areas page
* Added Boostrap Carousel slideshow with three slides to frontpage. Add a title, description, and image background.  Image background will scale with the size of the page and is not meant to contain actual content.  To be in ADA compliance we prefer to use the description text to display information and not text in a image.  
* Custom Logo upload for Fordson only appears on homepage above new slideshow so that once in a course the student is focused on content
* Moved Learning Content Spacing setting from Image Setting page to Content Settings Page since it is the spacing between the top of the page and the actual page content.
* New default header image

## Fordson 1.4.0
* Major changes to layout!  This is a major change in direction for the Fordson theme.
* Added ability to turn off teacher course files in header so that all courses get the default image in the header area.
* Version 1.4.0 initially ships with two very distinct style presets:  Default and e-Learner.  E-Learner is uniquely styled to utlize a full screen background image set by the site admin and/or teacher at the course level.
* Added a Logo uploader that will appear in the header area.  See the Custom Image Settings tab in site admin. 400px by 125px is the size of the logo image area.

## Fordson 1.3.1
* Added MyCourse drop down to the top navigation bar.  Settings are on the Menu page within the theme.
* Fixed duplicate function issue.
* Adjusted some default settings on install.

## Fordson 1.3.0
*Customized Nav Drawer - Add and remove items from the Boost navigation drawer.  Ability to have customizations appear on all pages, frontpage only, course pages only. Special thanks to Alexander Bias with https://github.com/moodleuulm/moodle-local_boostnavigation and Carlos Escobedo with https://moodle.org/plugins/local_navigation.  I was able to combine these two plugins to remove default menu items and add new menu items.  Because this is done with a theme we also added a toggle to allow you to determine where the customizations appear.

## Fordson 1.2.9b
* Revisited and removed entire tag for This Course drop down title.
* Fixed noimg URL for displaying tiled courses where no background image is used.
* fixed course renderer when cat ID=0 undefined issue.

## Fordson 1.2.9a
* Fixed closing div tag introduced in version 1.2.9 in This Course drop down.

## Fordson 1.2.9
* Fixed Moodle 3.2.1+ changes to Boost theme that impact Fordson.  Issue related to header elements breaking such as the This Course Dropdown.
* Continued improvements to Default Style Preset

## Fordson 1.2.8
* Made changes so that Marketing tiles, frontpage textboxes, and other elements are more compatible with language plugins.
* Fixed issue with "This Course" drop-down menu appearing on pages other than the homepage of the course.  This caused problems when viewing courses on smaller screens and running out of space in the header.  

## Fordson 1.2.7
* Fixed default URL's used in frontpage icons to use site root url.
* Fixed course display when using the search function

## Fordson 1.2.6
* Added Frontpage Available courses box styling.  Setting in theme admin settings will allow Site admin to switch between default Moodle presentation of available courses and the new Fordson display which is a tiled display in a grid.  SPECIAL THANKS TO José Miguel Dager Montoya for helping get this feature started.
* Added Category Icon view. 
* Added icon chooser in theme admin for course categories.
* Added Frontpage Course tile height which allows you to make them smaller if needed.
* Added Course Title and Summary Trim value for the display of courses in category view.
* Added toggle to show or hide course tile tooltips.


## Fordson v1.2.5
* Added language strings for default text of icon navigation
* Changed font awesome icons from text field to drop down select to make things very simple.  Also included the option to remove the icons next to section and header titles from the drop down. 
* Upgraded to font awesome 4.7
* Added Frontpage Available courses box styling.  Setting in theme admin settings will allow Site admin to switch between default Moodle presentation of available courses and the new Fordson display.  SPECIAL THANKS TO José Miguel Dager Montoya for helping get this feature started.


## Fordson v1.2.4
* Fixed issue with header information getting distorted on smaller screen sizes with small header image height set.  The text would sometimes get cut off.  
* Fixed Footer color selector to use a common SCSS $footer-bg for all presets.

## Fordson v1.2.3
* Added Font-Awesome icons for each section in a course as well as the main header title.  Each can be set using Fontawesome unicode with parenthesis around the unicode. Examples in the setting description are provided.
* Continued enhancements of the preset style sheets.  Specifically for default and evolve-D.
* Social icon links now open in new window.
* Fixed logo navbar display where image and text were not aligning properly in the center of the navbar.

## Fordson v1.2.2  non published
* Style Presets have been refined for better control of colors and variables.  
* NEW Style Preset: Evolve-D.  This preset has many of the style elements of the Evolve-D theme for those users who might want to migrate from Evolve-D to Fordson.  Switching and upgrading will utilize the new features of Boost but have a similar look and feel of Evolve-D.

## Fordson v1.2.1
* Removed default colors being set on install.  This created issues when swapping out presets as the colors would override the preset.
* Created new presets: The Rouge, The Rouge X, Ford Field, Ford Field X, City Hall, City Hall X, Michigan Ave, Michigan Ave X
* Fixed undesired headers being made vertical when using X series presets

## Fordson v1.2.0
* Removed Bootswatch Presets due to accessibility issues.  Will be hand crafting presets with "purpose" such as elementary, middle, and high schools, college, business, etc.
* Fixed accessibility contrast issue for login text in top navigation bar

## Fordson v1.1.9
* Fixed issue where language menu appeared in two spots that used the same function to render a menu.  This was fixed and now functions as expected.

## Fordson v1.1.8
* Icon navigation bad will no longer show for users who login as guest.
* Removed color chooser that was not used.
* Review and corrected some language strings.

## Fordson v1.1.7
* Made This Course Menu customizable with the abilty to checkoff menu items in Fordson Theme Admin page.  

## Fordson v1.1.6
* Fixed activity edit menu had disappeared during a Boost update.  Fixed core renderer on Fordson.

## Fordson v1.1.5
* Added This Course(Course Activities) drop down next to breadcrumbs in header
* Added Theme Admin Setting to toggle on/off Course Activity Menu
* Fixed Bootstrap Presets from causing issues

## Fordson v1.1.4
* Fixed duplicate language string

## Fordson v1.1.3
* Added homepage slider feature which allows a special button in the Icon Navigation Bar to show or hide a text box which slides down from the Icon Navigation bar.  Useful for featured courses, help information, and other things that need attention but do not need to be visible all the time.
* Added additional height settings to fine tune header image height

## Fordson v1.1.2
* Added Icon Navigation Width Setting - $fpicon-width and $fpiconcreate-width
* Added Heading Font Color Setting
* Added Page Heading H1 Color Setting
* Added several new color pickers
* Added 16 new presets to choose from
* Added Homepage Course Search Box Toggle Checkbox to show or hide searchbar

## Fordson v1.1.1
* Removed un-needed layout and template files.
* Tidy up code
* Cleaned up & organized lang file for better translation
* Moved SCSS to styles.scss so that Fordson will work with default presets and user uploaded presets.  This includes marketing tiles, navigation icons, and other custom elements added to Fordson.

## Fordson v1.1
* Moved "Create A Course" button to right of the Icon Navigation Bar

THEME_Fordson
===========

#Fordson | A theme for K-12

Fordson is a child theme for Moodle's core theme Boost.

It is built on Boostrap4 and Mustache templates.

Here are the main enhancements:
* Presets - Both uploaded and a set of pre-installed presets to quickly adjust colors
* Colours - A variety of color pickers to help customize and fine tune presets
* Images - Custom Login, Custom Page Header, Custom Course Header, and Custom Page Background image uploads
* Social Icons - Quickly add all your social media buttons in the footer
* Enhanced Frontpage - Navigation Iconbar, Custom Textbox, Alertbox, Six Marketing Tiles
* Customized Course Header Image - Teachers can upload an image into their course summary files and it will automatically be used in the header of their course.

##Recommended Settings for Best Results
These settings below are found in the Moodle Site Administration Pages.  These are not related to the theme but will help bring out the best of Fordson.  

* defaulthomepage = SITE (Default homepage for users.  If set to Dashboard your users will not see the Enhanced Homepage upon login.)
* frontpage = none (Frontpage items to show. Part of Moodle Frontpage Settings tab.)
* frontpageloggedin = none or Enrolled Courses (Frontpage items to show when logged in. Part of Moodle Frontpage Settings tab.)
* Optional: forcelogin = Checked (This forces users to login before seeing the homepage.)

The Fordson Moodle theme is named after the first one million dollar high school ever built in America. 
Fordson High School is stunningly beautiful with rich history and tradition. 
Built in a time when hand-crafted woodwork, marble and bronze statues, and attention to detail was the norm.  
Now a Michigan Historical Site, Fordson High School is just as beautiful as the day it was built.  

Fordson is a child theme of Boost.  
This means when Moodle updates the core Boost theme those changes will be applied to Fordson as well in most cases.

#Install from Github
Click on the button to "Clone or Download" https://github.com/kennibc/moodle-theme_fordson . When downloaded to your computer, unzip it. It should create a folder named "moodle-theme_fordson-master". Rename the folder so that it is "fordson" (without quotes). You can FTP that folder to your moodle site in /moodle/theme/ directory. Or you can create a new ZIP file of the "fordson" folder and upload and install it via the Plugin Administration in Site Administration. 

## Fordson v1.2.2
*Style Presets have been refined for better control of colors and variables.  
*NEW Style Preset: Evolve-D.  This preset has many of the style elements of the Evolve-D theme for those users who might want to migrate from Evolve-D to Fordson.  Switching and upgrading will utilize the new features of Boost but have a similar look and feel of Evolve-D.

## Fordson v1.2.1
*Removed default colors being set on install.  This created issues when swapping out presets as the colors would override the preset.
*Created new presets: The Rouge, The Rouge X, Ford Field, Ford Field X, City Hall, City Hall X, Michigan Ave, Michigan Ave X
*Fixed undesired headers being made vertical when using X series presets

## Fordson v1.2.0
*Removed Bootswatch Presets due to accessibility issues.  Will be hand crafting presets with "purpose" such as elementary, middle, and high schools, college, business, etc.
*Fixed accessibility contrast issue for login text in top navigation bar

## Fordson v1.1.9
*Fixed issue where language menu appeared in two spots that used the same function to render a menu.  This was fixed and now functions as expected.

## Fordson v1.1.8
*Icon navigation bad will no longer show for users who login as guest.
*Removed color chooser that was not used.
*Review and corrected some language strings.

## Fordson v1.1.7
*Made This Course Menu customizable with the abilty to checkoff menu items in Fordson Theme Admin page.  

## Fordson v1.1.6
*Fixed activity edit menu had disappeared during a Boost update.  Fixed core renderer on Fordson.

## Fordson v1.1.5
*Added This Course(Course Activities) drop down next to breadcrumbs in header
*Added Theme Admin Setting to toggle on/off Course Activity Menu
*Fixed Bootstrap Presets from causing issues

## Fordson v1.1.4
*Fixed duplicate language string

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
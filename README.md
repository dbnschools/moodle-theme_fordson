THEME_Fordson
===========

# Fordson

Fordson is focused on students going from login to learning, with features that help teachers build better courses and students engage with content. Your school is unique and Fordson provides impressive customizations for a professional and modern learning platform. 

# Install from Github
Click on the button to "Clone or Download" https://github.com/dbnschools/moodle-theme_fordson . When downloaded to your computer, unzip it. It should create a folder named "moodle-theme_fordson-master". Rename the folder so that it is "fordson" (without quotes). You can FTP that folder to your moodle site in /moodle/theme/ directory. Or you can create a new ZIP file of the "fordson" folder and upload and install it via the Plugin Administration in Site Administration.


# Versions and Updates

## Moodle 3.9 Fordson v3.9 release 1.1
* Fixed missing edit cog on new H5P Content pages to delete and rename H5P items.

## Moodle 3.9 Fordson v3.9 release 1
* Initial release for Moodle 3.9
* Fixed Turn editing on button now appearing on course page for core.
* Added Copy Course to Teacher Course Dashboard.
* Removed Fordson Custom Activity Chooser feature in support of the Moodle 3.9 Activity chooser.
* Added Jitsi Meet Conferencing integration to add a button to the header of every course.  Each button launches a unique Jitsi Meet room based of the course fullname and course id number.  You should have your own Jitsi Meet Server setup and a URL that you can add.  The button will not appear unless you add text for the button.  There are no course level controls to hide the meeting room.
* Adjusted default settings for various Fordson Settings.  You should use these as a starting point and then customize from there.  
* Due to limitations and future considerations we will only be supporting and using the Perception Preset which is the default.  Possibly for Moodle 4.0 we will be standardizing on 1 preset and focus on customizations for that single preset.  You will still have layout and other style choosers but we will only support the main default Perception Preset moving forward.  The others are included for compatibility but any styling or CSS issues are not covered.  We might be removing them entirely.  
* Initial creating a course has been streamlined with the elimination of all settings besides General and Description.  Once a course is created you can go in and tweak any settings.  We found the majority of our users just used defaults and wanted to get in and start building their courses as quickly as possible.  See the bottom of the /fordson/scss/preset/Perception.scss file for the line of CSS that hides these elements.  You can delete that block of CSS if desired.  Line 675
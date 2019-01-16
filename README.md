THEME_Fordson
===========

# Fordson

Fordson is focused on students going from login to learning, with features that help teachers build better courses and students engage with content. Your school is unique and Fordson provides impressive customizations for a professional and modern learning platform. 

## Documentation can be found here: https://bookshare.dearbornschools.org/fordsontheme/

# Install from Github
Click on the button to "Clone or Download" https://github.com/dbnschools/moodle-theme_fordson . When downloaded to your computer, unzip it. It should create a folder named "moodle-theme_fordson-master". Rename the folder so that it is "fordson" (without quotes). You can FTP that folder to your moodle site in /moodle/theme/ directory. Or you can create a new ZIP file of the "fordson" folder and upload and install it via the Plugin Administration in Site Administration.


# Versions and Updates

## Moodle 3.6 Fordson v3.6 release 1.2
* Fixed logo image on login page where it was not fluid/reponsive within the box.
* Changed login page to include an H1 tag around the SiteName to be ADA compliant.  Previous tag was H2.  ADA requires Headings begin with H1 before H2 for proper page structure.
* Fixed login as guest issue on custom login page.  Previously, this login form was missing logintoken when logging in as guest.
* Fixed login as guest when using default Moodle login page.

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
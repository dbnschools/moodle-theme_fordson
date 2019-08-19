THEME_Fordson
===========

# Fordson

Fordson is focused on students going from login to learning, with features that help teachers build better courses and students engage with content. Your school is unique and Fordson provides impressive customizations for a professional and modern learning platform. 

# Install from Github
Click on the button to "Clone or Download" https://github.com/dbnschools/moodle-theme_fordson . When downloaded to your computer, unzip it. It should create a folder named "moodle-theme_fordson-master". Rename the folder so that it is "fordson" (without quotes). You can FTP that folder to your moodle site in /moodle/theme/ directory. Or you can create a new ZIP file of the "fordson" folder and upload and install it via the Plugin Administration in Site Administration.


# Versions and Updates

## Moodle 3.7 Fordson v3.7 release 1.1
* Fixed missing quote https://github.com/dbnschools/moodle-theme_fordson/issues/74
* Fixed course completion bar showing when not logged in https://github.com/dbnschools/moodle-theme_fordson/issues/73
* Modified and enhanced activity completion bar on topic and weekly course format.  Set the course format to show one topic/week per page and enable activity completion to see the progress bar for each topic on the course homepage.  The new look is clean, slim, and modern looking.
* Changed permission to get Site Admin button to "has_capability('moodle/site:configview', $context)".  Previously we used "is_siteadmin()" to check for permission to show the button.  This will allow more flexibility in allowing quick access to site admin area without having to make a user a site admin.  you might only want to allow a user to manage badges.  By giving them this permission they will get a link to site admin which will show them what they have access to.

## Moodle 3.7 Fordson v3.7 release 1
* Initial release for Moodle 3.7
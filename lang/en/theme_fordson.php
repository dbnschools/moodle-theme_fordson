<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language file.
 *
 * @package    theme_fordson
 * @copyright  2016 Chris Kenniburg
 * @credits    theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Theme strings.
$string['choosereadme'] = 'Fordson provides a unique visual experience to the default Boost theme with customization features such as color choosers and enhanced homepage experience.';
$string['configtitle'] = 'Fordson';
$string['pluginname'] = 'Fordson';
$string['region-side-pre'] = 'Right';
$string['generalsettings'] = 'General settings';
$string['advancedsettings'] = 'Advanced settings';
$string['iconnavheading'] = 'Icon Navigation';
$string['iconnavheadingsub'] = 'Create Buttons with Icons for use on the homepage.  Links can go anywhere.';

// Presets Settings.
$string['presets_settings'] = 'Presets';
$string['currentinparentheses'] = '(current)';
$string['presetfiles'] = 'Additional theme preset files';
$string['presetfiles_desc'] = 'Preset files can be used to dramatically alter the appearance of the theme.
    See https://docs.moodle.org/dev/Boost_Presets for information on creating and sharing your own preset files.';
$string['preset'] = 'Theme preset';
$string['preset_desc'] = 'Pick a preset to broadly change the look of the theme.';

// Colours Settings.
$string['colours_settings'] = 'Colours';
$string['colours_headingsub'] = 'Colour Settings';
$string['colours_desc'] = 'Colour choosers will allow you to customize the look and feel of the main elements on the page.  If you are using a Preset other than the default, you will need to remove any custom colors below for best results as these will over-ride the Preset with undesireable results.  Generally, the Preset will have default colors that you will want to see before customizing them here.';
$string['brandColour'] = 'Brand Colour';
$string['brandColour_desc'] = 'Your main brand colour';
$string['brandprimary'] = 'Brand Primary';
$string['brandprimary_desc'] = 'Your main brand colour';
$string['brandsuccess'] = 'Brand Success';
$string['brandsuccess_desc'] = 'Brand colour for succesful alerts, postive panels, buttons, etc';
$string['brandinfo'] = 'Brand info';
$string['brandinfo_desc'] = 'Brand colour information alerts and panels, etc';
$string['brandwarning'] = 'Brand Warning';
$string['brandwarning_desc'] = 'Brand colour for warning alerts and panels, etc';
$string['branddanger'] = 'Brand Danger';
$string['branddanger_desc'] = 'Brand colour for danger alerts and panels, etc';
$string['brandgray'] = 'Gray Base';
$string['brandgray_desc'] = 'Gray Base setting - This is the colour used to create gray shades. Default will be #000,
    but this can be adapted if there is a need to adjust contrast levels';
$string['breadcrumbbkg'] = 'Breadcrumb Background Colour';
$string['breadcrumbbkg_desc'] = 'Breadcrumb background colour.';
$string['navbarbkg'] = 'Top Navigation bar Background Colour';
$string['navbarbkg_desc'] = 'Top sticky navigation bar background colour.';
$string['navbarurl'] = 'Top Navigation bar Link Colour';
$string['navbarurl_desc'] = 'Top sticky navigation bar link and menu colour.';
$string['fpstartwrap'] = 'Homepage Icon Navigation Background';
$string['fpstartwrap_desc'] = 'Background colour of the icon navigation bar.';
$string['fpicon-colour'] = 'Homepage Icon Link Colour';
$string['fpicon-colour_desc'] = 'Colour of the icon navigation links.';
$string['fpiconnavhover'] = 'Homepage Icon Hover Background';
$string['fpiconnavhover_desc'] = 'Homepage icon navigation bar background colour when hovering over button.';
$string['cardbkg'] = 'Content Background Colour';
$string['cardbkg_desc'] = 'Content background colour for course content and blocks.';
$string['drawerbkg'] = 'Side Drawer Background Colour';
$string['drawerbkg_desc'] = 'Side Drawer background colour for the menu on the left side of the page.';
$string['bodybackground'] = 'Body Background Colour';
$string['bodybackground_desc'] = 'The main colour to use for the background.';
$string['footerbg'] = 'Footer Background Colour';
$string['footerbg_desc'] = 'The background colour of the footer.';
$string['headerscreen'] = 'Header Box Background';
$string['headerscreen_desc'] = 'This background colour appears in the header area to help separate it from the course content.';
$string['headingcolor'] = 'Headings Colour';
$string['headingcolor_desc'] = 'H1,H2,H3,H4,H5.H6 colour settings.';
$string['headercolor'] = 'Page Header Text Colour';
$string['headercolor_desc'] = 'This alters the Page Heading H1 color so that it might stand out better ontop of the header image.';
$string['bodycolor'] = 'Default Text Colour';
$string['bodycolor_desc'] = 'Default text color.';
$string['linkcolor'] = 'Default Link Colour';
$string['linkcolor_desc'] = 'Default link color.';

$string['rawscss'] = 'Raw SCSS';
$string['rawscss_desc'] = 'Use this field to provide SCSS code which will be injected at the end of the style sheet.';
$string['rawscsspre'] = 'Raw initial SCSS';
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else.
    Most of the time you will use this setting to define variables.';

// Image Settings.
$string['imagesettings'] = 'Custom image settings';
$string['headerdefaultimage'] = 'Default header image';
$string['headerdefaultimage_desc'] = 'Default image for course headers and non-course pages';
$string['backgroundimage'] = 'Default page background image';
$string['backgroundimage_desc'] = 'Background image for pages';
$string['loginimage'] = 'Default Login image';
$string['loginimage_desc'] = 'Background image for login page';
$string['learningcontentpadding'] = 'Learning Content Spacing';
$string['learningcontentpadding_desc'] = 'This controls how much space between the top of the page and the main course content. Generally, you want this to be less than the height of the header image.';
$string['showcourseheaderimage'] = 'Show Course Images';
$string['showcourseheaderimage_desc'] = 'Allow teachers to customize the course header image by uploading an image file into course settings.';
$string['headerlogo'] = 'Header Logo';
$string['headerlogo_desc'] = 'This logo will be displayed at the top of the page in the header area. It uses bootstrap responsive image scaling.';

//Slideshow
$string['slideshowsettings'] = 'Slideshow';
$string['slideshowheight'] = 'Slideshow Height';
$string['slideshowheight_desc'] = 'Adjust the height of the slideshow.';
$string['showslideshow'] = 'Activate Slideshow';
$string['showslideshow_desc'] = 'Check this option to turn on the slideshow feature.';
$string['slide1info'] = 'Slide 1';
$string['slide1infodesc'] = 'Slide 1 details.';
$string['slide2info'] = 'Slide 2';
$string['slide2infodesc'] = 'Slide 2 details.';
$string['slide3info'] = 'Slide 3';
$string['slide3infodesc'] = 'Slide 3 details.';
$string['slidetitle'] = 'Slide Title';
$string['slidetitle_desc'] = 'Enter a title for this slide.';
$string['slidecontent'] = 'Slide Description';
$string['slidecontent_desc'] = 'Add a description for this slide.';
$string['slideimage'] = 'Slide Image';
$string['slideimage_desc'] = 'Add a background image for this slide.';


// Footer
$string['footerheading'] = 'Footer';
$string['brandorganization'] = 'Organization Name';
$string['brandorganizationdesc'] = 'Organization name to appear in the footer.';
$string['brandwebsite'] = 'Organization Website';
$string['brandwebsitedesc'] = 'Website address to appear in footer for organization.';
$string['brandphone'] = 'Organization Phone';
$string['brandphonedesc'] = 'Phone number to appear in footer.';
$string['brandemail'] = 'Organization Email';
$string['brandemaildesc'] = 'Email address for organization that appears in footer.';
$string['footerheadingsub'] = 'Customize the footer of the homepage';
$string['footerdesc'] = 'The items below allow you provide branding to the theme footer.';
$string['footerheadingsocial'] ='Social Icons';
$string['socialnetworks'] = 'Social Networks';
$string['facebook'] = 'Facebook URL';
$string['facebookdesc'] = 'Enter the URL of your Facebook page. (i.e http://www.facebook.com/)';
$string['twitter'] = 'Twitter URL';
$string['twitterdesc'] = 'Enter the URL of your Twitter feed. (i.e http://www.twitter.com/)';
$string['googleplus'] = 'Google+ URL';
$string['googleplusdesc'] = 'Enter the URL of your Google+ profile. (i.e https://google.com/)';
$string['linkedin'] = 'LinkedIn URL';
$string['linkedindesc'] = 'Enter the URL of your LinkedIn profile. (i.e http://www.linkedin.com/)';
$string['youtube'] = 'YouTube URL';
$string['youtubedesc'] = 'Enter the URL of your YouTube channel. (i.e http://www.youtube.com/)';
$string['tumblr'] = 'Tumblr URL';
$string['tumblrdesc'] = 'Enter the URL of your Tumblr. (i.e http://www.tumblr.com)';
$string['vimeo'] = 'Vimeo URL';
$string['vimeodesc'] = 'Enter the URL of your Vimeo channel. (i.e http://vimeo.com/)';
$string['flickr'] = 'Flickr URL';
$string['flickrdesc'] = 'Enter the URL of your Flickr page. (i.e http://www.flickr.com/)';
$string['vk'] = 'VKontakte URL';
$string['vkdesc'] = 'Enter the URL of your Vkontakte page. (i.e http://www.vk.com/)';
$string['skype'] = 'Skype Account';
$string['skypedesc'] = 'Enter the Skype username of your organisations Skype account';
$string['pinterest'] = 'Pinterest URL';
$string['pinterestdesc'] = 'Enter the URL of your Pinterest page. (i.e http://pinterest.com/)';
$string['instagram'] = 'Instagram URL';
$string['instagramdesc'] = 'Enter the URL of your Instagram page. (i.e http://instagram.com/)';
$string['website'] = 'Website URL';
$string['websitedesc'] = 'Enter the URL of your own website. (i.e http://dearbornschools.org)';
$string['blog'] = 'Blog URL';
$string['blogdesc'] = 'Enter the URL of your institution blog. (i.e http://dearbornschools.org)';
$string['sociallink'] = 'Custom Social Link';
$string['sociallinkdesc'] = 'Enter the URL of your your custom social media link. (i.e http://dearbornschools.org)';
$string['sociallinkicon'] = 'Link Icon';
$string['sociallinkicondesc'] = 'Enter the fontawesome name of the icon for your link<br />A full list of FontAwesome icons can be found at http://fontawesome.io/icons/';

// Content settings.

$string['coursetileinfo'] = 'Course Display Options';
$string['coursetileinfodesc'] = 'These settings allow you to customize how courses will be displayed on the frontpage as well as course categories.';
$string['textcontentinfo'] = 'Custom Content';
$string['textcontentinfodesc'] = 'Use the textboxes below to add a customized information for users.';
$string['generalcontentinfo'] = 'General Content Display Settings';
$string['generalcontentinfodesc'] = 'The options below help you customize the way content is displayed and turn on additional features for Fordson.';
$string['enrollcoursecard'] = 'Enroll';

$string['contentsettings'] = 'Content areas';
$string['footnote'] = 'Footnote';
$string['footnotedesc'] = 'Footnote content editor for main footer';
$string['fptextbox'] = 'Homepage Textbox Authenticated User';
$string['fptextbox_desc'] = 'This textbox appears on the homepage once a user authenticates. It is ideal for putting a welcome message and providing instructions for the learner.';
$string['fptextboxlogout'] = 'Homepage Textbox Visitor';
$string['fptextboxlogout_desc'] = 'This textbox appears on the homepage for visitors and is ideal for putting a welcome message or link to the login page.';
$string['slidetextbox'] = 'Slide Textbox';
$string['slidetextbox_desc'] = 'This textbox content will be displayed when the Slide Button is pressed.';
$string['sectionicon'] = 'Course Section Icon';
$string['sectionicon_desc'] = 'This allows you to change the icon that appears next to each topic/week in a course.  These are Font-Awesome icons.';
$string['headericon'] = 'Header Title Icon';
$string['headericon_desc'] = 'This allows you to change the icon that appears in the header area next to the page title. These are Font-Awesome icons.';
$string['enablefrontpageavailablecoursebox'] = 'Enable Enhanced Course Display';
$string['enablefrontpageavailablecoursebox_desc'] = 'Enhanced Course Display will display courses as tiles in a grid. To use Moodle default presentation of courses uncheck this option.';
$string['courseboxheight'] = 'Course Tile Height';
$string['courseboxheight_desc'] = 'Control the height of the Course tile on the frontpage and course categories.';
$string['catsicon'] = 'Category Icon';
$string['catsicon_desc'] = 'Choose an icon to represent course categories.';
$string['trimtitle'] = 'Trim Course Title';
$string['trimtitle_desc'] = 'Enter a number to trim the title length.  This number represents characters that will be displayed.';
$string['trimsummary'] = 'Trim Course Summary';
$string['trimsummary_desc'] = 'Enter a number to trim the summary length.  This number represents characters that will be displayed.';
$string['titletooltip'] = 'Course Title Tooltip';
$string['titletooltip_desc'] = 'If using Trim Course Title you can use tooltips which will display the entire course title in a tooltip.  Check this box to turn on tooltips.';
$string['dashactivityoverview'] = 'ACTIVITIES OVERVIEW';
$string['blockwidthfordson'] = 'Block Column Width';
$string['blockwidthfordson_desc'] = 'Adjust the width of the block column.';
$string['fpsignup'] = 'Sign In';
$string['showloginform'] = 'Show Login Form';
$string['showloginform_desc'] = 'Uncheck this to hide the custom login form on the homepage for logged out users.';
$string['backtotop'] = 'Back to Top';
$string['showbacktotop'] = 'Show Back to Top Button';
$string['showbacktotop_desc'] = 'Uncheck this to hide the Back to Top button in the lower right of the page.';
$string['activityiconsize'] = 'Activity Icon Size';
$string['activityiconsize_desc'] = 'Adjust the size of the activity icons used in courses.';
$string['enablecategoryicon'] = 'Category Display Icons';
$string['enablecategoryicon_desc'] = 'When checked this will display course categories as icons';
$string['coursestyle1'] = 'Style One';
$string['coursestyle2'] = 'Style Two';
$string['coursestyle3'] = 'Style Three';
$string['coursestyle4'] = 'Style Four w/course summary';
$string['coursetilestyle'] = 'Course Tile Display';
$string['coursetilestyle_desc'] = 'When viewing course categories you can choose from the following styles to display courses.';
$string['gutterwidth'] = 'Content Padding';
$string['gutterwidth_desc'] = 'This setting controls how much spacing is used on the left and right of the main content.';

//teacher and student dashboard slider
$string['userlinks'] = 'User Links';
$string['userlinks_desc'] = 'Manage your students';
$string['qbank'] = 'Question Bank';
$string['qbank_desc'] = 'Create and organize quiz questions';
$string['badges'] = 'Badges';
$string['badges_desc'] = 'Award your students';
$string['coursemanage'] = 'Course Settings';
$string['coursemanage_desc'] = 'Manage your entire course';
$string['coursemanagementbutton'] = 'Course Management';
$string['studentdashbutton'] = 'This Course';
$string['courseinfo'] = 'Course Description';
$string['coursestaff'] = 'Course Teachers';
$string['activitylinkstitle'] = 'Activities';
$string['activitylinkstitle_desc'] = 'View All Activities in Course';
$string['myprogresstext'] = 'My Progress';
$string['mygradestext'] = 'My Grades';


// Menu Settings
$string['menusettings'] = 'Menu settings';
$string['thiscourse'] = 'This Course';
$string['headerimagepadding'] = 'Header Image Height';
$string['headerimagepadding_desc'] = 'Control the padding and height of the header image for courses.';
$string['activitymenu'] = 'Show Grouped Activities Menu';
$string['activitymenu_desc'] = 'Show the grouped activity listings in the student and teacher panels.  This menu displays a grouped list of all activities for the student and teacher.';

$string['coursemanagementinfo'] = 'Course Management Panel Menu';
$string['coursemanagementinfodesc'] = 'These settings allow you to display and easy to use course management menu for teachers.  The Course Management Menu now includes the This Course Drop-down, a sliding Course Admin panel, and the ability to include the default Moodle Course Editing Cog.';
$string['coursemanagementtoggle'] = 'Show Student and Teacher Dashboard Panels';
$string['coursemanagementtoggle_desc'] = 'This displays an easy to use sliding panel for teachers to manage their course. It will also display a course overview panel for students with grades, course completion, and other items from the course.';
$string['coursemanagementtextbox'] = 'Course Management Message';
$string['coursemanagementtextbox_desc'] = 'Add a message for teachers in the course management panel on every course page.';
$string['studentdashboardtextbox'] = 'Student Dashboard Message';
$string['studentdashboardtextbox_desc'] = 'Add a message for students in the student dashboard panel on every course page.';
$string['courseeditingcog'] = 'Show Default Course Settings Menu';
$string['courseeditingcog_desc'] = 'If using the Course Management Panel the default menu is hidden.  By checking this you can show the default menu as well as the teacher course management panel. This is ideal if using a third party plugin which uses the course menu for access to settings.';
$string['showstudentcompletion'] = 'Show Student Completion';
$string['showstudentcompletion_desc'] = 'Show student completion radial in student dashboard panel.  Even with this checked the course must have completion turned on in order to display.';
$string['showstudentgrades'] = 'Show Student Grades';
$string['showstudentgrades_desc'] = 'Show student gradebook link in student dashboard panel.  Even with this checked the course must have Show Student Grades turned on in order to display.';

$string['setting_removenodesheading'] = 'Customize the Nav Drawer';
$string['setting_removenodesperformancehint'] = 'Technically, this is done by setting the Menu Item\'s showinflatnavigation attribute to false. Thus, the node will only be hidden from the nav drawer, but it will remain in the navigation tree and can still be accessed by other parts of Moodle.';
$string['setting_removecalendarnode'] = 'Remove "Calendar" Menu Item';
$string['setting_removecalendarnode_desc'] = 'Enabling this setting will remove the "Calendar" Menu Item from Boost\'s nav drawer.';
$string['setting_removehomenode'] = 'Remove "Home" Menu Item';
$string['setting_removehomenode_desc'] = 'Enabling this setting will remove the "Home" Menu Item from Boost\'s nav drawer.';
$string['setting_removesecondhomenode'] = 'Remove second "Home" or "Dashboard" Menu Item';
$string['setting_removesecondhomenode_desc'] = 'Enabling this setting will remove the "Home" or "Dashboard" Menu Item, depending on what the user chose not to be his home page, from Boost\'s nav drawer.';
$string['setting_removedashboardnode'] = 'Remove "Dashboard" Menu Item';
$string['setting_removedashboardnode_desc'] = 'Enabling this setting will remove the "Dashboard" Menu Item from Boost\'s nav drawer.';
$string['setting_removemycoursesnode'] = 'Remove "My courses" Menu Item';
$string['setting_removemycoursesnode_desc'] = 'Enabling this setting will remove the "My courses" Menu Item from Boost\'s nav drawer.';
$string['setting_removemycoursesnodeperformancehint'] = 'Please note: If you enable this setting and have also enabled the setting <a href="/admin/search.php?query=navshowmycoursecategories">navshowmycoursecategories</a>, removing the "My courses" node takes more time and you should consider disabling the navshowmycoursecategories setting.';
$string['setting_removeprivatefilesnode'] = 'Remove "Private files" Menu Item';
$string['setting_removeprivatefilesnode_desc'] = 'Enabling this setting will remove the "Private files" Menu Item from Boost\'s nav drawer.';
$string['adddrawermenu'] = 'Add Custom Items to the Navigation Drawer';
$string['adddrawermenu_desc'] = 'You can add custom items to the Navigation Menu using the following syntax.
Identical to that used in the custom menu at theme settings.
<br>
Example:
<br>
Moodle community|http://moodle.org/support
<br>
Moodle company|http://moodle.com';
$string['toggledrawermenu'] = 'Activate Custom Navigation Drawer';
$string['toggledrawermenu_desc'] = 'Determine where these settings will be applied.';
$string['activateonhomepage'] = 'Activate on Homepage';
$string['activateoncoursepage'] = 'Activate on Coursepage';
$string['activateonboth'] = 'Activate on All Pages';

$string['mycoursesinfo'] = 'Dynamic Enrolled Courses List';
$string['mycoursesinfodesc'] = 'Displays a dynamic list of enrolled courses to the user in the top navigation bar.';
$string['displaymycourses'] = 'Display enrolled courses';
$string['displaymycoursesdesc'] = 'Display enrolled courses for users in the top navigation bar.';

$string['mycoursetitle'] = 'Terminology';
$string['mycoursetitledesc'] = 'Change the terminology for the "My Courses" link in the dropdown menu';
$string['mycourses'] = 'My Courses';
$string['myunits'] = 'My Units';
$string['mymodules'] = 'My Modules';
$string['myclasses'] = 'My Classes';
$string['noenrolments'] = 'You have no current enrolments';
$string['siteadminquicklink'] = 'Site Administration';
$string['shownavclosed'] = 'Nav Drawer Closed by Default';
$string['shownavclosed_desc'] = 'Show the navigation drawer collapsed for all users by default on each page.';

//FP Icon Nav
$string['navicon1'] = 'Homepage Icon One';
$string['navicon2'] = 'Homepage Icon Two';
$string['navicon3'] = 'Homepage Icon Three';
$string['navicon4'] = 'Homepage Icon Four';
$string['navicon5'] = 'Homepage Icon Five';
$string['navicon6'] = 'Homepage Icon Six';
$string['navicon7'] = 'Homepage Icon Seven';
$string['navicon8'] = 'Homepage Icon Eight';

//FP Icon Nav default text for buttons
$string['naviconbutton1textdefault'] = 'Dashboard';
$string['naviconbutton2textdefault'] = 'Calendar';
$string['naviconbutton3textdefault'] = 'Badges';
$string['naviconbutton4textdefault'] = 'All Courses';
$string['naviconbuttoncreatetextdefault'] = 'Create a Course';

$string['createinfo'] = 'Special Course Creator Button';
$string['createinfodesc'] = 'This button appears on the homepage when a user can create new courses.  Those with the role of Course Creator at the site level will see this button.';
$string['iconwidthinfo'] = 'Icon Button Width Setting';
$string['iconwidthinfodesc'] = 'Select a width that will allow your link text to fit inside the icon navigation buttons.';
$string['sliderinfo'] = 'Special Slide Icon Button';
$string['sliderinfodesc'] = 'This button will show/hide a special textbox which slides down from the icon navigation bar.  This is ideal for featuring courses, providing help, or listing required staff training.';

$string['iconwidth'] = 'Homepage Icon Width';
$string['iconwidth_desc'] = 'Width of the 8 individual icons in the icon navigation bar on the homepage.';

$string['navicon'] = 'Icon';
$string['navicondesc'] = 'Name of the icon you wish to use. List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>.  Just enter what is after "fa-", e.g. "star".';
$string['naviconslidedesc'] = 'Suggested icon text: arrow-circle-down . Or choose from the list is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>.  Just enter what is after "fa-", e.g. "star".';

$string['naviconbuttontext'] = 'Link Text';
$string['naviconbuttontextdesc'] = 'Text to appear below the icon.';
$string['naviconbuttonurl'] = 'Link URL';
$string['naviconbuttonurldesc'] = 'URL the button will point to. You can link to anywhere including outside websites  just enter the proper URL.  If your Moodle site is in a subdirectory the default URL will not work.  Please adjust the URL to reflect the subdirectory. Example if "moodle" was your subdirectory folder then the URL would need to be changed to /moodle/my/ ';

//Edit Button Text
$string['editon'] = 'Turn Edit On';
$string['editoff'] = 'Turn Edit Off';

//Marketing Tiles
$string['marketingheading'] = 'Marketing Tiles';
$string['marketinginfodesc'] = 'Enter the settings for your marketing spot.  You must include a title in order for the Marketing Spot to appear.  The title will activate the individual Marketing Spots.';
$string['marketingheadingsub'] = 'Three locations on the front page to add information and links';
$string['marketboxcolor'] = 'Marketing Box Background Color';
$string['marketboxcolor_desc'] = 'The color of the background for the marketing box.';
$string['marketboxbuttoncolor'] = 'Marketing Box Button Color';
$string['marketboxbuttoncolor_desc'] = 'The color of the button background for the marketing box.';
$string['marketboxcontentcolor'] = 'Marketing Box Content Background Color';
$string['marketboxcontentcolor_desc'] = 'The color of the background for the marketing box content. This is where the text appears in the marketing spot and can be different from the box background color to draw attention to the text.';
$string['marketingheight'] = 'Height of Marketing Images';
$string['marketingheightdesc'] = 'If you want to display images in the Marketing boxes you can specify their hight here.';
$string['marketingdesc'] = 'This theme provides the option of enabling three "marketing" or "ad" spots just under the slideshow.  These allow you to easily identify core information to your users and provide direct links.';
$string['marketing1'] = 'Marketing Spot One';
$string['marketing2'] = 'Marketing Spot Two';
$string['marketing3'] = 'Marketing Spot Three';
$string['marketing4'] = 'Marketing Spot Four';
$string['marketing5'] = 'Marketing Spot Five';
$string['marketing6'] = 'Marketing Spot six';
$string['marketingtitle'] = 'Title';
$string['marketingtitledesc'] = 'Title to show in this marketing spot.  You must include a title in order for the Marketing Tile to appear.';
$string['marketingicon'] = 'Link Icon';
$string['marketingicondesc'] = 'Name of the icon you wish to use in the marketing URL Button. List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>.  Just enter what is after "fa-", e.g. "star".';
$string['marketingimage'] = 'Image';
$string['marketingimage_desc'] = 'This provides the option of displaying an image in the marketing spot';
$string['marketingcontent'] = 'Content';
$string['marketingcontentdesc'] = 'Content to display in the marketing box. Keep it short and sweet.';
$string['marketingbuttontext'] = 'Link Text';
$string['marketingbuttontextdesc'] = 'Text to appear on the button.';
$string['marketingbuttonurl'] = 'Link URL';
$string['marketingbuttonurldesc'] = 'URL the button will point to.';
$string['marketingurltarget'] = 'Link Target';
$string['marketingurltargetdesc'] = 'Choose how the link should be opened';
$string['marketingurltargetself'] = 'Current Page';
$string['marketingurltargetnew'] = 'New Page';
$string['marketingurltargetparent'] = 'Parent Frame';
$string['togglemarketing'] = 'Marketing Tile Position';
$string['togglemarketing_desc'] = 'Determine where the marketing tiles will be located on the homepage.';
$string['displaytop'] = 'Display at Top of Page';
$string['displaybottom'] = 'Display at Bottom of Page';
$string['markettextbg'] = 'Marketing Tile Text Background';
$string['markettextbg_desc'] = 'Background colour for the text area of the marketing tiles.';

//Alerts
$string['alert'] = 'Homepage Alert';
$string['alert_desc'] = 'This is a special alert message that will appear on the homepage.';

// OCJ HILLBROOK MOD
// modchooser extensions strings
$string['modchoosersettingspage'] = 'Activities/Resources';
$string['commonlyused'] = 'Customized activity and resource modules.';
$string['commonlyuseddesc'] = 'Comma separated list of activities/resources to list at top of Activity/Resource Picker.<br>
Default Activities:<br>
assign,chat,choice,data,feedback,forum,glossary,lesson,lti,quiz,scorm,survey,wiki,workshop<br>
DEfault Resources:<br>
book,file,folder,imscp,label,page,resource,url';
$string['modchoosercommonlyused'] = 'Commonly Used';
$string['showonlycustomactivities'] = 'Show Only Custom Menu';
$string['showonlycustomactivities_desc'] = 'If checked only the custom menu will be displayed.  This allows an organization to pick and choose which activities and resources will be used in courses. WARNING:  You must have a comma separated list of activities/resources set in the textbox above.  Otherwise you will not see any activities or resources when editing a course.';
$string['modchoosercommonlyusedtitle'] = '{$a}';
$string['modchoosercustomlabel'] = 'Custom Chooser Label';
$string['modchoosercustomlabel_desc'] = 'Add your own custom label for this new menu in the Chooser Module panel.';
$string['showalltomanager'] = 'Show All Activities and Resources to Managers';
$string['showalltomanager_desc'] = 'This setting will allow users who have the role of Manager see and access ALL activities and resources even if it is set to only show the custom menu.  Generally, a manager role is given to a user at the site or category level.  Teachers will still only see the custom menu.  This feature is determined by the user permission: View the Site Administration Tree - moodle/site:configview . Site Administrators will always see all activities and resources.';
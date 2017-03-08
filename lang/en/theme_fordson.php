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
$string['fpsearch'] = 'Find and Enroll in Courses ';
$string['headerscreen'] = 'Header Text Background';
$string['headerscreen_desc'] = 'This background colour appears below the text in the header image area.  This is meant to help make the text and breadcrumbs standout when using a header image.';
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

// Social Networks.
$string['socialheading'] = 'Social Networking';
$string['socialheadingsub'] = 'Engage your users with social networking.';
$string['socialdesc'] = 'Provide direct links to the core social networks that promote your brand.  These will appear in the header of every page.';
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
$string['contentsettings'] = 'Content areas';
$string['footnote'] = 'Footnote';
$string['footnotedesc'] = 'Footnote content editor for main footer';
$string['fptextbox'] = 'Homepage Textbox Authenticated User';
$string['fptextbox_desc'] = 'This textbox appears on the homepage once a user authenticates. It is ideal for putting a welcome message and providing instructions for the learner.';
$string['fptextboxlogout'] = 'Homepage Textbox Visitor';
$string['fptextboxlogout_desc'] = 'This textbox appears on the homepage for visitors and is ideal for putting a welcome message or link to the login page.';
$string['searchtoggle'] = 'Show the Homepage Searchbox';
$string['searchtoggle_desc'] = 'Check this in order to show the homepage searchbox for courses.';
$string['slidetextbox'] = 'Slide Textbox';
$string['slidetextbox_desc'] = 'This textbox content will be displayed when the Slide Button is pressed.';
$string['sectionicon'] = 'Course Section Icon';
$string['sectionicon_desc'] = 'This allows you to change the icon that appears next to each section in a course.  These are Font-Awesome icons. These appear in the following presets: Default and Evolve-D.';
$string['headericon'] = 'Header Title Icon';
$string['headericon_desc'] = 'This allows you to change the icon that appears in the header area next to the page title. These are Font-Awesome icons. These appear in the following presets: Default and Evolve-D.';
$string['enablefrontpageavailablecoursebox'] = 'Enable Enhanced Course Display';
$string['enablefrontpageavailablecoursebox_desc'] = 'Enhanced Course Display will display courses as tiles in a grid and use icons in a grid view for course categories. To use Moodle default presentation uncheck this option.';
$string['courseboxheight'] = 'Frontpage Courses Tile Height';
$string['courseboxheight_desc'] = 'Control the height of the Course tile on the frontpage.';
$string['catsicon'] = 'Category Icon';
$string['catsicon_desc'] = 'Choose an icon to represent course categories.';
$string['trimtitle'] = 'Trim Course Title';
$string['trimtitle_desc'] = 'Enter a number to trim the title length.  This number represents characters that will be displayed.';
$string['trimsummary'] = 'Trim Course Summary';
$string['trimsummary_desc'] = 'Enter a number to trim the summary length.  This number represents characters that will be displayed.';
$string['titletooltip'] = 'Course Title Tooltip';
$string['titletooltip_desc'] = 'If using Trim Course Title you can use tooltips which will display the entire course title in a tooltip.  Check this box to turn on tooltips.';
$string['dashactivityoverview'] = 'ACTIVITIES OVERVIEW';

// Menu Settings
$string['menusettings'] = 'Menu settings';
$string['thiscourse'] = 'This Course';
$string['thiscourseenroll'] = 'User Enrollment';
$string['thiscoursegroups'] = 'Group Management';
$string['thiscoursequestion'] = 'Question Bank';
$string['thiscoursequestioncat'] = 'Question Categories';
$string['headerimagepadding'] = 'Header Image Height';
$string['headerimagepadding_desc'] = 'Control the padding and height of the header image for courses.';
$string['activitymenu'] = 'Show This Course Drop Down Menu';
$string['activitymenu_desc'] = 'Show the This Course drop down menu.  This menu appears next to the breadcrumbs and will display a listing of all activities for the student.  You can also customize the menu by clicking on the menu items below to control what will appear.';

$string['userenrollmenu'] = 'Show Enrollment Link';
$string['userenrollmenu_desc'] = 'Include a link to the Enrollment page in This Course drop down menu.';
$string['groupmanagemenu'] = 'Show Group Management Link';
$string['groupmanagemenu_desc'] = 'Include a link to the Group Management page in This Course drop down menu.';
$string['questioncategorymenu'] = 'Show Question Categories Link';
$string['questioncategorymenu_desc'] = 'Include a link to the Question Categories page in This Course drop down menu.';
$string['questionbankmenu'] = 'Show Question Bank Link';
$string['questionbankmenu_desc'] = 'Include a link to the Question Bank page in This Course drop down menu.';
$string['activitylistingmenu'] = 'Show Activity Listings';
$string['activitylistingmenu_desc'] = 'Include a link to show activities in This Course drop down menu.';

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
$string['marketinginfodesc'] = 'Enter the settings for your marketing spot.';
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
$string['marketingtitledesc'] = 'Title to show in this marketing spot';
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
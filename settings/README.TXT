THEME_STAGETWO BUILDING NOTES
=============================

As with previous themes I have built I have made the choice to separate sections of the
settings.php file into separate files for ongoing maintenance - simply because I find it 
easier.
These are called from the main settings.php file as php include/require statements. This
does involve some care when migrating settings from other themes that do not split their
settings in this way, but realistically no more than when moving settings between themes
and ensuring consistent variable names for the settings structure anyway. The patterns
are there and obvious to follow and compare in a wide range of themes, so this change
is quite straightforward.

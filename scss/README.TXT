THEME_STAGETWO BUILDING NOTES
=============================

The bootstrap and moodle folders are clones of those in theme_boost - therefore one item
of work to do will be to edit moodle.scss to point to them in theme_boost so that they can be removed from theme_fordson, to reduce future maintenance.

The presets folder has been added to include the range of bootswatch presets created by
the boost cli function - the associated setting has been altered to detect any preset files
added to the folder by ftp/ssh rather than through the front-end UI uploader (which is
also still there).

A styles.scss file has been added to provide theme specific styling - where appropriate
this should use the common variables from the presets for colours, typography, etc so
that presets and settings continue to be able to customise the look and feel of the site
correctly.

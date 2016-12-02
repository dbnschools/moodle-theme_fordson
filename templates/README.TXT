THEME_STAGETWO BUILDING NOTES
=============================

For the purposes of theme_fordson the templates are only those which have been
specifically altered from those in theme_boost.
When I started out with this theme I saw two alternatives - 1. move the entire set of
templates - effectively cloning the entire theme, or 2. just include those being changed/
built for theme_fordson. To me that second option was the obvious one, but does have the
consideration identified below around calling those templates and cloning a theme.

Templates are called by location/name (eg. theme_fordson/socialicons or core/templatename)
so this makes it easy to inherit the original template - however it does mean additional
care is needed when using find/replace to clone a theme as you need to ensure the templates
are still called from the correct place (or are moved into the new theme even if not changed.

<?php

/**
 * Configuration for Moodle's Unitec theme.
 *
 * @package   unitec
 * @copyright 2012 Unitec New Zealand
 * This theme MUST have unitec_minimal installed to work properly
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$THEME->name = 'unitec_minimal_grey';

$THEME->parents = array('unitec_minimal','base');

$THEME->sheets = array('core');

// Taken from parent theme
// $THEME->editor_sheets = array('editor');

// Dock enabled

$THEME->enable_dock = true;

// Renderer for custom menu items

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

// Layouts
// Taken from parent theme
// $THEME->layouts = array();
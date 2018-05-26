<?php
    defined('MOODLE_INTERNAL') or die();

    $plugin->version   = 2018051700;                    // The current module version (Date: YYYYMMDDXX)
    $plugin->requires  = 2018051700;                    // Requires this Moodle version (3.5)
    $plugin->cron      = 0;                             // Period for cron to check this module (secs)
    $plugin->component = 'mod_moodlels';

    $plugin->maturity  = MATURITY_STABLE;
    $plugin->release   = "3.5 (Build: 2018051700)";     // User-friendly version number

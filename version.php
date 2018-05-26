<?php
    defined('MOODLE_INTERNAL') || die();

    $plugin->version   = TODO;
    $plugin->requires  = TODO;
    $plugin->cron      = 0;
    $plugin->component = 'mod_helloWorldActivity';
    $plugin->maturity  = MATURITY_STABLE;
    $plugin->release   = 'TODO';

    $plugin->dependencies = array(
        'mod_forum' => ANY_VERSION,
        'mod_data'  => TODO
    );

<?php
    defined('MOODLE_INTERNAL') or die();

    $observers = array(
        array(
            'eventname' => '*',
            'callback'  => '\tool_mylog\log\observer::store',
            'internal'  => false, // This means that we get events only after transaction commit.
            'priority'  => 1000,
        ),
    );

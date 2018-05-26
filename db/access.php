<?php

$capabilities = array(
    'mod/moodlels:addinstance' => array(
        'riskbitmask' => RISK_XSS,
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        ),
        'clonepermissionsfrom' => 'moodle/course:manageactivities'
    ),

    'mod/moodlels:view' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => array(
            'student' => CAP_ALLOW,
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),

    // 'mod/moodlels:manage' => array(
    //
    //     'captype' => 'read',
    //     'contextlevel' => CONTEXT_MODULE,
    //     'archetypes' => array(
    //         'teacher' => CAP_ALLOW,
    //         'editingteacher' => CAP_ALLOW,
    //         'manager' => CAP_ALLOW
    //     )
    // ),
    //
    // 'mod/moodlels:printteacher' => array(
    //
    //     'captype' => 'read',
    //     'contextlevel' => CONTEXT_MODULE,
    //     'archetypes' => array(
    //         'teacher' => CAP_ALLOW,
    //         'editingteacher' => CAP_ALLOW
    //     )
    // ),

);

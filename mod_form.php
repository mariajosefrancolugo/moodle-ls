<?php
    if (!defined('MOODLE_INTERNAL')) {
        die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
    }

    require_once($CFG->dirroot.'/course/moodleform_mod.php');
    require_once($CFG->dirroot.'/mod/moodlels/lib.php');

    class mod_moodlels_mod_form extends moodleform_mod {
        function definition() {
            global $CFG, $DB, $OUTPUT;

            $mform =& $this->_form;

            $opcional_preg1 = array(
                'a' => 'Si lo práctico',
                'b' => 'Si pienso en ello');
            $mform->addElement('select', 'usecode', get_string('modelo_felder_silverman_preg1', 'moodlels'), $opcional_preg1);
            $mform->setDefault('usecode', 'a');
            $mform->addHelpButton('usecode', 'usecode', 'certificate');

            $this->standard_coursemodule_elements();

            $this->add_action_buttons();
        }
    }

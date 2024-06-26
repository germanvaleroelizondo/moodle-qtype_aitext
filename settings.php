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
 * TODO describe file settings
 *
 * @package    qtype_aitext
 * @copyright  2024 Marcus Green
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext('qtype_aitext/disclaimer',
            new lang_string('disclaimer', 'qtype_aitext'),
            new lang_string('disclaimer_setting', 'qtype_aitext'),
            "(Response provided by ChatGPT)"));

    $settings->add(new admin_setting_configtextarea('qtype_aitext/defaultprompt',
        new lang_string('defaultprompt', 'qtype_aitext'),
        new lang_string('defaultprompt_setting', 'qtype_aitext'),
        new lang_string('thedefaultprompt', 'qtype_aitext')));

    $settings->add(new admin_setting_configtextarea('qtype_aitext/defaultmarksscheme',
        new lang_string('defaultmarksscheme', 'qtype_aitext'),
        new lang_string('defaultmarksscheme_setting', 'qtype_aitext'),
        new lang_string('thedefaultmarksscheme', 'qtype_aitext')));
}


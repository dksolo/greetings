<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>;.

/**
 * Main file to view greetings
 *
 * @package     local_greetings
 * @copyright   2026 Dmitrii Solopii <dksolo.web.dev@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
/*
1. In the index.php file, add the following line after the copyright block.
*/
require_once('../../config.php'); 
/* 
Most php files that can be directly accessed begin with requiring the config.php file, located in the root of the Moodle folder.


2. Next, set the page context. We will be using the system context for the purpose of this course.
*/
$context = context_system::instance();
$PAGE->set_context($context);

// 3. Set the page URL using the following code: 
$PAGE->set_url(new moodle_url('/local/greetings/index.php'));

// 4. We will use the standard page layout. The following code will set the page layout:

$PAGE->set_pagelayout('standard');

// 5. Save your work and access the index.php by typing the following url in your web browser: 
// http://<your-moodle-site>/local/greetings/
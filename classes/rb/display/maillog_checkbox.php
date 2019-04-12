<?php
/*
 * This file is part of Totara LMS
 *
 * Copyright (C) 2019 Catalyst IT
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author      James Voong <james.voong@catalyst.net.nz>
 * @copyright   2019 Catalyst IT
 * @package     local_maillog
 */

namespace local_maillog\rb\display;
use totara_reportbuilder\rb\display\base;

/**
 * Generate log item checkbox
 *
 * @author James Voong <james.voong@catalyst.net.nz>
 * @package local_maillog
 */
class maillog_checkbox extends base {

    public static function display($value, $format, \stdClass $row, \rb_column $column, \reportbuilder $report) {
        return \html_writer::checkbox('local_maillog_items['.$value.']', $value, false, '', array('id' => 'local_maillog', 'class' => "selectbox"));
    }

    public static function is_graphable(\rb_column $column, \rb_column_option $option, \reportbuilder $report) {
        return false;
    }
}

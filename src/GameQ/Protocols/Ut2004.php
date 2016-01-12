<?php
/**
 * This file is part of GameQ.
 *
 * GameQ is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * GameQ is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace GameQ\Protocols;

/**
 * Unreal Tournament 3 Protocol Class
 *
 * Note: The response from UT3 appears to not be consistent.  Many times packets are incomplete or there are extra
 * "echoes" in the responses.  This may cause issues like odd characters showing up in the keys for the player and team
 * array responses. Not sure much can be done about it.
 *
 * @author Austin Bischoff <austin@codebeard.com>
 */
class Ut2004 extends Unreal2
{

    /**
     * String name of this protocol class
     *
     * @type string
     */
    protected $name = 'ut2004';

    /**
     * Longer string name of this protocol class
     *
     * @type string
     */
    protected $name_long = "Unreal Tournament 2004";
}

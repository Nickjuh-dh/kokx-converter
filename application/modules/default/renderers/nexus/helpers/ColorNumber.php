<?php
/**
 * This file is part of Kokx's CR Converter.
 *
 * Kokx's CR Converter is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Kokx's CR Converter is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Kokx's CR Converter.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category   KokxConverter
 * @license    http://www.gnu.org/licenses/gpl.txt
 * @copyright  Copyright (c) 2009 Kokx
 * @package    Default
 * @subpackage Renderer
 */

/**
 * Number formatter and color giver.
 *
 * @category   KokxConverter
 * @package    Default
 * @subpackage Renderer
 */
class Default_Renderer_Nexus_Helper_ColorNumber extends Zend_View_Helper_Abstract
{

    /**
     * Format a number
     *
     * @param int $number
     *
     * @return string
     */
    public function colorNumber($number, $color = '#ff0000')
    {
        return "[color=$color][b]{$this->view->formatNumber($number)}[/b][/color]";
    }
}

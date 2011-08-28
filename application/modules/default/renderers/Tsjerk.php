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
 * CR parser
 *
 * @category   KokxConverter
 * @package    Default
 * @subpackage Renderer
 */
class Default_Renderer_Tsjerk extends Default_Renderer_RendererAbstract
{

    /**
     * Get the view base prefix
     *
     * @return string
     */
    public function _getViewBasePrefix()
    {
        return 'Default_Renderer_Tsjerk';
    }

    /**
     * Get the view path.
     *
     * @return string
     */
    public function _getViewBasePath()
    {
        return dirname(__FILE__) . DIRECTORY_SEPARATOR . 'tsjerk';
    }
}

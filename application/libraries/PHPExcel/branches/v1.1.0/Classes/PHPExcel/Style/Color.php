<?php
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2007 PHPExcel, Maarten Balliauw
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 *
 * @category   PHPExcel
 * @package    PHPExcel_Style
 * @copyright  Copyright (c) 2006 - 2007 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/gpl.txt	GPL
 */


/** PHPExcel_IComparable */
require_once 'PHPExcel/IComparable.php';


/**
 * PHPExcel_Style_Color
 *
 * @category   PHPExcel
 * @package    PHPExcel_Style
 * @copyright  Copyright (c) 2006 - 2007 PHPExcel (http://www.codeplex.com/PHPExcel)
 */
class PHPExcel_Style_Color implements PHPExcel_IComparable
{
	/* Colors */
	const COLOR_BLACK						= 'FF000000';
	const COLOR_WHITE						= 'FFFFFFFF';
	const COLOR_RED							= 'FFFF0000';
	const COLOR_DARKRED						= 'FF800000';
	const COLOR_BLUE						= 'FF0000FF';
	const COLOR_DARKBLUE					= 'FF000080';
	const COLOR_GREEN						= 'FF00FF00';
	const COLOR_DARKGREEN					= 'FF008000';
	const COLOR_YELLOW						= 'FFFFFF00';
	const COLOR_DARKYELLOW					= 'FF808000';
	
	/**
	 * ARGB - Alpha RGB
	 *
	 * @var string
	 */
	private $_argb;
		
    /**
     * Create a new PHPExcel_Style_Color
     * 
     * @param string $pARGB
     */
    public function __construct($pARGB = PHPExcel_Style_Color::COLOR_BLACK)
    {
    	// Initialise values
    	$this->_argb			= $pARGB;
    }
    
    /**
     * Get ARGB
     *
     * @return string
     */
    public function getARGB() {
    	return $this->_argb;
    }
    
    /**
     * Set ARGB
     *
     * @param string $pValue
     */
    public function setARGB($pValue = PHPExcel_Style_Color::COLOR_BLACK) {
    	$this->_argb = $pValue;
    }
    
    /**
     * Get RGB
     *
     * @return string
     */
    public function getRGB() {
    	return substr($this->_argb, 2);
    }
    
    /**
     * Set RGB
     *
     * @param string $pValue
     */
    public function setRGB($pValue = '000000') {
    	$this->_argb = 'FF' . $pValue;
    }

	/**
	 * Get hash code
	 *
	 * @return string	Hash code
	 */	
	public function getHashCode() {
    	return md5(
    		  $this->_argb
    		. __CLASS__
    	);
    }
        
    /**
     * Duplicate object
     *
     * Duplicates the current object, also duplicating referenced objects (deep cloning).
     * Standard PHP clone does not copy referenced objects!
     *
     * @return PHPExcel_Style_Color
     */
	public function duplicate() {
		return unserialize(serialize($this));
	}
}

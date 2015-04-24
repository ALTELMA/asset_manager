<?php
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2007 PHPExcel, Maarten Balliauw
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel_Style
 * @copyright  Copyright (c) 2006 - 2007 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/lgpl.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */


/** PHPExcel_IComparable */
require_once 'PHPExcel/IComparable.php';


/**
 * PHPExcel_Style_Alignment
 *
 * @category   PHPExcel
 * @package    PHPExcel_Style
 * @copyright  Copyright (c) 2006 - 2007 PHPExcel (http://www.codeplex.com/PHPExcel)
 */
class PHPExcel_Style_Alignment implements PHPExcel_IComparable
{	
	/* Horizontal alignment styles */
	const HORIZONTAL_GENERAL				= 'general';
	const HORIZONTAL_LEFT					= 'left';
	const HORIZONTAL_RIGHT					= 'right';
	const HORIZONTAL_CENTER					= 'center';
	const HORIZONTAL_JUSTIFY				= 'justify';
	
	/* Vertical alignment styles */
	const VERTICAL_BOTTOM					= 'bottom';
	const VERTICAL_TOP						= 'top';
	const VERTICAL_CENTER					= 'center';
	const VERTICAL_JUSTIFY					= 'justify';
	
	/**
	 * Horizontal
	 *
	 * @var string
	 */
	private $_horizontal;
	
	/**
	 * Vertical
	 *
	 * @var string
	 */
	private $_vertical;
	
	/**
	 * Text rotation
	 *
	 * @var int
	 */
	private $_textRotation;
		
    /**
     * Create a new PHPExcel_Style_Alignment
     */
    public function __construct()
    {
    	// Initialise values
    	$this->_horizontal			= PHPExcel_Style_Alignment::HORIZONTAL_GENERAL;
    	$this->_vertical			= PHPExcel_Style_Alignment::VERTICAL_BOTTOM;
    	$this->_textRotation		= 0;
    }
    
    /**
     * Get Horizontal
     *
     * @return string
     */
    public function getHorizontal() {
    	return $this->_horizontal;
    }
    
    /**
     * Set Horizontal
     *
     * @param string $pValue
     */
    public function setHorizontal($pValue = PHPExcel_Style_Alignment::HORIZONTAL_GENERAL) {
    	$this->_horizontal = $pValue;
    }
    
    /**
     * Get Vertical
     *
     * @return string
     */
    public function getVertical() {
    	return $this->_vertical;
    }
    
    /**
     * Set Vertical
     *
     * @param string $pValue
     */
    public function setVertical($pValue = PHPExcel_Style_Alignment::VERTICAL_BOTTOM) {
    	$this->_vertical = $pValue;
    }
    
    /**
     * Get TextRotation
     *
     * @return int
     */
    public function getTextRotation() {
    	return $this->_textRotation;
    }
    
    /**
     * Set TextRotation
     *
     * @param int $pValue
     * @throws Exception
     */
    public function setTextRotation($pValue = 0) {
    	if ($pValue >= 0 && $pValue <= 180) {
    		$this->_textRotation = $pValue;
    	} else {
    		throw new Exception("Text rotation should be a value between 0 and 180.");
    	}
    }

	/**
	 * Get hash code
	 *
	 * @return string	Hash code
	 */	
	public function getHashCode() {
    	return md5(
    		  $this->_horizontal
    		. $this->_vertical
    		. $this->_textRotation
    		. __CLASS__
    	);
    }
    
    /**
     * Duplicate object
     *
     * Duplicates the current object, also duplicating referenced objects (deep cloning).
     * Standard PHP clone does not copy referenced objects!
     *
     * @return PHPExcel_Style_Alignment
     */
	public function duplicate() {
		return unserialize(serialize($this));
	}
}
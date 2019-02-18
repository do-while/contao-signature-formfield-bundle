<?php

/**
 * Extension for Contao 4
 *
 * @copyright  Softleister 2019
 * @author     Softleister <info@softleister.de>
 * @package    contao-signature-formfield-bundle
 *             based on jSignature (https://github.com/brinley/jSignature)
 * @licence    MIT License
 */

namespace Softleister;

/**
 * Class FormSignature
 *
 * @property string  $value
 * @property integer $maxlength
 * @property boolean $mandatory
 * @property string  $placeholder
 * @property string  $size
 * @property integer $rows
 * @property integer $cols
 */
class FormSignature extends \Widget
{
	protected $blnSubmitInput = true;					// Submit user input		@var boolean
	protected $strTemplate = 'form_signature';			// Template					@var string
	protected $strPrefix = 'widget widget-signature';	// The CSS class prefix		@var string

	/**
	 * Add specific attributes
	 *
	 * @param string $strKey   The attribute name
	 * @param mixed  $varValue The attribute value
	 */
	public function __set( $strKey, $varValue )
	{
		switch( $strKey ) {
			case 'sig_size':		$arrSize = \StringUtil::deserialize($varValue);
									$this->intWidth = is_numeric($arrSize[0]) ? $arrSize[0] : 500;
									$this->intHeight = is_numeric($arrSize[1]) ? $arrSize[1] : 250;
									break;

			case 'sig_bgcolor':		$this->sig_bgcolor = empty($this->sig_bgcolor) ? 'transparent' : '#' . $this->sig_bgcolor;
									break;

			case 'sig_width':		$this->sig_width = is_numeric($this->sig_width) && ($this->sig_width > 0) ? $this->sig_width : 5;
									break;

			case 'sig_color':		$varValue = $varValue == '' ? '000' : $varValue;

			default:				parent::__set($strKey, $varValue);
		}
	}

	/**
	 * Return a parameter
	 *
	 * @param string $strKey The parameter key
	 *
	 * @return mixed The parameter value
	 */
	public function __get( $strKey )
	{
		switch( $strKey ) {
			case 'width':			return $this->intWidth;
									break;

			case 'height':			return $this->intHeight;
									break;

			case 'pen':				return $this->sig_width;
									break;

			case 'color':			return $this->sig_color;
									break;

			case 'bgcolor':			return $this->sig_bgcolor;
									break;

			default:				return parent::__get($strKey);
									break;
		}
	}

	/**
	 * Generate the widget and return it as string
	 *
	 * @return string The widget markup
	 */
	public function generate( )
	{
		return '';
	}
}

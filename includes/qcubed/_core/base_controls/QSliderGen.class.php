<?php
	/**
	 * QSliderGen File
	 * 
	 * The abstract QSliderGen class defined here is
	 * code-generated and contains options, events and methods scraped from the
	 * JQuery UI documentation Web site. It is not generated by the typical
	 * codegen process, but rather is generated periodically by the core QCubed
	 * team and checked in. However, the code to generate this file is
	 * in the assets/_core/php/_devetools/jquery_ui_gen/jq_control_gen.php file
	 * and you can regenerate the files if you need to.
	 *
	 * The comments in this file are taken from the JQuery UI site, so they do
	 * not always make sense with regard to QCubed. They are simply provided
	 * as reference. Note that this is very low-level code, and does not always
	 * update QCubed state variables. See the QSliderBase 
	 * file, which contains code to interface between this generated file and QCubed.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the QSlider class file.
	 *
	 */

	/* Custom event classes for this control */
	
	
	/**
	 * <div>Triggered after the user slides a handle, if the value has changed; or
	 * 		if the value is changed programmatically via the <a><code>value</code></a>
	 * 		method.</div><ul><li><div><strong>event</strong></div> <div>Type:
	 * 		<a>Event</a></div> <div></div></li> <li><div><strong>ui</strong></div>
	 * 		<div>Type: <a>Object</a></div> <div></div>
	 * 		<ul><li><div><strong>handle</strong></div> <div>Type: <a>jQuery</a></div>
	 * 		<div>The jQuery object representing the handle that was changed.</div></li>
	 * 		<li><div><strong>value</strong></div> <div>Type: <a>Number</a></div>
	 * 		<div>The current value of the slider.</div></li></ul></li></ul>
	 */
	class QSlider_ChangeEvent extends QJqUiEvent {
		const EventName = 'slidechange';
	}
	/**
	 * <div>Triggered when the slider is
	 * 		created.</div><ul><li><div><strong>event</strong></div> <div>Type:
	 * 		<a>Event</a></div> <div></div></li> <li><div><strong>ui</strong></div>
	 * 		<div>Type: <a>Object</a></div> <div></div></li></ul>
	 */
	class QSlider_CreateEvent extends QJqUiEvent {
		const EventName = 'slidecreate';
	}
	/**
	 * <div>Triggered on every mouse move during slide. The value provided in the
	 * 		event as <code>ui.value</code> represents the value that the handle will
	 * 		have as a result of the current movement. Canceling the event will prevent
	 * 		the handle from moving and the handle will continue to have its previous
	 * 		value.</div><ul><li><div><strong>event</strong></div> <div>Type:
	 * 		<a>Event</a></div> <div></div></li> <li><div><strong>ui</strong></div>
	 * 		<div>Type: <a>Object</a></div> <div></div>
	 * 		<ul><li><div><strong>handle</strong></div> <div>Type: <a>jQuery</a></div>
	 * 		<div>The jQuery object representing the handle being moved.</div></li>
	 * 		<li><div><strong>value</strong></div> <div>Type: <a>Number</a></div>
	 * 		<div>The value that the handle will move to if the event is not
	 * 		canceled.</div></li> <li><div><strong>values</strong></div> <div>Type:
	 * 		<a>Array</a></div> <div>An array of the current values of a multi-handled
	 * 		slider.</div></li></ul></li></ul>
	 */
	class QSlider_SlideEvent extends QJqUiEvent {
		const EventName = 'slide';
	}
	/**
	 * <div>Triggered when the user starts
	 * 		sliding.</div><ul><li><div><strong>event</strong></div> <div>Type:
	 * 		<a>Event</a></div> <div></div></li> <li><div><strong>ui</strong></div>
	 * 		<div>Type: <a>Object</a></div> <div></div>
	 * 		<ul><li><div><strong>handle</strong></div> <div>Type: <a>jQuery</a></div>
	 * 		<div>The jQuery object representing the handle being moved.</div></li>
	 * 		<li><div><strong>value</strong></div> <div>Type: <a>Number</a></div>
	 * 		<div>The current value of the slider.</div></li></ul></li></ul>
	 */
	class QSlider_StartEvent extends QJqUiEvent {
		const EventName = 'slidestart';
	}
	/**
	 * <div>Triggered after the user slides a
	 * 		handle.</div><ul><li><div><strong>event</strong></div> <div>Type:
	 * 		<a>Event</a></div> <div></div></li> <li><div><strong>ui</strong></div>
	 * 		<div>Type: <a>Object</a></div> <div></div>
	 * 		<ul><li><div><strong>handle</strong></div> <div>Type: <a>jQuery</a></div>
	 * 		<div>The jQuery object representing the handle that was moved.</div></li>
	 * 		<li><div><strong>value</strong></div> <div>Type: <a>Number</a></div>
	 * 		<div>The current value of the slider.</div></li></ul></li></ul>
	 */
	class QSlider_StopEvent extends QJqUiEvent {
		const EventName = 'slidestop';
	}

	/* Custom "property" event classes for this control */

	/**
	 * Generated QSliderGen class.
	 * 
	 * This is the QSliderGen class which is automatically generated
	 * by scraping the JQuery UI documentation website. As such, it includes all the options
	 * as listed by the JQuery UI website, which may or may not be appropriate for QCubed. See
	 * the QSliderBase class for any glue code to make this class more
	 * usable in QCubed.
	 * 
	 * @see QSliderBase
	 * @package Controls\Base
	 * @property mixed $Animate <div>Whether to slide the handle smoothly when the user clicks on the
	 * 		slider track. Also accepts any valid <a>animation
	 * 		duration</a>.</div><strong>Multiple types
	 * 		supported:</strong><ul><li><strong>Boolean</strong>: When set to
	 * 		<code>true</code>, the handle will animate with the default duration.</li>
	 * 		<li><strong>String</strong>: The name of a speed, such as
	 * 		<code>"fast"</code> or <code>"slow"</code>.</li>
	 * 		<li><strong>Number</strong>: The duration of the animation, in
	 * 		milliseconds.</li></ul>
	 * @property boolean $Disabled <div>Disables the slider if set to <code>true</code>.</div>
	 * @property integer $Max <div>The maximum value of the slider.</div>
	 * @property integer $Min <div>The minimum value of the slider.</div>
	 * @property string $Orientation <div>Determines whether the slider handles move horizontally (min on left,
	 * 		max on right) or vertically (min on bottom, max on top). Possible values:
	 * 		<code>"horizontal"</code>, <code>"vertical"</code>.</div>
	 * @property mixed $Range <div>Whether the slider represents a range.</div><strong>Multiple types
	 * 		supported:</strong><ul><li><strong>Boolean</strong>: If set to
	 * 		<code>true</code>, the slider will detect if you have two handles and
	 * 		create a stylable range element between these two.</li>
	 * 		<li><strong>String</strong>: Either <code>"min"</code> or
	 * 		<code>"max"</code>. A min range goes from the slider min to one handle. A
	 * 		max range goes from one handle to the slider max.</li></ul>
	 * @property integer $Step <div>Determines the size or amount of each interval or step the slider
	 * 		takes between the min and max. The full specified value range of the slider
	 * 		(max - min) should be evenly divisible by the step.</div>
	 * @property integer $Value <div>Determines the value of the slider, if there's only one handle. If
	 * 		there is more than one handle, determines the value of the first
	 * 		handle.</div>
	 * @property array $Values <div>This option can be used to specify multiple handles. If the
	 * 		<a><code>range</code></a> option is set to <code>true</code>, the length of
	 * 		<code>values</code> should be 2.</div>
	 */

	class QSliderGen extends QPanel	{
		protected $strJavaScripts = __JQUERY_EFFECTS__;
		protected $strStyleSheets = __JQUERY_CSS__;
		/** @var mixed */
		protected $mixAnimate = null;
		/** @var boolean */
		protected $blnDisabled = null;
		/** @var integer */
		protected $intMax = null;
		/** @var integer */
		protected $intMin;
		/** @var string */
		protected $strOrientation = null;
		/** @var mixed */
		protected $mixRange = null;
		/** @var integer */
		protected $intStep = null;
		/** @var integer */
		protected $intValue;
		/** @var array */
		protected $arrValues = null;
		
		protected function makeJsProperty($strProp, $strKey) {
			$objValue = $this->$strProp;
			if (null === $objValue) {
				return '';
			}

			return $strKey . ': ' . JavaScriptHelper::toJsObject($objValue) . ', ';
		}

		protected function makeJqOptions() {
			$strJqOptions = '';
			$strJqOptions .= $this->makeJsProperty('Animate', 'animate');
			$strJqOptions .= $this->makeJsProperty('Disabled', 'disabled');
			$strJqOptions .= $this->makeJsProperty('Max', 'max');
			$strJqOptions .= $this->makeJsProperty('Min', 'min');
			$strJqOptions .= $this->makeJsProperty('Orientation', 'orientation');
			$strJqOptions .= $this->makeJsProperty('Range', 'range');
			$strJqOptions .= $this->makeJsProperty('Step', 'step');
			$strJqOptions .= $this->makeJsProperty('Value', 'value');
			$strJqOptions .= $this->makeJsProperty('Values', 'values');
			if ($strJqOptions) $strJqOptions = substr($strJqOptions, 0, -2);
			return $strJqOptions;
		}

		public function getJqSetupFunction() {
			return 'slider';
		}

		public function GetControlJavaScript() {
			return sprintf('jQuery("#%s").%s({%s})', $this->getJqControlId(), $this->getJqSetupFunction(), $this->makeJqOptions());
		}

		public function GetEndScript() {
			$str = '';
			if ($this->getJqControlId() !== $this->ControlId) {
				// #845: if the element receiving the jQuery UI events is different than this control
				// we need to clean-up the previously attached event handlers, so that they are not duplicated 
				// during the next ajax update which replaces this control.
				$str = sprintf('jQuery("#%s").off(); ', $this->getJqControlId());
			}
			return $str . $this->GetControlJavaScript() . '; ' . parent::GetEndScript();
		}
		
		/**
		 * Call a JQuery UI Method on the object. 
		 * 
		 * A helper function to call a jQuery UI Method. Takes variable number of arguments.
		 * 
		 * @param string $strMethodName the method name to call
		 * @internal param $mixed [optional] $mixParam1
		 * @internal param $mixed [optional] $mixParam2
		 */
		protected function CallJqUiMethod($strMethodName /*, ... */) {
			$args = func_get_args();

			$strArgs = JavaScriptHelper::toJsObject($args);
			$strJs = sprintf('jQuery("#%s").%s(%s)',
				$this->getJqControlId(),
				$this->getJqSetupFunction(),
				substr($strArgs, 1, strlen($strArgs)-2));	// params without brackets
			QApplication::ExecuteJavaScript($strJs);
		}


		/**
		 * <div>Removes the slider functionality completely. This will return the
		 * element back to its pre-init state.</div><ul><li><div>This method does not
		 * accept any arguments.</div></li></ul>
		 */
		public function Destroy() {
			$this->CallJqUiMethod("destroy");
		}
		/**
		 * <div>Disables the slider.</div><ul><li><div>This method does not accept any
		 * arguments.</div></li></ul>
		 */
		public function Disable() {
			$this->CallJqUiMethod("disable");
		}
		/**
		 * <div>Enables the slider.</div><ul><li><div>This method does not accept any
		 * arguments.</div></li></ul>
		 */
		public function Enable() {
			$this->CallJqUiMethod("enable");
		}
		/**
		 * <div>Gets the value currently associated with the specified
		 * <code>optionName</code>.</div><ul><li><div><strong>optionName</strong></div>
		 * <div>Type: <a>String</a></div> <div>The name of the option to
		 * get.</div></li></ul>
		 * @param $optionName
		 */
		public function Option($optionName) {
			$this->CallJqUiMethod("option", $optionName);
		}
		/**
		 * <div>Gets an object containing key/value pairs representing the current
		 * slider options hash.</div><ul><li><div>This method does not accept any
		 * arguments.</div></li></ul>
		 */
		public function Option1() {
			$this->CallJqUiMethod("option");
		}
		/**
		 * <div>Sets the value of the slider option associated with the specified
		 * <code>optionName</code>.</div><ul><li><div><strong>optionName</strong></div>
		 * <div>Type: <a>String</a></div> <div>The name of the option to
		 * set.</div></li> <li><div><strong>value</strong></div> <div>Type:
		 * <a>Object</a></div> <div>A value to set for the option.</div></li></ul>
		 * @param $optionName
		 * @param $value
		 */
		public function Option2($optionName, $value) {
			$this->CallJqUiMethod("option", $optionName, $value);
		}
		/**
		 * <div>Sets one or more options for the
		 * slider.</div><ul><li><div><strong>options</strong></div> <div>Type:
		 * <a>Object</a></div> <div>A map of option-value pairs to
		 * set.</div></li></ul>
		 * @param $options
		 */
		public function Option3($options) {
			$this->CallJqUiMethod("option", $options);
		}
		/**
		 * <div>Get the value of the slider.</div><ul><li><div>This method does not
		 * accept any arguments.</div></li></ul>
		 */
		public function Value() {
			$this->CallJqUiMethod("value");
		}
		/**
		 * <div>Set the value of the
		 * slider.</div><ul><li><div><strong>value</strong></div> <div>Type:
		 * <a>Number</a></div> <div>The value to set.</div></li></ul>
		 * @param $value
		 */
		public function Value1($value) {
			$this->CallJqUiMethod("value", $value);
		}
		/**
		 * <div>Get the value for all handles.</div><ul><li><div>This method does not
		 * accept any arguments.</div></li></ul>
		 */
		public function Values() {
			$this->CallJqUiMethod("values");
		}
		/**
		 * <div>Get the value for the specified
		 * handle.</div><ul><li><div><strong>index</strong></div> <div>Type:
		 * <a>Integer</a></div> <div>The zero-based index of the
		 * handle.</div></li></ul>
		 * @param $index
		 */
		public function Values1($index) {
			$this->CallJqUiMethod("values", $index);
		}
		/**
		 * <div>Set the value for the specified
		 * handle.</div><ul><li><div><strong>index</strong></div> <div>Type:
		 * <a>Integer</a></div> <div>The zero-based index of the handle.</div></li>
		 * <li><div><strong>value</strong></div> <div>Type: <a>Number</a></div>
		 * <div>The value to set.</div></li></ul>
		 * @param $index
		 * @param $value
		 */
		public function Values2($index, $value) {
			$this->CallJqUiMethod("values", $index, $value);
		}
		/**
		 * <div>Set the value for all
		 * handles.</div><ul><li><div><strong>values</strong></div> <div>Type:
		 * <a>Array</a></div> <div>The values to set.</div></li></ul>
		 * @param $values
		 */
		public function Values3($values) {
			$this->CallJqUiMethod("values", $values);
		}


		public function __get($strName) {
			switch ($strName) {
				case 'Animate': return $this->mixAnimate;
				case 'Disabled': return $this->blnDisabled;
				case 'Max': return $this->intMax;
				case 'Min': return $this->intMin;
				case 'Orientation': return $this->strOrientation;
				case 'Range': return $this->mixRange;
				case 'Step': return $this->intStep;
				case 'Value': return $this->intValue;
				case 'Values': return $this->arrValues;
				default: 
					try { 
						return parent::__get($strName); 
					} catch (QCallerException $objExc) { 
						$objExc->IncrementOffset(); 
						throw $objExc; 
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				case 'Animate':
					$this->mixAnimate = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'animate', $mixValue);
					}
					break;

				case 'Disabled':
					try {
						$this->blnDisabled = QType::Cast($mixValue, QType::Boolean);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'disabled', $this->blnDisabled);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Max':
					try {
						$this->intMax = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'max', $this->intMax);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Min':
					try {
						$this->intMin = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'min', $this->intMin);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Orientation':
					try {
						$this->strOrientation = QType::Cast($mixValue, QType::String);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'orientation', $this->strOrientation);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Range':
					$this->mixRange = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'range', $mixValue);
					}
					break;

				case 'Step':
					try {
						$this->intStep = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'step', $this->intStep);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Value':
					try {
						$this->intValue = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'value', $this->intValue);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Values':
					try {
						$this->arrValues = QType::Cast($mixValue, QType::ArrayType);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'values', $this->arrValues);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				case 'Enabled':
					$this->Disabled = !$mixValue;	// Tie in standard QCubed functionality
					parent::__set($strName, $mixValue);
					break;
					
				default:
					try {
						parent::__set($strName, $mixValue);
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>
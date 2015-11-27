<?php

namespace Stichoza\Phemoji;

/**
 * The Phemoji class 
 */
class Phemoji
{
	
	/**
	 * Function aliases
	 */
	private static $aliases = [
		'📅' => 'date',
		'💤' => 'sleep',
		'😴' => 'sleep',
		'💀' => 'die',
		'⏱' => 'time',
	];
	
	/**
	 * Constants
	 */
	private static $constants = [
		'👍' => true,
		'👎' => false,
	];
	
	/**
	 * Initialize Phemoji 
	 */
	public static function init()
	{
		// Define constants
		foreach (self::$constants as $key => $value) {
			define($key, $value);
		}
		
		// Wow that's some scary stuff dude.
		foreach (self::$aliases as $key => $value) {
			eval('function ' . $key . '() {
				return call_user_func_array("' . $value . '", func_get_args());
			}'); // Eval is not evil at all 😊
		}
	}
}

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
		'curl' => ['🌎', '🌍', '🌏'],
		'date' => ['📅', '📆', '🗓'],
		'die' => ['💀', '⚰'],
		'file_put_contents' => '📝',
		'mail' => ['✉️'],
		'rand' => '🎲',
		'sleep' => ['💤', '😴'],
		'time' => '⏱',
		'unlink' => '🗑',
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
		foreach (self::$aliases as $function => $aliases) {

			// Convert to array
			if (!is_array($aliases)) {
				$aliases = [$aliases];
			}

			// Iterate over aliases
			foreach ($aliases as $alias) {
				eval('function ' . $alias . '() {
					return call_user_func_array("' . $function . '", func_get_args());
				}'); // Eval is not evil at all 😊
			}
		}
	}
}

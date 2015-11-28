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
		'array_rand' => '🎲',
		'base64_decode' => '🔓',
		'base64_encode' => '🔒',
		'count' => '🔢',
		'curl' => ['🌎', '🌍', '🌏'],
		'date' => ['📅', '📆', '🗓'],
		'die' => ['💀', '⚰'],
		'empty' => [/*'❎'*/], // Won't work
		'file_put_contents' => '📝',
		'isset' => [/*'✅'*/], // Won't work
		'mail' => ['✉️', '📧'],
		'phpinfo' => 'ℹ️',
		'printf' => ['✏️'],
		'rand' => '🎰',
		'shuffle' => '🔀',
		'sleep' => ['💤', '😴'],
		'sprintf' => '🖍',
		'time' => '⏱',
		'unlink' => '🗑',
		'explode' => ['💣', '💥'],
		'ini_set' => ['⚙'],
		'strtolower' => '🔡',
		'strtoupper' => '🔠',
		'preg_split' => '✂️',
		'eval' => '💩',
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
			if ( ! is_array($aliases)) {
				$aliases = [$aliases];
			}

			// Iterate over aliases
			foreach ($aliases as $alias) {
				if ( ! function_exists($alias) ) {
					eval('function ' . $alias . '() {
						return call_user_func_array("' . $function . '", func_get_args());
					}'); // Eval is not evil at all 😊
				}
			}
		}
	}
}

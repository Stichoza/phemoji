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
		'explode' => ['💣', '💥'],
		'file_get_contents' => '📄',
		'file_put_contents' => '📝',
		'ini_set' => ['⚙'],
		'isset' => [/*'✅'*/], // Won't work
		'mail' => ['✉️', '📧'],
		'phpinfo' => 'ℹ️',
		'preg_split' => '✂️',
		'printf' => ['✏️'],
		'rand' => '🎰',
		'shuffle' => '🔀',
		'sleep' => ['💤', '😴'],
		'sprintf' => '🖍',
		'strtolower' => '🔡',
		'strtoupper' => '🔠',
		'time' => ['⏱', '⏰'],
		'unlink' => '🗑',
		'var_dump' => '💩',
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

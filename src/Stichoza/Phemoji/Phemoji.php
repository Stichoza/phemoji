<?php

namespace Stichoza\Phemoji;

/**
 * The Phemoji class 
 */
class Phemoji extends AnotherClass
{
	/**
	 * Nothing to do here
	 */
	public static function init()
	{
		return !!@include_once('raw/aliases.php');
	}
}

require_once 'raw/aliases.php';
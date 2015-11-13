<?php
/**
*	This file contains the Let Types Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use MyCLabs\Enum\Enum;

/**
*	Let Types Enum Class
*
*	Class for the different let types.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class LetTypes extends Enum {

	const LongTerm = 1;
	const ShortTerm = 2;
	const Commercial = 4;
	const NotSpecified = 0;
}
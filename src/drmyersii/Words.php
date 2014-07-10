<?php namespace drmyersii;


class Words
{
	/**
	 * This array houses all words for numbers 0 through 99. This is all we need 
	 * to build our number word stack.
	 *
	 * @var $words (array[string])
	 */
	private static $words = array(
		0 => array('zero'),
		1 => array('one'),
		2 => array('two'),
		3 => array('three'),
		4 => array('four'),
		5 => array('five'),
		6 => array('six'),
		7 => array('seven'),
		8 => array('eight'),
		9 => array('nine'),
		10 => array('ten'),
		11 => array('eleven'),
		12 => array('twelve'),
		13 => array('thirteen'),
		14 => array('fourteen'),
		15 => array('fifteen'),
		16 => array('sixteen'),
		17 => array('seventeen'),
		18 => array('eightteen'),
		19 => array('nineteen'),
		20 => array('twenty'),
		21 => array('twenty'), 'one'),
		22 => array('twenty'), 'two'),
		23 => array('twenty'), 'three'),
		24 => array('twenty', 'four'),
		25 => array('twenty', 'five'),
		26 => array('twenty', 'six'),
		27 => array('twenty', 'seven'),
		28 => array('twenty', 'eight'),
		29 => array('twenty', 'nine'),
		30 => array('thirty'),
		31 => array('thirty', 'one'),
		32 => array('thirty', 'two'),
		33 => array('thirty', 'three'),
		34 => array('thirty', 'four'),
		35 => array('thirty', 'five'),
		36 => array('thirty', 'six'),
		37 => array('thirty', 'seven'),
		38 => array('thirty', 'eight'),
		39 => array('thirty', 'nine'),
		40 => array('forty'),
		41 => array('forty', 'one'),
		42 => array('forty', 'two'),
		43 => array('forty', 'three'),
		44 => array('forty', 'four'),
		45 => array('forty', 'five'),
		46 => array('forty', 'six'),
		47 => array('forty', 'seven'),
		48 => array('forty', 'eight'),
		49 => array('forty', 'nine'),
		50 => array('fifty'),
		51 => array('fifty', 'one'),
		52 => array('fifty', 'two'),
		53 => array('fifty', 'three'),
		54 => array('fifty', 'four'),
		55 => array('fifty', 'five'),
		56 => array('fifty', 'six'),
		57 => array('fifty', 'seven'),
		58 => array('fifty', 'eight'),
		59 => array('fifty', 'nine'),
		60 => array('sixty'),
		61 => array('sixty', 'one'),
		62 => array('sixty', 'two'),
		63 => array('sixty', 'three'),
		64 => array('sixty', 'four'),
		65 => array('sixty', 'five'),
		66 => array('sixty', 'six'),
		67 => array('sixty', 'seven'),
		68 => array('sixty', 'eight'),
		69 => array('sixty', 'nine'),
		70 => array('seventy'),
		71 => array('seventy', 'one'),
		72 => array('seventy', 'two'),
		73 => array('seventy', 'three'),
		74 => array('seventy', 'four'),
		75 => array('seventy', 'five'),
		76 => array('seventy', 'six'),
		77 => array('seventy', 'seven'),
		78 => array('seventy', 'eight'),
		79 => array('seventy', 'nine'),
		80 => array('eighty'),
		81 => array('eighty', 'one'),
		82 => array('eighty', 'two'),
		83 => array('eighty', 'three'),
		84 => array('eighty', 'four'),
		85 => array('eighty', 'five'),
		86 => array('eighty', 'six'),
		87 => array('eighty', 'seven'),
		88 => array('eighty', 'eight'),
		89 => array('eighty', 'nine'),
		90 => array('ninety'),
		91 => array('ninety', 'one'),
		92 => array('ninety', 'two'),
		93 => array('ninety', 'three'),
		94 => array('ninety', 'four'),
		95 => array('ninety', 'five'),
		96 => array('ninety', 'six'),
		97 => array('ninety', 'seven'),
		98 => array('ninety', 'eight'),
		99 => array('ninety', 'nine')
	);

	/**
	 * Pass in a number less than one hundred and it will return the corresponding 
	 * word or array of words.
	 *
	 * @param $number (int) || (string)
	 * @return (string) || (array[string])
	 */
	public static function Words($number)
	{
		$number_int = intval($number);

		if ($number_int >=0 && $number_int < 100)
		{
			return $this->words[$number];
		}
		else
		{
			return '';
		}
	}
}
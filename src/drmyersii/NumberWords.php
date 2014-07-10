<?php namespace drmyersii;

use drmyersii\NumberSegment;
use drmyersii\NumberSegmentFactory;
use drmyersii\NumberW;
use drmyersii\Words;


class NumberWords
{
	/**
	 * This function will generate the actual words based on the configuration 
	 * specified. Make any configuration changes before calling this method.
	 *
	 * @param $number (int) || (string)
	 */
	public function MakeWords($number)
	{
		$NumberW = new NumberW($number);
		$NumberSegments = NumberSegmentFactory::MakeSegments($NumberW);
	}
}
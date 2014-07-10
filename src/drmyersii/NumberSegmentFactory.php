<?php namespace drmyersii;

use drmyersii\NumberSegment;


class NumberSegmentFactory
{
	public static function GenerateNumbers()
	{
		
	}

	public static function MakeNumber($number)
	{
		return new NumberSegment($number);
	}
}
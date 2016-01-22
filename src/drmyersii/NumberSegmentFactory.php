<?php namespace drmyersii;

use drmyersii\NumberSegment;
use drmyersii\NumberW;


class NumberSegmentFactory
{
	/**
	 * This will split the number into segments and then convert those segments
	 * into the appropriate type.
	 *
	 * @param $number NumberW
	 * @return NumberSegment[]
	 */
	public static function MakeSegments($number)
	{
		$segments = static::SplitIntoSegments($number);

		return static::MakeNumberSegments($segments);
	}

	/**
	 * This will split the number into chunks and then turn them each into NumberSegments.
	 *
	 * @param $number NumberW
	 * @return string[]
	 */
	public static function SplitIntoSegments($number)
	{
		$number_str = $number->GetStringValue();
		$segments = [];
		$NumberSegments = [];

		while (strlen($number_str) > 0)
		{
			if (strlen($number_str) < 3)
			{
				$segments[] = $number_str;

				break;
			}

			$segment = substr($number_str, -3);
			$number_str = substr($number_str, 0, strlen($number_str) - 3);

			$segments[] = $segment;
		}

		return array_reverse($segments);
	}

	/**
	 * This is the actual factory method that converts regular string segments into
	 * the number segment types we need to work with.
	 *
	 * @param $segments string[]
	 * @return NumberSegment[]
	 */
	public static function MakeNumberSegments($segments)
	{
		$NumberSegments = [];

		foreach ($segments as $segment)
		{
			$NumberSegments[] = new NumberSegment($segment);
		}

		return $NumberSegments;
	}
}

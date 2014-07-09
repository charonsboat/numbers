<?php

namespace drmyersii;

class Numbers
{
	private $ones;
	private $hundreds;
	private $thousands;

	public function __construct()
	{
		$this->ones = array(
			0 => 'zero',
			1 => 'one',
			2 => 'two',
			3 => 'three',
			4 => 'four',
			5 => 'five',
			6 => 'six',
			7 => 'seven',
			8 => 'eight',
			9 => 'nine',
			10 => 'ten',
			11 => 'eleven',
			12 => 'twelve',
			13 => 'thirteen',
			14 => 'fourteen',
			15 => 'fifteen',
			16 => 'sixteen',
			17 => 'seventeen',
			18 => 'eightteen',
			19 => 'nineteen',
			20 => 'twenty',
			30 => 'thirty',
			40 => 'forty',
			50 => 'fifty',
			60 => 'sixty',
			70 => 'seventy',
			80 => 'eighty',
			90 => 'ninety',
		);

		$this->hundreds = array(
			'hundred'
		);

		$this->thousands = array(
			'thousand',
			'million',
			'billion',
			'trillion',
			'quadrillion',
			'quintillion',
			'sextillion',
			'septillion',
			'octillion',
			'nonillion',
			'decillion',
			'undecillion',
			'duodecillion',
			'tredecillion',
			'quattuordecillion',
			'quindecillion',
			'sexdecillion',
			'septendecillion',
			'octodecillion',
			'novemdecillion',
			'vigintillion'
		);
	}

	public function GenerateWords($number)
	{
		if ($number <= 0)
		{
			return $this->ones[0];
		}
		else
		{
			$chunks = $this->SplitNumber($number);
			$words = $this->MakeWords($chunks);

			return $words;
		}
	}

	public function MakeWords($chunks)
	{
		$words = array();
		$index = -1;

		foreach ($chunks as $chunk)
		{
			$one = 		isset($chunk{0}) ? intval($chunk{0}) : null;
			$ten = 		isset($chunk{1}) ? intval($chunk{1}) : null;
			$hundred = 	isset($chunk{2}) ? intval($chunk{2}) : null;

			if ($index >= 0)
			{
				$words[] = $this->thousands[$index];
			}

			if (!is_null($ten) && $ten > 1)
			{
				if ($one != 0)
				{
					$words[] = $this->ones[intval(strval($ten) . '0')] . '-' . $this->ones[$one];
				}
				else
				{
					$words[] = $this->ones[$ten];
				}
			}
			else if (!is_null($ten))
			{
				if ($ten == 1)
				{
					$words[] = $this->ones[intval(strval($ten) . strval($one))];
				}
				else if ($ten == 0)
				{
					if ($one != 0)
					{
						$words[] = $this->ones[$one];
					}
				}
			}
			else if (is_null($ten))
			{
				if ($one != 0)
				{
					$words[] = $this->ones[$one];
				}
			}

			if (!is_null($hundred) && $hundred > 0)
			{
				$words[] = $this->ones[$hundred] . ' ' . $this->hundreds[0];
			}

			++$index;
		}

		$words = array_reverse($words);

		return implode(' ', $words);
	}

	public function SplitNumber($number)
	{
		$reversedNumberAsString = strrev(strval($number));
		$chunks = str_split($reversedNumberAsString, 3);

		return $chunks;
	}
}
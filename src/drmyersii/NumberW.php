<?php namespace drmyersii;


class NumberW
{
	/**
	 * @var $base (int)
	 */
	private $base;

	/**
	 * @var $number (GMP)
	 */
	private $number;

	/**
	 * @var $reference (int) || (string)
	 */
	private $reference;

	/**
	 * This is the contructor for this class. It accepts two parameters. Only the 
	 * first ($number) is required. 
	 *
	 * @param $number (int) || (string)
	 * @param $base (int)
	 */
	public function __construct($number, $base)
	{
		if (isset($base) && is_int($base))
		{
			$this->base = $base;
		}
		else
		{
			$this->base = 10; // Default the number to base 10
		}

		$this->number = gmp_init($number, $this->base);
	}

	/**
	 * This will return the actual integer value of the number. If it is too large, 
	 * it will return the maximun integer value that php supports. Use for strict 
	 * results where an int is required only.
	 *
	 * @return (int)
	 */
	public function GetIntegerValue()
	{
		return gmp_intval($this->number);
	}

	/**
	 * This will return the string value of the number. It will always return a 
	 * string, no matter how small the number is.
	 *
	 * @return (string)
	 */
	public function GetStringValue()
	{
		return gmp_strval($this->number);
	}

	/**
	 * This will return either the integer value of the number or the string value 
	 * (if the integer value is too large). Use this when you prefer to receive 
	 * an integer, but you also don't want the number to be rounded down to the 
	 * maximum integer size if it is too large.
	 *
	 * @return (int) || (string)
	 */
	public function GetValue()
	{

	}
}
<?php namespace drmyersii;


class NumberW
{
	/**
	 * @var $base int
	 */
	private $base;

	/**
	 * @var $number GMP
	 */
	private $number;

	/**
	 * @var $int_max GMP
	 */
	private $int_max;

	/**
	 * @var $reference string
	 */
	private $reference;

	/**
	 * This class accepts two parameters on construction. Only the
	 * first ($number) is required.
	 *
	 * @param $number string
	 * @param $base int
	 */
	public function __construct($number, $base = 10)
	{
		$this->reference = $number;
		$this->base = intval($base);
		$this->int_max = gmp_init(PHP_INT_MAX, $this->base);
		$this->number = gmp_init($number, $this->base);
	}

	/**
	 * This will return the actual integer value of the number. If it is too large,
	 * it will return the maximun integer value that php supports. Use for strict
	 * results where an int is required only.
	 *
	 * @return int
	 */
	public function GetIntegerValue()
	{
		return gmp_intval($this->number);
	}

	/**
	 * This will return the string value of the number. It will always return a
	 * string, no matter how small the number is.
	 *
	 * @return string
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
	 * @return string || int
	 */
	public function GetValue()
	{
		$comparison = gmp_cmp($this->number, $this->int_max);

		if ($comparison > 0)
		{
			return gmp_strval($this->number);
		}
		else
		{
			return gmp_intval($this->number);
		}
	}

	/**
	 * This will return the actual GMP number for use outside of this class.
	 *
	 * @return GMP
	 */
	public function GetNumber()
	{
		return $this->number;
	}
}

<?php namespace drmyersii;


class Words
{
	/**
	 * This is our word object constructed from a json string.
	 *
	 * @var $words object(xx:[], x00:string, x000:[])
	 */
	private $words;

	/**
	 * Accepts a json string that is decoded into our 'words' object.
	 *
	 * @param $words_json string
	 */
	public function __construct($words_json)
	{
		$this->words = (json_decode($words_json))->words;
	}

	/**
	 * Pass in a number that is inclusively between 0 and 99, and it will return the corresponding
	 * words.
	 *
	 * @param $number string
	 * @param $modifier string
	 * @return string
	 */
	public function GetXX($number_str, $modifer)
	{
		$number_int = intval($number_str);

		if ($number_int >= 0 && $number_int < 100)
		{
			if (array_key_exists($number_int, $this->words->xx))
			{
				return $this->words->xx[$number_int];
			}
			else
			{
				throw new Exception('xx: Array index (' . $number_int . ') does not exist in JSON file.');
			}
		}
		else
		{
			throw new Exception('xx: Number is not inclusively between 0 and 99!');
		}
	}

	/**
	 * This returns our word identifier for the hundreds place. E.g. "hundred"
	 *
	 * @return string
	 */
	public function GetX00()
	{
		return $this->words->x00;
	}

	/**
	 * Return the place identifier based on the thousands place index. E.g. GetX000(2); // returns "billion"
	 *
	 * @param $index int
	 * @return string
	 */
	public function GetX000($index)
	{
		if (array_key_exists($index, $this->words->x000))
		{
			return $this->words->x000;
		}
		else
		{
			throw new Exception('x000: Array index (' . $index . ') does not exist in JSON file.');
		}
	}
}

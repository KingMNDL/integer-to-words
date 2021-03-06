<?php

namespace Tools;

/**
 * Class Converter
 */
class Converter {
	const MIN = -99999;
	const MAX = 99999;
	
	/**
	 * Function to convert integer number
	 * to english word
	 * @param int $n 
	 * @return string
	 */
	public function convertNumberToEnglishText($n):string {

		if ($n < SELF::MIN || $n > SELF::MAX) {
			return 'not implemented';
		}

		$numbersAsText = [
			1000=> 'thousand',
			100 => 'hundred',
			90  => 'ninety',
			80  => 'eighty',
			70  => 'seventy',
			60  => 'sixty',
			50  => 'fifty',
			40  => 'forty',
			30  => 'thirty',
			20  => 'twenty',
			19  => 'nineteen',
			18  => 'eighteen',
			17  => 'seventeen',
			16  => 'sixteen',
			15  => 'fifteen',
			14  => 'fourteen',
			13  => 'thirteen',
			12  => 'twelve',
			11  => 'eleven',
			10  => 'ten',
			9   => 'nine',
			8   => 'eight',
			7   => 'seven',
			6   => 'six',
			5   => 'five',
			4   => 'four',
			3   => 'three',
			2   => 'two',
			1   => 'one'
		];

		if (!$n) {
			return 'zero';
		}

		$englishText = '';
		if ($n < 0) {
			$englishText .= 'negative';
			$n *= -1;
		}

		foreach ($numbersAsText as $numeric => $text) {
			if ($n >= $numeric) {
				$multiplier = intval($n/$numeric);
				$englishText .= $englishText?' ':'';
				if ($numeric > 99) {
					$englishText .= $this->convertNumberToEnglishText($multiplier).' ';
				}
				$englishText .= $text;
				$n -= $multiplier*$numeric;

				if (!$n) {
					break;
				}
			}
		}

		return $englishText;
	}
}

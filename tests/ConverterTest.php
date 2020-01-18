
Deprecated: The each() function is deprecated. This message will be suppressed on further calls in /Users/mindaugaskalinauskas/Library/Application Support/Sublime Text 3/Packages/PHPTools/php.tools/codeFormatter.php on line 54
Deprecated: The each() function is deprecated. This message will be suppressed on further calls in /Users/mindaugaskalinauskas/Library/Application Support/Sublime Text 3/Packages/PHPTools/php.tools/codeFormatter.php on line 54
<?php

use Tools\Converter;

class ConverterTest extends PHPUnit\Framework\TestCase {
	protected $converter;

	public function setUp():void {
		$this->converter = new Converter();
	}
	/** @test */
	public function shouldPrintZeroFor0() {
		$this->assertEquals('zero', $this->converter->convertNumberToEnglishText(0));
	}
	/** @test */
	public function shouldPrintZeroForNegative0() {
		$this->assertEquals('zero', $this->converter->convertNumberToEnglishText(-0));
	}
	/** @test */
	public function shouldPrintNineteenFor19() {
		$this->assertEquals('nineteen', $this->converter->convertNumberToEnglishText(19));
	}
	/** @test */
	public function shouldPrintTwentyFor20() {
		$this->assertEquals('twenty', $this->converter->convertNumberToEnglishText(20));
	}
	/** @test */
	public function shouldPrintCorrectlyFor100() {
		$this->assertEquals('one hundred', $this->converter->convertNumberToEnglishText(100));
	}
	/** @test */
	public function shouldPrintCorrectlyFor101() {
		$this->assertEquals('seven hundred thirty nine', $this->converter->convertNumberToEnglishText(739));
	}
	/** @test */
	public function shouldPrintCorrectlyFor739() {
		$this->assertEquals('one hundred one', $this->converter->convertNumberToEnglishText(101));
	}
	/** @test */
	public function shouldPrintCorrectlyFor1234() {
		$this->assertEquals('one thousand two hundred thirty four', $this->converter->convertNumberToEnglishText(1234));
	}
	/** @test */
	public function shouldPrintCorrectlyFor10000() {
		$this->assertEquals('ten thousand', $this->converter->convertNumberToEnglishText(10000));
	}
	/** @test */
	public function shouldPrintCorrectlyFor60019() {
		$this->assertEquals('sixty thousand nineteen', $this->converter->convertNumberToEnglishText(60019));
	}
	/** @test */
	public function shouldPrintCorrectlyFor67567() {
		$this->assertEquals('sixty seven thousand five hundred sixty seven', $this->converter->convertNumberToEnglishText(67567));
	}
	/** @test */
	public function shouldPrintCorrectlyFor99999() {
		$this->assertEquals('ninety nine thousand nine hundred ninety nine', $this->converter->convertNumberToEnglishText(99999));
	}

}
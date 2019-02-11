x<?php

use Koff\Transliterator\Transliterator;
use Koff\Transliterator\Mapping\Lang;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 */
class TransliteratorRUTest extends \PHPUnit\Framework\TestCase
{
    /** @var Transliterator */
    public static $ts;

    public static function setUpBeforeClass()
    {
        self::$ts = new Transliterator();
    }

    /**
     * @dataProvider russianProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testRussian($actual, $expected)
    {
        self::$ts->useMapping(Lang\RU\Scholarly::class);

        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual)
        );
    }

    /**
     * @return array
     */
    public static function russianProvider()
    {
        return [
            ['Ю ю', 'Ju ju'],
            ['Я я', 'Ja ja'],
            ['Транслитерация русского алфавита латиницей', 'Transliteracija russkogo alfavita latinicej'],
            ['Э э', 'È è'],
        ];
    }

    /**
     * @dataProvider russianGOST1971Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST1971($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU\GOST_1971::class)
        );
    }

    /**
     * @return array
     */
    public static function russianGOST1971Provider()
    {
        return [
            ['Щ щ', 'Shh shh'],
            ['Ы ы', "Y y"],
            ['Э э', "Eh eh"],
            ['Х х', "Kh kh"],
            ['Ю ю', 'Ju ju'],
            ['Я я', 'Ja ja'],
            ['Й й', 'Jj jj'],
            ['ь', "'"],
        ];
    }

    /**
     * @dataProvider russianISOR91968Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testRussianISOR91968($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU\ISO_R_9_1968::class)
        );
    }

    /**
     * @return array
     */
    public static function russianISOR91968Provider()
    {
        return [
            ['Ю ю', 'Ju ju'],
            ['Я я', 'Ja ja'],
            ['Э э', 'Ė ė'],
        ];
    }

    /**
     * @dataProvider russianGOST1983Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST1983($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU\GOST_1983::class)
        );
    }

    /**
     * @return array
     */
    public static function russianGOST1983Provider()
    {
        return [
            ['Ю ю', 'Ju ju'],
            ['Я я', 'Ja ja'],
            ['Э э', 'È è'],
        ];
    }

    /**
     * @dataProvider russianGOST2000BProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST2000B($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU\GOST_2000_B::class)
        );
    }

    /**
     * @return array
     */
    public static function russianGOST2000BProvider()
    {
        return [
            ['Щ щ', 'Shh shh'],
            ['Ы ы', "Y' y'"],
            ['Э э', "E' e'"],
            ['Х х', "Kh kh"],
            ['Ю ю', 'Yu yu'],
            ['Я я', 'Ya ya'],
            ['Й й', 'J j'],
        ];
    }

    /**
     * @dataProvider russianGOST2002Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST2002($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU\GOST_2002::class)
        );
    }

    /**
     * @return array
     */
    public static function russianGOST2002Provider()
    {
        return [
            ['Ю ю', 'Û û'],
            ['Я я', 'Â â'],
            ['Э э', 'È è'],
        ];
    }

    /**
     * @dataProvider russianALALCProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testRussianALALC($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU\ALA_LC::class)
        );
    }

    /**
     * @return array
     */
    public static function russianALALCProvider()
    {
        return [
            ['Ю ю', 'I͡u i͡u'],
            ['Я я', 'I͡a i͡a'],
            ['Э э', 'Ė ė'],
        ];
    }

    /**
     * @dataProvider russianBritishStandardProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testRussianBritishStandard($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU\BritishStandard::class)
        );
    }

    /**
     * @return array
     */
    public static function russianBritishStandardProvider()
    {
        return [
            ['Ю ю', 'Yu yu'],
            ['Я я', 'Ya ya'],
            ['Э э', 'É é'],
        ];
    }

    /**
     * @dataProvider russianBGNPCGNProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testRussianBGNPCGN($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU\BGN_PCGN::class)
        );
    }

    /**
     * @return array
     */
    public static function russianBGNPCGNProvider()
    {
        return [
            ['Ю ю', 'Yu yu'],
            ['Я я', 'Ya ya'],
            ['Э э', 'E e'],
        ];
    }

    /**
     * @dataProvider russianPassport1997Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testRussianPassport1997($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU\Passport_1997::class)
        );
    }

    /**
     * @return array
     */
    public static function russianPassport1997Provider()
    {
        return [
            ['Ю ю', 'Yu yu'],
            ['Я я', 'Ya ya'],
            ['Э э', 'E e'],
        ];
    }

    /**
     * @dataProvider russianPassport2010Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testRussianPassport2010($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU\Passport_2010::class)
        );
    }

    /**
     * @return array
     */
    public static function russianPassport2010Provider()
    {
        return [
            ['Ю ю', 'Yu yu'],
            ['Я я', 'Ya ya'],
            ['Э э', 'E e'],
        ];
    }
}

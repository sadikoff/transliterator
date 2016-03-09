<?php

use \Artemiso\Transliterator\Transliterator;
use \Artemiso\Transliterator\Mapping as Lang;

/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 28.12.2015
 * Time: 23:48
 */
class TransliteratorRUTest extends PHPUnit_Framework_TestCase
{
    /** @var Transliterator */
    public static $ts;

    public static function setUpBeforeClass()
    {
        self::$ts = new Transliterator();
    }

    /**
     * @dataProvider testRussianProvider
     * @param $expected
     * @param $actual
     */
    public function testRussian($actual, $expected)
    {
        self::$ts->setCharMapping(Lang\RU::SCHOLARLY);
        
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual)
        );
    }

    /**
     * @return array
     */
    public static function testRussianProvider()
    {
        return array(
            array('Ю ю', 'Ju ju'),
            array('Я я', 'Ja ja'),
            array('Транслитерация русского алфавита латиницей', 'Transliteracija russkogo alfavita latinicej'),
            array('Э э', 'È è'),
        );
    }

    /**
     * @dataProvider testRussianGOST1971Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST1971($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU::GOST_1971)
        );
    }

    /**
     * @return array
     */
    public static function testRussianGOST1971Provider()
    {
        return array(
            array('Щ щ', 'Shh shh'),
            array('Ы ы', "Y y"),
            array('Э э', "Eh eh"),
            array('Х х', "Kh kh"),
            array('Ю ю', 'Ju ju'),
            array('Я я', 'Ja ja'),
            array('Й й', 'Jj jj'),
            array('ь', "'"),
        );
    }

    /**
     * @dataProvider testRussianISOR91968Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianISOR91968($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU::ISO_R_9_1968)
        );
    }

    /**
     * @return array
     */
    public static function testRussianISOR91968Provider()
    {
        return array(
            array('Ю ю', 'Ju ju'),
            array('Я я', 'Ja ja'),
            array('Э э', 'Ė ė'),
        );
    }

    /**
     * @dataProvider testRussianGOST1983Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST1983($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU::GOST_1983)
        );
    }

    /**
     * @return array
     */
    public static function testRussianGOST1983Provider()
    {
        return array(
            array('Ю ю', 'Ju ju'),
            array('Я я', 'Ja ja'),
            array('Э э', 'È è'),
        );
    }

    /**
     * @dataProvider testRussianGOST2000BProvider
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST2000B($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU::GOST_2000_B)
        );
    }

    /**
     * @return array
     */
    public static function testRussianGOST2000BProvider()
    {
        return array(
            array('Щ щ', 'Shh shh'),
            array('Ы ы', "Y' y'"),
            array('Э э', "E' e'"),
            array('Х х', "Kh kh"),
            array('Ю ю', 'Yu yu'),
            array('Я я', 'Ya ya'),
            array('Й й', 'J j'),
        );
    }

    /**
     * @dataProvider testRussianGOST2002Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST2002($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU::GOST_2002)
        );
    }

    /**
     * @return array
     */
    public static function testRussianGOST2002Provider()
    {
        return array(
            array('Ю ю', 'Û û'),
            array('Я я', 'Â â'),
            array('Э э', 'È è'),
        );
    }

    /**
     * @dataProvider testRussianALALCProvider
     * @param $expected
     * @param $actual
     */
    public function testRussianALALC($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU::ALA_LC)
        );
    }

    /**
     * @return array
     */
    public static function testRussianALALCProvider()
    {
        return array(
            array('Ю ю', 'I͡u i͡u'),
            array('Я я', 'I͡a i͡a'),
            array('Э э', 'Ė ė'),
        );
    }

    /**
     * @dataProvider testRussianBritishStandardProvider
     * @param $expected
     * @param $actual
     */
    public function testRussianBritishStandard($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU::BRITISH_STANDARD)
        );
    }

    /**
     * @return array
     */
    public static function testRussianBritishStandardProvider()
    {
        return array(
            array('Ю ю', 'Yu yu'),
            array('Я я', 'Ya ya'),
            array('Э э', 'É é'),
        );
    }

    /**
     * @dataProvider testRussianBGNPCGNProvider
     * @param $expected
     * @param $actual
     */
    public function testRussianBGNPCGN($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU::BGN_PCGN)
        );
    }

    /**
     * @return array
     */
    public static function testRussianBGNPCGNProvider()
    {
        return array(
            array('Ю ю', 'Yu yu'),
            array('Я я', 'Ya ya'),
            array('Э э', 'E e'),
        );
    }

    /**
     * @dataProvider testRussianPassport1997Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianPassport1997($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU::PASSPORT_1997)
        );
    }

    /**
     * @return array
     */
    public static function testRussianPassport1997Provider()
    {
        return array(
            array('Ю ю', 'Yu yu'),
            array('Я я', 'Ya ya'),
            array('Э э', 'E e'),
        );
    }

    /**
     * @dataProvider testRussianPassport2010Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianPassport2010($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\RU::PASSPORT_2010)
        );
    }

    /**
     * @return array
     */
    public static function testRussianPassport2010Provider()
    {
        return array(
            array('Ю ю', 'Yu yu'),
            array('Я я', 'Ya ya'),
            array('Э э', 'E e'),
        );
    }
}

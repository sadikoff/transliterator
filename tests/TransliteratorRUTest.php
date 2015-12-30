<?php

use \Artemiso\Transliterator\Transliterator;
use \Artemiso\Transliterator\Settings;
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 28.12.2015
 * Time: 23:48
 */
class TransliteratorRUTest extends PHPUnit_Framework_TestCase
{
    /**
     * Transliterator.
     *
     * @var Transliterator
     */
    protected static $transliterator;

    public static function setUpBeforeClass()
    {
        self::$transliterator = new Transliterator(Settings\Language::RU);
    }

    /**
     * @dataProvider testRussianProvider
     * @param $expected
     * @param $actual
     */
    public function testRussianCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::SCHOLARLY)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testRussianProvider
     * @param $expected
     * @param $actual
     */
    public function testRussianLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::SCHOLARLY)->lat2Cyr($actual));
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
            array('Э э', 'È è')
        );
    }

    /**
     * @dataProvider testRussianGOST1971Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST1971Cyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::GOST_1971)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testRussianGOST1971Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST1971Lat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::GOST_1971)->lat2Cyr($actual));
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
    public function testRussianISOR91968Cyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ISO_R_9_1968)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testRussianISOR91968Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianISOR91968Lat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ISO_R_9_1968)->lat2Cyr($actual));
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
    public function testRussianGOST1983Cyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::GOST_1983)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testRussianGOST1983Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST1983Lat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::GOST_1983)->lat2Cyr($actual));
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
    public function testRussianGOST2000BCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::GOST_2000_B)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testRussianGOST2000BProvider
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST2000BLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::GOST_2000_B)->lat2Cyr($actual));
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
            array('Й й', 'J j')
        );
    }

    /**
     * @dataProvider testRussianGOST2002Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST2002Cyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::GOST_2002)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testRussianGOST2002Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianGOST2002Lat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::GOST_2002)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testRussianGOST2002Provider()
    {
        return array(
            array('Ю ю', 'Û û'),
            array('Я я', 'Â â'),
            array('Э э', 'È è')
        );
    }

    /**
     * @dataProvider testRussianALALCProvider
     * @param $expected
     * @param $actual
     */
    public function testRussianALALCCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ALA_LC)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testRussianALALCProvider
     * @param $expected
     * @param $actual
     */
    public function testRussianALALCLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ALA_LC)->lat2Cyr($actual));
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
    public function testRussianBritishStandardCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::British_Standard)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testRussianBritishStandardProvider
     * @param $expected
     * @param $actual
     */
    public function testRussianBritishStandardLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::British_Standard)->lat2Cyr($actual));
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
    public function testRussianBGNPCGNCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::BGN_PCGN)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testRussianBGNPCGNProvider
     * @param $expected
     * @param $actual
     */
    public function testRussianBGNPCGNLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::BGN_PCGN)->lat2Cyr($actual));
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
    public function testRussianPassport1997Cyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::Passport_1997)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testRussianPassport1997Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianPassport1997Lat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::Passport_1997)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testRussianPassport1997Provider()
    {
        return array(
            array('Ю ю', 'Yu yu'),
            array('Я я', 'Ya ya'),
            array('Э э', 'E e')
        );
    }

    /**
     * @dataProvider testRussianPassport2010Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianPassport2010Cyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::Passport_2010)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testRussianPassport2010Provider
     * @param $expected
     * @param $actual
     */
    public function testRussianPassport2010Lat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::Passport_2010)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testRussianPassport2010Provider()
    {
        return array(
            array('Ю ю', 'Yu yu'),
            array('Я я', 'Ya ya'),
            array('Э э', 'E e')
        );
    }
}

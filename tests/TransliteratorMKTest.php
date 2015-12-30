<?php

use \Artemiso\Transliterator\Transliterator;
use \Artemiso\Transliterator\Settings;
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 28.12.2015
 * Time: 23:48
 */
class TransliteratorMKTest extends PHPUnit_Framework_TestCase
{
    /**
     * Transliterator.
     *
     * @var Transliterator
     */
    protected static $transliterator;

    public static function setUpBeforeClass()
    {
        self::$transliterator = new Transliterator(Settings\Language::MK);
    }

    /**
     * @dataProvider testMacedonianProvider
     * @param $expected
     * @param $actual
     */
    public function testMacedonianCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::SCHOLARLY)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testMacedonianProvider
     * @param $expected
     * @param $actual
     */
    public function testMacedonianLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::SCHOLARLY)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testMacedonianProvider()
    {
        return array(
            array('а б в г д ѓ е ж з ѕ и ј к л љ м н њ о п р с т ќ у ф х ц ч џ ш', 'a b v g d gj e zh z dz i j k l lj m n nj o p r s t kj u f h c ch dj sh')
        );
    }

    /**
     * @dataProvider testMacedonianISO91995Provider
     * @param $expected
     * @param $actual
     */
    public function testMacedonianISO91995Cyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ISO_9_1995)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testMacedonianISO91995Provider
     * @param $expected
     * @param $actual
     */
    public function testMacedonianISO91995Lat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ISO_9_1995)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testMacedonianISO91995Provider()
    {
        return array(
            array('а б в г д ѓ е ж з ѕ и ј к л љ м н њ о п р с т ќ у ф х ц ч џ ш', 'a b v g d ǵ e ž z ẑ i ǰ k l l̂ m n n̂ o p r s t ḱ u f h c č d̂ š')
        );
    }

    /**
     * @dataProvider testMacedonianBGNPCGNProvider
     * @param $expected
     * @param $actual
     */
    public function testMacedonianBGNPCGNCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::BGN_PCGN)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testMacedonianBGNPCGNProvider
     * @param $expected
     * @param $actual
     */
    public function testMacedonianBGNPCGNLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::BGN_PCGN)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testMacedonianBGNPCGNProvider()
    {
        return array(
            array('а б в г д ѓ е ж з ѕ и ј к л љ м н њ о п р с т ќ у ф х ц ч џ ш', 'a b v g d đ e ž z dz i j k l lj m n nj o p r s t ć u f h c č dž š')
        );
    }

    /**
     * @dataProvider testMacedonianISO9R1968NAProvider
     * @param $expected
     * @param $actual
     */
    public function testMacedonianISO9R1968NACyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ISO_9_R_1968_NA)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testMacedonianISO9R1968NAProvider
     * @param $expected
     * @param $actual
     */
    public function testMacedonianISO9R1968NALat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ISO_9_R_1968_NA)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testMacedonianISO9R1968NAProvider()
    {
        return array(
            array('а б в г д ѓ е ж з ѕ и ј к л љ м н њ о п р с т ќ у ф х ц ч џ ш', 'a b v g d ǵ e ž z dz i j k l lj m n nj o p r s t ḱ u f h c č dž š')
        );
    }

    /**
     * @dataProvider testMacedonianISO9R1968bProvider
     * @param $expected
     * @param $actual
     */
    public function testMacedonianISO9R1968bCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ISO_9_R_1968_B)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testMacedonianISO9R1968bProvider
     * @param $expected
     * @param $actual
     */
    public function testMacedonianISO9R1968bLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ISO_9_R_1968_B)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testMacedonianISO9R1968bProvider()
    {
        return array(
            array('а б в г д ѓ е ж з ѕ и ј к л љ м н њ о п р с т ќ у ф х ц ч џ ш', 'a b v g d ǵ e zh z dz i j k l lj m n nj o p r s t ḱ u f kh ts ch dž sh')
        );
    }
}

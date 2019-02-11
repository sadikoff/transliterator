<?php

use Koff\Transliterator\Transliterator;
use Koff\Transliterator\Mapping\Lang;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 */
class TransliteratorMKTest extends \PHPUnit\Framework\TestCase
{
    /** @var Transliterator */
    public static $ts;

    public static function setUpBeforeClass()
    {
        self::$ts = new Transliterator();
    }

    /**
     * @dataProvider macedonianProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testMacedonian($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\MK\Scholarly::class)
        );
    }

    /**
     * @return array
     */
    public static function macedonianProvider()
    {
        return [
            [
                'а б в г д ѓ е ж з ѕ и ј к л љ м н њ о п р с т ќ у ф х ц ч џ ш',
                'a b v g d gj e zh z dz i j k l lj m n nj o p r s t kj u f h c ch dj sh',
            ],
        ];
    }

    /**
     * @dataProvider macedonianISO91995Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testMacedonianISO91995($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\MK\ISO_9_1995::class)
        );
    }

    /**
     * @return array
     */
    public static function macedonianISO91995Provider()
    {
        return [
            [
                'а б в г д ѓ е ж з ѕ и ј к л љ м н њ о п р с т ќ у ф х ц ч џ ш',
                'a b v g d ǵ e ž z ẑ i ǰ k l l̂ m n n̂ o p r s t ḱ u f h c č d̂ š',
            ],
        ];
    }

    /**
     * @dataProvider macedonianBGNPCGNProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testMacedonianBGNPCGN($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\MK\BGN_PCGN::class)
        );
    }

    /**
     * @return array
     */
    public static function macedonianBGNPCGNProvider()
    {
        return [
            [
                'а б в г д ѓ е ж з ѕ и ј к л љ м н њ о п р с т ќ у ф х ц ч џ ш',
                'a b v g d đ e ž z dz i j k l lj m n nj o p r s t ć u f h c č dž š',
            ],
        ];
    }

    /**
     * @dataProvider macedonianISO9R1968NAProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testMacedonianISO9R1968NA($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\MK\ISO_9_R_1968_NA::class)
        );
    }

    /**
     * @return array
     */
    public static function macedonianISO9R1968NAProvider()
    {
        return [
            [
                'а б в г д ѓ е ж з ѕ и ј к л љ м н њ о п р с т ќ у ф х ц ч џ ш',
                'a b v g d ǵ e ž z dz i j k l lj m n nj o p r s t ḱ u f h c č dž š',
            ],
        ];
    }

    /**
     * @dataProvider macedonianISO9R1968bProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testMacedonianISO9R1968b($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\MK\ISO_9_R_1968_B::class)
        );
    }

    /**
     * @return array
     */
    public static function macedonianISO9R1968bProvider()
    {
        return [
            [
                'а б в г д ѓ е ж з ѕ и ј к л љ м н њ о п р с т ќ у ф х ц ч џ ш',
                'a b v g d ǵ e zh z dz i j k l lj m n nj o p r s t ḱ u f kh ts ch dž sh',
            ],
        ];
    }
}

<?php

use Koff\Transliterator\Transliterator;
use Koff\Transliterator\Mapping\Lang;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 */
class TransliteratorUATest extends \PHPUnit\Framework\TestCase
{
    /** @var Transliterator */
    public static $ts;

    public static function setUpBeforeClass()
    {
        self::$ts = new Transliterator();
    }

    /**
     * @dataProvider ukrainianProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testUkrainian($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\UA\Scholarly::class)
        );
    }

    /**
     * @return array
     */
    public static function ukrainianProvider()
    {
        return [
            [
                'а б в г ґ д е є ж з и і ї й к л м н о п р с т у ф х ц ч ш щ ь ю я',
                'a b v h g d e je ž z y i ji j k l m n o p r s t u f x c č š šč ′ ju ja',
            ],
        ];
    }

    /**
     * @dataProvider ukrainianALALCProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testUkrainianALALC($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\UA\ALA_LC::class)
        );
    }

    /**
     * @return array
     */
    public static function ukrainianALALCProvider()
    {
        return [
            [
                'а б в г ґ д е є ж з и і ї й к л м н о п р с т у ф х ц ч ш щ ь ю я',
                'a b v h g d e i͡e z͡h z y i ï ĭ k l m n o p r s t u f kh t͡s ch sh shch ′ i͡u i͡a',
            ],
        ];
    }

    /**
     * @dataProvider ukrainianBritishProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testUkrainianBritish($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\UA\British::class)
        );
    }

    /**
     * @return array
     */
    public static function ukrainianBritishProvider()
    {
        return [
            [
                'а б в г г д е є ж з и і ї й к л м н о п р с т у ф х ц ч ш щ ь ю я',
                'a b v g g d e ye zh z y i ï ĭ k l m n o p r s t u f kh ts ch sh shch ′ yu ya',
            ],
        ];
    }

    /**
     * @dataProvider ukrainianBGNPCGNProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testUkrainianBGNPCGN($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\UA\BGN_PCGN::class)
        );
    }

    /**
     * @return array
     */
    public static function ukrainianBGNPCGNProvider()
    {
        return [
            [
                'а б в г ґ д е є ж з и і ї и к л м н о п р с т у ф х ц ч ш щ ь ю я',
                'a b v h g d e ye zh z y i yi y k l m n o p r s t u f kh ts ch sh shch ’ yu ya',
            ],
        ];
    }

    /**
     * @dataProvider ukrainianISO9Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testUkrainianISO9($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\UA\ISO_9::class)
        );
    }

    /**
     * @return array
     */
    public static function ukrainianISO9Provider()
    {
        return [
            [
                'а б в г д е є ж з и і ї й к л м н о п р с т у ф х ц ч ш щ ь ю я',
                'a b v g d e ê ž z i ì ï j k l m n o p r s t u f h c č š ŝ ′ û â',
            ],
        ];
    }

    /**
     * @dataProvider ukrainianNationalProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testUkrainianNational($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\UA\National::class)
        );
    }

    /**
     * @return array
     */
    public static function ukrainianNationalProvider()
    {
        return [
            [
                'а б в г ґ д е є ж з и і і і к л м н о п р с т у ф х ц ч ш щ ь ю я',
                'a b v h g d e ie zh z y i i i k l m n o p r s t u f kh ts ch sh sch ’ iu ia',
            ],
        ];
    }

    /**
     * @dataProvider ukrainianGOST1971Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testUkrainianGOST1971($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\UA\GOST_1971::class)
        );
    }

    /**
     * @return array
     */
    public static function ukrainianGOST1971Provider()
    {
        return [
            [
                'а б в г д е є ж з и ї й к л м н о п р с т у ф х ц ч ш щ ь ю я',
                "a b v g d e je zh z i ji j k l m n o p r s t u f kh c ch sh shh ' ju ja",
            ],
        ];
    }

    /**
     * @dataProvider ukrainianGOST1986Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testUkrainianGOST1986($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\UA\GOST_1986::class)
        );
    }

    /**
     * @return array
     */
    public static function ukrainianGOST1986Provider()
    {
        return [
            [
                'а б в г д е є ж з й к л м н о п р с т у ф х ц ч ш щ ь ю я',
                "a b v g d e je ž z j k l m n o p r s t u f h c č š šč ' ju ja",
            ],
        ];
    }

    /**
     * @dataProvider ukrainianDerzhstandart1995Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testUkrainianDerzhstandart1995($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\UA\Derzhstandart_1995::class)
        );
    }

    /**
     * @return array
     */
    public static function ukrainianDerzhstandart1995Provider()
    {
        return [
            [
                'а б в г ґ д е є ж з и і ї й к л м н о п р с т у ф х ц ч ш щ ю я',
                'a b v gh g d e je zh z y i ji j k l m n o p r s t u f kh c ch sh shh ju ja',
            ],
        ];
    }

    /**
     * @dataProvider ukrainianPassport2004Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testUkrainianPassport2004($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\UA\Passport_2004::class)
        );
    }

    /**
     * @return array
     */
    public static function ukrainianPassport2004Provider()
    {
        return [
            [
                'а б в г ґ д е к л м н о п р с т у ф х ц ч ш щ ь ю я',
                "a b v h g d e k l m n o p r s t u f kh ts ch sh shch ' iu ia",
            ],
        ];
    }

    /**
     * @dataProvider ukrainianPassport2007Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testUkrainianPassport2007($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\UA\Passport_2007::class)
        );
    }

    /**
     * @return array
     */
    public static function ukrainianPassport2007Provider()
    {
        return [
            [
                'а б в г д е є ж з и к л м н о п р с т у ф х ц ч ш щ ю я',
                'a b v g d e ie zh z y k l m n o p r s t u f kh ts ch sh shch iu ia',
            ],
        ];
    }

    /**
     * @dataProvider ukrainianPassport2010Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testUkrainianPassport2010($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\UA\Passport_2010::class)
        );
    }

    /**
     * @return array
     */
    public static function ukrainianPassport2010Provider()
    {
        return [
            [
                'а б в г ґ д е є и к л м н о п р с т у ф х ц ч ш щ ю я',
                'a b v h g d e i y k l m n o p r s t u f kh ts ch sh shch iu ia',
            ],
        ];
    }
}

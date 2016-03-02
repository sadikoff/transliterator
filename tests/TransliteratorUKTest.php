<?php

use \Artemiso\Transliterator\Phrase;
use \Artemiso\Transliterator\Mapping as Lang;

class TransliteratorUKTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider testUkrainianProvider
     * @param $expected
     * @param $actual
     */
    public function testUkrainianCyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected, 
            Phrase::transliterate($actual, Lang\UK::SCHOLARLY)
        );
    }

    /**
     * @return array
     */
    public static function testUkrainianProvider()
    {
        return array(
            array(
                'а б в г ґ д е є ж з и і ї й к л м н о п р с т у ф х ц ч ш щ ь ю я',
                'a b v h g d e je ž z y i ji j k l m n o p r s t u f x c č š šč ′ ju ja',
            ),
        );
    }

    /**
     * @dataProvider testUkrainianALALCProvider
     * @param $expected
     * @param $actual
     */
    public function testUkrainianALALCCyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected, 
            Phrase::transliterate($actual, Lang\UK::ALA_LC)
        );
    }

    /**
     * @return array
     */
    public static function testUkrainianALALCProvider()
    {
        return array(
            array(
                'а б в г ґ д е є ж з и і ї й к л м н о п р с т у ф х ц ч ш щ ь ю я',
                'a b v h g d e i͡e z͡h z y i ï ĭ k l m n o p r s t u f kh t͡s ch sh shch ′ i͡u i͡a',
            ),
        );
    }

    /**
     * @dataProvider testUkrainianBritishProvider
     * @param $expected
     * @param $actual
     */
    public function testtestUkrainianBritishCyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected, 
            Phrase::transliterate($actual, Lang\UK::BRITISH)
        );
    }

    /**
     * @return array
     */
    public static function testUkrainianBritishProvider()
    {
        return array(
            array(
                'а б в г г д е є ж з и і ї й к л м н о п р с т у ф х ц ч ш щ ь ю я',
                'a b v g g d e ye zh z y i ï ĭ k l m n o p r s t u f kh ts ch sh shch ′ yu ya',
            ),
        );
    }

    /**
     * @dataProvider testUkrainianBGNPCGNProvider
     * @param $expected
     * @param $actual
     */
    public function testUkrainianBGNPCGNCyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected, 
            Phrase::transliterate($actual, Lang\UK::BGN_PCGN)
        );
    }

    /**
     * @return array
     */
    public static function testUkrainianBGNPCGNProvider()
    {
        return array(
            array(
                'а б в г ґ д е є ж з и і ї и к л м н о п р с т у ф х ц ч ш щ ь ю я',
                'a b v h g d e ye zh z y i yi y k l m n o p r s t u f kh ts ch sh shch ’ yu ya',
            ),
        );
    }

    /**
     * @dataProvider testUkrainianISO9Provider
     * @param $expected
     * @param $actual
     */
    public function testUkrainianISO9Cyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected, 
            Phrase::transliterate($actual, Lang\UK::ISO_9)
        );
    }

    /**
     * @return array
     */
    public static function testUkrainianISO9Provider()
    {
        return array(
            array(
                'а б в г д е є ж з и і ї й к л м н о п р с т у ф х ц ч ш щ ь ю я',
                'a b v g d e ê ž z i ì ï j k l m n o p r s t u f h c č š ŝ ′ û â',
            ),
        );
    }

    /**
     * @dataProvider testUkrainianNationalProvider
     * @param $expected
     * @param $actual
     */
    public function testUkrainianNationalCyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected, 
            Phrase::transliterate($actual, Lang\UK::NATIONAL)
        );
    }

    /**
     * @return array
     */
    public static function testUkrainianNationalProvider()
    {
        return array(
            array(
                'а б в г ґ д е є ж з и і і і к л м н о п р с т у ф х ц ч ш щ ь ю я',
                'a b v h g d e ie zh z y i i i k l m n o p r s t u f kh ts ch sh sch ’ iu ia',
            ),
        );
    }

    /**
     * @dataProvider testUkrainianGOST1971Provider
     * @param $expected
     * @param $actual
     */
    public function testUkrainianGOST1971Cyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected, 
            Phrase::transliterate($actual, Lang\UK::GOST_1971)
        );
    }

    /**
     * @return array
     */
    public static function testUkrainianGOST1971Provider()
    {
        return array(
            array(
                'а б в г д е є ж з и ї й к л м н о п р с т у ф х ц ч ш щ ь ю я',
                "a b v g d e je zh z i ji j k l m n o p r s t u f kh c ch sh shh ' ju ja",
            ),
        );
    }

    /**
     * @dataProvider testUkrainianGOST1986Provider
     * @param $expected
     * @param $actual
     */
    public function testUkrainianGOST1986Cyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected, 
            Phrase::transliterate($actual, Lang\UK::GOST_1986)
        );
    }

    /**
     * @return array
     */
    public static function testUkrainianGOST1986Provider()
    {
        return array(
            array(
                'а б в г д е є ж з й к л м н о п р с т у ф х ц ч ш щ ь ю я',
                "a b v g d e je ž z j k l m n o p r s t u f h c č š šč ' ju ja",
            ),
        );
    }

    /**
     * @dataProvider testUkrainianDerzhstandart1995Provider
     * @param $expected
     * @param $actual
     */
    public function testUkrainianDerzhstandart1995Cyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            Phrase::transliterate($actual, Lang\UK::DERZHSTANDART_1995)
        );
    }

    /**
     * @return array
     */
    public static function testUkrainianDerzhstandart1995Provider()
    {
        return array(
            array(
                'а б в г ґ д е є ж з и і ї й к л м н о п р с т у ф х ц ч ш щ ю я',
                'a b v gh g d e je zh z y i ji j k l m n o p r s t u f kh c ch sh shh ju ja',
            ),
        );
    }

    /**
     * @dataProvider testUkrainianPassport2004Provider
     * @param $expected
     * @param $actual
     */
    public function testUkrainianPassport2004Cyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            Phrase::transliterate($actual, Lang\UK::PASSPORT_2004)
        );
    }

    /**
     * @return array
     */
    public static function testUkrainianPassport2004Provider()
    {
        return array(
            array(
                'а б в г ґ д е к л м н о п р с т у ф х ц ч ш щ ь ю я',
                "a b v h g d e k l m n o p r s t u f kh ts ch sh shch ' iu ia",
            ),
        );
    }

    /**
     * @dataProvider testUkrainianPassport2007Provider
     * @param $expected
     * @param $actual
     */
    public function testUkrainianPassport2007Cyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            Phrase::transliterate($actual, Lang\UK::PASSPORT_2007)
        );
    }

    /**
     * @return array
     */
    public static function testUkrainianPassport2007Provider()
    {
        return array(
            array(
                'а б в г д е є ж з и к л м н о п р с т у ф х ц ч ш щ ю я',
                'a b v g d e ie zh z y k l m n o p r s t u f kh ts ch sh shch iu ia',
            ),
        );
    }

    /**
     * @dataProvider testUkrainianPassport2010Provider
     * @param $expected
     * @param $actual
     */
    public function testUkrainianPassport2010Cyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            Phrase::transliterate($actual, Lang\UK::PASSPORT_2010)
        );
    }

    /**
     * @return array
     */
    public static function testUkrainianPassport2010Provider()
    {
        return array(
            array(
                'а б в г ґ д е є и к л м н о п р с т у ф х ц ч ш щ ю я',
                'a b v h g d e i y k l m n o p r s t u f kh ts ch sh shch iu ia',
            ),
        );
    }
}

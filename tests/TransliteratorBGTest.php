<?php

use \Artemiso\Transliterator\Phrase;
use \Artemiso\Transliterator\Mapping as Lang;

/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 28.12.2015
 * Time: 23:48
 */
class TransliteratorBGTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider testBulgarianProvider
     * @param $expected
     * @param $actual
     */
    public function testBulgarianCyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            Phrase::transliterate($actual, Lang\BG::SCHOLARLY)
        );
    }

    /**
     * @return array
     */
    public static function testBulgarianProvider()
    {
        return array(
            array(
                'а б в г д е з и к л м н о п р с т ф ж ч ш щ ц х й ю я ь у ъ ѣ ѫ',
                'a b v g d e z i k l m n o p r s t f ž č š ŝ c h j û â ′ u ″ ě ǎ',
            ),
        );
    }
}

<?php

use Koff\Transliterator\Transliterator;
use Koff\Transliterator\Mapping\Lang;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 */
class TransliteratorBGTest extends \PHPUnit\Framework\TestCase
{
    /** @var Transliterator */
    public static $ts;

    public static function setUpBeforeClass()
    {
        self::$ts = new Transliterator();
    }

    /**
     * @dataProvider bulgarianProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testBulgarian($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\BG\Scholarly::class)
        );
    }

    /**
     * @return array
     */
    public static function bulgarianProvider()
    {
        return [
            [
                'а б в г д е з и к л м н о п р с т ф ж ч ш щ ц х й ю я ь у ъ ѣ ѫ',
                'a b v g d e z i k l m n o p r s t f ž č š ŝ c h j û â ′ u ″ ě ǎ',
            ],
        ];
    }
}

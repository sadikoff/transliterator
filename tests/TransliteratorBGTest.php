<?php

use \Artemiso\Transliterator\Transliterator;
use \Artemiso\Transliterator\Settings;
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 28.12.2015
 * Time: 23:48
 */
class TransliteratorBGTest extends PHPUnit_Framework_TestCase
{
    /**
     * Transliterator.
     *
     * @var Transliterator
     */
    protected static $transliterator;

    public static function setUpBeforeClass()
    {
        self::$transliterator = new Transliterator(Settings\Language::BG);
    }

    /**
     * @dataProvider testBulgarianProvider
     * @param $expected
     * @param $actual
     */
    public function testBulgarianCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::SCHOLARLY)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testBulgarianProvider
     * @param $expected
     * @param $actual
     */
    public function testBulgarianLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::SCHOLARLY)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testBulgarianProvider()
    {
        return array(
            array('а б в г д е з и к л м н о п р с т ф ж ч ш щ ц х й ю я ь у ъ ѣ ѫ', 'a b v g d e z i k l m n o p r s t f ž č š ŝ c h j û â ′ u ″ ě ǎ')
        );
    }
}

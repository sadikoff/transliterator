<?php

use \Artemiso\Transliterator\Transliterator;
use \Artemiso\Transliterator\Settings;
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 28.12.2015
 * Time: 23:48
 */
class TransliteratorSRTest extends PHPUnit_Framework_TestCase
{
    /**
     * Transliterator.
     *
     * @var Transliterator
     */
    protected static $transliterator;

    public static function setUpBeforeClass()
    {
        self::$transliterator = new Transliterator(Settings\Language::SR);
    }

    /**
     * @dataProvider testSerbianProvider
     * @param $expected
     * @param $actual
     */
    public function testSerbianLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->lat2Cyr($actual));
    }

    /**
     * @dataProvider testSerbianProvider
     * @param $expected
     * @param $actual
     */
    public function testSerbianCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->cyr2Lat($actual));
    }

    /**
     * @return array
     */
    public static function testSerbianProvider()
    {
        return array(
            array('Ниш', 'Niš'),
            array('Тест са белим знацима.', 'Test sa belim znacima.'),
            array('Љ', 'Lj'),
            array('ЧЋШЂЉЊчћшђљњ', 'ČĆŠĐLjNjčćšđljnj'),
            array('А а Б б В в Г г Д д Е е Ж ж З з И и К к Л л М м Н н О о П п Р р С с Т т У у Ф ф Х х Ц ц Ч ч Ш ш Ј ј Љ љ Њ њ Ћ ћ Ђ ђ Џ џ', 'A a B b V v G g D d E e Ž ž Z z I i K k L l M m N n O o P p R r S s T t U u F f H h C c Č č Š š J j Lj lj Nj nj Ć ć Đ đ Dž dž'),
            array('Србија', 'Srbija')
        );
    }
}

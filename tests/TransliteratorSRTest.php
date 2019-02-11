<?php

use Koff\Transliterator\Transliterator;
use Koff\Transliterator\Mapping\Lang;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 */
class TransliteratorSRTest extends \PHPUnit\Framework\TestCase
{
    /** @var Transliterator */
    public static $ts;

    public static function setUpBeforeClass()
    {
        self::$ts = new Transliterator();
    }

    /**
     * @dataProvider serbianProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testSerbian($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\SR\Scholarly::class)
        );
    }

    /**
     * @return array
     */
    public static function serbianProvider()
    {
        return [
            ['Ниш', 'Niš'],
            ['Тест са белим знацима.', 'Test sa belim znacima.'],
            ['Љ', 'Lj'],
            ['ЧЋШЂЉЊчћшђљњ', 'ČĆŠĐLjNjčćšđljnj'],
            ['А а Б б В в Г г Д д Е е Ж ж З з И и К к Л л М м Н н О о П п Р р С с Т т У у Ф ф Х х Ц ц Ч ч Ш ш Ј ј Љ љ Њ њ Ћ ћ Ђ ђ Џ џ', 'A a B b V v G g D d E e Ž ž Z z I i K k L l M m N n O o P p R r S s T t U u F f H h C c Č č Š š J j Lj lj Nj nj Ć ć Đ đ Dž dž'],
            ['Србија', 'Srbija'],
        ];
    }
}

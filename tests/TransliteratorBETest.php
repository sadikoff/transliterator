<?php

use Koff\Transliterator\Transliterator;
use Koff\Transliterator\Mapping\Lang;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 */
class TransliteratorBETest extends \PHPUnit\Framework\TestCase
{
    /** @var Transliterator */
    public static $ts;

    public static function setUpBeforeClass(): void
    {
        self::$ts = new Transliterator();
    }

    /**
     * @dataProvider belarusianProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testBelarusian($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\BE\Scholarly::class)
        );
    }

    /**
     * @return array
     */
    public static function belarusianProvider()
    {
        return [
            [
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dž  dz  e  ë  ž  z  i  j  k  l  m  n  o  p  r  s  t  u  ŭ  f  x  c  č  š',
            ],
        ];
    }

    /**
     * @dataProvider belarusianALALCProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testBelarusianALALC($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\BE\ALA_LC::class)
        );
    }

    /**
     * @return array
     */
    public static function belarusianALALCProvider()
    {
        return [
            [
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dz͡h  dz  e  i͡o  z͡h  z  i  ĭ  k  l  m  n  o  p  r  s  t  u  ŭ  f  kh  ts  ch  sh',
            ],
        ];
    }

    /**
     * @dataProvider belarusianBGNPCGNProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testBelarusianBGNPCGN($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\BE\BGN_PCGN::class)
        );
    }

    /**
     * @return array
     */
    public static function belarusianBGNPCGNProvider()
    {
        return [
            [
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dzh  dz  ye  yo  zh  z  i  y  k  l  m  n  o  p  r  s  t  u  w  f  kh  ts  ch  sh',
            ],
        ];
    }

    /**
     * @dataProvider belarusianISO9Provider
     *
     * @param $expected
     * @param $actual
     */
    public function testBelarusianISO9($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\BE\ISO_9::class)
        );
    }


    /**
     * @return array
     */
    public static function belarusianISO9Provider()
    {
        return [
            [
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dž  dz  e  ë  ž  z  ì  j  k  l  m  n  o  p  r  s  t  u  ǔ  f  h  c  č  š',
            ],
        ];
    }

    /**
     * @dataProvider belarusianNational2000Provider
     *
     * @param $actual
     * @param $expected
     */
    public function testBelarusianNational2000($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\BE\National_2000::class)
        );
    }

    /**
     * @return array
     */
    public static function belarusianNational2000Provider()
    {
        return [
            [
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dž  dz  ie  io  ž  z  i  j  k  l  m  n  o  p  r  s  t  u  ú  f  ch  c  č  š',
            ],
        ];
    }
}

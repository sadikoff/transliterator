<?php

use \Artemiso\Transliterator\Phrase;
use \Artemiso\Transliterator\Mapping as Lang;

/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 28.12.2015
 * Time: 23:48
 */
class TransliteratorBETest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider testBelarusianProvider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianCyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            Phrase::transliterate($actual, Lang\BE::SCHOLARLY)
        );
    }

    /**
     * @return array
     */
    public static function testBelarusianProvider()
    {
        return array(
            array(
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dž  dz  e  ë  ž  z  i  j  k  l  m  n  o  p  r  s  t  u  ŭ  f  x  c  č  š',
            ),
        );
    }

    /**
     * @dataProvider testBelarusianALALCProvider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianALALCCyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            Phrase::transliterate($actual, Lang\BE::ALA_LC)
        );
    }

    /**
     * @return array
     */
    public static function testBelarusianALALCProvider()
    {
        return array(
            array(
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dz͡h  dz  e  i͡o  z͡h  z  i  ĭ  k  l  m  n  o  p  r  s  t  u  ŭ  f  kh  ts  ch  sh',
            ),
        );
    }

    /**
     * @dataProvider testBelarusianBGNPCGNProvider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianBGNPCGNCyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            Phrase::transliterate($actual, Lang\BE::BGN_PCGN)
        );
    }

    /**
     * @return array
     */
    public static function testBelarusianBGNPCGNProvider()
    {
        return array(
            array(
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dzh  dz  ye  yo  zh  z  i  y  k  l  m  n  o  p  r  s  t  u  w  f  kh  ts  ch  sh',
            ),
        );
    }

    /**
     * @dataProvider testBelarusianISO9Provider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianISO9Cyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            Phrase::transliterate($actual, Lang\BE::ISO_9)
        );
    }


    /**
     * @return array
     */
    public static function testBelarusianISO9Provider()
    {
        return array(
            array(
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dž  dz  e  ë  ž  z  ì  j  k  l  m  n  o  p  r  s  t  u  ǔ  f  h  c  č  š',
            ),
        );
    }

    /**
     * @dataProvider testBelarusianNational2000Provider
     * @param $actual
     * @param $expected
     */
    public function testBelarusianNational2000Cyr2Lat($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            Phrase::transliterate($actual, Lang\BE::NATIONAL_2000)
        );
    }

    /**
     * @return array
     */
    public static function testBelarusianNational2000Provider()
    {
        return array(
            array(
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dž  dz  ie  io  ž  z  i  j  k  l  m  n  o  p  r  s  t  u  ú  f  ch  c  č  š',
            ),
        );
    }
}

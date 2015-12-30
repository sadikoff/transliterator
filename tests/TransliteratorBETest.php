<?php

use \Artemiso\Transliterator\Transliterator;
use \Artemiso\Transliterator\Settings;
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 28.12.2015
 * Time: 23:48
 */
class TransliteratorBETest extends PHPUnit_Framework_TestCase
{
    /**
     * Transliterator.
     *
     * @var Transliterator
     */
    protected static $transliterator;

    public static function setUpBeforeClass()
    {
        self::$transliterator = new Transliterator(Settings\Language::BE);
    }

    /**
     * @dataProvider testBelarusianProvider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::SCHOLARLY)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testBelarusianProvider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::SCHOLARLY)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testBelarusianProvider()
    {
        return array(
            array(
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dž  dz  e  ë  ž  z  i  j  k  l  m  n  o  p  r  s  t  u  ŭ  f  x  c  č  š'
            )
        );
    }

    /**
     * @dataProvider testBelarusianALALCProvider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianALALCCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ALA_LC)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testBelarusianALALCProvider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianALALCLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ALA_LC)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testBelarusianALALCProvider()
    {
        return array(
            array(
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dz͡h  dz  e  i͡o  z͡h  z  i  ĭ  k  l  m  n  o  p  r  s  t  u  ŭ  f  kh  ts  ch  sh'
            )
        );
    }

    /**
     * @dataProvider testBelarusianBGNPCGNProvider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianBGNPCGNCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::BGN_PCGN)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testBelarusianBGNPCGNProvider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianBGNPCGNLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::BGN_PCGN)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testBelarusianBGNPCGNProvider()
    {
        return array(
            array(
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dzh  dz  ye  yo  zh  z  i  y  k  l  m  n  o  p  r  s  t  u  w  f  kh  ts  ch  sh'
            )
        );
    }

    /**
     * @dataProvider testBelarusianISO9Provider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianISO9Cyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ISO_9)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testBelarusianISO9Provider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianISO9Lat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::ISO_9)->lat2Cyr($actual));
    }


    /**
     * @return array
     */
    public static function testBelarusianISO9Provider()
    {
        return array(
            array(
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dž  dz  e  ë  ž  z  ì  j  k  l  m  n  o  p  r  s  t  u  ǔ  f  h  c  č  š'
            )
        );
    }

    /**
     * @dataProvider testBelarusianNational2000Provider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianNational2000Cyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::NATIONAL_2000)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testBelarusianNational2000Provider
     * @param $expected
     * @param $actual
     */
    public function testBelarusianNational2000Lat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::NATIONAL_2000)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testBelarusianNational2000Provider()
    {
        return array(
            array(
                'д  дж  дз  е  ё  ж  з  і  й  к  л  м  н  о  п  р  с  т  у  ў  ф  х  ц  ч  ш',
                'd  dž  dz  ie  io  ž  z  i  j  k  l  m  n  o  p  r  s  t  u  ú  f  ch  c  č  š'
            )
        );
    }
}

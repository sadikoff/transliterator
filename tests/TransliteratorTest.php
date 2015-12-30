<?php

use \Artemiso\Transliterator\Transliterator;
use \Artemiso\Transliterator\Settings;

class TransliteratorTest extends PHPUnit_Framework_TestCase
{
    /**
     * Transliterator.
     *
     * @var Transliterator
     */
    protected static $transliterator;

    /**
     *
     */
    public static function setUpBeforeClass()
    {
        self::$transliterator = new Transliterator(Settings\Language::SR);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testWrongLanguage()
    {
        new Transliterator('xx');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testWrongLanguage2()
    {
        new Transliterator('xxx');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testWrongSystem()
    {
        new Transliterator(Settings\Language::SR, 'xxx');
    }

    public function testCustomMap()
    {
        $this->assertEquals(
            'џАРрХ',
            self::$transliterator
                ->setMapping([
                    Settings\Alphabet::CYR => ['џ', 'А', 'Р', 'р', 'Х'],
                    Settings\Alphabet::LAT => ['u', 'A', 'P', 'p', 'X']
                ])
                ->lat2Cyr('uAPpX')
        );
    }
}

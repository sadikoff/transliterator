<?php

use \Artemiso\Transliterator\Transliterator;

class TransliteratorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testWrongLanguage()
    {
        $ts = new Transliterator('ru/dle');
        $ts->toTranslit('uAPpX');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testWrongLanguage2()
    {
        $ts = new Transliterator(
            'ru/GOST2002', [
                'џ' => 'u',
                'А' => 'A',
                'Р' => 'P',
                'р' => 'p',
                'Х' => 'X',
            ]
        );
        $ts->toTranslit('uAPpX');
    }

    public function testCustomMap()
    {
        $ts = new Transliterator(
            'custom',
            [
                'џ' => 'u',
                'А' => 'A',
                'Р' => 'P',
                'р' => 'p',
                'Х' => 'X',
            ]
        );
        $this->assertEquals(
            'uAPpX',
            $ts->toTranslit('џАРрХ')
        );
    }
}

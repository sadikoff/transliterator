<?php

use \Artemiso\Transliterator\Phrase;

class TransliteratorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testWrongLanguage()
    {
        Phrase::transliterate('uAPpX');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testWrongLanguage2()
    {
        Phrase::transliterate('uAPpX', 'xxx');
    }

    public function testCustomMap()
    {
        Phrase::loadMapping('custom', [
            'џ' => 'u', 'А' => 'A', 'Р' => 'P', 'р' => 'p', 'Х' => 'X'
        ]);
        $this->assertEquals(
            'uAPpX',
            Phrase::transliterate('џАРрХ', 'custom')
        );
    }
}

<?php

use Koff\Transliterator\Transliterator;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 */
class TransliteratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @expectedException Exception
     */
    public function testWrongLanguage()
    {
        $ts = new Transliterator('ru/dle');
        $ts->toTranslit('uAPpX');
    }

    public function testCustomMap()
    {
        $ts = new Transliterator(CustomMapping::class);
        $this->assertEquals(
            'uAPpX',
            $ts->toTranslit('џАРрХ')
        );
    }
}

class CustomMapping implements \Koff\Transliterator\Mapping\MappingInterface
{
    public function getCharMapping(): array
    {
        return [
            'џ' => 'u',
            'А' => 'A',
            'Р' => 'P',
            'р' => 'p',
            'Х' => 'X',
        ];
    }
}


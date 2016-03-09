<?php

use \Artemiso\Transliterator\Transliterator;
use \Artemiso\Transliterator\Mapping as Lang;

/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 28.12.2015
 * Time: 23:48
 */
class TransliteratorELTest extends PHPUnit_Framework_TestCase
{
    /** @var Transliterator */
    public static $ts;

    public static function setUpBeforeClass()
    {
        self::$ts = new Transliterator();
    }

    /**
     * @dataProvider testGreekProvider
     * @param $expected
     * @param $actual
     */
    public function testGreek($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\EL::SCHOLARLY)
        );
    }

    /**
     * @return array
     */
    public static function testGreekProvider()
    {
        return array(
            array('α β γ δ ε ζ η θ ι κ λ μ ν ξ ο π ρ σ τ υ φ χ ψ ω', 'a b g d e z h q i k l m n c o p r s t u f x y w'),
        );
    }
}

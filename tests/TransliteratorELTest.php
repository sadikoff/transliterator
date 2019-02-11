<?php

use Koff\Transliterator\Transliterator;
use Koff\Transliterator\Mapping\Lang;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 */
class TransliteratorELTest extends \PHPUnit\Framework\TestCase
{
    /** @var Transliterator */
    public static $ts;

    public static function setUpBeforeClass()
    {
        self::$ts = new Transliterator();
    }

    /**
     * @dataProvider greekProvider
     *
     * @param $expected
     * @param $actual
     */
    public function testGreek($actual, $expected)
    {
        $this->assertEquals(
            $expected,
            self::$ts->toTranslit($actual, Lang\EL\Scholarly::class)
        );
    }

    /**
     * @return array
     */
    public static function greekProvider()
    {
        return [
            ['α β γ δ ε ζ η θ ι κ λ μ ν ξ ο π ρ σ τ υ φ χ ψ ω', 'a b g d e z h q i k l m n c o p r s t u f x y w'],
        ];
    }
}

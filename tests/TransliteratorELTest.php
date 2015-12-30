<?php

use \Artemiso\Transliterator\Transliterator;
use \Artemiso\Transliterator\Settings;
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 28.12.2015
 * Time: 23:48
 */
class TransliteratorELTest extends PHPUnit_Framework_TestCase
{
    /**
     * Transliterator.
     *
     * @var Transliterator
     */
    protected static $transliterator;

    public static function setUpBeforeClass()
    {
        self::$transliterator = new Transliterator(Settings\Language::EL);
    }

    /**
     * @dataProvider testGreekProvider
     * @param $expected
     * @param $actual
     */
    public function testGreekCyr2Lat($actual, $expected)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::SCHOLARLY)->cyr2Lat($actual));
    }

    /**
     * @dataProvider testGreekProvider
     * @param $expected
     * @param $actual
     */
    public function testGreekLat2Cyr($expected, $actual)
    {
        $this->assertEquals($expected, self::$transliterator->setSystem(Settings\System::SCHOLARLY)->lat2Cyr($actual));
    }

    /**
     * @return array
     */
    public static function testGreekProvider()
    {
        return array(
            array('α β γ δ ε ζ η θ ι κ λ μ ν ξ ο π ρ σ τ υ φ χ ψ ω', 'a b g d e z h q i k l m n c o p r s t u f x y w')
        );
    }
}

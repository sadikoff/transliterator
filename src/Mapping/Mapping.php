<?php

namespace Artemiso\Transliterator\Mapping;

use Artemiso\Transliterator\Settings\Alphabet;

class Mapping implements MappingInterface
{
    protected static $cyr = null;
    protected static $lat = null;

    public static function getCharMap()
    {
        return  [
            Alphabet::CYR => static::$cyr,
            Alphabet::LAT => static::$lat
        ];
    }

    public static function getClassName($lang, $system)
    {
        return $lang.'\\'.$system;
    }
}

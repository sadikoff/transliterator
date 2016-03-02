<?php

namespace Artemiso\Transliterator;


class Phrase
{
    const PATH = 'Resources/mapping';

    private static $mappings = [];
    private static $mappingKey = null;

    public static function loadMapping($mappingKey, $mappingData = null)
    {
        if (!array_key_exists($mappingKey, self::$mappings)) {
            $mappingIniFile = realpath(dirname(__FILE__).'/'.Phrase::PATH.'/'.$mappingKey.'.ini');

            if (null === $mappingData) {
                if (!file_exists($mappingIniFile)) {
                    throw new \InvalidArgumentException('error');
                }

                self::$mappings[$mappingKey] = parse_ini_file($mappingIniFile);
            } else {
                if (file_exists($mappingIniFile)) {
                    throw new \InvalidArgumentException('error');
                }

                self::$mappings[$mappingKey] = $mappingData;
            }
        }

        self::$mappingKey = $mappingKey;
    }

    public static function transliterate($phrase, $mappingKey = null)
    {
        if (null === $mappingKey && null === self::$mappingKey) {
            throw new \InvalidArgumentException('error');
        }

        if (null !== $mappingKey) {
            self::loadMapping($mappingKey);
        }

        return strtr($phrase, self::$mappings[self::$mappingKey]);
    }
}
<?php

namespace Artemiso\Transliterator;

/**
 * Loads transliteration maps from class.
 *
 * @author Владимир Садиков <sadikoff@gmail.com>
 */
class DataLoader
{
    /**
     * Get transliteration map.
     *
     * @param  string $class
     * @return array  map array
     */
    public static function getTransliterationMap($class)
    {
        $call_class = __NAMESPACE__.'\\Mapping\\'.$class;

        if (!class_exists($call_class)) {
            throw new \InvalidArgumentException(sprintf('No mapping class found "%s"', $class));
        }

        return call_user_func($call_class.'::getCharMap');
    }
}

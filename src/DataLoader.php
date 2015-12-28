<?php

/*
 * This file is part of the Transliterator package.
 *
 * (c) Саша Стаменковић <umpirsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artemiso\Transliterator;

/**
 * Loads transliteration maps from files.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class DataLoader
{
    /**
     * Get transliteration map.
     *
     * @param  string $class
     * @param  string $alphabet
     * @return array  map array
     */
    public static function getTransliterationMap($class, $alphabet)
    {
        // Valdate
        if (!in_array($alphabet, array(Settings::ALPHABET_CYR, Settings::ALPHABET_LAT))) {
            throw new \InvalidArgumentException(sprintf('Alphabet "%s" is not recognized.', $alphabet));
        }

        $call_class = '';

        if (!class_exists(__NAMESPACE__.'\\Mapping\\'.$class)) {
            throw new \InvalidArgumentException(sprintf('No mapping class found "%s"', $class));
        }

        return call_user_func($call_class.'::getCharMap');
    }
}

<?php

namespace Artemiso\Transliterator\Mapping;

/**
 * Interface CharMapInterface
 *
 * @package Artemiso\Transliterator
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
interface MappingInterface
{
    /**
     * Returns char mapping info according to transliterisation standart
     *
     * @return array
     */
    public static function getCharMap();
}

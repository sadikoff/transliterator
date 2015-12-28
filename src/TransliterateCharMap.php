<?php

namespace Artemiso\Transliterator;

/**
 * Interface TransliterateCharMap
 *
 * @package Artemiso\Transliterator
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
interface TransliterateCharMap
{
    /**
     * Returns char mapping info according to transliterisation standart
     *
     * @return array
     */
    public static function getCharMap();
}

<?php

namespace Artemiso\Transliterator\Mapping\el;

use Artemiso\Transliterator\TransliterateCharMap;

/**
 * Class Standart
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class Standart implements TransliterateCharMap
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'α', 'β', 'γ', 'δ', 'ε', 'ζ', 'η', 'θ', 'ι', 'κ', 'λ', 'μ', 'ν', 'ξ', 'ο', 'π', 'ρ', 'σ', 'τ', 'υ', 'φ', 'χ', 'ψ', 'ω',
                'Α', 'Β', 'Γ', 'Δ', 'Ε', 'Ζ', 'Η', 'Θ', 'Ι', 'Κ', 'Λ', 'Μ', 'Ν', 'Ξ', 'Ο', 'Π', 'Ρ', 'Σ', 'Τ', 'Υ', 'Φ', 'Χ', 'Ψ', 'Ω'
            ],
            'lat' => [
                'a', 'b', 'g', 'd', 'e', 'z', 'h', 'q', 'i', 'k', 'l', 'm', 'n', 'c', 'o', 'p', 'r', 's', 't', 'u', 'f', 'x', 'y', 'w',
                'A', 'B', 'G', 'D', 'E', 'Z', 'H', 'Q', 'I', 'K', 'L', 'M', 'N', 'C', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'X', 'Y', 'W'
            ]
        ];
    }
}

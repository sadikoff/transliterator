<?php

namespace Artemiso\Transliterator\Mapping\el;

use Artemiso\Transliterator\Mapping\Mapping;

/**
 * Class Standard
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class Standard extends Mapping
{
    protected static $cyr = [
        'α', 'β', 'γ', 'δ', 'ε', 'ζ', 'η', 'θ', 'ι', 'κ', 'λ', 'μ', 'ν', 'ξ', 'ο', 'π', 'ρ', 'σ', 'τ', 'υ', 'φ', 'χ', 'ψ', 'ω',
        'Α', 'Β', 'Γ', 'Δ', 'Ε', 'Ζ', 'Η', 'Θ', 'Ι', 'Κ', 'Λ', 'Μ', 'Ν', 'Ξ', 'Ο', 'Π', 'Ρ', 'Σ', 'Τ', 'Υ', 'Φ', 'Χ', 'Ψ', 'Ω'
    ];

    protected static $lat = [
        'a', 'b', 'g', 'd', 'e', 'z', 'h', 'q', 'i', 'k', 'l', 'm', 'n', 'c', 'o', 'p', 'r', 's', 't', 'u', 'f', 'x', 'y', 'w',
        'A', 'B', 'G', 'D', 'E', 'Z', 'H', 'Q', 'I', 'K', 'L', 'M', 'N', 'C', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'X', 'Y', 'W'
    ];
}

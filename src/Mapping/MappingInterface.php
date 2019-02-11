<?php

namespace Koff\Transliterator\Mapping;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 */
interface MappingInterface
{
    public function getCharMapping(): array;
}
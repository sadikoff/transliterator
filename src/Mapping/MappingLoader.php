<?php

namespace Koff\Transliterator\Mapping;

use Koff\Transliterator\Exceptions\MappingException;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 */
final class MappingLoader
{
    public function load(string $mappingClassname): MappingInterface
    {
        if ( ! class_exists($mappingClassname)) {
            throw new MappingException(sprintf('Mapping class "%s" does not exists', $mappingClassname));
        }

        $mapping = new $mappingClassname;

        if ( ! $mapping instanceof MappingInterface) {
            throw new MappingException(sprintf('Mapping class "%s" must implement "MappingInterface" interface', $mappingClassname));
        }

        return $mapping;
    }
}

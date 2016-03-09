<?php

namespace Artemiso\Transliterator;


class Transliterator
{
    const PATH = 'Resources/mapping';

    private $mappings = [];
    private $mappingKey = null;

    public function __construct($mappingKey = null, $mappingData = null)
    {
        if (null !== $mappingKey) {
            $this->setCharMapping($mappingKey, $mappingData);
        }
    }

    public function setCharMapping($mappingKey, $mappingData = null)
    {
        if (!array_key_exists($mappingKey, $this->mappings)) {
            $mappingIniFile = dirname(__FILE__).'/'.Transliterator::PATH.'/'.$mappingKey.'.ini';

            if (null === $mappingData) {
                if (!file_exists($mappingIniFile)) {
                    throw new \InvalidArgumentException(sprintf('No mapping info found by key %s', $mappingKey));
                }

                $this->mappings[$mappingKey] = parse_ini_file($mappingIniFile);
            } else {
                if (file_exists($mappingIniFile)) {
                    throw new \InvalidArgumentException(sprintf('You cannot use key %s. Mapping info found', $mappingKey));
                }

                $this->mappings[$mappingKey] = $mappingData;
            }
        }

        $this->mappingKey = $mappingKey;
    }

    public function toTranslit($phrase, $mappingKey = null)
    {
        if (null !== $mappingKey) {
            $this->setCharMapping($mappingKey);
        }

        return strtr($phrase, $this->mappings[$this->mappingKey]);
    }
}

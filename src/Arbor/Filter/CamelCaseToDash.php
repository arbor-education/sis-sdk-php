<?php

namespace Arbor\Filter;

class CamelCaseToDash implements FilterInterface
{
    public function filter($value)
    {
        return preg_replace(
            ['#(?<=(?:[A-Z]))([A-Z]+)([A-Z][A-z])#', '#(?<=(?:[a-z0-9]))([A-Z])#'],
            ['\1-\2', '-\1'],
            $value
        );
    }
}

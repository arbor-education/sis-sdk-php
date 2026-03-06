<?php
namespace Arbor\Filter;

interface FilterInterface
{
    /**
     * @param $string
     * @return mixed
     */
    public function filter($string);
}

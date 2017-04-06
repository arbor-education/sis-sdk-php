<?php

namespace Arbor\Filter;

class PluralizeFilter implements FilterInterface
{
    public function filter($value)
    {
        $lastLetter = substr($value, -1);
        switch ($lastLetter) {

            case 's':
                $pluralizeLetter = 'ses';
                break;

            case 'y':
                if (substr($value, -2) == 'ay') {
                    $pluralizeLetter = 's';
                } else {

                    $pluralizeLetter = 'ies';
                }
                break;

            default:
                $pluralizeLetter = 's';
                break;
        }
        if ($pluralizeLetter !== 's') {

            $returnString = substr($value, 0, (strlen($value) - 1)) . $pluralizeLetter;
        } else {

            $returnString = $value . $pluralizeLetter;
        }
        return $returnString;
    }
}
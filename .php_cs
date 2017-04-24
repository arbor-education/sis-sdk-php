<?php
$rules = require __DIR__ . '/vendor/arbor-education/php-coding-standard/rules.php';

$finder = Symfony\Component\Finder\Finder::create()
    ->files()
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
    ->in(__DIR__)
    ->exclude('vendor')
;

return PhpCsFixer\Config::create()
    ->setRules($rules)
    ->setFinder($finder)
;

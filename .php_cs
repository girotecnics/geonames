<?php
$finder = PhpCsFixer\Finder::create()
    ->path('src')
    ->exclude('vendor')
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRules(array(
        '@PSR2' => true,
        'indentation_type' => true
    ))
    ->setFinder($finder)
;


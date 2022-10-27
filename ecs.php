<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestClassRequiresCoversFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $config): void {
    $config->parallel();
    $services = $config->services();
    $services->set(ArraySyntaxFixer::class)
        ->call('configure', [[
            'syntax' => 'short',
        ]]);

    $services->set(DeclareStrictTypesFixer::class);

    $config->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    $config->skip([
        PhpdocToCommentFixer::class,
        PhpUnitTestClassRequiresCoversFixer::class,
    ]);

    $config->import(SetList::CLEAN_CODE);
    $config->import(SetList::PSR_12);
    $config->import(SetList::CONTROL_STRUCTURES);
    $config->import(SetList::NAMESPACES);
    $config->import(SetList::STRICT);
    $config->import(SetList::PHPUNIT);
};

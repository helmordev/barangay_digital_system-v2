<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/bootstrap/app.php',
        __DIR__.'/database',
    ])
    ->withSkip([
        __DIR__.'/app/Http/Livewire/**',
    ])
    ->withPreparedSets(
        deadCode: true,
        typeDeclarations: true,
        privatization: true,
        earlyReturn: true,
        codeQuality: true,
    )
    ->withPhpSets()
    ->withImportNames(
        removeUnusedImports: true,
        importShortClasses: true
    );

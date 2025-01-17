<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersionFeature;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictTypedCallRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(ReturnTypeFromStrictTypedCallRector::class);

    $rectorConfig->phpVersion(PhpVersionFeature::UNION_TYPES - 1);
};

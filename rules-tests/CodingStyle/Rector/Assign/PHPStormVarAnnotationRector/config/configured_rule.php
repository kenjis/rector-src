<?php

declare(strict_types=1);

use Rector\CodingStyle\Rector\Assign\PHPStormVarAnnotationRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(PHPStormVarAnnotationRector::class);
};

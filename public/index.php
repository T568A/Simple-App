<?php

declare(strict_types = 1);

use App\Models\{Db};

require_once __DIR__ . '/../vendor/autoload.php';

try {
    var_dump(new Db());
} catch (\Exception $e) {
    echo $e->getMessage();
}

<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Tvm;

use InvalidArgumentException;
use JsonSerializable;

abstract class AccountForExecutor implements JsonSerializable
{
    public static function create(?array $dto): ?AccountForExecutor
    {
        if ($dto === null) return null;
        if (!isset($dto['type'])) return null;
        if ($dto['type'] === 'None') return new None($dto);
        if ($dto['type'] === 'Uninit') return new Uninit($dto);
        if ($dto['type'] === 'Account') return new Account($dto);
        throw new InvalidArgumentException("Unsupported AccountForExecutor type: {$dto['type']}");
    }
}

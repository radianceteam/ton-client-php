<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Utils;

use JsonSerializable;
use stdClass;

class AddressStringFormat_Hex extends AddressStringFormat implements JsonSerializable
{
    public function __construct(?array $dto = null)
    {
        if (!$dto) $dto = [];
    }

    public function jsonSerialize()
    {
        $result = ['type' => 'Hex'];
        return !empty($result) ? $result : new stdClass();
    }
}

<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Abi;

use JsonSerializable;

class Handle extends Abi implements JsonSerializable
{
    private int $_value;

    public function __construct(?array $dto = null)
    {
        if (!$dto) $dto = [];
        $this->_value = $dto['value'] ?? 0;
    }

    public function getValue(): int
    {
        return $this->_value;
    }

    public function setValue(int $value): self
    {
        $this->_value = $value;
        return $this;
    }

    public function jsonSerialize()
    {
        $result = ['type' => 'Handle'];
        if ($this->_value !== null) $result['value'] = $this->_value;
        return $result;
    }
}

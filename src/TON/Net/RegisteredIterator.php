<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Net;

use JsonSerializable;
use stdClass;

class RegisteredIterator implements JsonSerializable
{
    /**
     * Must be removed using `remove_iterator`
     * when it is no more needed for the application.
     */
    private int $_handle;

    public function __construct(?array $dto = null)
    {
        if (!$dto) $dto = [];
        $this->_handle = $dto['handle'] ?? 0;
    }

    /**
     * Must be removed using `remove_iterator`
     * when it is no more needed for the application.
     */
    public function getHandle(): int
    {
        return $this->_handle;
    }

    /**
     * Must be removed using `remove_iterator`
     * when it is no more needed for the application.
     * @return self
     */
    public function setHandle(int $handle): self
    {
        $this->_handle = $handle;
        return $this;
    }

    public function jsonSerialize()
    {
        $result = [];
        if ($this->_handle !== null) $result['handle'] = $this->_handle;
        return !empty($result) ? $result : new stdClass();
    }
}

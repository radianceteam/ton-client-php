<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Processing;

use JsonSerializable;
use TON\Client\ClientError;
use stdClass;

class ProcessingEvent_MessageExpired extends ProcessingEvent implements JsonSerializable
{
    private string $_messageId;
    private string $_message;
    private ?ClientError $_error;

    public function __construct(?array $dto = null)
    {
        if (!$dto) $dto = [];
        $this->_messageId = $dto['message_id'] ?? '';
        $this->_message = $dto['message'] ?? '';
        $this->_error = isset($dto['error']) ? new ClientError($dto['error']) : null;
    }

    public function getMessageId(): string
    {
        return $this->_messageId;
    }

    public function getMessage(): string
    {
        return $this->_message;
    }

    public function getError(): ?ClientError
    {
        return $this->_error;
    }

    /**
     * @return self
     */
    public function setMessageId(string $messageId): self
    {
        $this->_messageId = $messageId;
        return $this;
    }

    /**
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->_message = $message;
        return $this;
    }

    /**
     * @return self
     */
    public function setError(?ClientError $error): self
    {
        $this->_error = $error;
        return $this;
    }

    public function jsonSerialize()
    {
        $result = ['type' => 'MessageExpired'];
        if ($this->_messageId !== null) $result['message_id'] = $this->_messageId;
        if ($this->_message !== null) $result['message'] = $this->_message;
        if ($this->_error !== null) $result['error'] = $this->_error;
        return !empty($result) ? $result : new stdClass();
    }
}

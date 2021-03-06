<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Processing\Async;

use Generator;
use TON\EventsInterface;
use TON\Processing\ProcessingEvent;
use TON\Processing\ResultOfSendMessage;
use TON\TonClientException;
use TON\TonRequest;

class AsyncResultOfSendMessage implements EventsInterface
{
    /** TON request handle. */
    private TonRequest $_request;

    /**
     * AsyncResultOfSendMessage constructor.
     * @param TonRequest $request Request handle.
     */
    public function __construct(TonRequest $request)
    {
        $this->_request = $request;
    }

    /**
     * Blocks until function execution is finished and returns execution result.
     * @param int $timeout Await timeout in millis. -1 means no timeout.
     * @return ResultOfSendMessage Function execution result.
     * @throws TonClientException Function execution error.
     */
    public function await(int $timeout = -1): ResultOfSendMessage
    {
        return new ResultOfSendMessage($this->_request->await($timeout));
    }

    /**
     * @param int $timeout Timeout in millis. -1 means no timeout.
     * @return Generator generator of {@link ProcessingEvent}
     */
    public function getEvents(int $timeout = -1): Generator
    {
        foreach ($this->_request->getEvents($timeout) as $event)
            yield ProcessingEvent::create($event);
    }
}

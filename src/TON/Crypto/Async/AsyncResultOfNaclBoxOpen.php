<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Crypto\Async;

use TON\Crypto\ResultOfNaclBoxOpen;
use TON\TonClientException;
use TON\TonRequest;

class AsyncResultOfNaclBoxOpen
{
    /** TON request handle. */
    private TonRequest $_request;

    /**
     * AsyncResultOfNaclBoxOpen constructor.
     * @param TonRequest $request Request handle.
     */
    public function __construct(TonRequest $request)
    {
        $this->_request = $request;
    }

    /**
     * Blocks until function execution is finished and returns execution result.
     * @param int $timeout Await timeout in millis. -1 means no timeout.
     * @return ResultOfNaclBoxOpen Function execution result.
     * @throws TonClientException Function execution error.
     */
    public function await(int $timeout = -1): ResultOfNaclBoxOpen
    {
        return new ResultOfNaclBoxOpen($this->_request->await($timeout));
    }
}

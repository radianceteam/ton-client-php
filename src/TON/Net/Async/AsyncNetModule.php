<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Net\Async;

use TON\AsyncResult;
use TON\Net\ParamsOfQueryCollection;
use TON\Net\ParamsOfSubscribeCollection;
use TON\Net\ParamsOfWaitForCollection;
use TON\Net\ResultOfSubscribeCollection;
use TON\TonContext;

/**
 * Network access.
 */
class AsyncNetModule implements NetModuleAsyncInterface
{
    private TonContext $_context;

    /**
     * AsyncNetModule constructor.
     * @param TonContext $context
     */
    public function __construct(TonContext $context)
    {
        $this->_context = $context;
    }

    /**
     * Queries collection data
     *
     *  Queries data that satisfies the `filter` conditions,
     *  limits the number of returned records and orders them.
     *  The projection fields are limited to `result` fields
     */
    public function queryCollectionAsync(ParamsOfQueryCollection $params): AsyncResultOfQueryCollection
    {
        return new AsyncResultOfQueryCollection($this->_context->callFunctionAsync('net.query_collection', $params));
    }

    /**
     * Returns an object that fulfills the conditions or waits for its appearance
     *
     *  Triggers only once.
     *  If object that satisfies the `filter` conditions
     *  already exists - returns it immediately.
     *  If not - waits for insert/update of data within the specified `timeout`,
     *  and returns it.
     *  The projection fields are limited to `result` fields
     */
    public function waitForCollectionAsync(ParamsOfWaitForCollection $params): AsyncResultOfWaitForCollection
    {
        return new AsyncResultOfWaitForCollection($this->_context->callFunctionAsync('net.wait_for_collection', $params));
    }

    /**
     * Cancels a subscription
     *
     *  Cancels a subscription specified by its handle.
     */
    public function unsubscribeAsync(ResultOfSubscribeCollection $params): AsyncResult
    {
        return new AsyncResult($this->_context->callFunctionAsync('net.unsubscribe', $params));
    }

    /**
     * Creates a subscription
     *
     *  Triggers for each insert/update of data
     *  that satisfies the `filter` conditions.
     *  The projection fields are limited to `result` fields.
     */
    public function subscribeCollectionAsync(ParamsOfSubscribeCollection $params): AsyncResultOfSubscribeCollection
    {
        return new AsyncResultOfSubscribeCollection($this->_context->callFunctionAsync('net.subscribe_collection', $params));
    }
}
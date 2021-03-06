<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Boc\Async;

use TON\AsyncResult;
use TON\Boc\ParamsOfBocCacheGet;
use TON\Boc\ParamsOfBocCacheSet;
use TON\Boc\ParamsOfBocCacheUnpin;
use TON\Boc\ParamsOfEncodeBoc;
use TON\Boc\ParamsOfGetBlockchainConfig;
use TON\Boc\ParamsOfGetBocHash;
use TON\Boc\ParamsOfGetCodeFromTvc;
use TON\Boc\ParamsOfParse;
use TON\Boc\ParamsOfParseShardstate;
use TON\TonContext;

class AsyncBocModule implements BocModuleAsyncInterface
{
    private TonContext $_context;

    /**
     * AsyncBocModule constructor.
     * @param TonContext $context
     */
    public function __construct(TonContext $context)
    {
        $this->_context = $context;
    }

    /**
     * JSON structure is compatible with GraphQL API message object
     * @param ParamsOfParse $params
     * @return AsyncResultOfParse
     */
    public function parseMessageAsync(ParamsOfParse $params): AsyncResultOfParse
    {
        return new AsyncResultOfParse($this->_context->callFunctionAsync('boc.parse_message', $params));
    }

    /**
     * JSON structure is compatible with GraphQL API transaction object
     * @param ParamsOfParse $params
     * @return AsyncResultOfParse
     */
    public function parseTransactionAsync(ParamsOfParse $params): AsyncResultOfParse
    {
        return new AsyncResultOfParse($this->_context->callFunctionAsync('boc.parse_transaction', $params));
    }

    /**
     * JSON structure is compatible with GraphQL API account object
     * @param ParamsOfParse $params
     * @return AsyncResultOfParse
     */
    public function parseAccountAsync(ParamsOfParse $params): AsyncResultOfParse
    {
        return new AsyncResultOfParse($this->_context->callFunctionAsync('boc.parse_account', $params));
    }

    /**
     * JSON structure is compatible with GraphQL API block object
     * @param ParamsOfParse $params
     * @return AsyncResultOfParse
     */
    public function parseBlockAsync(ParamsOfParse $params): AsyncResultOfParse
    {
        return new AsyncResultOfParse($this->_context->callFunctionAsync('boc.parse_block', $params));
    }

    /**
     * JSON structure is compatible with GraphQL API shardstate object
     * @param ParamsOfParseShardstate $params
     * @return AsyncResultOfParse
     */
    public function parseShardstateAsync(ParamsOfParseShardstate $params): AsyncResultOfParse
    {
        return new AsyncResultOfParse($this->_context->callFunctionAsync('boc.parse_shardstate', $params));
    }

    /**
     * @param ParamsOfGetBlockchainConfig $params
     * @return AsyncResultOfGetBlockchainConfig
     */
    public function getBlockchainConfigAsync(ParamsOfGetBlockchainConfig $params): AsyncResultOfGetBlockchainConfig
    {
        return new AsyncResultOfGetBlockchainConfig($this->_context->callFunctionAsync('boc.get_blockchain_config', $params));
    }

    /**
     * @param ParamsOfGetBocHash $params
     * @return AsyncResultOfGetBocHash
     */
    public function getBocHashAsync(ParamsOfGetBocHash $params): AsyncResultOfGetBocHash
    {
        return new AsyncResultOfGetBocHash($this->_context->callFunctionAsync('boc.get_boc_hash', $params));
    }

    /**
     * @param ParamsOfGetCodeFromTvc $params
     * @return AsyncResultOfGetCodeFromTvc
     */
    public function getCodeFromTvcAsync(ParamsOfGetCodeFromTvc $params): AsyncResultOfGetCodeFromTvc
    {
        return new AsyncResultOfGetCodeFromTvc($this->_context->callFunctionAsync('boc.get_code_from_tvc', $params));
    }

    /**
     * @param ParamsOfBocCacheGet $params
     * @return AsyncResultOfBocCacheGet
     */
    public function cacheGetAsync(ParamsOfBocCacheGet $params): AsyncResultOfBocCacheGet
    {
        return new AsyncResultOfBocCacheGet($this->_context->callFunctionAsync('boc.cache_get', $params));
    }

    /**
     * @param ParamsOfBocCacheSet $params
     * @return AsyncResultOfBocCacheSet
     */
    public function cacheSetAsync(ParamsOfBocCacheSet $params): AsyncResultOfBocCacheSet
    {
        return new AsyncResultOfBocCacheSet($this->_context->callFunctionAsync('boc.cache_set', $params));
    }

    /**
     * BOCs which don't have another pins will be removed from cache
     * @param ParamsOfBocCacheUnpin $params
     * @return AsyncResult
     */
    public function cacheUnpinAsync(ParamsOfBocCacheUnpin $params): AsyncResult
    {
        return new AsyncResult($this->_context->callFunctionAsync('boc.cache_unpin', $params));
    }

    /**
     * @param ParamsOfEncodeBoc $params
     * @return AsyncResultOfEncodeBoc
     */
    public function encodeBocAsync(ParamsOfEncodeBoc $params): AsyncResultOfEncodeBoc
    {
        return new AsyncResultOfEncodeBoc($this->_context->callFunctionAsync('boc.encode_boc', $params));
    }
}

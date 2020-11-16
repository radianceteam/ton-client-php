<?php declare(strict_types=1);

namespace TON;

use TON\Client\ClientModule;

class ClientTests extends AbstractModuleTestCase
{
    private ClientModule $_client;

    protected function setUp(): void
    {
        parent::setUp();
        $this->_client = new ClientModule($this->_context);
    }

    public function testVersion()
    {
        $result = $this->_client->version();
        $this->assertNotNull($result);
        $this->assertMatchesRegularExpression('/^\d+\.\d+\.\d+$/', $result->getVersion());
    }

    public function testGetApiReference()
    {
        $result = $this->_client->getApiReference();
        $this->assertNotNull($result);
        $this->assertNotEmpty($result);
    }

    public function testBuildInfo()
    {
        $result = $this->_client->buildInfo();
        $this->assertNotNull($result);
    }
}

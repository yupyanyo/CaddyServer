<?php
/**
 * Tests for CaddyServer
 */

use PHPUnit\Framework\TestCase;
use Caddyserver\Caddyserver;

class CaddyserverTest extends TestCase {
    private Caddyserver $instance;

    protected function setUp(): void {
        $this->instance = new Caddyserver(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Caddyserver::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

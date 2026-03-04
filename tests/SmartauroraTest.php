<?php
/**
 * Tests for SmartAurora
 */

use PHPUnit\Framework\TestCase;
use Smartaurora\Smartaurora;

class SmartauroraTest extends TestCase {
    private Smartaurora $instance;

    protected function setUp(): void {
        $this->instance = new Smartaurora(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smartaurora::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

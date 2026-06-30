<?php
/**
 * Tests for EchoRelay
 */

use PHPUnit\Framework\TestCase;
use Echorelay\Echorelay;

class EchorelayTest extends TestCase {
    private Echorelay $instance;

    protected function setUp(): void {
        $this->instance = new Echorelay(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Echorelay::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

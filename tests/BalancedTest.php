<?php

use gustavo\Balanced;
use PHPUnit\Framework\TestCase;

class BalancedTest extends TestCase
{
    protected $Balanced;

    public function setUp() {
        $this->Balanced = new Balanced();
    }

    public function testIsBalancedSimple() {
        $this->assertTrue( $this->Balanced->checkBalanced("[]"));
    }

    public function testIsBalancedDouble() {
        $this->assertTrue( $this->Balanced->checkBalanced("[{}]"));
    }

    public function testIsBalancedComplex() {
        $this->assertTrue( $this->Balanced->checkBalanced("[{}({})]"));
    }

    public function testIsNoBalanced() {
        $this->assertFalse( $this->Balanced->checkBalanced("[{]}"));
    }

    public function testIsNoBalancedStrangeChar() {
        $this->assertFalse( $this->Balanced->checkBalanced("[@@]"));
    }

    public function testIsNoBalancedEmpty() {
        $this->assertFalse( $this->Balanced->checkBalanced(""));
    }
}

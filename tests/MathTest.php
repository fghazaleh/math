<?php

declare(strict_types=1);

namespace FGhazaleh\Math;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    /**
     * @test
     */
    public function testingLog()
    {
        $result = Math::log(4, 2);
        $this->assertSame(2.0, $result);
    }

    /**
     * @test
     */
    public function testingMax()
    {
        $result = Math::max(2, 4, 5, 3);
        $this->assertSame(5, $result);
    }

    /**
     * @test
     */
    public function testingMin()
    {
        $result = Math::min(2, 4, 5, 3);
        $this->assertSame(2, $result);
    }

    /**
     * @test
     */
    public function testingPi()
    {
        $result = Math::pi();
        $this->assertSame(3.14159265358979, $result);
    }

    /**
     * @test
     */
    public function testingAbs()
    {
        $result = Math::abs(-3);
        $this->assertSame(3, $result);
    }

    /**
     * @test
     */
    public function testingCeil()
    {
        $result = Math::ceil(3.2);
        $this->assertSame(4.0, $result);

        $result = Math::ceil(-3.2);
        $this->assertSame(-3.0, $result);
    }

    /**
     * @test
     */
    public function testingRoundUp()
    {
        $result = Math::roundUp(3.2);
        $this->assertSame(4.0, $result);

        $result = Math::roundUp(-3.2);
        $this->assertSame(-3.0, $result);
    }

    /**
     * @test
     */
    public function testingFloor()
    {
        $result = Math::floor(3.7);
        $this->assertSame(3.0, $result);

        $result = Math::floor(-3.3);
        $this->assertSame(-4.0, $result);
    }

    /**
     * @test
     */
    public function testingRoundDown()
    {
        $result = Math::roundDown(3.7);
        $this->assertSame(3.0, $result);

        $result = Math::roundDown(-3.3);
        $this->assertSame(-4.0, $result);
    }
}
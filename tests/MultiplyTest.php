<?php

namespace Tests;

use App\Multiply;
use PHPUnit\Framework\TestCase;


class MultiplyTest extends TestCase
{
    private $multiply;

    public function setUp()
    {
        parent::setUp();
        $this->multiply = new Multiply();
    }

    public function testA()
    {
        $this->assertSame(25, $this->multiply->multiplyBy5(5));
    }

    public function testB()
    {
        $this->assertSame(20, $this->multiply->multiplyBy5(4));
    }
	
	public function testC()
	{
		$this->assertSame(49, $this->multiply->multiplyBy7(7));
	}
	
	public function testE()
    {
	$this->assertSame(6, $this->multiply->multiplyBy6(1));
    }

    public function testF()
    {
	$this->assertSame(54, $this->multiply->multiplyBy6(9));
    }
}

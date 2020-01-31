<?php

namespace JpArea\Test;

use JpArea\Exception\InvalidAreaException;
use JpArea\AreaInterface;
use JpArea\Area;
use JpArea\JpArea;
use PHPUnit\Framework\TestCase;

class JpPrefectureTest extends TestCase
{

    /**
     * @throws \JpArea\Exception\InvalidAreaException
     */
    public function testGetWithInvalidCode()
    {
        $this->setExpectedException('\\JpArea\\Exception\\InvalidAreaException');

        JpArea::get(0);
    }

    /**
     * @throws \JpArea\Exception\InvalidAreaException
     */
    public function testGet()
    {
        $hokkaido = JpArea::get(1);

        $this->assertInstanceOf('\\JpArea\\AreaInterface', $hokkaido);
        $this->assertEquals(1, $hokkaido->getCode());
        $this->assertEquals('北海道', $hokkaido->getName());
    }

    /**
     * @return void
     */
    public function testExists()
    {
        $this->assertFalse(JpArea::exists(0));
        $this->assertTrue(JpArea::exists(1));
    }

    /**
     * @return void
     */
    public function testAll()
    {
        $area = JpArea::all();

        $this->assertCount(8, $area);
    }

    /**
     * @return void
     */
    public function testAsList()
    {
        $area = JpArea::asList();

        $this->assertInternalType('array', $area);
        $this->assertCount(8, $area);
    }
}
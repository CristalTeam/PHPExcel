<?php

use PHPUnit\Framework\TestCase;

class ColumnIteratorTest extends TestCase
{
    public $mockWorksheet;
    public $mockColumn;

    public function setUp(): void
    {
        $this->mockColumn = $this->getMockBuilder('PHPExcel_Worksheet_Column')
            ->disableOriginalConstructor()
            ->getMock();

        $this->mockWorksheet = $this->getMockBuilder('PHPExcel_Worksheet')
            ->disableOriginalConstructor()
            ->getMock();

        $this->mockWorksheet->expects($this->any())
            ->method('getHighestColumn')
            ->willReturn('E');

        // $this->mockWorksheet->expects($this->any())
        //          ->method('current')
        //          ->willReturn($this->mockColumn);
    }


    public function testIteratorFullRange()
    {
        $iterator = new PHPExcel_Worksheet_ColumnIterator($this->mockWorksheet);
        $columnIndexResult = 'A';
        $this->assertEquals($columnIndexResult, $iterator->key());

        foreach ($iterator as $key => $column) {
            $this->assertEquals($columnIndexResult++, $key);
            $this->assertInstanceOf('PHPExcel_Worksheet_Column', $column);
        }
    }

    public function testIteratorStartEndRange()
    {
        $iterator = new PHPExcel_Worksheet_ColumnIterator($this->mockWorksheet, 'B', 'D');
        $columnIndexResult = 'B';
        $this->assertEquals($columnIndexResult, $iterator->key());

        foreach ($iterator as $key => $column) {
            $this->assertEquals($columnIndexResult++, $key);
            $this->assertInstanceOf('PHPExcel_Worksheet_Column', $column);
        }
    }

    public function testIteratorSeekAndPrev()
    {
        $ranges = range('A', 'E');
        $iterator = new PHPExcel_Worksheet_ColumnIterator($this->mockWorksheet, 'B', 'D');
        $columnIndexResult = 'D';
        $iterator->seek('D');
        $this->assertEquals($columnIndexResult, $iterator->key());

        for ($i = 1; $i < array_search($columnIndexResult, $ranges); $i++) {
            $iterator->prev();
            $expectedResult = $ranges[array_search($columnIndexResult, $ranges) - $i];
            $this->assertEquals($expectedResult, $iterator->key());
        }
    }

    public function testStartOutOfRange()
    {
        $this->expectException(PHPExcel_Exception::class);
        new PHPExcel_Worksheet_ColumnIterator($this->mockWorksheet, 'IA', 'IV');
    }

    public function testSeekOutOfRange()
    {
        $this->expectException(PHPExcel_Exception::class);
        $iterator = new PHPExcel_Worksheet_ColumnIterator($this->mockWorksheet, 'B', 'D');
        $iterator->seek('A');
    }

    public function testPrevOutOfRange()
    {
        $this->expectException(PHPExcel_Exception::class);
        $iterator = new PHPExcel_Worksheet_ColumnIterator($this->mockWorksheet, 'B', 'D');
        $iterator->prev();
    }
}

<?php

use PHPUnit\Framework\TestCase;

class ColumnCellIteratorTest extends TestCase
{
    public $mockWorksheet;
    public $mockColumnCell;

    public function setUp(): void
    {
        $this->mockCell = $this->getMockBuilder('PHPExcel_Cell')
            ->disableOriginalConstructor()
            ->getMock();

        $this->mockWorksheet = $this->getMockBuilder('PHPExcel_Worksheet')
            ->disableOriginalConstructor()
            ->getMock();

        $this->mockWorksheet->expects($this->any())
            ->method('getHighestRow')
            ->willReturn(5);

        $this->mockWorksheet->expects($this->any())
            ->method('getCellByColumnAndRow')
            ->willReturn($this->mockCell);
    }


    public function testIteratorFullRange()
    {
        $iterator = new PHPExcel_Worksheet_ColumnCellIterator($this->mockWorksheet, 'A');
        $ColumnCellIndexResult = 1;
        $this->assertEquals($ColumnCellIndexResult, $iterator->key());

        foreach ($iterator as $key => $ColumnCell) {
            $this->assertEquals($ColumnCellIndexResult++, $key);
            $this->assertInstanceOf('PHPExcel_Cell', $ColumnCell);
        }
    }

    public function testIteratorStartEndRange()
    {
        $iterator = new PHPExcel_Worksheet_ColumnCellIterator($this->mockWorksheet, 'A', 2, 4);
        $ColumnCellIndexResult = 2;
        $this->assertEquals($ColumnCellIndexResult, $iterator->key());

        foreach ($iterator as $key => $ColumnCell) {
            $this->assertEquals($ColumnCellIndexResult++, $key);
            $this->assertInstanceOf('PHPExcel_Cell', $ColumnCell);
        }
    }

    public function testIteratorSeekAndPrev()
    {
        $iterator = new PHPExcel_Worksheet_ColumnCellIterator($this->mockWorksheet, 'A', 2, 4);
        $columnIndexResult = 4;
        $iterator->seek(4);
        $this->assertEquals($columnIndexResult, $iterator->key());

        for ($i = 1; $i < $columnIndexResult - 1; $i++) {
            $iterator->prev();
            $this->assertEquals($columnIndexResult - $i, $iterator->key());
        }
    }

    public function testSeekOutOfRange()
    {
        $this->expectException(PHPExcel_Exception::class);
        $iterator = new PHPExcel_Worksheet_ColumnCellIterator($this->mockWorksheet, 'A', 2, 4);
        $iterator->seek(1);

    }

    public function testPrevOutOfRange()
    {
        $this->expectException(PHPExcel_Exception::class);
        $iterator = new PHPExcel_Worksheet_ColumnCellIterator($this->mockWorksheet, 'A', 2, 4);
        $iterator->prev();
    }
}

<?php

use PHPUnit\Framework\TestCase;

class WorksheetColumnTest extends TestCase
{
    public $mockWorksheet;
    public $mockColumn;

    public function setUp(): void
    {
        $this->mockWorksheet = $this->getMockBuilder('PHPExcel_Worksheet')
            ->disableOriginalConstructor()
            ->getMock();
            
        $this->mockWorksheet->expects($this->any())
                 ->method('getHighestRow')
                 ->willReturn(5);
    }


    public function testInstantiateColumnDefault()
    {
        $column = new PHPExcel_Worksheet_Column($this->mockWorksheet);
        $this->assertInstanceOf('PHPExcel_Worksheet_Column', $column);
        $columnIndex = $column->getColumnIndex();
        $this->assertEquals('A', $columnIndex);
    }

    public function testInstantiateColumnSpecified()
    {
        $column = new PHPExcel_Worksheet_Column($this->mockWorksheet, 'E');
        $this->assertInstanceOf('PHPExcel_Worksheet_Column', $column);
        $columnIndex = $column->getColumnIndex();
        $this->assertEquals('E', $columnIndex);
    }

    public function testGetCellIterator()
    {
        $column = new PHPExcel_Worksheet_Column($this->mockWorksheet);
        $cellIterator = $column->getCellIterator();
        $this->assertInstanceOf('PHPExcel_Worksheet_ColumnCellIterator', $cellIterator);
    }
}

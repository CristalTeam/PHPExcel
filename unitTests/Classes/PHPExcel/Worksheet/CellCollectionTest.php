<?php

use PHPUnit\Framework\TestCase;

class CellCollectionTest extends TestCase
{
    public function testCacheLastCell()
    {
        $methods = PHPExcel_CachedObjectStorageFactory::getCacheStorageMethods();
        foreach ($methods as $method) {
            PHPExcel_CachedObjectStorageFactory::initialize($method);
            $workbook = new PHPExcel();
            $cells = ['A1', 'A2'];
            $worksheet = $workbook->getActiveSheet();
            $worksheet->setCellValue('A1', 1);
            $worksheet->setCellValue('A2', 2);
            $this->assertEquals($cells, $worksheet->getCellCollection(), "Cache method \"$method\".");
            PHPExcel_CachedObjectStorageFactory::finalize();
        }
    }
}

<?php

use PHPUnit\Framework\TestCase;


class AutoloaderTest extends TestCase
{
    public function testAutoloaderNonPHPExcelClass()
    {
        $className = 'InvalidClass';

        $result = PHPExcel_Autoloader::Load($className);
        //    Must return a boolean...
        $this->assertTrue(is_bool($result));
        //    ... indicating failure
        $this->assertFalse($result);
    }

    public function testAutoloaderInvalidPHPExcelClass()
    {
        $className = 'PHPExcel_Invalid_Class';

        $result = PHPExcel_Autoloader::Load($className);
        //    Must return a boolean...
        $this->assertTrue(is_bool($result));
        //    ... indicating failure
        $this->assertFalse($result);
    }

    public function testAutoloadValidPHPExcelClass()
    {
        $className = 'PHPExcel_IOFactory';

        $result = PHPExcel_Autoloader::Load($className);
        //    Check that class has been loaded
        $this->assertTrue(class_exists($className));
    }

    public function testAutoloadInstantiateSuccess()
    {
        $result = new PHPExcel_Calculation_Function(1, 2, 3);
        //    Must return an object...
        $this->assertTrue(is_object($result));
        //    ... of the correct type
        $this->assertTrue(is_a($result, 'PHPExcel_Calculation_Function'));
    }
}

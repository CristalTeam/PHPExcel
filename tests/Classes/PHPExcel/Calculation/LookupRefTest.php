<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

final class LookupRefTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');

        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    #[DataProvider('providerHLOOKUP')]
    public function testHLOOKUP(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_LookupRef','HLOOKUP'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerHLOOKUP(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/LookupRef/HLOOKUP.data');
    }

    #[DataProvider('providerVLOOKUP')]
    public function testVLOOKUP(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_LookupRef','VLOOKUP'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerVLOOKUP(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/LookupRef/VLOOKUP.data');
    }
}

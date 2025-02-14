<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

require_once(APPLICATION_TESTS_PATH . '/testDataFileIterator.php');

class LookupRefTest extends TestCase
{
    public function setUp(): void
    {
        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    #[DataProvider('providerHLOOKUP')]
    public function testHLOOKUP()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_LookupRef','HLOOKUP'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerHLOOKUP()
    {
        return new testDataFileIterator('rawTestData/Calculation/LookupRef/HLOOKUP.data');
    }

    #[DataProvider('providerVLOOKUP')]
    public function testVLOOKUP()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_LookupRef','VLOOKUP'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerVLOOKUP()
    {
        return new testDataFileIterator('rawTestData/Calculation/LookupRef/VLOOKUP.data');
    }
}

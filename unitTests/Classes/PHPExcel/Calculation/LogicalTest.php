<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

require_once(APPLICATION_TESTS_PATH . '/testDataFileIterator.php');

class LogicalTest extends TestCase
{
    public function setUp(): void
    {
        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    public function testTRUE()
    {
        $result = PHPExcel_Calculation_Logical::TRUE();
        $this->assertEquals(true, $result);
    }

    public function testFALSE()
    {
        $result = PHPExcel_Calculation_Logical::FALSE();
        $this->assertEquals(false, $result);
    }

    #[DataProvider('providerAND')]
    public function testAND()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Logical','LOGICAL_AND'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerAND()
    {
        return new testDataFileIterator('rawTestData/Calculation/Logical/AND.data');
    }

    #[DataProvider('providerOR')]
    public function testOR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Logical','LOGICAL_OR'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerOR()
    {
        return new testDataFileIterator('rawTestData/Calculation/Logical/OR.data');
    }

    #[DataProvider('providerNOT')]
    public function testNOT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Logical','NOT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerNOT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Logical/NOT.data');
    }

    #[DataProvider('providerIF')]
    public function testIF()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Logical','STATEMENT_IF'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIF()
    {
        return new testDataFileIterator('rawTestData/Calculation/Logical/IF.data');
    }

    #[DataProvider('providerIFERROR')]
    public function testIFERROR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Logical','IFERROR'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIFERROR()
    {
        return new testDataFileIterator('rawTestData/Calculation/Logical/IFERROR.data');
    }
}

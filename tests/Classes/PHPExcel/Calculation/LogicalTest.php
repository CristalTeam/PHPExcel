<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

final class LogicalTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');

        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    public function testTRUE(): void
    {
        $result = PHPExcel_Calculation_Logical::TRUE();
        $this->assertEquals(true, $result);
    }

    public function testFALSE(): void
    {
        $result = PHPExcel_Calculation_Logical::FALSE();
        $this->assertEquals(false, $result);
    }

    #[DataProvider('providerAND')]
    public function testAND(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Logical','LOGICAL_AND'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerAND(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Logical/AND.data');
    }

    #[DataProvider('providerOR')]
    public function testOR(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Logical','LOGICAL_OR'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerOR(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Logical/OR.data');
    }

    #[DataProvider('providerNOT')]
    public function testNOT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Logical','NOT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerNOT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Logical/NOT.data');
    }

    #[DataProvider('providerIF')]
    public function testIF(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Logical','STATEMENT_IF'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIF(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Logical/IF.data');
    }

    #[DataProvider('providerIFERROR')]
    public function testIFERROR(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Logical','IFERROR'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIFERROR(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Logical/IFERROR.data');
    }
}

<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

final class FunctionsTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');

        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    public function testDUMMY(): void
    {
        $result = PHPExcel_Calculation_Functions::DUMMY();
        $this->assertEquals('#Not Yet Implemented', $result);
    }

    public function testDIV0(): void
    {
        $result = PHPExcel_Calculation_Functions::DIV0();
        $this->assertEquals('#DIV/0!', $result);
    }

    public function testNA(): void
    {
        $result = PHPExcel_Calculation_Functions::NA();
        $this->assertEquals('#N/A', $result);
    }

    public function testNaN(): void
    {
        $result = PHPExcel_Calculation_Functions::NaN();
        $this->assertEquals('#NUM!', $result);
    }

    public function testNAME(): void
    {
        $result = PHPExcel_Calculation_Functions::NAME();
        $this->assertEquals('#NAME?', $result);
    }

    public function testREF(): void
    {
        $result = PHPExcel_Calculation_Functions::REF();
        $this->assertEquals('#REF!', $result);
    }

    public function testNULL(): void
    {
        $result = PHPExcel_Calculation_Functions::null();
        $this->assertEquals('#NULL!', $result);
    }

    public function testVALUE(): void
    {
        $result = PHPExcel_Calculation_Functions::VALUE();
        $this->assertEquals('#VALUE!', $result);
    }

    #[DataProvider('providerIS_BLANK')]
    public function testIS_BLANK(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_BLANK'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIS_BLANK(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_BLANK.data');
    }

    #[DataProvider('providerIS_ERR')]
    public function testIS_ERR(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_ERR'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIS_ERR(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_ERR.data');
    }

    #[DataProvider('providerIS_ERROR')]
    public function testIS_ERROR(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_ERROR'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIS_ERROR(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_ERROR.data');
    }

    #[DataProvider('providerERROR_TYPE')]
    public function testERROR_TYPE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','ERROR_TYPE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerERROR_TYPE(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/ERROR_TYPE.data');
    }

    #[DataProvider('providerIS_LOGICAL')]
    public function testIS_LOGICAL(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_LOGICAL'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIS_LOGICAL(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_LOGICAL.data');
    }

    #[DataProvider('providerIS_NA')]
    public function testIS_NA(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_NA'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIS_NA(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_NA.data');
    }

    #[DataProvider('providerIS_NUMBER')]
    public function testIS_NUMBER(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_NUMBER'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIS_NUMBER(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_NUMBER.data');
    }

    #[DataProvider('providerIS_TEXT')]
    public function testIS_TEXT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_TEXT'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIS_TEXT(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_TEXT.data');
    }

    #[DataProvider('providerIS_NONTEXT')]
    public function testIS_NONTEXT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_NONTEXT'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIS_NONTEXT(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_NONTEXT.data');
    }

    #[DataProvider('providerIS_EVEN')]
    public function testIS_EVEN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_EVEN'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIS_EVEN(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_EVEN.data');
    }

    #[DataProvider('providerIS_ODD')]
    public function testIS_ODD(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_ODD'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIS_ODD(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_ODD.data');
    }

    #[DataProvider('providerTYPE')]
    public function testTYPE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','TYPE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerTYPE(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/TYPE.data');
    }

    #[DataProvider('providerN')]
    public function testN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','N'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerN(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/N.data');
    }
}

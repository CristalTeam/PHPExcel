<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

require_once(APPLICATION_TESTS_PATH . '/testDataFileIterator.php');

class FunctionsTest extends TestCase
{
    public function setUp(): void
    {
        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    public function testDUMMY()
    {
        $result = PHPExcel_Calculation_Functions::DUMMY();
        $this->assertEquals('#Not Yet Implemented', $result);
    }

    public function testDIV0()
    {
        $result = PHPExcel_Calculation_Functions::DIV0();
        $this->assertEquals('#DIV/0!', $result);
    }

    public function testNA()
    {
        $result = PHPExcel_Calculation_Functions::NA();
        $this->assertEquals('#N/A', $result);
    }

    public function testNaN()
    {
        $result = PHPExcel_Calculation_Functions::NaN();
        $this->assertEquals('#NUM!', $result);
    }

    public function testNAME()
    {
        $result = PHPExcel_Calculation_Functions::NAME();
        $this->assertEquals('#NAME?', $result);
    }

    public function testREF()
    {
        $result = PHPExcel_Calculation_Functions::REF();
        $this->assertEquals('#REF!', $result);
    }

    public function testNULL()
    {
        $result = PHPExcel_Calculation_Functions::null();
        $this->assertEquals('#NULL!', $result);
    }

    public function testVALUE()
    {
        $result = PHPExcel_Calculation_Functions::VALUE();
        $this->assertEquals('#VALUE!', $result);
    }

    #[DataProvider('providerIS_BLANK')]
    public function testIS_BLANK()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_BLANK'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIS_BLANK()
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_BLANK.data');
    }

    #[DataProvider('providerIS_ERR')]
    public function testIS_ERR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_ERR'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIS_ERR()
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_ERR.data');
    }

    #[DataProvider('providerIS_ERROR')]
    public function testIS_ERROR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_ERROR'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIS_ERROR()
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_ERROR.data');
    }

    #[DataProvider('providerERROR_TYPE')]
    public function testERROR_TYPE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','ERROR_TYPE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerERROR_TYPE()
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/ERROR_TYPE.data');
    }

    #[DataProvider('providerIS_LOGICAL')]
    public function testIS_LOGICAL()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_LOGICAL'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIS_LOGICAL()
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_LOGICAL.data');
    }

    #[DataProvider('providerIS_NA')]
    public function testIS_NA()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_NA'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIS_NA()
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_NA.data');
    }

    #[DataProvider('providerIS_NUMBER')]
    public function testIS_NUMBER()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_NUMBER'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIS_NUMBER()
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_NUMBER.data');
    }

    #[DataProvider('providerIS_TEXT')]
    public function testIS_TEXT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_TEXT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIS_TEXT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_TEXT.data');
    }

    #[DataProvider('providerIS_NONTEXT')]
    public function testIS_NONTEXT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_NONTEXT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIS_NONTEXT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_NONTEXT.data');
    }

    #[DataProvider('providerIS_EVEN')]
    public function testIS_EVEN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_EVEN'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIS_EVEN()
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_EVEN.data');
    }

    #[DataProvider('providerIS_ODD')]
    public function testIS_ODD()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','IS_ODD'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIS_ODD()
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/IS_ODD.data');
    }

    #[DataProvider('providerTYPE')]
    public function testTYPE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','TYPE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerTYPE()
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/TYPE.data');
    }

    #[DataProvider('providerN')]
    public function testN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Functions','N'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerN()
    {
        return new testDataFileIterator('rawTestData/Calculation/Functions/N.data');
    }
}

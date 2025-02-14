<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

require_once(APPLICATION_TESTS_PATH . '/testDataFileIterator.php');

class MathTrigTest extends TestCase
{
    public function setUp(): void
    {
        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    #[DataProvider('providerATAN2')]
    public function testATAN2()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','ATAN2'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerATAN2()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/ATAN2.data');
    }

    #[DataProvider('providerCEILING')]
    public function testCEILING()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','CEILING'], $args);
        $this->assertEquals($expectedResult, $result, 1E-12);
    }

    public static function providerCEILING()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/CEILING.data');
    }

    #[DataProvider('providerCOMBIN')]
    public function testCOMBIN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','COMBIN'], $args);
        $this->assertEquals($expectedResult, $result, 1E-12);
    }

    public static function providerCOMBIN()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/COMBIN.data');
    }

    #[DataProvider('providerEVEN')]
    public function testEVEN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','EVEN'], $args);
        $this->assertEquals($expectedResult, $result, 1E-12);
    }

    public static function providerEVEN()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/EVEN.data');
    }

    #[DataProvider('providerODD')]
    public function testODD()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','ODD'], $args);
        $this->assertEquals($expectedResult, $result, 1E-12);
    }

    public static function providerODD()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/ODD.data');
    }

    #[DataProvider('providerFACT')]
    public function testFACT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','FACT'], $args);
        $this->assertEquals($expectedResult, $result, 1E-12);
    }

    public static function providerFACT()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/FACT.data');
    }

    #[DataProvider('providerFACTDOUBLE')]
    public function testFACTDOUBLE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','FACTDOUBLE'], $args);
        $this->assertEquals($expectedResult, $result, 1E-12);
    }

    public static function providerFACTDOUBLE()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/FACTDOUBLE.data');
    }

    #[DataProvider('providerFLOOR')]
    public function testFLOOR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','FLOOR'], $args);
        $this->assertEquals($expectedResult, $result, 1E-12);
    }

    public static function providerFLOOR()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/FLOOR.data');
    }

    #[DataProvider('providerGCD')]
    public function testGCD()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','GCD'], $args);
        $this->assertEquals($expectedResult, $result, 1E-12);
    }

    public static function providerGCD()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/GCD.data');
    }

    #[DataProvider('providerLCM')]
    public function testLCM()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','LCM'], $args);
        $this->assertEquals($expectedResult, $result, 1E-12);
    }

    public static function providerLCM()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/LCM.data');
    }

    #[DataProvider('providerINT')]
    public function testINT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','INT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerINT()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/INT.data');
    }

    #[DataProvider('providerSIGN')]
    public function testSIGN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','SIGN'], $args);
        $this->assertEquals($expectedResult, $result, 1E-12);
    }

    public static function providerSIGN()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/SIGN.data');
    }

    #[DataProvider('providerPOWER')]
    public function testPOWER()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','POWER'], $args);
        $this->assertEquals($expectedResult, $result, 1E-12);
    }

    public static function providerPOWER()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/POWER.data');
    }

    #[DataProvider('providerLOG')]
    public function testLOG()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','LOG_BASE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerLOG()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/LOG.data');
    }

    #[DataProvider('providerMOD')]
    public function testMOD()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','MOD'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerMOD()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/MOD.data');
    }

    #[DataProvider('providerMDETERM')]
    public function testMDETERM()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','MDETERM'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerMDETERM()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/MDETERM.data');
    }

    #[DataProvider('providerMINVERSE')]
    public function testMINVERSE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','MINVERSE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerMINVERSE()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/MINVERSE.data');
    }

    #[DataProvider('providerMMULT')]
    public function testMMULT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','MMULT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerMMULT()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/MMULT.data');
    }

    #[DataProvider('providerMULTINOMIAL')]
    public function testMULTINOMIAL()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','MULTINOMIAL'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerMULTINOMIAL()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/MULTINOMIAL.data');
    }

    #[DataProvider('providerMROUND')]
    public function testMROUND()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        PHPExcel_Calculation::setArrayReturnType(PHPExcel_Calculation::RETURN_ARRAY_AS_VALUE);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','MROUND'], $args);
        PHPExcel_Calculation::setArrayReturnType(PHPExcel_Calculation::RETURN_ARRAY_AS_ARRAY);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerMROUND()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/MROUND.data');
    }

    #[DataProvider('providerPRODUCT')]
    public function testPRODUCT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','PRODUCT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerPRODUCT()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/PRODUCT.data');
    }

    #[DataProvider('providerQUOTIENT')]
    public function testQUOTIENT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','QUOTIENT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerQUOTIENT()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/QUOTIENT.data');
    }

    #[DataProvider('providerROUNDUP')]
    public function testROUNDUP()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','ROUNDUP'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerROUNDUP()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/ROUNDUP.data');
    }

    #[DataProvider('providerROUNDDOWN')]
    public function testROUNDDOWN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','ROUNDDOWN'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerROUNDDOWN()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/ROUNDDOWN.data');
    }

    #[DataProvider('providerSERIESSUM')]
    public function testSERIESSUM()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','SERIESSUM'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerSERIESSUM()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/SERIESSUM.data');
    }

    #[DataProvider('providerSUMIFS')]
    public function testSUMIFS()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','SUMIFS'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerSUMIFS()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/SUMIFS.data');
    }

    #[DataProvider('providerSUMSQ')]
    public function testSUMSQ()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','SUMSQ'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerSUMSQ()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/SUMSQ.data');
    }

    #[DataProvider('providerTRUNC')]
    public function testTRUNC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','TRUNC'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerTRUNC()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/TRUNC.data');
    }

    #[DataProvider('providerROMAN')]
    public function testROMAN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','ROMAN'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerROMAN()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/ROMAN.data');
    }

    #[DataProvider('providerSQRTPI')]
    public function testSQRTPI()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','SQRTPI'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerSQRTPI()
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/SQRTPI.data');
    }

    #[DataProvider('providerSUMIF')]
    public function testSUMIF()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig', 'SUMIF'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerSUMIF()
    {
        return [
            [
                [
                    [1],
                    [5],
                    [10],
                ],
                '>=5',
                15,
            ],
            [
                [
                    ['text'],
                    [2],
                ],
                '=text',
                [
                    [10],
                    [100],
                ],
                10,
            ],
            [
                [
                    ['"text with quotes"'],
                    [2],
                ],
                '="text with quotes"',
                [
                    [10],
                    [100],
                ],
                10,
            ],
            [
                [
                    ['"text with quotes"'],
                    [''],
                ],
                '>"', // Compare to the single characater " (double quote)
                [
                    [10],
                    [100],
                ],
                10
            ],
            [
                [
                    [''],
                    ['anything'],
                ],
                '>"', // Compare to the single characater " (double quote)
                [
                    [10],
                    [100],
                ],
                100
            ],
        ];
    }
}

<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

final class MathTrigTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');

        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    #[DataProvider('providerATAN2')]
    public function testATAN2(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','ATAN2'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerATAN2(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/ATAN2.data');
    }

    #[DataProvider('providerCEILING')]
    public function testCEILING(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','CEILING'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerCEILING(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/CEILING.data');
    }

    #[DataProvider('providerCOMBIN')]
    public function testCOMBIN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','COMBIN'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerCOMBIN(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/COMBIN.data');
    }

    #[DataProvider('providerEVEN')]
    public function testEVEN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','EVEN'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerEVEN(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/EVEN.data');
    }

    #[DataProvider('providerODD')]
    public function testODD(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','ODD'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerODD(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/ODD.data');
    }

    #[DataProvider('providerFACT')]
    public function testFACT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','FACT'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerFACT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/FACT.data');
    }

    #[DataProvider('providerFACTDOUBLE')]
    public function testFACTDOUBLE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','FACTDOUBLE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerFACTDOUBLE(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/FACTDOUBLE.data');
    }

    #[DataProvider('providerFLOOR')]
    public function testFLOOR(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','FLOOR'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerFLOOR(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/FLOOR.data');
    }

    #[DataProvider('providerGCD')]
    public function testGCD(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','GCD'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerGCD(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/GCD.data');
    }

    #[DataProvider('providerLCM')]
    public function testLCM(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','LCM'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerLCM(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/LCM.data');
    }

    #[DataProvider('providerINT')]
    public function testINT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','INT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerINT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/INT.data');
    }

    #[DataProvider('providerSIGN')]
    public function testSIGN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','SIGN'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerSIGN(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/SIGN.data');
    }

    #[DataProvider('providerPOWER')]
    public function testPOWER(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','POWER'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerPOWER(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/POWER.data');
    }

    #[DataProvider('providerLOG')]
    public function testLOG(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','LOG_BASE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerLOG(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/LOG.data');
    }

    #[DataProvider('providerMOD')]
    public function testMOD(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','MOD'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerMOD(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/MOD.data');
    }

    #[DataProvider('providerMDETERM')]
    public function testMDETERM(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','MDETERM'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerMDETERM(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/MDETERM.data');
    }

    #[DataProvider('providerMINVERSE')]
    public function testMINVERSE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','MINVERSE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerMINVERSE(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/MINVERSE.data');
    }

    #[DataProvider('providerMMULT')]
    public function testMMULT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','MMULT'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerMMULT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/MMULT.data');
    }

    #[DataProvider('providerMULTINOMIAL')]
    public function testMULTINOMIAL(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','MULTINOMIAL'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerMULTINOMIAL(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/MULTINOMIAL.data');
    }

    #[DataProvider('providerMROUND')]
    public function testMROUND(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        PHPExcel_Calculation::setArrayReturnType(PHPExcel_Calculation::RETURN_ARRAY_AS_VALUE);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','MROUND'], $args);
        PHPExcel_Calculation::setArrayReturnType(PHPExcel_Calculation::RETURN_ARRAY_AS_ARRAY);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerMROUND(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/MROUND.data');
    }

    #[DataProvider('providerPRODUCT')]
    public function testPRODUCT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','PRODUCT'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerPRODUCT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/PRODUCT.data');
    }

    #[DataProvider('providerQUOTIENT')]
    public function testQUOTIENT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','QUOTIENT'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerQUOTIENT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/QUOTIENT.data');
    }

    #[DataProvider('providerROUNDUP')]
    public function testROUNDUP(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','ROUNDUP'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerROUNDUP(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/ROUNDUP.data');
    }

    #[DataProvider('providerROUNDDOWN')]
    public function testROUNDDOWN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','ROUNDDOWN'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerROUNDDOWN(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/ROUNDDOWN.data');
    }

    #[DataProvider('providerSERIESSUM')]
    public function testSERIESSUM(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','SERIESSUM'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerSERIESSUM(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/SERIESSUM.data');
    }

    #[DataProvider('providerSUMIFS')]
    public function testSUMIFS(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','SUMIFS'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerSUMIFS(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/SUMIFS.data');
    }

    #[DataProvider('providerSUMSQ')]
    public function testSUMSQ(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','SUMSQ'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerSUMSQ(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/SUMSQ.data');
    }

    #[DataProvider('providerTRUNC')]
    public function testTRUNC(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','TRUNC'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerTRUNC(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/TRUNC.data');
    }

    #[DataProvider('providerROMAN')]
    public function testROMAN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','ROMAN'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerROMAN(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/ROMAN.data');
    }

    #[DataProvider('providerSQRTPI')]
    public function testSQRTPI(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig','SQRTPI'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerSQRTPI(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/MathTrig/SQRTPI.data');
    }

    #[DataProvider('providerSUMIF')]
    public function testSUMIF(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_MathTrig', 'SUMIF'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerSUMIF(): array
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

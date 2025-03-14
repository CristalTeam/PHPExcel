<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

final class TextDataTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');

        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    #[DataProvider('providerCHAR')]
    public function testCHAR(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','CHARACTER'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCHAR(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/CHAR.data');
    }

    #[DataProvider('providerCODE')]
    public function testCODE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','ASCIICODE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCODE(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/CODE.data');
    }

    #[DataProvider('providerCONCATENATE')]
    public function testCONCATENATE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','CONCATENATE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCONCATENATE(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/CONCATENATE.data');
    }

    #[DataProvider('providerLEFT')]
    public function testLEFT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','LEFT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerLEFT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/LEFT.data');
    }

    #[DataProvider('providerMID')]
    public function testMID(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','MID'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerMID(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/MID.data');
    }

    #[DataProvider('providerRIGHT')]
    public function testRIGHT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','RIGHT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerRIGHT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/RIGHT.data');
    }

    #[DataProvider('providerLOWER')]
    public function testLOWER(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','LOWERCASE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerLOWER(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/LOWER.data');
    }

    #[DataProvider('providerUPPER')]
    public function testUPPER(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','UPPERCASE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerUPPER(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/UPPER.data');
    }

    #[DataProvider('providerPROPER')]
    public function testPROPER(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','PROPERCASE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerPROPER(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/PROPER.data');
    }

    #[DataProvider('providerLEN')]
    public function testLEN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','STRINGLENGTH'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerLEN(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/LEN.data');
    }

    #[DataProvider('providerSEARCH')]
    public function testSEARCH(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','SEARCHINSENSITIVE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerSEARCH(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/SEARCH.data');
    }

    #[DataProvider('providerFIND')]
    public function testFIND(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','SEARCHSENSITIVE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerFIND(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/FIND.data');
    }

    #[DataProvider('providerREPLACE')]
    public function testREPLACE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','REPLACE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerREPLACE(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/REPLACE.data');
    }

    #[DataProvider('providerSUBSTITUTE')]
    public function testSUBSTITUTE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','SUBSTITUTE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerSUBSTITUTE(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/SUBSTITUTE.data');
    }

    #[DataProvider('providerTRIM')]
    public function testTRIM(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','TRIMSPACES'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerTRIM(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/TRIM.data');
    }

    #[DataProvider('providerCLEAN')]
    public function testCLEAN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','TRIMNONPRINTABLE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCLEAN(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/CLEAN.data');
    }

    #[DataProvider('providerDOLLAR')]
    public function testDOLLAR(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','DOLLAR'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerDOLLAR(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/DOLLAR.data');
    }

    #[DataProvider('providerFIXED')]
    public function testFIXED(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','FIXEDFORMAT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerFIXED(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/FIXED.data');
    }

    #[DataProvider('providerT')]
    public function testT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','RETURNSTRING'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/T.data');
    }

    #[DataProvider('providerTEXT')]
    public function testTEXT(): void
    {
        //    Enforce decimal and thousands separator values to UK/US, and currency code to USD
        call_user_func(['PHPExcel_Shared_String', 'setDecimalSeparator'], '.');
        call_user_func(['PHPExcel_Shared_String', 'setThousandsSeparator'], ',');
        call_user_func(['PHPExcel_Shared_String', 'setCurrencyCode'], '$');

        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData', 'TEXTFORMAT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerTEXT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/TEXT.data');
    }

    #[DataProvider('providerVALUE')]
    public function testVALUE(): void
    {
        call_user_func(['PHPExcel_Shared_String', 'setDecimalSeparator'], '.');
        call_user_func(['PHPExcel_Shared_String', 'setThousandsSeparator'], ' ');
        call_user_func(['PHPExcel_Shared_String', 'setCurrencyCode'], '$');

        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData', 'VALUE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerVALUE(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/VALUE.data');
    }
}

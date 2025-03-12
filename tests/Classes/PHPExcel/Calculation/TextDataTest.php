<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

class TextDataTest extends PHPUnit\Framework\TestCase
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
    public function testCHAR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','CHARACTER'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerCHAR()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/CHAR.data');
    }

    #[DataProvider('providerCODE')]
    public function testCODE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','ASCIICODE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerCODE()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/CODE.data');
    }

    #[DataProvider('providerCONCATENATE')]
    public function testCONCATENATE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','CONCATENATE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerCONCATENATE()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/CONCATENATE.data');
    }

    #[DataProvider('providerLEFT')]
    public function testLEFT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','LEFT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerLEFT()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/LEFT.data');
    }

    #[DataProvider('providerMID')]
    public function testMID()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','MID'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerMID()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/MID.data');
    }

    #[DataProvider('providerRIGHT')]
    public function testRIGHT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','RIGHT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerRIGHT()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/RIGHT.data');
    }

    #[DataProvider('providerLOWER')]
    public function testLOWER()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','LOWERCASE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerLOWER()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/LOWER.data');
    }

    #[DataProvider('providerUPPER')]
    public function testUPPER()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','UPPERCASE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerUPPER()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/UPPER.data');
    }

    #[DataProvider('providerPROPER')]
    public function testPROPER()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','PROPERCASE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerPROPER()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/PROPER.data');
    }

    #[DataProvider('providerLEN')]
    public function testLEN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','STRINGLENGTH'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerLEN()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/LEN.data');
    }

    #[DataProvider('providerSEARCH')]
    public function testSEARCH()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','SEARCHINSENSITIVE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerSEARCH()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/SEARCH.data');
    }

    #[DataProvider('providerFIND')]
    public function testFIND()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','SEARCHSENSITIVE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerFIND()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/FIND.data');
    }

    #[DataProvider('providerREPLACE')]
    public function testREPLACE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','REPLACE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerREPLACE()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/REPLACE.data');
    }

    #[DataProvider('providerSUBSTITUTE')]
    public function testSUBSTITUTE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','SUBSTITUTE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerSUBSTITUTE()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/SUBSTITUTE.data');
    }

    #[DataProvider('providerTRIM')]
    public function testTRIM()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','TRIMSPACES'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerTRIM()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/TRIM.data');
    }

    #[DataProvider('providerCLEAN')]
    public function testCLEAN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','TRIMNONPRINTABLE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerCLEAN()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/CLEAN.data');
    }

    #[DataProvider('providerDOLLAR')]
    public function testDOLLAR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','DOLLAR'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerDOLLAR()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/DOLLAR.data');
    }

    #[DataProvider('providerFIXED')]
    public function testFIXED()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','FIXEDFORMAT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerFIXED()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/FIXED.data');
    }

    #[DataProvider('providerT')]
    public function testT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData','RETURNSTRING'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerT()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/T.data');
    }

    #[DataProvider('providerTEXT')]
    public function testTEXT()
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

    public function providerTEXT()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/TEXT.data');
    }

    #[DataProvider('providerVALUE')]
    public function testVALUE()
    {
        call_user_func(['PHPExcel_Shared_String', 'setDecimalSeparator'], '.');
        call_user_func(['PHPExcel_Shared_String', 'setThousandsSeparator'], ' ');
        call_user_func(['PHPExcel_Shared_String', 'setCurrencyCode'], '$');

        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_TextData', 'VALUE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerVALUE()
    {
        return new testDataFileIterator('rawTestData/Calculation/TextData/VALUE.data');
    }
}

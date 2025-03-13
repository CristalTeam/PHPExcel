<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

class FinancialTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');

        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    #[DataProvider('providerACCRINT')]
    public function testACCRINT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','ACCRINT'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerACCRINT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/ACCRINT.data');
    }

    #[DataProvider('providerACCRINTM')]
    public function testACCRINTM()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','ACCRINTM'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerACCRINTM()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/ACCRINTM.data');
    }

    #[DataProvider('providerAMORDEGRC')]
    public function testAMORDEGRC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','AMORDEGRC'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerAMORDEGRC()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/AMORDEGRC.data');
    }

    #[DataProvider('providerAMORLINC')]
    public function testAMORLINC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','AMORLINC'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerAMORLINC()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/AMORLINC.data');
    }

    #[DataProvider('providerCOUPDAYBS')]
    public function testCOUPDAYBS()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','COUPDAYBS'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCOUPDAYBS()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/COUPDAYBS.data');
    }

    #[DataProvider('providerCOUPDAYS')]
    public function testCOUPDAYS()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','COUPDAYS'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCOUPDAYS()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/COUPDAYS.data');
    }

    #[DataProvider('providerCOUPDAYSNC')]
    public function testCOUPDAYSNC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','COUPDAYSNC'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCOUPDAYSNC()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/COUPDAYSNC.data');
    }

    #[DataProvider('providerCOUPNCD')]
    public function testCOUPNCD()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','COUPNCD'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCOUPNCD()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/COUPNCD.data');
    }

    #[DataProvider('providerCOUPNUM')]
    public function testCOUPNUM()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','COUPNUM'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCOUPNUM()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/COUPNUM.data');
    }

    #[DataProvider('providerCOUPPCD')]
    public function testCOUPPCD()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','COUPPCD'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCOUPPCD()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/COUPPCD.data');
    }

    #[DataProvider('providerCUMIPMT')]
    public function testCUMIPMT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','CUMIPMT'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCUMIPMT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/CUMIPMT.data');
    }

    #[DataProvider('providerCUMPRINC')]
    public function testCUMPRINC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','CUMPRINC'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerCUMPRINC()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/CUMPRINC.data');
    }

    #[DataProvider('providerDB')]
    public function testDB()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','DB'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerDB()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/DB.data');
    }

    #[DataProvider('providerDDB')]
    public function testDDB()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','DDB'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerDDB()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/DDB.data');
    }

    #[DataProvider('providerDISC')]
    public function testDISC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','DISC'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerDISC()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/DISC.data');
    }

    #[DataProvider('providerDOLLARDE')]
    public function testDOLLARDE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','DOLLARDE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerDOLLARDE()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/DOLLARDE.data');
    }

    #[DataProvider('providerDOLLARFR')]
    public function testDOLLARFR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','DOLLARFR'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerDOLLARFR()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/DOLLARFR.data');
    }

    #[DataProvider('providerEFFECT')]
    public function testEFFECT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','EFFECT'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerEFFECT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/EFFECT.data');
    }

    #[DataProvider('providerFV')]
    public function testFV()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','FV'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerFV()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/FV.data');
    }

    #[DataProvider('providerFVSCHEDULE')]
    public function testFVSCHEDULE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','FVSCHEDULE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerFVSCHEDULE()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/FVSCHEDULE.data');
    }

    #[DataProvider('providerINTRATE')]
    public function testINTRATE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','INTRATE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerINTRATE()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/INTRATE.data');
    }

    #[DataProvider('providerIPMT')]
    public function testIPMT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','IPMT'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerIPMT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/IPMT.data');
    }

    #[DataProvider('providerIRR')]
    public function testIRR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','IRR'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerIRR()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/IRR.data');
    }

    #[DataProvider('providerISPMT')]
    public function testISPMT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','ISPMT'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerISPMT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/ISPMT.data');
    }

    #[DataProvider('providerMIRR')]
    public function testMIRR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','MIRR'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerMIRR()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/MIRR.data');
    }

    #[DataProvider('providerNOMINAL')]
    public function testNOMINAL()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','NOMINAL'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerNOMINAL()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/NOMINAL.data');
    }

    #[DataProvider('providerNPER')]
    public function testNPER()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','NPER'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerNPER()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/NPER.data');
    }

    #[DataProvider('providerNPV')]
    public function testNPV()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','NPV'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerNPV()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/NPV.data');
    }

    #[DataProvider('providerPRICE')]
    public function testPRICE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','PRICE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerPRICE()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/PRICE.data');
    }

    #[DataProvider('providerRATE')]
    public function testRATE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','RATE'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerRATE()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/RATE.data');
    }

    #[DataProvider('providerXIRR')]
    public function testXIRR()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial','XIRR'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public function providerXIRR()
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/XIRR.data');
    }
}

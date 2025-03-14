<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

final class FinancialTest extends PHPUnit\Framework\TestCase
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
    public function testACCRINT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'ACCRINT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerACCRINT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/ACCRINT.data');
    }

    #[DataProvider('providerACCRINTM')]
    public function testACCRINTM(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'ACCRINTM'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerACCRINTM(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/ACCRINTM.data');
    }

    #[DataProvider('providerAMORDEGRC')]
    public function testAMORDEGRC(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'AMORDEGRC'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerAMORDEGRC(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/AMORDEGRC.data');
    }

    #[DataProvider('providerAMORLINC')]
    public function testAMORLINC(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'AMORLINC'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerAMORLINC(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/AMORLINC.data');
    }

    #[DataProvider('providerCOUPDAYBS')]
    public function testCOUPDAYBS(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'COUPDAYBS'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCOUPDAYBS(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/COUPDAYBS.data');
    }

    #[DataProvider('providerCOUPDAYS')]
    public function testCOUPDAYS(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'COUPDAYS'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCOUPDAYS(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/COUPDAYS.data');
    }

    #[DataProvider('providerCOUPDAYSNC')]
    public function testCOUPDAYSNC(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'COUPDAYSNC'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCOUPDAYSNC(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/COUPDAYSNC.data');
    }

    #[DataProvider('providerCOUPNCD')]
    public function testCOUPNCD(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'COUPNCD'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCOUPNCD(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/COUPNCD.data');
    }

    #[DataProvider('providerCOUPNUM')]
    public function testCOUPNUM(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'COUPNUM'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCOUPNUM(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/COUPNUM.data');
    }

    #[DataProvider('providerCOUPPCD')]
    public function testCOUPPCD(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'COUPPCD'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCOUPPCD(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/COUPPCD.data');
    }

    #[DataProvider('providerCUMIPMT')]
    public function testCUMIPMT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'CUMIPMT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCUMIPMT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/CUMIPMT.data');
    }

    #[DataProvider('providerCUMPRINC')]
    public function testCUMPRINC(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'CUMPRINC'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCUMPRINC(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/CUMPRINC.data');
    }

    #[DataProvider('providerDB')]
    public function testDB(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'DB'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerDB(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/DB.data');
    }

    #[DataProvider('providerDDB')]
    public function testDDB(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'DDB'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerDDB(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/DDB.data');
    }

    #[DataProvider('providerDISC')]
    public function testDISC(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'DISC'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerDISC(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/DISC.data');
    }

    #[DataProvider('providerDOLLARDE')]
    public function testDOLLARDE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'DOLLARDE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerDOLLARDE(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/DOLLARDE.data');
    }

    #[DataProvider('providerDOLLARFR')]
    public function testDOLLARFR(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'DOLLARFR'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerDOLLARFR(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/DOLLARFR.data');
    }

    #[DataProvider('providerEFFECT')]
    public function testEFFECT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'EFFECT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerEFFECT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/EFFECT.data');
    }

    #[DataProvider('providerFV')]
    public function testFV(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'FV'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerFV(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/FV.data');
    }

    #[DataProvider('providerFVSCHEDULE')]
    public function testFVSCHEDULE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'FVSCHEDULE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerFVSCHEDULE(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/FVSCHEDULE.data');
    }

    #[DataProvider('providerINTRATE')]
    public function testINTRATE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'INTRATE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerINTRATE(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/INTRATE.data');
    }

    #[DataProvider('providerIPMT')]
    public function testIPMT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'IPMT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIPMT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/IPMT.data');
    }

    #[DataProvider('providerIRR')]
    public function testIRR(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'IRR'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIRR(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/IRR.data');
    }

    #[DataProvider('providerISPMT')]
    public function testISPMT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'ISPMT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerISPMT(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/ISPMT.data');
    }

    #[DataProvider('providerMIRR')]
    public function testMIRR(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'MIRR'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerMIRR(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/MIRR.data');
    }

    #[DataProvider('providerNOMINAL')]
    public function testNOMINAL(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'NOMINAL'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerNOMINAL(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/NOMINAL.data');
    }

    #[DataProvider('providerNPER')]
    public function testNPER(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'NPER'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerNPER(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/NPER.data');
    }

    #[DataProvider('providerNPV')]
    public function testNPV(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'NPV'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerNPV(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/NPV.data');
    }

    #[DataProvider('providerPRICE')]
    public function testPRICE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'PRICE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerPRICE(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/PRICE.data');
    }

    #[DataProvider('providerRATE')]
    public function testRATE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Financial', 'RATE'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerRATE(): iterable
    {
        return new testDataFileIterator('rawTestData/Calculation/Financial/RATE.data');
    }
}

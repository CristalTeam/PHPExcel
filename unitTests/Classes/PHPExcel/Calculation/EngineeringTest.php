<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

require_once(APPLICATION_TESTS_PATH . '/testDataFileIterator.php');
require_once(APPLICATION_TESTS_PATH . '/custom/complexAssert.php');

class EngineeringTest extends TestCase
{
    public function setUp(): void
    {
        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    #[DataProvider('providerBESSELI')]
    public function testBESSELI()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BESSELI'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerBESSELI()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BESSELI.data');
    }

    #[DataProvider('providerBESSELJ')]
    public function testBESSELJ()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BESSELJ'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerBESSELJ()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BESSELJ.data');
    }

    #[DataProvider('providerBESSELK')]
    public function testBESSELK()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BESSELK'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerBESSELK()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BESSELK.data');
    }

    #[DataProvider('providerBESSELY')]
    public function testBESSELY()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BESSELY'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerBESSELY()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BESSELY.data');
    }

    #[DataProvider('providerCOMPLEX')]
    public function testCOMPLEX()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','COMPLEX'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCOMPLEX()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/COMPLEX.data');
    }

    #[DataProvider('providerIMAGINARY')]
    public function testIMAGINARY()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMAGINARY'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIMAGINARY()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMAGINARY.data');
    }

    #[DataProvider('providerIMREAL')]
    public function testIMREAL()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMREAL'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIMREAL()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMREAL.data');
    }

    #[DataProvider('providerIMABS')]
    public function testIMABS()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMABS'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIMABS()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMABS.data');
    }

    #[DataProvider('providerIMARGUMENT')]
    public function testIMARGUMENT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMARGUMENT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerIMARGUMENT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMARGUMENT.data');
    }

    #[DataProvider('providerIMCONJUGATE')]
    public function testIMCONJUGATE()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMCONJUGATE'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMCONJUGATE()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMCONJUGATE.data');
    }

    #[DataProvider('providerIMCOS')]
    public function testIMCOS()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMCOS'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMCOS()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMCOS.data');
    }

    #[DataProvider('providerIMDIV')]
    public function testIMDIV()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMDIV'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMDIV()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMDIV.data');
    }

    #[DataProvider('providerIMEXP')]
    public function testIMEXP()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMEXP'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMEXP()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMEXP.data');
    }

    #[DataProvider('providerIMLN')]
    public function testIMLN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMLN'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMLN()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMLN.data');
    }

    #[DataProvider('providerIMLOG2')]
    public function testIMLOG2()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMLOG2'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMLOG2()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMLOG2.data');
    }

    #[DataProvider('providerIMLOG10')]
    public function testIMLOG10()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMLOG10'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMLOG10()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMLOG10.data');
    }

    #[DataProvider('providerIMPOWER')]
    public function testIMPOWER()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMPOWER'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMPOWER()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMPOWER.data');
    }

    #[DataProvider('providerIMPRODUCT')]
    public function testIMPRODUCT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMPRODUCT'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMPRODUCT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMPRODUCT.data');
    }

    #[DataProvider('providerIMSIN')]
    public function testIMSIN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMSIN'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMSIN()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMSIN.data');
    }

    #[DataProvider('providerIMSQRT')]
    public function testIMSQRT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMSQRT'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMSQRT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMSQRT.data');
    }

    #[DataProvider('providerIMSUB')]
    public function testIMSUB()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMSUB'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMSUB()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMSUB.data');
    }

    #[DataProvider('providerIMSUM')]
    public function testIMSUM()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMSUM'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMSUM()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMSUM.data');
    }

    #[DataProvider('providerERF')]
    public function testERF()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','ERF'], $args);
        $this->assertEquals($expectedResult, $result, 1E-12);
    }

    public static function providerERF()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/ERF.data');
    }

    #[DataProvider('providerERFC')]
    public function testERFC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','ERFC'], $args);
        $this->assertEquals($expectedResult, $result, 1E-12);
    }

    public static function providerERFC()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/ERFC.data');
    }

    #[DataProvider('providerBIN2DEC')]
    public function testBIN2DEC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BINTODEC'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerBIN2DEC()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BIN2DEC.data');
    }

    #[DataProvider('providerBIN2HEX')]
    public function testBIN2HEX()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BINTOHEX'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerBIN2HEX()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BIN2HEX.data');
    }

    #[DataProvider('providerBIN2OCT')]
    public function testBIN2OCT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BINTOOCT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerBIN2OCT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BIN2OCT.data');
    }

    #[DataProvider('providerDEC2BIN')]
    public function testDEC2BIN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','DECTOBIN'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerDEC2BIN()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/DEC2BIN.data');
    }

    #[DataProvider('providerDEC2HEX')]
    public function testDEC2HEX()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','DECTOHEX'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerDEC2HEX()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/DEC2HEX.data');
    }

    #[DataProvider('providerDEC2OCT')]
    public function testDEC2OCT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','DECTOOCT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerDEC2OCT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/DEC2OCT.data');
    }

    #[DataProvider('providerHEX2BIN')]
    public function testHEX2BIN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','HEXTOBIN'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerHEX2BIN()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/HEX2BIN.data');
    }

    #[DataProvider('providerHEX2DEC')]
    public function testHEX2DEC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','HEXTODEC'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerHEX2DEC()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/HEX2DEC.data');
    }

    #[DataProvider('providerHEX2OCT')]
    public function testHEX2OCT()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','HEXTOOCT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerHEX2OCT()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/HEX2OCT.data');
    }

    #[DataProvider('providerOCT2BIN')]
    public function testOCT2BIN()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','OCTTOBIN'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerOCT2BIN()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/OCT2BIN.data');
    }

    #[DataProvider('providerOCT2DEC')]
    public function testOCT2DEC()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','OCTTODEC'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerOCT2DEC()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/OCT2DEC.data');
    }

    #[DataProvider('providerOCT2HEX')]
    public function testOCT2HEX()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','OCTTOHEX'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerOCT2HEX()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/OCT2HEX.data');
    }

    #[DataProvider('providerDELTA')]
    public function testDELTA()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','DELTA'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerDELTA()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/DELTA.data');
    }

    #[DataProvider('providerGESTEP')]
    public function testGESTEP()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','GESTEP'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerGESTEP()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/GESTEP.data');
    }

    public function testGetConversionGroups()
    {
        $result = PHPExcel_Calculation_Engineering::getConversionGroups();
        $this->assertIsArray( $result);
    }

    public function testGetConversionGroupUnits()
    {
        $result = PHPExcel_Calculation_Engineering::getConversionGroupUnits();
        $this->assertIsArray( $result);
    }

    public function testGetConversionGroupUnitDetails()
    {
        $result = PHPExcel_Calculation_Engineering::getConversionGroupUnitDetails();
        $this->assertIsArray( $result);
    }

    public function testGetConversionMultipliers()
    {
        $result = PHPExcel_Calculation_Engineering::getConversionMultipliers();
        $this->assertIsArray( $result);
    }

    #[DataProvider('providerCONVERTUOM')]
    public function testCONVERTUOM()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','CONVERTUOM'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCONVERTUOM()
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/CONVERTUOM.data');
    }
}

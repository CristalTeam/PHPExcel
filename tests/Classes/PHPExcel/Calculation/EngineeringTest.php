<?php

use PHPUnit\Framework\Attributes\DataProvider;

//  Custom assertion class for handling precision of Complex numbers
require_once 'custom/complexAssert.php';

//  Data Provider handler
require_once 'testDataFileIterator.php';


class EngineeringTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');

        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    #[DataProvider('providerBESSELI')]
    public function testBESSELI(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BESSELI'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerBESSELI(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BESSELI.data');
    }

    #[DataProvider('providerBESSELJ')]
    public function testBESSELJ(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BESSELJ'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerBESSELJ(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BESSELJ.data');
    }

    #[DataProvider('providerBESSELK')]
    public function testBESSELK(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BESSELK'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerBESSELK(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BESSELK.data');
    }

    #[DataProvider('providerBESSELY')]
    public function testBESSELY(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BESSELY'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerBESSELY(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BESSELY.data');
    }

    #[DataProvider('providerCOMPLEX')]
    public function testCOMPLEX(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','COMPLEX'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCOMPLEX(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/COMPLEX.data');
    }

    #[DataProvider('providerIMAGINARY')]
    public function testIMAGINARY(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMAGINARY'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIMAGINARY(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMAGINARY.data');
    }

    #[DataProvider('providerIMREAL')]
    public function testIMREAL(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMREAL'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIMREAL(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMREAL.data');
    }

    #[DataProvider('providerIMABS')]
    public function testIMABS(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMABS'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIMABS(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMABS.data');
    }

    #[DataProvider('providerIMARGUMENT')]
    public function testIMARGUMENT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMARGUMENT'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-8);
    }

    public static function providerIMARGUMENT(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMARGUMENT.data');
    }

    #[DataProvider('providerIMCONJUGATE')]
    public function testIMCONJUGATE(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMCONJUGATE'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMCONJUGATE(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMCONJUGATE.data');
    }

    #[DataProvider('providerIMCOS')]
    public function testIMCOS(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMCOS'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMCOS(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMCOS.data');
    }

    #[DataProvider('providerIMDIV')]
    public function testIMDIV(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMDIV'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMDIV(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMDIV.data');
    }

    #[DataProvider('providerIMEXP')]
    public function testIMEXP(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMEXP'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMEXP(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMEXP.data');
    }

    #[DataProvider('providerIMLN')]
    public function testIMLN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMLN'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMLN(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMLN.data');
    }

    #[DataProvider('providerIMLOG2')]
    public function testIMLOG2(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMLOG2'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMLOG2(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMLOG2.data');
    }

    #[DataProvider('providerIMLOG10')]
    public function testIMLOG10(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMLOG10'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMLOG10(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMLOG10.data');
    }

    #[DataProvider('providerIMPOWER')]
    public function testIMPOWER(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMPOWER'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMPOWER(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMPOWER.data');
    }

    #[DataProvider('providerIMPRODUCT')]
    public function testIMPRODUCT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMPRODUCT'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMPRODUCT(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMPRODUCT.data');
    }

    #[DataProvider('providerIMSIN')]
    public function testIMSIN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMSIN'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMSIN(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMSIN.data');
    }

    #[DataProvider('providerIMSQRT')]
    public function testIMSQRT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMSQRT'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMSQRT(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMSQRT.data');
    }

    #[DataProvider('providerIMSUB')]
    public function testIMSUB(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMSUB'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMSUB(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMSUB.data');
    }

    #[DataProvider('providerIMSUM')]
    public function testIMSUM(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','IMSUM'], $args);
        $complexAssert = new complexAssert();
        $this->assertTrue($complexAssert->assertComplexEquals($expectedResult, $result, 1E-8), $complexAssert->getErrorMessage());
    }

    public static function providerIMSUM(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/IMSUM.data');
    }

    #[DataProvider('providerERF')]
    public function testERF(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','ERF'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerERF(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/ERF.data');
    }

    #[DataProvider('providerERFC')]
    public function testERFC(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','ERFC'], $args);
        $this->assertEquals($expectedResult, $result, null, 1E-12);
    }

    public static function providerERFC(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/ERFC.data');
    }

    #[DataProvider('providerBIN2DEC')]
    public function testBIN2DEC(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BINTODEC'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerBIN2DEC(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BIN2DEC.data');
    }

    #[DataProvider('providerBIN2HEX')]
    public function testBIN2HEX(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BINTOHEX'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerBIN2HEX(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BIN2HEX.data');
    }

    #[DataProvider('providerBIN2OCT')]
    public function testBIN2OCT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','BINTOOCT'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerBIN2OCT(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/BIN2OCT.data');
    }

    #[DataProvider('providerDEC2BIN')]
    public function testDEC2BIN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','DECTOBIN'], $args);
        $this->assertEquals($expectedResult, $result, null);
    }

    public static function providerDEC2BIN(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/DEC2BIN.data');
    }

    #[DataProvider('providerDEC2HEX')]
    public function testDEC2HEX(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','DECTOHEX'], $args);
        $this->assertEquals($expectedResult, $result, null);
    }

    public static function providerDEC2HEX(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/DEC2HEX.data');
    }

    #[DataProvider('providerDEC2OCT')]
    public function testDEC2OCT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','DECTOOCT'], $args);
        $this->assertEquals($expectedResult, $result, null);
    }

    public static function providerDEC2OCT(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/DEC2OCT.data');
    }

    #[DataProvider('providerHEX2BIN')]
    public function testHEX2BIN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','HEXTOBIN'], $args);
        $this->assertEquals($expectedResult, $result, null);
    }

    public static function providerHEX2BIN(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/HEX2BIN.data');
    }

    #[DataProvider('providerHEX2DEC')]
    public function testHEX2DEC(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','HEXTODEC'], $args);
        $this->assertEquals($expectedResult, $result, null);
    }

    public static function providerHEX2DEC(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/HEX2DEC.data');
    }

    #[DataProvider('providerHEX2OCT')]
    public function testHEX2OCT(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','HEXTOOCT'], $args);
        $this->assertEquals($expectedResult, $result, null);
    }

    public static function providerHEX2OCT(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/HEX2OCT.data');
    }

    #[DataProvider('providerOCT2BIN')]
    public function testOCT2BIN(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','OCTTOBIN'], $args);
        $this->assertEquals($expectedResult, $result, null);
    }

    public static function providerOCT2BIN(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/OCT2BIN.data');
    }

    #[DataProvider('providerOCT2DEC')]
    public function testOCT2DEC(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','OCTTODEC'], $args);
        $this->assertEquals($expectedResult, $result, null);
    }

    public static function providerOCT2DEC(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/OCT2DEC.data');
    }

    #[DataProvider('providerOCT2HEX')]
    public function testOCT2HEX(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','OCTTOHEX'], $args);
        $this->assertEquals($expectedResult, $result, null);
    }

    public static function providerOCT2HEX(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/OCT2HEX.data');
    }

    #[DataProvider('providerDELTA')]
    public function testDELTA(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','DELTA'], $args);
        $this->assertEquals($expectedResult, $result, null);
    }

    public static function providerDELTA(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/DELTA.data');
    }

    #[DataProvider('providerGESTEP')]
    public function testGESTEP(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','GESTEP'], $args);
        $this->assertEquals($expectedResult, $result, null);
    }

    public static function providerGESTEP(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/GESTEP.data');
    }

    public function testGetConversionGroups(): void
    {
        $result = PHPExcel_Calculation_Engineering::getConversionGroups();
        $this->assertIsArray($result);
    }

    public function testGetConversionGroupUnits(): void
    {
        $result = PHPExcel_Calculation_Engineering::getConversionGroupUnits();
        $this->assertIsArray($result);
    }

    public function testGetConversionGroupUnitDetails(): void
    {
        $result = PHPExcel_Calculation_Engineering::getConversionGroupUnitDetails();
        $this->assertIsArray($result);
    }

    public function testGetConversionMultipliers(): void
    {
        $result = PHPExcel_Calculation_Engineering::getConversionMultipliers();
        $this->assertIsArray($result);
    }

    #[DataProvider('providerCONVERTUOM')]
    public function testCONVERTUOM(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_Engineering','CONVERTUOM'], $args);
        $this->assertEquals($expectedResult, $result, null);
    }

    public static function providerCONVERTUOM(): array
    {
        return new testDataFileIterator('rawTestData/Calculation/Engineering/CONVERTUOM.data');
    }
}

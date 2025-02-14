<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once(APPLICATION_TESTS_PATH . '/testDataFileIterator.php');

class ColorTest extends TestCase
{
    #[DataProvider('providerColorGetRed')]
    public function testGetRed()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Style_Color', 'getRed'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerColorGetRed()
    {
        return new testDataFileIterator('rawTestData/Style/ColorGetRed.data');
    }

    #[DataProvider('providerColorGetGreen')]
    public function testGetGreen()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Style_Color', 'getGreen'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerColorGetGreen()
    {
        return new testDataFileIterator('rawTestData/Style/ColorGetGreen.data');
    }

    #[DataProvider('providerColorGetBlue')]
    public function testGetBlue()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Style_Color', 'getBlue'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerColorGetBlue()
    {
        return new testDataFileIterator('rawTestData/Style/ColorGetBlue.data');
    }

    #[DataProvider('providerColorChangeBrightness')]
    public function testChangeBrightness()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Style_Color', 'changeBrightness'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerColorChangeBrightness()
    {
        return new testDataFileIterator('rawTestData/Style/ColorChangeBrightness.data');
    }
}

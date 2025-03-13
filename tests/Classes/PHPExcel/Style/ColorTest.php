<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

class ColorTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');
    }

    #[DataProvider('providerColorGetRed')]
    public function testGetRed()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Style_Color','getRed'], $args);
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
        $result = call_user_func_array(['PHPExcel_Style_Color','getGreen'], $args);
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
        $result = call_user_func_array(['PHPExcel_Style_Color','getBlue'], $args);
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
        $result = call_user_func_array(['PHPExcel_Style_Color','changeBrightness'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerColorChangeBrightness()
    {
        return new testDataFileIterator('rawTestData/Style/ColorChangeBrightness.data');
    }
}

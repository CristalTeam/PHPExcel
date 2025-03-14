<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

final class ColorTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');
    }

    #[DataProvider('providerColorGetRed')]
    public function testGetRed(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Style_Color','getRed'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerColorGetRed(): iterable
    {
        return new testDataFileIterator('rawTestData/Style/ColorGetRed.data');
    }

    #[DataProvider('providerColorGetGreen')]
    public function testGetGreen(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Style_Color','getGreen'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerColorGetGreen(): iterable
    {
        return new testDataFileIterator('rawTestData/Style/ColorGetGreen.data');
    }

    #[DataProvider('providerColorGetBlue')]
    public function testGetBlue(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Style_Color','getBlue'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerColorGetBlue(): iterable
    {
        return new testDataFileIterator('rawTestData/Style/ColorGetBlue.data');
    }

    #[DataProvider('providerColorChangeBrightness')]
    public function testChangeBrightness(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Style_Color','changeBrightness'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerColorChangeBrightness(): iterable
    {
        return new testDataFileIterator('rawTestData/Style/ColorChangeBrightness.data');
    }
}

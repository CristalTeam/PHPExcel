<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

class FontTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');
    }

    public function testGetAutoSizeMethod(): void
    {
        $expectedResult = PHPExcel_Shared_Font::AUTOSIZE_METHOD_APPROX;

        $result = call_user_func(['PHPExcel_Shared_Font','getAutoSizeMethod']);
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetAutoSizeMethod(): void
    {
        $autosizeMethodValues = [
            PHPExcel_Shared_Font::AUTOSIZE_METHOD_EXACT,
            PHPExcel_Shared_Font::AUTOSIZE_METHOD_APPROX,
        ];

        foreach ($autosizeMethodValues as $autosizeMethodValue) {
            $result = call_user_func(['PHPExcel_Shared_Font','setAutoSizeMethod'], $autosizeMethodValue);
            $this->assertTrue($result);
        }
    }

    public function testSetAutoSizeMethodWithInvalidValue(): void
    {
        $unsupportedAutosizeMethod = 'guess';

        $result = call_user_func(['PHPExcel_Shared_Font','setAutoSizeMethod'], $unsupportedAutosizeMethod);
        $this->assertFalse($result);
    }

    #[DataProvider('providerFontSizeToPixels')]
    public function testFontSizeToPixels(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Shared_Font','fontSizeToPixels'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerFontSizeToPixels(): array
    {
        return new testDataFileIterator('rawTestData/Shared/FontSizeToPixels.data');
    }

    #[DataProvider('providerInchSizeToPixels')]
    public function testInchSizeToPixels(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Shared_Font','inchSizeToPixels'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerInchSizeToPixels(): array
    {
        return new testDataFileIterator('rawTestData/Shared/InchSizeToPixels.data');
    }

    #[DataProvider('providerCentimeterSizeToPixels')]
    public function testCentimeterSizeToPixels(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Shared_Font','centimeterSizeToPixels'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCentimeterSizeToPixels(): array
    {
        return new testDataFileIterator('rawTestData/Shared/CentimeterSizeToPixels.data');
    }
}

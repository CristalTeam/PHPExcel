<?php

use PHPUnit\Framework\Attributes\DataProvider;


class XEEValidatorTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');
    }

    /**
     * @expectedException PHPExcel_Reader_Exception
     */
    #[DataProvider('providerInvalidXML')]
    public function testInvalidXML($filename): void
    {
        $reader = $this->getMockForAbstractClass('PHPExcel_Reader_Abstract');
        $expectedResult = 'FAILURE: Should throw an Exception rather than return a value';
        $result = $reader->securityScanFile($filename);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerInvalidXML(): array
    {
        $tests = [];
        foreach (glob('rawTestData/Reader/XEETestInvalid*.xml') as $file) {
            $tests[] = [realpath($file), true];
        }
        return $tests;
    }

    #[DataProvider('providerValidXML')]
    public function testValidXML($filename, $expectedResult): void
    {
        $reader = $this->getMockForAbstractClass('PHPExcel_Reader_Abstract');
        $result = $reader->securityScanFile($filename);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerValidXML(): array
    {
        $tests = [];
        foreach (glob('rawTestData/Reader/XEETestValid*.xml') as $file) {
            $tests[] = [realpath($file), file_get_contents($file)];
        }
        return $tests;
    }
}

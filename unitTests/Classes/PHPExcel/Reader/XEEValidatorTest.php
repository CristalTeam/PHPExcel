<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class XEEValidatorTest extends TestCase
{
    #[DataProvider('providerInvalidXML')]
    public function testInvalidXML($filename)
    {
        $reader = $this->createMock('PHPExcel_Reader_Abstract');
        $expectedResult = 'FAILURE: Should throw an Exception rather than return a value';
        $result = $reader->securityScanFile($filename);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerInvalidXML()
    {
        $tests = [];
        foreach (glob('rawTestData/Reader/XEETestInvalid*.xml') as $file) {
            $tests[] = [realpath($file), true];
        }
        return $tests;
    }

    #[DataProvider('providerValidXML')]
    public function testValidXML($filename, $expectedResult)
    {
        $reader = $this->createMock('PHPExcel_Reader_Abstract');
        $result = $reader->securityScanFile($filename);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerValidXML()
    {
        $tests = [];
        foreach (glob('rawTestData/Reader/XEETestValid*.xml') as $file) {
            $tests[] = [realpath($file), file_get_contents($file)];
        }
        return $tests;
    }
}

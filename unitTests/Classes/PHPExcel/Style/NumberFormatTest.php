<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once(APPLICATION_TESTS_PATH . '/testDataFileIterator.php');

class NumberFormatTest extends TestCase
{
    public function setUp(): void
    {
        PHPExcel_Shared_String::setDecimalSeparator('.');
        PHPExcel_Shared_String::setThousandsSeparator(',');
    }

    #[DataProvider('providerNumberFormat')]
    public function testFormatValueWithMask()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Style_NumberFormat','toFormattedString'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerNumberFormat()
    {
        return new testDataFileIterator('rawTestData/Style/NumberFormat.data');
    }
}

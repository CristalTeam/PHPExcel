<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once(APPLICATION_TESTS_PATH . '/testDataFileIterator.php');

class CodePageTest extends TestCase
{
    #[DataProvider('providerCodePage')]
    public function testCodePageNumberToName()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Shared_CodePage', 'NumberToName'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerCodePage()
    {
        return new testDataFileIterator('rawTestData/Shared/CodePage.data');
    }

    public function testNumberToNameWithInvalidCodePage()
    {
        $invalidCodePage = 12345;
        try {
            $result = call_user_func(['PHPExcel_Shared_CodePage', 'NumberToName'], $invalidCodePage);
        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), 'Unknown codepage: 12345');
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    public function testNumberToNameWithUnsupportedCodePage()
    {
        $unsupportedCodePage = 720;
        try {
            $result = call_user_func(['PHPExcel_Shared_CodePage', 'NumberToName'], $unsupportedCodePage);
        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), 'Code page 720 not supported.');
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }
}

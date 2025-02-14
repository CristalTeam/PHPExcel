<?php

use PHPUnit\Framework\TestCase;

require_once(APPLICATION_TESTS_PATH . '/testDataFileIterator.php');

class FileTest extends TestCase
{
    public function testGetUseUploadTempDirectory()
    {
        $expectedResult = false;

        $result = call_user_func(['PHPExcel_Shared_File','getUseUploadTempDirectory']);
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetUseUploadTempDirectory()
    {
        $useUploadTempDirectoryValues = [
            true,
            false,
        ];

        foreach ($useUploadTempDirectoryValues as $useUploadTempDirectoryValue) {
            call_user_func(['PHPExcel_Shared_File','setUseUploadTempDirectory'], $useUploadTempDirectoryValue);

            $result = call_user_func(['PHPExcel_Shared_File','getUseUploadTempDirectory']);
            $this->assertEquals($useUploadTempDirectoryValue, $result);
        }
    }
}

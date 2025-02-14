<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once(APPLICATION_TESTS_PATH . '/testDataFileIterator.php');

class PasswordHasherTest extends TestCase
{

    #[DataProvider('providerHashPassword')]
    public function testHashPassword()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Shared_PasswordHasher','hashPassword'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerHashPassword()
    {
        return new testDataFileIterator('rawTestData/Shared/PasswordHashes.data');
    }
}

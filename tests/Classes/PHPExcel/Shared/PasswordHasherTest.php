<?php

use PHPUnit\Framework\Attributes\DataProvider;


require_once 'testDataFileIterator.php';

final class PasswordHasherTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');
    }

    #[DataProvider('providerHashPassword')]
    public function testHashPassword(): void
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Shared_PasswordHasher','hashPassword'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerHashPassword(): array
    {
        return new testDataFileIterator('rawTestData/Shared/PasswordHashes.data');
    }
}

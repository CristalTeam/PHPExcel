<?php

use PHPUnit\Framework\TestCase;


class DataTypeTest extends TestCase
{
    public function testGetErrorCodes()
    {
        $result = call_user_func(['PHPExcel_Cell_DataType','getErrorCodes']);
        $this->assertIsArray( $result);
        $this->assertGreaterThan(0, count($result));
        $this->assertArrayHasKey('#NULL!', $result);
    }
}

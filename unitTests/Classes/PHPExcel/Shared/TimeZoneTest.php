<?php

use PHPUnit\Framework\TestCase;

class TimeZoneTest extends TestCase
{
    public function testSetTimezone()
    {
        $timezoneValues = [
            'Europe/Prague',
            'Asia/Tokyo',
            'America/Indiana/Indianapolis',
            'Pacific/Honolulu',
            'Atlantic/St_Helena',
        ];

        foreach ($timezoneValues as $timezoneValue) {
            $result = call_user_func(['PHPExcel_Shared_TimeZone','setTimezone'], $timezoneValue);
            $this->assertTrue($result);
        }

    }

    public function testSetTimezoneWithInvalidValue()
    {
        $unsupportedTimezone = 'Etc/GMT+10';
        $result = call_user_func(['PHPExcel_Shared_TimeZone','setTimezone'], $unsupportedTimezone);
        $this->assertFalse($result);
    }
}
